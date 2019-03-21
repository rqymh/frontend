<?php

namespace frontend\controllers;

class KemahasiswaanController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$mhs1 = "Silmi Rizqi Ramadhani";
    	$mhs2 = "Farah Shofiyah";
    	$mhs3 = "Robi'ah Qoyimah";
    	$mhs4 = "Hera Karmila";
    	$mhs5 = "Nabilah Fajar Utami";

    	$prodi1 = 'Sistem Informasi';
    	$prodi2 = 'Teknik Informatika';

    	$smt4 = '4';
    	$smt5 = '5';
    	$smt6 = '6';

        return $this->render('index',[
        	'si' => $prodi1,
        	'ti' => $prodi2,
        	'mhs1' => $mhs1,
        	'mhs2' => $mhs2,
        	'mhs3' => $mhs3,
        	'mhs4' => $mhs4,
        	'mhs5' => $mhs5,
        	'smt4' => $smt4,
        	'smt5' => $smt5,
        	'smt6' => $smt6
        ]);
    }

}