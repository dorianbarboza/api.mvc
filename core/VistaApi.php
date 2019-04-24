<?php

/**
 * Clase base para la representación de las vistas
 */
abstract class VistaApi{

    // Código de error
    public $estado;

    public abstract function imprimir($cuerpo);
}
?>