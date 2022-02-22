<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessController;
use yii\web\COntroller;

use app\models\FormularioForm;

class SitioController extends Controller{
    public function actionInicio(){

        $model=new FormularioForm;

        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $resultado=$model->valora+$model->valorb;
            $valorRespuesta=("El resultado es: ".$resultado);

            return $this->render('inicio', ['mensaje'=>$valorRespuesta, 'model'=>$model]);

        }


        
        return $this->render('inicio', ['mensaje'=>"",'model'=>$model]);
    }
}



?>