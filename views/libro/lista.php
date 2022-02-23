<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Libros a la Venta</h1>
<div class="row">

<?php foreach ($libros as $libro): ?>

    <div class="col-xs-4 col-sm-4 col-md-4 col-log-4">
        <a href="#" class="thumbnail">
            
        <?= Html::img($libro->imagen, ['width'=>'60px']) ?>
        <br>
        <?= Html::encode("{$libro->titulo}") ?>
        
        </a>
    </div>

    
<?php endforeach;?>




</div>

<?= LinkPager::widget(['pagination'=>$paginacion])?>

