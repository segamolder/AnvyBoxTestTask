<?php

namespace Tests\Unit;

use App\Services\Bid\Bid;
use App\Services\Bid\Store\Database;
use App\Services\Bid\Store\File;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class BidTest extends TestCase
{
    public function testBidFile()
    {
        $bidToFile = new File('Sergey', '71234567890', 'Hello');
        $saveResult = Bid::getInstance($bidToFile)->store();
        $this->assertTrue($saveResult);
    }

    public function testBidDb() {
        $bidToDb = new Database('Sergey', '71234567890', 'Hello');
        $saveResult = Bid::getInstance($bidToDb)->store();
        $this->assertTrue($saveResult);
    }
}
