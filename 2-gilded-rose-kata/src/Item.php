<?php

namespace Kata;


class Item {

    /** @var string $name */
    private $name;

    /** @var integer $sellIn */
    private $sellIn;

    /** @var integer $quality */
    private $quality;

    /**
     * @param string $name
     * @param integer $sellIn
     * @param integer $quality
     */
    public function __construct(string $name, integer $sellIn, integer $quality)
    {
        $this->name = $name;
        $this->sellIn = $sellIn;
        $this->quality = $quality;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * @param int $quality
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;
    }

    /**
     * @return int
     */
    public function getSellIn()
    {
        return $this->sellIn;
    }

    /**
     * @param int $sellIn
     */
    public function setSellIn($sellIn)
    {
        $this->sellIn = $sellIn;
    }

}
