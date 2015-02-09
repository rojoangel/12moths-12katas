<?php

namespace Kata;


class BackstagePass extends DegradableItem {

    public function updateQuality()
    {
        if ($this->getSellIn() < 0) {
            $this->setQuality(0);
        } else {
            if ($this->getQuality() < 50) {
                $this->setQuality($this->getQuality() + 1);
            }

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
}
