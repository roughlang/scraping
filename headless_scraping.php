<?php

require_once "vendor/autoload.php";

use HeadlessChromium\BrowserFactory;

$browserFactory = new BrowserFactory();

// starts headless chrome
$browser = $browserFactory->createBrowser();

try {
    // creates a new page and navigate to an url
    $page = $browser->createPage();
    $page->navigate('http://example.com')->waitForNavigation();

    // get page title
    $pageTitle = $page->evaluate('document.title')->getReturnValue();
    echo $pageTitle."\n";

    // screenshot - Say "Cheese"! 😄
    $page->screenshot()->saveToFile('/tmp/bar.png');

    // pdf
    $page->pdf(['printBackground' => false])->saveToFile('/tmp/bar.pdf');
} finally {
    // bye
    $browser->close();
}