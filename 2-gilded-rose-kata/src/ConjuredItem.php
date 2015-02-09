<?php

namespace Kata;


class ConjuredItem implements Degradable {

    /** @var Item $item */
    private $item;

    /**
     * @param Item $item
     */
    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->item->getName();
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->item->setName($name);
    }

    /**
     * @return int
     */
    public function getQuality()
    {
        return $this->item->getQuality();
    }

    /**
     * @param int $quality
     */
    public function setQuality($quality)
    {
        $this->item->setQuality($quality);
    }

    /**
     * @return int
     */
    public function getSellIn()
    {
        return $this->item->getSellIn();
    }

    /**
     * @param int $sellIn
     */
    public function setSellIn($sellIn)
    {
        $this->item->setSellIn($sellIn);
    }

    public function updateQuality()
    {
        $this->item->setQuality($this->item->getQuality() - 2);

        if ($this->item->getSellIn() < 0) {
            $this->item->setQuality($this->item->getQuality() - 2);
        }
        if ($this->item->getQuality() < 0) {
            $this->item->setQuality(0);
        }
    }

    public function updateSellIn()
    {
        $this->item->setSellIn($this->item->getSellIn() - 1);
    }


} 