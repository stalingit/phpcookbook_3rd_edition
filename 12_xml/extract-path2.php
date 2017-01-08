<?php
include "pint_r.php";
$dom = new DOMDocument;
$dom->load(__DIR__ . '/address-book.xml');
$xpath = new DOMXPath($dom);
$emails = $xpath->query('/address-book/person/email');
z($emails);
foreach ($emails as $email) {
    // do something with $email
}
