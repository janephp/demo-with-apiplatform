# Jane with API Platform using a Symfony application

Here is a demo Symfony application of Jane with API Platform integration.

This README is a quick *Getting started* guide about this application.

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
inv install # install dependencies (composer only for this app)
inv migrate fixtures # setup database and load fixtures
```

Now you can see all our data from API Platform on https://apiplatform-jane.test 🎉

## And how Jane and API Platform works together ?

@TODO

## Used libraries

In order to make this app, I used many libraries, here is a quick list of them:
- [jane-php/json-schema](https://github.com/janephp/janephp): Indeed, we are using it to generate models & normalizers
- [jane-php/automapper](https://github.com/janephp/janephp): Allows you to automap values from Class to Class (In our case from an entity to a DTO)
- [api-platform/*](https://github.com/api-platform): API Platform is the most used Symfony API Framework
- [jolicode/docker-starter](https://github.com/jolicode/docker-starter): Used to have a quick & efficient docker setup
- [symfony/*](https://github.com/symfony/symfony): And indeed, the framework we are using Symfony
