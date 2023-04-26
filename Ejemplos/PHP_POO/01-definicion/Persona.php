<?php
class Persona { // SE RECONOCE UNA CLASE CON EL INICIO DE UNA MAYUSCULA
    public $nombre;
    private $edad;

    public function setNombre($name) { // initializar ---- set
        $this->nombre = $name;
    }

    public function setEdad($year) {
        $this->edad = $year;
    }

    public function mostrar() {
        echo '<p>'.$this->nombre.'</p>';
        echo '<p>'.$this->edad.'</p>';
    }
}
?>