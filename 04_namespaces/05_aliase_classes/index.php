<?php

// there are 2 classes with the same name, you must aliasing one or both of them:
use Store\Services\Database\Logger as DatabaseLogger;
use Store\Services\Utils\Logger;

include "src/Database/Logger.php";
include "src/Utils/Logger.php";


$myUtilsLogger = new DatabaseLogger();
$myDatabaseLogger = new Logger();
