<?php
class Mascota { // SE RECONOCE UNA CLASE CON EL INICIO DE UNA MAYUSCULA
    public $nombre;
    private $edad;
    private $raza;
    private $peso;

    public function setNombre($name) { // initializar ---- set
        $this->nombre = $name;
    }

    public function setEdad($year) {
        $this->edad = $year;
    }
    public function setRaza($race) {
        $this->edad = $race;
    }
    public function setPeso($weight) {
        $this->edad = $weight;
    }
    public function mostrar() {
        echo '<p>'.$this->nombre.'</p>';
        echo '<p>'.$this->edad.'</p>';
        echo '<p>'.$this->raza.'</p>';
        echo '<p>'.$this->peso.'</p>';
    }
}
?>