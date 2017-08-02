<?php
// application.php

require __DIR__.'/../vendor/autoload.php';
//require 'Hello.php';
use Symfony\Component\Console\Application as App;
use Migration\Hello as Hello;
$application = new App();

$application->add(new Hello());
// ... register commands

$application->run();

