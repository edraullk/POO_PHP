<?php
include("Persona.php");

class Estudiante extends Persona
{
    // Propiedades adicionales
    private $matricula;

    // Métodos adicionales
    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }
}
