<?php

namespace Kata;


interface Degradable {

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return integer
     */
    public function getQuality();

    /**
     * @param integer $quality
     */
    public function setQuality($quality);

    /**
     * @return integer
     */
    public function getSellIn();

    /**
     * @param integer $sellIn
     */
    public function setSellIn($sellIn);

    public function updateQuantity();

} 