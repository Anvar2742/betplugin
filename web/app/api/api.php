<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/Classes/fetchDraws.php';
require_once __DIR__ . '/Classes/saveDraws.php';

$fetchDraws = new FetchDraws();
$draws = $fetchDraws->fetchDraws();

$saveDraws = new SaveDraws();
$saveDraws->saveDraws($draws);
