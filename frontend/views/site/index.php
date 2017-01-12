<?php
/* @var $this yii\web\View */

$this->title = 'SIO';

$arrayOptionsMenu = [];

if (!Yii::$app->user->isGuest) 
    $arrayOptionsMenu = backend\models\AuthItem::getListModules();
?>
<div class="site-index">

    <div class="body-content">

        <div class="container-fluid">
            <div class="row">

                <div class="list-group" style="font-size: 30px;">
                    <?php foreach ($arrayOptionsMenu as $optionsMenu) {?>
                    <a href="<?= \yii\helpers\Url::to(["/".$optionsMenu['description'].""])?>" class="list-group-item">
                        <span class="glyphicon glyphicon-ok"></span> <?= $optionsMenu['name']?> 
                    </a>
                    <?php }?>
                </div>

            </div>
        </div>
        
    </div>
</div>
