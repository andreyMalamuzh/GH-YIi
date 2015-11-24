<?php

use yii\helpers\Html;

?>

<h1><b>Your application form</b></h1>
<p>Name: <?= Html::encode($model->name)?></p>
<p>E-mail: <?= Html::encode($model->email)?></p>
<p>City: <?php echo $model->getCityLabel($model->city);?></p>
<p>Phone number: <?= Html::encode($model->phoneNumber)?></p>
<p>Device: <?= Html::encode($model->device)?></p>
<p>Discount card: <?php echo $model->getDiscountCardLabel($model->discountCard)?></p>
