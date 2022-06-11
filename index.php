<?php

require_once 'modelo/provincia.php';
require_once 'modelo/direccion.php';
require_once 'modelo/persona.php';
require_once 'modelo/lineaprestamo.php';
require_once 'modelo/prestamo.php';

$prov = new Provincia();
$prov->Id = '1';
$prov->Descripcion = 'Santa Fe';


$direc = new Direccion();
$direc->Id = '1';
$direc->Calle = 'Montevideo';
$direc->Numero = 34;
$direc->Localidad = 'Rosario';
$direc->Provincia = $prov;


$pers = new Persona();
$pers->Id = '1';
$pers->Nombre = 'Daniel';
$pers->Apellido = 'Rodríguez';
$pers->Documento = 12456789;
$pers->Direccion = $direc;


$lineap = new LineaPrestamo();
$lineap->Id = '01';
$lineap->Descripcion = 'Personal Sola Firma';
$lineap->Tasaefectivamensual = '15%';


$prest = new Prestamo();
$prest->Id = '01';
$prest->LineaPrestamo = $lineap;
$prest->Titular = $pers;
$prest->FechaAlta = '21/08/2019';
$prest->CantCuotas = 36;
$prest->MontoCapital = '$10.000.-';


$prest->MostrarDatos();
