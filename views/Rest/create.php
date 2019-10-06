<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Asd */

$this->title = 'Create Asd';
$this->params['breadcrumbs'][] = ['label' => 'Asds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
