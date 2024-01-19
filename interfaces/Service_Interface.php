<?php

// 2. Описать интерфейс доп. услуги, который содержит метод применения услуги к тарифу, 
//который пересчитывает цену в зависимости от особенностей услуги

interface Service_Interface
{
    public function AddServiceToTarif(Tarif_interface $tarif);
}