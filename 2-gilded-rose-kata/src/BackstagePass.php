<?php

namespace Kata;


class BackstagePass extends DegradableItem {

    public function updateQuantity()
    {
        if ($this->getSellIn() < 11) {
            if ($this->getQuality() < 50) {
                $this->setQuality($this->getQuality() + 1);
            }
        }

        if ($this->getSellIn() < 6) {
            if ($this->getQuality() < 50) {
                $this->setQuality($this->getQuality() + 1);
            }
        }
    }
}
