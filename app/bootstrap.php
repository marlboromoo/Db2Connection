<?php

set_include_path(
    dirname(__FILE__) . PATH_SEPARATOR . '..' . PATH_SEPARATOR .
    get_include_path()
);

require_once 'PHPUnit/Autoload.php';