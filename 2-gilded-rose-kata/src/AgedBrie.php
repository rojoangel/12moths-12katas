<?php

namespace Kata;


class AgedBrie extends DegradableItem {

    public function updateQuality()
    {
        if ($this->getQuality() < 50) {
            $this->setQuality($this->getQuality() + 1);
        }

    }


} 