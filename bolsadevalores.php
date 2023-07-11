
<?php
// Include the Composer autoloader
require 'vendor/autoload.php';
// Create an instance of the Alpha Vantage client
$client = new AlphaVantage\Client('BYB2H1EFKN1AFEIA');
// Get the intraday price data for Apple Inc.
$data = $client->get('TIME_SERIES_INTRADAY', array(
  'symbol' => 'AAPL',
  'interval' => '15min',
  'outputsize' => 'full',
));
// Print the data to the console
print_r($data);