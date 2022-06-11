<?php

class Prestamo
{
    public $Id;

    public $LineaPrestamo;
    public $Titular;

    public $FechaAlta;
    public $CantCuotas;
    public $MontoCapital;


    public function MostrarDatos()
    {
        echo 'Prestamo->  Id: ' . $this->Id . '<br><br>';

        echo '<hr>';

        echo 'Linea de Prestamo->  Id: ' . $this->LineaPrestamo->Id . '<br><br>';
        echo 'Descripción: ' . $this->LineaPrestamo->Descripcion . '<br><br>';
        echo 'Tasa Efectiva Mensual: ' . $this->LineaPrestamo->Tasaefectivamensual . '<br><br>';

        echo '<hr>';

        echo 'Titular->  Id: ' . $this->Titular->Id . '<br><br>';
        echo 'Nombre: ' . $this->Titular->Nombre . '<br><br>';
        echo 'Apellido: ' . $this->Titular->Apellido . '<br><br>';
        echo 'Documento: ' . $this->Titular->Documento . '<br><br>';
        echo 'Dirección->  Id: ' . $this->Titular->Direccion->Id . '<br><br>';
        echo 'Calle: ' . $this->Titular->Direccion->Calle . '<br><br>';
        echo 'Número: ' . $this->Titular->Direccion->Numero . '<br><br>';
        echo 'Localidad: ' . $this->Titular->Direccion->Localidad . '<br><br>';
        echo 'Provincia->  Id: ' . $this->Titular->Direccion->Provincia->Id . '<br><br>';
        echo 'Descripción: ' . $this->Titular->Direccion->Provincia->Descripcion . '<br><br>';

        echo '<hr>';

        echo 'Fecha de Alta: ' . $this->FechaAlta . '<br><br>';
        echo 'Cantidad de Cuotas: ' . $this->CantCuotas . '<br><br>';
        echo 'Monto Capital: ' . $this->MontoCapital;
        
    }
}
