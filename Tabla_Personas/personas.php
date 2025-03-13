<?php
class persona{
    private $nombre;
    private $fecNAc;
    private $tel;
    

    public function __construct($nombre, $fecNAc,$tel){
        $this-> nombre = $nombre;
        $this-> fecNAc = $fecNAc;
        $this-> tel = $tel;
     
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($value){
        $this->nombre = $value;      
    }
    public function getFecNAc(){
        return $this->fecNAc;
    }
    public function setFecNAc($value){
        $this->fecNAc = $value;

    }
    public function getTel(){
        return $this->tel;
    }
    public function setTel($value){
        $this->tel = $value;
    }

    public function calcularEdad() {
        $fecha_nac = new DateTime($this->fecNAc);
        $hoy = new DateTime();
        $edad = $hoy->diff($fecha_nac);
        return $edad->y;
    }
    
}

//el cierre de php no se incluye por que el scrip debe ser incluido en otro