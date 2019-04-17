<?php

namespace App\Service;

use AlphaVantage;

class QuoteProvider {

    private $alphaVantageClient;

    public function __construct($apiKey)
    {
        $options = new AlphaVantage\Options();
        $options->setApiKey($apiKey);
        $this->alphaVantageClient = new AlphaVantage\Client($options);
    }

    public function getQuote($ticker)
    {
        return ['PETR4' => '25,90'];
    }
}