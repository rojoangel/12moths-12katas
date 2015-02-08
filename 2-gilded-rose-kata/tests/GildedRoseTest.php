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

    public function testOnceTheSellByDateHasPassedQualityDegradesTwiceAsFast()
    {
        $items = array(
            new Item("+5 Dexterity Vest", 0, 20),
        );

        $gildedRose = new GildedRose($items);
        $updatedItems = $gildedRose->updateQuality();

        $this->assertEquals(18, $updatedItems[0]->getQuality());

    }

    public function testTheQualityOfAnItemIsNeverNegative()
    {
        $items = array(
            new Item("+5 Dexterity Vest", 10, 0),
        );

        $gildedRose = new GildedRose($items);
        $updatedItems = $gildedRose->updateQuality();

        $this->assertEquals(0, $updatedItems[0]->getQuality());
    }

    public function testAgedBrieActuallyIncreasesInQualityTheOlderItGets()
    {
        $items = array(
            new Item("Aged Brie", 2, 0),
        );

        $gildedRose = new GildedRose($items);
        $updatedItems = $gildedRose->updateQuality();

        $this->assertEquals(1, $updatedItems[0]->getQuality());
    }

    public function testTheQualityOfAnItemIsNeverMoreThan50()
    {
        $items = array(
            new Item("Aged Brie", 2, 50),
        );

        $gildedRose = new GildedRose($items);
        $updatedItems = $gildedRose->updateQuality();

        $this->assertEquals(50, $updatedItems[0]->getQuality());
    }

    public function testSulfurasBeingALegendaryItemNeverHasToBeSoldOrDecreasesInQuality()
    {
        $items = array(
            new Item("Sulfuras, Hand of Ragnaros", 0, 80),
        );

        $gildedRose = new GildedRose($items);
        $updatedItems = $gildedRose->updateQuality();

        $this->assertEquals(0, $updatedItems[0]->getSellIn());
        $this->assertEquals(80, $updatedItems[0]->getQuality());
    }

    public function testBackstagePassIncreasesInQualityBy2WhenThereAre10DaysOrlessToTheSellIn()
    {
        $items = array(
            new Item("Backstage passes to a TAFKAL80ETC concert", 10, 20),
        );

        $gildedRose = new GildedRose($items);
        $updatedItems = $gildedRose->updateQuality();

        $this->assertEquals(22, $updatedItems[0]->getQuality());
    }

}
