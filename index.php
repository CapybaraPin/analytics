<?php
require __DIR__ . '/vendor/autoload.php';

use Sinergi\BrowserDetector\Browser;
use Sinergi\BrowserDetector\Os;
use Sinergi\BrowserDetector\Device;
use Sinergi\BrowserDetector\Language;


$router = new \Bramus\Router\Router();

$router->get('/', function() {
    require 'views/pages/home.view.php';
});

$router->get('/signup', function() {
    require 'views/pages/signup.view.php';
});

$router->get('/api/view', function() {
    $browser = new Browser();
    echo $browser->getName();
    echo "<br>";
    echo $browser->getVersion();
    echo "<br>";

    $os = new Os();
    echo $os->getName();

    echo "<br>";

    $device = new Device();
    echo $device->getName();

    echo "<br>";

    $language = new Language();
    echo $language->getLanguage();

});
$router->run();
