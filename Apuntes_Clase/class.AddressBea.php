<?php
//Creamos la clase Address que devolverá el objeto 
class Address
{

    //El 90% de las  veces que manderemos requerimos que se guarden en variables privadas
    private $id;

    function __construct($id)
    {
        //Este parámetro debemos construirlo para guardarlo
        $this->id = $id;
    }

    //Vamos a llamar ese atributo para ver si lo hemos guardado
    function get_ID()
    {
        //Devolvemos el atributo
        return $this->id;
    }
}
