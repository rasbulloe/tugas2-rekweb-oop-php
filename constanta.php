<?php 

// define('NAMA', 'DEDE AMIN');

// echo NAMA;
// echo "<br>";


// const UMUR = 20;
// echo UMUR;


// class Coba {
// 	const NAMA = 'Dede Amin';
// }

// echo Coba::NAMA;


/*echo __FILE__;*/

/*function coba() {
	return __function__;
}

echo coba();*/


class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;




 ?>