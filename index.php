<?php

require_once 'modelos/mascota.php';
require_once 'modelos/dueniomascota.php';

$Dm = new DuenioMascota();
$Dm->Id=1;
$Dm->Nombre='Walter';
$Dm->Apellido='Quintana';
$Dm->Dni=39663133;
$Dm->Celular=3416355066;
$Dm->Dirección= 'Rioja 1177' ;

$m = new mascota();
$m->Id=1;
$m->Nombre= 'Merlin';
$m->Raza= 'Mestizo';
$m->DuenioMascota=$Dm;


$m->MostrarDatos();
