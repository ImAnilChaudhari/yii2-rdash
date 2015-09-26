<?php
use yii\widgets\Breadcrumbs;
use imanilchaudhari\rdash\widgets\Alert;
?>
<div class="pageheader">
    <h1><?=$this->title?></h1>
    <div class="breadcrumb-wrapper hidden-xs">
       <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []]) ?>    
    </div>
</div>
<section id="main-content" class="animated fadeInUp">    
<?= Alert::widget() ?>        
<div class="row">

    <?=$content?>
    

</div>
</section>