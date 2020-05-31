# Jane with API Platform using a Symfony application

Here is a demo Symfony application of Jane with API Platform integration.

This README is a quick *Getting started* guide about this application.

_Disclaimer: This README is not a guide for API Platform, if you want more details about it, please consult their 
[documentation](https://api-platform.com/docs)_

## Requirements

To make this application works you need:
- [docker](https://docs.docker.com/engine/install/)
- python >= 3.6
- [pipenv](https://pipenv.pypa.io/en/latest/install/#installing-pipenv)

## Bash environment

We are using pipenv to avoid installing libraries on your local machine.
To run your bash env you have to install it first: `pipenv install`.
Then you can use it either by doing `pipenv run {command}` or `pipenv shell` 
(first command will only run a given command while second will prompt you in a new shell).

## Start docker

To have all needed services (postgres, elasticsearch or kibana), we use docker. 
To make it start you can use `inv start` command.

Then you will need to have the demo app domain to your `/etc/hosts` as following:
```
127.0.0.1 elasticsearch-jane.test kibana.elasticsearch-jane.test
```

## Running the application

Now you need to install dependencies, setup database and index data in Elasticsearch.
To do all this you have to run:

```bash
inv start # start docker stack, install dependencies and setup database
inv fixtures # load fixtures
```

Now you can see all our data from API Platform on [https://apiplatform-jane.test](https://apiplatform-jane.test)

## And how Jane and API Platform works together ?

API Platform does support a way to have custom representation for our input or output.
In this demo application, we focus on using a Jane model as our output model.

First, you will need to specify this model in your resource configuration:

```yaml
resources:
  App\Entity\Beer:
    attributes:
      output: Generated\Model\BeerOutput
```

In this configuration we specify the class used for our resource output. You can do more with this feature such as 
custom input class, read more on [related documentation](https://api-platform.com/docs/core/dto/).

Then, we need a DataTransformer to transform from the `App\Entity\Beer` entity to a `Generated\Model\BeerOutput` model.
Here is this transformer, called `BeerOutputDataTransformer`, but decomposed to explain each steps:

```php
namespace App\DataTransformer;

use ApiPlatform\Core\DataTransformer\DataTransformerInterface;
use App\Entity\Beer;
use Generated\Model\BeerOutput;
use Jane\AutoMapper\AutoMapperInterface;

class BeerOutputDataTransformer implements DataTransformerInterface
{
    private AutoMapperInterface $autoMapper;

    // Here we inject Jane AutoMapper, it's used to make the entity to model transformation
    public function __construct(AutoMapperInterface $autoMapper)
    {
        $this->autoMapper = $autoMapper;
    }

    /**
     * @param Beer $data
     *
     * @return BeerOutput
     */
    public function transform($data, string $to, array $context = [])
    {
        // Will transformer our `App\Entity\Beer` entity to a `Generated\Model\BeerOutput` model
        // thanks to the AutoMapper
        return $this->autoMapper->map($data, BeerOutput::class, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsTransformation($data, string $to, array $context = []): bool
    {
        // Tells to use the `transform` method only if our data is a `App\Entity\Beer` entity and if target model class
        // is `Generated\Model\BeerOutput`.
        return BeerOutput::class === $to && $data instanceof Beer;
    }
}
```

With only both of theses, you will have clean custom model output with API Platform !

## Used libraries

In order to make this app, I used many libraries, here is a quick list of them:
- [jane-php/json-schema](https://github.com/janephp/janephp): Indeed, we are using it to generate models & normalizers
- [jane-php/automapper](https://github.com/janephp/janephp): Allows you to automap values from Class to Class (In our case from an entity to a DTO)
- [api-platform/*](https://github.com/api-platform): API Platform is the most used Symfony API Framework
- [jolicode/docker-starter](https://github.com/jolicode/docker-starter): Used to have a quick & efficient docker setup
- [symfony/*](https://github.com/symfony/symfony): And indeed, the framework we are using Symfony
