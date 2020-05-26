<?php

namespace Generated\Model;

class BeerOutput
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $brewer;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBrewer() : string
    {
        return $this->brewer;
    }
    /**
     * 
     *
     * @param string $brewer
     *
     * @return self
     */
    public function setBrewer(string $brewer) : self
    {
        $this->brewer = $brewer;
        return $this;
    }
}