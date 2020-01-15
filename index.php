<?php
error_reporting(0);
require_once 'model.php';
use Lib\Farm;
use Lib\Cow;
use Lib\Chicken;

$cowsCount=10; //  количество коров в хлеву,
$chickenCount=20; // количество кур в хлеву

if ($cowsCount>0)
{
    for ( $count=1; $count<=$cowsCount; $count++)
    {
        $cows[]=new Cow;
    }
}

if ($chickenCount>0)
{
    for ( $count=1; $count<=$chickenCount; $count++)
    {
        $chicken[]=new Chicken;
    }
}

$sumMilk=new Farm($cows);
$sumEggs=new Farm($chicken);
echo 'Молока: '.$sumMilk->getResultSumProduct().'литров';
echo '<br>';
echo 'Яиц: '.$sumEggs->getResultSumProduct().'штук';