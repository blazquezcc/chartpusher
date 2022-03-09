<?php
// First, run 'composer require pusher/pusher-php-server'
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
  "af5eb2560ed76cd53bed", // Replace with 'key' from dashboard
  "328836f2c79a23dc54a9", // Replace with 'secret' from dashboard
  "1358816", // Replace with 'app_id' from dashboard
  array(
    'cluster' => 'eu' // Replace with 'cluster' from dashboard
  )
);
// Trigger a new random event every second. In your application,
// you should trigger the event based on real-world changes!
while (true) {
  $pusher->trigger('price-btcusd', 'new-price', array(
    'value' => rand(0, 5000)
  ));
  sleep(2);
}