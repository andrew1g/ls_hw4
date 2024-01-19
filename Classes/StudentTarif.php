<?php

// 4. Все тарифы должны наследоваться от абстрактного тарифа из п.2
class StudentTarif extends abstract_tarif {      
      //цена за км
      protected $price_per_km = 4;

      //цена за минуту
      protected $price_per_minute = 1;

}