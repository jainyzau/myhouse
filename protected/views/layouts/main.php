<!DOCTYPE html>

<html lang="zh-CN">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../favicon.ico">
      <title>看，房子！</title>

      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css"  />

      <!-- Custom styles for this template -->
      <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/starter-template.css"  />
    </head>
  <body style="background: #f3f8e9;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
      <div id="mainmenu">
          <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand">看房子</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a style="padding-bottom:0px;"><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#rentModal">我要出租</button></a></li>
                <li><a style="padding-bottom:0px;"><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#sellModal">我要出售</button></a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div><!-- mainmenu -->
              </div>
      </div><!--.row-->
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <?php echo $content; ?>
        </div>
      </div>
      <div class="row"  style="background: #e0e0e0;">
        <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
          <ul id="footer" class="clearfix" align="center" style="list-style:none;">
                <li>
                <a href="#" rel="nofollow" target="_blank">人才招聘</a> - 
                <a href="#" rel="nofollow" target="_blank">联系我们</a> - 
                <a href="#" rel="nofollow" target="_blank"> 版权声明 </a> - 
                <a href="#" rel="nofollow" target="_blank">免责声明</a> - 
                <a href="#" rel="nofollow" target="_blank">友情链接</a> - 
                </li>
                <li>
                  <p>Copyright© 2010-2015 香山网络 All Rights Reserved 沪ICP备11039897号</p>
                </li>
            </ul>
        </div>
      </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="rentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h3 class="modal-title" id="myModalLabel">我要出租</h3>
      </div>
      <div class="modal-body">
        <form role="form">
      <div class="form-group">
        <label for="InputPhoneNumber">联系电话</label>
        <input type="text" class="form-control" id="InputPhoneNumber" placeholder="您的手机号码">
        <label for="InputIntroduction">房屋简介</label>
        <textarea class="form-control" rows="3" id="InputIntroduction" placeholder="简单描述您的房屋"></textarea>
      </div>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary">提交</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="sellModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h3 class="modal-title" id="myModalLabel">我要出售</h3>
      </div>
      <div class="modal-body">
        <form role="form">
      <div class="form-group">
        <label for="InputPhoneNumber">联系电话</label>
        <input type="text" class="form-control" id="InputPhoneNumber" placeholder="您的手机号码">
        <label for="InputIntroduction">房屋简介</label>
        <textarea class="form-control" rows="3" id="InputIntroduction" placeholder="简单描述您的房屋"></textarea>
      </div>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary">提交</button>
      </div>
    </div>
  </div>
</div>
            <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <?php
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . "/js/jquery.min.js", CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . "/js/bootstrap.min.js", CClientScript::POS_END);
       ?>

  </body>
</html>
