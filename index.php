<?php
 include 'Interfaces/Tarif_interface.php';
 include 'Interfaces/Service_Interface.php';


 include 'Classes/AbstractTarif.php';

 include 'Classes/BasicTarif.php';
 include 'Classes/HourTarif.php';
 include 'Classes/StudentTarif.php';
 
 include 'Classes/GPSService.php';
 include 'Classes/VideoPlayerService.php';
 include 'Classes/AdditionalDriverService.php';
 




$mytarif = new BasicTarif(5, 60);
$mytarif->add_service(new GPSService(15));

echo 'Тариф базовый  (BasicTarif(5 км, 1 час)) и сервис GPS (GPSService(15)). Цена = '.$mytarif->calculate_price();
echo '<br>';


$mytarif = new HourTarif(10, 200);


echo 'Тариф почасовой  (HourTarif(10 км, 200 минут)). Цена = '.$mytarif->calculate_price();
echo '<br>';

$mytarif = new StudentTarif(15, 500);
$mytarif->add_service(new AdditionalDriverService(100));

echo 'Тариф студенческий (StudentTarif(15 км, 500 минут)+AdditionalDriverService(100р. единоразово)). Цена = '.$mytarif->calculate_price();
echo '<br>';


