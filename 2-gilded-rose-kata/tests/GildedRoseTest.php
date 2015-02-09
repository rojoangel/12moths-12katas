<?php

namespace Kata;


class GildedRoseTest extends \PHPUnit_Framework_TestCase {

    public function testAtTheEndOfEachDayOurSystemLowersBothValuesForEveryItem()
    {
        $items = array(
            new DegradableItem(new Item("+5 Dexterity Vest", 10, 20)),
        );

        $gildedRose = new GildedRose($items);
        $updatedItems = $gildedRose->updateQuality();

        $this->assertEquals(9, $updatedItems[0]->getSellIn());
        $this->assertEquals(19, $updatedItems[0]->getQuality());

    }

    public function testOnceTheSellByDateHasPassedQualityDegradesTwiceAsFast()
    {
        $items = array(
            new DegradableItem(new Item("+5 Dexterity Vest", 0, 20)),
        );

        $gildedRose = new GildedRose($items);
        $updatedItems = $gildedRose->updateQuality();

        $this->assertEquals(18, $updatedItems[0]->getQuality());

    }

    public function testTheQualityOfAnItemIsNeverNegative()
    {
        $items = array(
            new DegradableItem(new Item("+5 Dexterity Vest", 10, 0)),
        );

        $gildedRose = new GildedRose($items);
        $updatedItems = $gildedRose->updateQuality();

        $this->assertEquals(0, $updatedItems[0]->getQuality());
    }

    public function testAgedBrieActuallyIncreasesInQualityTheOlderItGets()
    {
        $items = array(
            new AgedBrie(new Item("Aged Brie", 2, 0)),
        );

        $gildedRose = new GildedRose($items);
        $updatedItems = $gildedRose->updateQuality();

        $this->assertEquals(1, $updatedItems[0]->getQuality());
    }

    public function testTheQualityOfAnItemIsNeverMoreThan50()
    {
        $items = array(
            new AgedBrie(new Item("Aged Brie", 2, 50)),
        );

        $gildedRose = new GildedRose($items);
        $updatedItems = $gildedRose->updateQuality();

        $this->assertEquals(50, $updatedItems[0]->getQuality());
    }

    public function testSulfurasBeingALegendaryItemNeverHasToBeSoldOrDecreasesInQuality()
    {
        $items = array(
            new Sulfuras(new Item("Sulfuras, Hand of Ragnaros", 0, 80)),
        );

        $gildedRose = new GildedRose($items);
        $updatedItems = $gildedRose->updateQuality();

        $this->assertEquals(0, $updatedItems[0]->getSellIn());
        $this->assertEquals(80, $updatedItems[0]->getQuality());
    }

    public function testBackstagePassIncreasesInQualityBy2WhenThereAre10DaysOrlessToTheSellIn()
    {
        $items = array(
            new BackstagePass(new Item("Backstage passes to a TAFKAL80ETC concert", 10, 20)),
        );

        $gildedRose = new GildedRose($items);
        $updatedItems = $gildedRose->updateQuality();

        $this->assertEquals(22, $updatedItems[0]->getQuality());
    }

    public function testBackstagePassIncreasesInQualityBy3WhenThereAre5DaysOrlessToTheSellIn()
    {
        $items = array(
            new BackstagePass(new Item("Backstage passes to a TAFKAL80ETC concert", 5, 20)),
        );

        $gildedRose = new GildedRose($items);
        $updatedItems = $gildedRose->updateQuality();

        $this->assertEquals(23, $updatedItems[0]->getQuality());
    }

    public function testBackstagePassQualityDropsTo0AfterTheConcert()
    {
        $items = array(
            new BackstagePass(new Item("Backstage passes to a TAFKAL80ETC concert", 0, 20)),
        );

        $gildedRose = new GildedRose($items);
        $updatedItems = $gildedRose->updateQuality();

        $this->assertEquals(0, $updatedItems[0]->getQuality());
    }

    public function testBackstagePassDefaultCase()
    {
        $items = array(
            new BackstagePass(new Item("Backstage passes to a TAFKAL80ETC concert", 11, 20)),
        );

        $gildedRose = new GildedRose($items);
        $updatedItems = $gildedRose->updateQuality();

        $this->assertEquals(21, $updatedItems[0]->getQuality());
    }
}
