<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51KgdJWSJSUN1IwzuIaY7NdQYQrKsF4HOjbLV1EZHNiP0qaYo8cCNbva3qcEsE7xwLwB99Ri03fnvteUPxzX9TCyU00Bc6RnmpA";

$secretKey="sk_test_51KgdJWSJSUN1IwzuBRyS7JdTn6ASfzWty9skRhUyWnjHapZipmB9sWItcBWQUoeERCTEnen70ntjmB5sYuzVKf8E00Umikp5EU";

\Stripe\Stripe::setApiKey($secretKey);
?>