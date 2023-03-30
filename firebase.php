<?php

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount::fromJsonFile(env('FIREBASE_CREDENTIALS'));

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->withDatabaseUri(env('FIREBASE_DATABASE_URL'))
    ->create();

$database = $firebase->getDatabase();
