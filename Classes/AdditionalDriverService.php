<?php

// 5. Описать **2 услуги** реализовав интерфейс услуг

class AdditionalDriverService implements Service_Interface
{
    private $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function AddServiceToTarif(Tarif_interface $tarif): int
    {                
        return $this->price;
    }
}