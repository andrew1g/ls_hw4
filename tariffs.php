<?php

// 1. Создать интерфейс, который будет содержать описание метода подсчета цены, 
//метода добавления услуги (принимает на вход интерфейс услуги)
interface calc_price() {
    public function calculate_price();
    public function add_service($service);
}


// 2. Описать интерфейс доп. услуги, который содержит метод применения услуги к тарифу, 
//который пересчитывает цену в зависимости от особенностей услуги
interface additional_service() {
    public function recalc_price();
}

// 3. Реализовать абстрактный класс тарифа, 
//который будет описывать основные методы и имплементировать описанный в п.1 интерфейс

abstract class tarif() implements calculate_price
{
    public function calculate_price() {

    }
    
    public function add_service($service) {

    }
}
// 4. Все тарифы должны наследоваться от абстрактного тарифа из п.2


// 5. Описать **2 услуги** реализовав интерфейс услуг

