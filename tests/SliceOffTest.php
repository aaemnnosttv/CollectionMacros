<?php

use Illuminate\Support\Collection;

class SliceOffTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function it_removes_and_returns_the_first_x_number_of_items_from_the_collection()
    {
        $collection = new Collection([1,2,3,4,5,6]);

        $this->assertSame([1,2,3], $collection->sliceOff(3)->all());
        $this->assertSame([4,5,6], $collection->all());
    }
}
