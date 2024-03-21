<?php
require_once('class_lingkaran.php');
echo "NILAI PHI: " . Lingkaran::PHI;


// instantiasi object Lingkaran
$lingkar1 = new Lingkaran(20);
$lingkar2 = new Lingkaran(8);


//memanggil method dari object
echo "<br> Luas Lingkaran 1: " . $lingkar1->getluas();
echo "<br> Luas Lingkaran 2: " . $lingkar1->getluas();


echo "<br> keliling Lingkaran 1; " . $lingkar1->getkeliling();
echo "<br> keliling Lingkaran 2; " . $lingkar1->getluas();