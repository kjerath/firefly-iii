<?php
/**
 * ChartCategoryControllerTest.php
 * Copyright (C) 2016 Sander Dorigo
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-19 at 15:39:57.
 */
class ChartCategoryControllerTest extends TestCase
{

    /**
     * @covers FireflyIII\Http\Controllers\Chart\CategoryController::all
     */
    public function testAll()
    {
        $this->be($this->user());
        $response = $this->call('GET', '/chart/category/1/all');

        $this->assertEquals(200, $response->status());
    }

    /**
     * @covers FireflyIII\Http\Controllers\Chart\CategoryController::currentPeriod
     */
    public function testCurrentPeriod()
    {
        $this->be($this->user());
        $response = $this->call('GET', '/chart/category/1/period');

        $this->assertEquals(200, $response->status());
    }

    /**
     * @covers FireflyIII\Http\Controllers\Chart\CategoryController::earnedInPeriod
     */
    public function testEarnedInPeriod()
    {
//        $this->be($this->user());
//        $response = $this->call('GET', '/chart/category/earned-in-period/default/20150101/20151231/1');
//        $this->assertEquals(200, $response->status());
        $this->markTestSkipped('Skipped because sqlite does not support DATE_FORMAT.');
    }

    /**
     * @covers FireflyIII\Http\Controllers\Chart\CategoryController::frontpage
     */
    public function testFrontpage()
    {
//        $this->be($this->user());
//        $response = $this->call('GET', '/chart/category/frontpage');
//        $this->assertEquals(200, $response->status());
        $this->markTestSkipped('Skipped because sqlite does not support DATE_FORMAT.');
    }

    /**
     * @covers FireflyIII\Http\Controllers\Chart\CategoryController::multiYear
     */
    public function testMultiYear()
    {
//        $this->be($this->user());
//        $response = $this->call('GET', '/chart/category/multi-year/default/20150101/20151231/1/1');
//        $this->assertEquals(200, $response->status());
        $this->markTestSkipped('Skipped because sqlite does not support DATE_FORMAT.');
    }

    /**
     * @covers FireflyIII\Http\Controllers\Chart\CategoryController::specificPeriod
     */
    public function testSpecificPeriod()
    {
        $this->be($this->user());
        $response = $this->call('GET', '/chart/category/1/period/20150101');

        $this->assertEquals(200, $response->status());
    }

    /**
     * @covers FireflyIII\Http\Controllers\Chart\CategoryController::spentInPeriod
     */
    public function testSpentInPeriod()
    {
//        $this->be($this->user());
//        $response = $this->call('GET', '/chart/category/spent-in-period/default/20150101/20151231/1');
//        $this->assertEquals(200, $response->status());
        $this->markTestSkipped('Skipped because sqlite does not support DATE_FORMAT.');
    }
}
