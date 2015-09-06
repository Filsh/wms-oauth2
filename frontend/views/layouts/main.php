<?php

use Yii;
use yii\helpers\Html;
use frontend\assets\AppAsset;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div id="wrap">
        <nav id="header" class="navbar-static-top navbar-default navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <?= Html::a(Yii::$app->name, Yii::$app->homeUrl, ['class' => 'navbar-brand']); ?>
                </div>
            </div>
        </nav>
        
        <div id="content">
            <?= $content ?>
        </div>
        <div id="push"></div>
    </div>
    <div id="footer">
        <footer class="panel copyright">
            <div class="container"></div>
        </footer>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
