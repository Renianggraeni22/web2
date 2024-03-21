<?php
Class Hero{
    // atribut
        public $name;
    public $hp;
    public $damage;

    //method
    public function __construct($name, $hp, $damage)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->damage = $damage;
    }

    public function getdetail(){
        echo "Name: $this->name <br>";
        echo "Healet Poin: $this->hp <br>";
        echo "Damage: $this->damage <br>";
        echo "<br> ======================== <br>";
    }

    //nyerang
    public function attack($target){
        $target->hp = $this->damage;
        echo "<br> berhasil menyerang $target $->name";
        echo "<br> Hp lawan saat ini adalah";
    }
}


// buat object
$hero1 = new Hero('ALUUCARD', 3200, 230);
$hero1->getdetail();


$hero2 = new Hero('Layla', 1900, 450);
$hero2->getdetail();