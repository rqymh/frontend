<?php

namespace frontend\controllers;

class ProdiController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$prodi1 = "Sistem Informasi";
    	$prodi2 = "Teknik Informatika";
    	$dosen1 = "Sirojul Munir";
    	$dosen2 = "Amalia Rahmah";
    	$dosen3 = "Yekti Wirani";

        return $this->render('index',[
        	'si' => $prodi1,
        	'ti' => $prodi2,
        	'dosen1' => $dosen1,
        	'dosen2' => $dosen2,
        	'dosen3' => $dosen3
        ]);
    }

}
