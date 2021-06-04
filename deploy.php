<?php

namespace Deployer;

require 'recipe/common.php';
require __DIR__ . '/vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->required(['URL']);
$dotenv->load();

require __DIR__ . '/deployer/env.php';
require __DIR__ . '/recipes/swag.php';
