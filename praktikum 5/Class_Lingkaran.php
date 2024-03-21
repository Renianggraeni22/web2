<?php
class Lingkaran{
    /**
     * Access Modifier:
     * 1. publik
     * 2. private
     * 3. protected
     */


     // atribut / properti
     private $jari;
     const PHI = 3.14;


     //method: function yang ada dalam class
     public function __construct($r)
     {
        //isi atribut jari saat pembuatan object
        $this->jari = $r;
     }

     public function getluas (){
        return 0.5 * self::PHI * $this->jari * $this->jari;
    }


    public function getkeliling(){
        return 2 * self::PHI * $this->jari;
    }
}