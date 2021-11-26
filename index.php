<?php
require_once "vendor/autoload.php";

use PHPHtmlParser\Dom;
use PHPHtmlParser\Options;


$options = new Options();
$options->setEnforceEncoding('utf8');

$url = 'https://www.amazon.co.jp/gp/product/B07QNJDLGR';
$dom = new Dom();
$dom->loadFromUrl($url, $options);

$element = $dom->find('#productTitle');
echo $element->text . "\n";

echo "Scraping";


/*
スクレイピングするURLのリスト作成（スプレットシートとか）


*/