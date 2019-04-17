<?php

namespace Test\Unit\Service;

use App\Service\QuoteProvider;
use PHPUnit\Framework\TestCase;

class QuoteProviderTest extends TestCase
{
    public function testQuoteProviderConstructTest()
    {
        $apiKey = 'TH1S1S4P1K3Y';
        $quoteProvider = new QuoteProvider($apiKey);

        $this->assertInstanceOf('App\Service\QuoteProvider', $quoteProvider);
    }
}