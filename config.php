<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_N2adn9QISDR8gbKamuZJS8Q700ZXPTSeaw",
  "publishable_key" => "pk_test_zzMfNzm5szSnxqYrTZMr0SIE002m5CdZMX"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>