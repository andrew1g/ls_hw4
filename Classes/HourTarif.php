<?php

// 4. Все тарифы должны наследоваться от абстрактного тарифа из п.2
class HourTarif extends abstract_tarif {      
      //цена за км
      protected $price_per_km = 0;

      //цена за минуту
      protected $price_per_minute = 200 / 60;

      public function __construct(int $distance, int $minutes)
            {
                  parent::__construct($distance, $minutes);
                  //получим остаток минут от часа
                  $ostatok = $this->minutes % 60;
                  //вычислим количество полных часов
                  $fullhours = $this->minutes - $ostatok;
                  //если есть остаток, то добавим еще один полный час
                  if ($ostatok > 0) {
                        $fullhours+=60;
                  }
                  $this->minutes = $fullhours;                                   
            }


}