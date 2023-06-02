<?php

class mascota 
{
    public $Id;
    public $Nombre;
    public $Raza;
    public $DuenioMascota;

    public function MostrarDatos()
    {
        echo 'Id: '. $this->Id. '<br>';
        echo 'Nombre: '. $this->Nombre. '<br>';
        echo 'Raza: '. $this->Raza. '<br>';
        echo '<hr>';
        echo 'Id: '. $this->DuenioMascota->Id. '<br>';
        echo 'Nombre: '. $this->DuenioMascota->Nombre. '<br>';
        echo 'Apellido: '. $this->DuenioMascota->Apellido. '<br>';
        echo 'Dni: '. $this->DuenioMascota->Dni. '<br>';
        echo 'Celular: '. $this->DuenioMascota->Celular. '<br>';
        echo 'Dirección: '. $this->DuenioMascota->Dirección. '<br>';
    }

}

