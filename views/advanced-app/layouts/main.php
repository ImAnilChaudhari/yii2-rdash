<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
if (Yii::$app->controller->action->id === 'login') {
    echo $this->render(
        'wrapper-black',
        ['content' => $content]
    );
} else {
    imanilchaudhari\rdash\web\Asset::register($this);
    backend\assets\AppAsset::register($this);
    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@imanilchaudhari/rdash/assets');
?>
<?php $this->beginPage() ?>
    
    
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script src="<?=$directoryAsset?>/js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body>
    <?php $this->beginBody() ?>
    <section id="main-wrapper" class="theme-default">
        <header id="header">
            <?= $this->render('header.php',['directoryAsset' => $directoryAsset]) ?>
        </header>
        <!--sidebar left start-->
        <aside class="sidebar sidebar-left">
            <?= $this->render('left.php',['directoryAsset' => $directoryAsset])?>
        </aside>
        <!--sidebar left end-->
        <!--main content start-->
        <section class="main-content-wrapper"> 
                   
                <?= $this->render('content.php',['content' => $content, 'directoryAsset' => $directoryAsset]) ?>
                
        </section>
        <!--main content end-->
    </section>
    <!--sidebar right start-->
    <aside id="sidebar-right">
        <?= $this->render('right.php', ['directoryAsset' => $directoryAsset]) ?>
    </aside>
    <!--/sidebar right end-->
    <!--Config demo-->
    <div id="config" class="config hidden-xs">
        <?= $this->render('setting.php', ['directoryAsset' => $directoryAsset]) ?>
    </div>
    <?php $this->endBody() ?>
    <script>
    $(document).ready(function() {
        app.dateRangePicker();
        app.chartJs();
        app.weather();
        app.spinStart();
        app.spinStop();
    });
    </script>
    </body>
    </html>
<?php $this->endPage() ?>
<?php } ?>