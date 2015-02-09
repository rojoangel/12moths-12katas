<?php

namespace Kata;


class GildedRose {

    /** @var Degradable[] $items */
    private $items;

    /**
     * @param Degradable[] $items
     */
    public function __construct($items)
    {
        $this->items = $items;
    }

    public function updateQuality()
    {
        for ($i = 0; $i < count($this->items) ; $i++) {
            $this->items[$i]->updateSellIn();
            $this->items[$i]->updateQuality();
        }

        return $this->items;
    }
}
