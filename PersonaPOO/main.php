<?php
//include("Persona.php");
include("Estudiante.php");

// Crear un objeto Persona
$persona1 = new Persona('Juan', 35);
echo $persona1->getNombre() . " tiene " . $persona1->getEdad() . " años.\n";

// Crear un objeto Estudiante
$estudiante1 = new Estudiante("Roger", 25);
$estudiante1->setMatricula("12345");

echo $estudiante1->getNombre() . " tiene " . $estudiante1->getEdad() . " años y su matrícula es " . $estudiante1->getMatricula();
