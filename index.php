<?php

require_once 'vendor/autoload.php';

use Kevin369\PhpOopBestP\Models\User;

$user = new User("John Doe", "john@example.com");
echo $user->logInfo();
