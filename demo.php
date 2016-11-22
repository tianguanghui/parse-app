<?php

include __DIR__."/IpaParser.php";
include __DIR__."/ApkParser.php";

echo "apk解析";
$main = new ApkParser;
$main->open('test.apk');
echo "<br>包名:";
echo $main->getPackage();
echo "<br>版本名:";
echo $main->getVersionName();
echo "<br>版本号:";
echo $main->getVersionCode();
echo "<br>应用名称:";
echo $main->getAppName();

echo "<br>ipa解析";
$main = new IpaParser;
$main->parse('test.ipa');
echo "<br>包名:";
echo $main->getPackage();
echo "<br>版本号:";
echo $main->getVersionName();
echo "<br>版本号:";
echo $main->getVersionCode();
echo "<br>应用名称:";
echo $main->getAppName();
//var_dump( $main->getPlist() );
