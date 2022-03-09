<?php

use Chiiya\CodeStyle\Config;
use PhpCsFixer\Finder;

require __DIR__.'/vendor/autoload.php';

return (new Config)
    ->setFinder(Finder::create()->in(__DIR__.'/src'))
    ->setRules([
        '@Chiiya' => true,
        '@Chiiya:risky' => true,
    ])
    ->setRiskyAllowed(true);
