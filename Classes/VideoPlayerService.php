<?php

// 5. Описать **2 услуги** реализовав интерфейс услуг

class VideoPlayerService implements Service_Interface
{
    private $price_per_hour;

    public function __construct(int $price_per_hour)
    {
        $this->price_per_hour = $price_per_hour;
    }

    public function AddServiceToTarif(Tarif_interface $tarif): int
    {
        $hours = round($tarif->get_minutes() / 60);
        
        return $this->price_per_hour * $hours;
    }
}