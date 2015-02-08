<?php

namespace Kata;


class GildedRose {

    /** @var Degradable[] $items */
    private $items;

    /**
     * @param Item[] $items
     */
    public function __construct($items)
    {
        for ($i = 0; $i < count($items) ; $i++) {
            $this->items[$i] = new DegradableItem($items[$i]);
        }
    }

    public function updateQuality()
    {
        for ($i = 0; $i < count($this->items) ; $i++) {
            if ($this->items[$i]->getName() != "Aged Brie" && $this->items[$i]->getName() != "Backstage passes to a TAFKAL80ETC concert") {
                if ($this->items[$i]->getQuality() > 0) {
                    if ($this->items[$i]->getName() != "Sulfuras, Hand of Ragnaros") {
                        $this->items[$i]->setQuality($this->items[$i]->getQuality() - 1);
                    }
                }
            } else {
                if ($this->items[$i]->getQuality() < 50) {
                    $this->items[$i]->setQuality($this->items[$i]->getQuality() + 1);

                    if ($this->items[$i]->getName() == "Backstage passes to a TAFKAL80ETC concert") {
                        if ($this->items[$i]->getSellIn() < 11) {
                            if ($this->items[$i]->getQuality() < 50) {
                                    $this->items[$i]->setQuality($this->items[$i]->getQuality() + 1);
                            }
                        }

                        if ($this->items[$i]->getSellIn() < 6) {
                            if ($this->items[$i]->getQuality() < 50) {
                                    $this->items[$i]->setQuality($this->items[$i]->getQuality() + 1);
                            }
                        }
                    }
                }
            }

            if ($this->items[$i]->getName() != "Sulfuras, Hand of Ragnaros") {
                $this->items[$i]->setSellIn($this->items[$i]->getSellIn() - 1);
            }

            if ($this->items[$i]->getSellIn() < 0) {
                if ($this->items[$i]->getName() != "Aged Brie") {
                    if ($this->items[$i]->getName() != "Backstage passes to a TAFKAL80ETC concert") {
                        if ($this->items[$i]->getQuality() > 0) {
                            if ($this->items[$i]->getName() != "Sulfuras, Hand of Ragnaros") {
                                $this->items[$i]->setQuality($this->items[$i]->getQuality() - 1);
                            }
                        }
                    } else {
                        $this->items[$i]->setQuality($this->items[$i]->getQuality() - $this->items[$i]->getQuality());
                    }
                } else {
                    if ($this->items[$i]->getQuality() < 50) {
                        $this->items[$i]->setQuality($this->items[$i]->getQuality() + 1);
                    }
                }
            }
        }

        return $this->items;
    }
}
