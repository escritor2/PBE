<?php

use Illuminate\Support\Facades\Http;

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';

// Since we can't easily run the full app in a script to test a route without a server, 
// I'll just check if the logic seems sound or if I can run a quick artisan command.

// Actually, I'll just use curl.exe but with the correct syntax for PowerShell.
