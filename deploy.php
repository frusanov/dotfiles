<?php

namespace Deployer;

require 'recipe/common.php';
require __DIR__ . '/vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$dotenv->required(['URL']);

require __DIR__ . '/deployer/env.php';
require __DIR__ . '/recipes/swag.php';
