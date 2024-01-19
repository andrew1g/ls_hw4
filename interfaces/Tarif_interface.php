<?php

// 1. Создать интерфейс, который будет содержать описание метода подсчета цены, 
//метода добавления услуги (принимает на вход интерфейс услуги)

interface Tarif_interface
{
    //Счиетаем цену
    public function calculate_price();
    
    //Добавляем сервис
    public function add_service(Service_Interface $service);

    //Получаем время в минутах
    public function get_minutes();

    //Получаем расстояние в километрах
    public function get_km();
}