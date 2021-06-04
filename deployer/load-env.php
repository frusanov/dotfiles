<?php
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->required(['URL']);
$dotenv->load();

$PUID = getSafeEnv('PUID', 1000);
$PGID = getSafeEnv('PGID', 1000);
$TZ = getSafeEnv('TZ', 'Europe/Moscow');
$URL = $_ENV['URL'];
$EMAIL = getSafeEnv('EMAIL', '');
$EXTRA_DOMAINS = getSafeEnv('EXTRA_DOMAINS', '');

/**
 * --- Functions ---
 */

function getSafeEnv(string $varName, $fallback)
{
  return isset($_ENV[$varName]) ? $_ENV[$varName] : $fallback;
}
