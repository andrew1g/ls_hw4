<?php

// 3. Реализовать абстрактный класс тарифа, 
//который будет описывать основные методы и имплементировать описанный в п.1 интерфейс

abstract class abstract_tarif implements Tarif_interface
{
    //цена за минуту
    protected $price_per_minute;
    //цена за км
    protected $price_per_km;

    //проехали минут
    protected $minutes;

    //проехали километров
    protected $kms;

    //дополнительный сервис
    protected $additional_service;

    //конструктор
    public function __construct(int $kms, int $minutes)
    {
        $this->minutes = $minutes;
        $this->kms = $kms;
    }
    
    //Считаем цену
    public function calculate_price(): int
    {
        //Считаем цену
        $price = $this->price_per_minute * $this->minutes + $this->price_per_km * $this->kms;
        
        if  ($this->additional_service) {
        foreach ($this->additional_service as $service) {
             $price += $service->AddServiceToTarif($this);
         }
        }

        return $price;
    }
    
    //Добавляем сервис к тарифу
    public function add_service(Service_Interface $service)
    {
        //Добавляем сервис в массив дополнительных сервисов
        $this->additional_service[] = $service;
    }

    //Получаем время в минутах
    public function get_minutes()
    {
        //Получаем время в минутах
        return $this->minutes;
    }

    //Получаем расстояние в километрах
    public function get_km()
    {
        //Получаем расстояние в километрах
        return $this->kms;
    }
    
}
