<?php

namespace frontend\controllers;
use frontend\models\Dosen;

class DosenController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDataDosen() {
    	$data1 = new Dosen("01101170010", "Sirojul Munir");
    	$data1->idprodi = 1;
    	return $this -> render ('data-dosen',
    	[
    		'dsn1' => $data1,
    	]);
    }
}
