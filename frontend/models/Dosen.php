<?php
namespace frontend\models;

class Dosen 
{
	public $nidn;
	public $nama;
	public $idprodi;

	//konstructor class
	public function __construct ($nidn, $nama) 
	{
		$this-> nidn = $nidn;
		$this-> nama = $nama;
	}

	public function prodi() 
	{
		if ($this->idprodi = 1) {
			return "Sistem Informasi";
		}
		elseif ($this->idprodi =2) {
			return "Teknik Informatika";
		}
		else 
			return "Maaf ID prodi salah";
	}
}
?>