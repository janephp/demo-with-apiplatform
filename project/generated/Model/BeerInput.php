<?php

namespace Generated\Model;

class BeerInput
{
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $brewer;
    /**
     * 
     *
     * @var string|null
     */
    protected $style;
    /**
     * 
     *
     * @var int|null
     */
    protected $volume;
    /**
     * 
     *
     * @var int|null
     */
    protected $alcohol;
    /**
     * 
     *
     * @var string|null
     */
    protected $country;
    /**
     * 
     *
     * @var string|null
     */
    protected $color;
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBrewer() : ?string
    {
        return $this->brewer;
    }
    /**
     * 
     *
     * @param string|null $brewer
     *
     * @return self
     */
    public function setBrewer(?string $brewer) : self
    {
        $this->brewer = $brewer;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStyle() : ?string
    {
        return $this->style;
    }
    /**
     * 
     *
     * @param string|null $style
     *
     * @return self
     */
    public function setStyle(?string $style) : self
    {
        $this->style = $style;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getVolume() : ?int
    {
        return $this->volume;
    }
    /**
     * 
     *
     * @param int|null $volume
     *
     * @return self
     */
    public function setVolume(?int $volume) : self
    {
        $this->volume = $volume;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAlcohol() : ?int
    {
        return $this->alcohol;
    }
    /**
     * 
     *
     * @param int|null $alcohol
     *
     * @return self
     */
    public function setAlcohol(?int $alcohol) : self
    {
        $this->alcohol = $alcohol;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCountry() : ?string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string|null $country
     *
     * @return self
     */
    public function setCountry(?string $country) : self
    {
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getColor() : ?string
    {
        return $this->color;
    }
    /**
     * 
     *
     * @param string|null $color
     *
     * @return self
     */
    public function setColor(?string $color) : self
    {
        $this->color = $color;
        return $this;
    }
}