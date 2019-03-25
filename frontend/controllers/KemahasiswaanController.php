<?php

namespace frontend\controllers;
use frontend\models\NilaiSiswa;

class KemahasiswaanController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$mhs1 = "Silmi Rizqi Ramadhani";
    	$mhs2 = "Farah Shofiyah";
    	$mhs3 = "Robi'ah Qoyimah";
    	$mhs4 = "Syifa Tazkiy Fauziyah";
    	$mhs5 = "Nirmawati";

    	$prodi1 = 'Sistem Informasi';
    	$prodi2 = 'Teknik Informatika';

    	$smt4 = '4';
    	$smt6 = '6';
    	$smt8 = '8';

        return $this->render('index',[
        	'si' => $prodi1,
        	'ti' => $prodi2,
        	'mhs1' => $mhs1,
        	'mhs2' => $mhs2,
        	'mhs3' => $mhs3,
        	'mhs4' => $mhs4,
        	'mhs5' => $mhs5,
        	'smt4' => $smt4,
        	'smt6' => $smt6,
        	'smt8' => $smt8
        ]);
    }

    public function actionNilai() {
    	$mhs1 = new NilaiSiswa("0110117009", "Farah Shofiyah");
    	$mhs1->nilai = 84.1;
    	return $this -> render ('nilai',
    	[
    		'mhs1' => $mhs1,
    	]);
    }
}