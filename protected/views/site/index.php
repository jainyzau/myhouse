
  <div>
    <p></p>
  </div>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:970px;">
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox" >
      <div class="item active">
        <img src="/myhouse/images/slides001.jpg" alt="First slide">
      </div>
      <div class="item">
        <img src="/myhouse/images/slides002.jpg" alt="Second slide">
      </div>
      <div class="item">
        <img src="/myhouse/images/slides003.jpg" alt="Third slide">
      </div>
      <div class="item">
        <img src="/myhouse/images/slides004.jpg" alt="Fourth slide">
      </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<?php
/* @var $this SiteController */
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . "/js/jqueryui/jquery-ui.min.js", CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . "/js/docs.min.js", CClientScript::POS_END);
$this->pageTitle=Yii::app()->name;
?>
    <div>
      <p></p>
    </div>
      <div class="row">
        <div class="col-md-2">.col-md-2</div>
        <div class="col-md-8">.col-md-8</div>
        <div class="col-md-2">.col-md-2</div>
      </div>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>

