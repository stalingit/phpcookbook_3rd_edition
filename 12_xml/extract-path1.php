<?php
include_once 'pint_r';
$s = simplexml_load_file(__DIR__ . '/address-book.xml');
$emails = $s->xpath('/address-book/person/email');
z($emails);

foreach ($emails as $email) {
    // do something with $email
}
