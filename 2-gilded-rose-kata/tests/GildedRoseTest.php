<?php

namespace Kata;


class GildedRoseTest extends \PHPUnit_Framework_TestCase {

    public function testAtTheEndOfEachDayOurSystemLowersBothValuesForEveryItem()
    {
        $items = array(
            new Item("+5 Dexterity Vest", 10, 20),
        );

        $gildedRose = new GildedRose($items);
        $updatedItems = $gildedRose->updateQuality();

        $this->assertEquals(9, $updatedItems[0]->getSellIn());
        $this->assertEquals(19, $updatedItems[0]->getQuality());

    }
}
