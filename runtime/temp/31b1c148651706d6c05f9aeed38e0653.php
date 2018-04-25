<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:88:"D:\Nicmic\wamp64\www\fastadmin\public/../application/index\view\express\address_add.html";i:1523974191;s:72:"D:\Nicmic\wamp64\www\fastadmin\application\index\view\layout\common.html";i:1523974191;s:73:"D:\Nicmic\wamp64\www\fastadmin\application\index\view\common\sidenav.html";i:1524109711;}*/ ?>
<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>FastAdmin - <?php echo __('The fastest framework based on ThinkPHP5 and Bootstrap'); ?></title>

        <!-- Bootstrap Core CSS -->
        <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- Plugin CSS -->
        <link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="//cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
            <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            body {
                padding-top: 70px; 
            }
            footer {
                background-color: #222;
                color:#9d9d9d;
                padding:20px 0;
            }
        </style>
    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="https://www.fastadmin.net">FastAdmin</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="https://www.fastadmin.net" target="_blank"><?php echo __('Home'); ?></a></li>
                        <li><a href="https://www.fastadmin.net/store.html" target="_blank"><?php echo __('Store'); ?></a></li>
                        <li><a href="https://www.fastadmin.net/service.html" target="_blank"><?php echo __('Services'); ?></a></li>
                        <li><a href="https://www.fastadmin.net/download.html" target="_blank"><?php echo __('Download'); ?></a></li>
                        <li><a href="https://www.fastadmin.net/demo.html" target="_blank"><?php echo __('Demo'); ?></a></li>
                        <li><a href="https://www.fastadmin.net/donate.html" target="_blank"><?php echo __('Donation'); ?></a></li>
                        <li><a href="https://forum.fastadmin.net" target="_blank"><?php echo __('Forum'); ?></a></li>
                        <li><a href="https://doc.fastadmin.net" target="_blank"><?php echo __('Docs'); ?></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <main class="content">
            <div id="content-container" class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="sidenav">
    <ul class="list-group">
        <li class="list-group-heading"><?php echo __('User center'); ?></li>
        <li class="list-group-item <?php echo $config['actionname']=='index'?'active':''; ?>"> <a href="<?php echo url('user/index'); ?>"><i class="fa fa-user-circle"></i> <?php echo __('User center'); ?></a> </li>
        <li class="list-group-item <?php echo $config['actionname']=='profile'?'active':''; ?>"> <a href="<?php echo url('user/profile'); ?>"><i class="fa fa-user-o"></i> <?php echo __('Profile'); ?></a> </li>
        <li class="list-group-item <?php echo $config['actionname']=='changepwd'?'active':''; ?>"> <a href="<?php echo url('user/changepwd'); ?>"><i class="fa fa-key"></i> <?php echo __('Change password'); ?></a> </li>
        <li class="list-group-item <?php echo $config['actionname']=='logout'?'active':''; ?>"> <a href="<?php echo url('user/logout'); ?>"><i class="fa fa-sign-out"></i> <?php echo __('Sign out'); ?></a> </li>
    </ul>
</div>

<div class="sidenav">
    <ul class="list-group">
        <li class="list-group-heading">快递服务</li>
        <li class="list-group-item <?php echo $config['actionname']=='address_add'?'active':''; ?>"> <a href="<?php echo url('express/address_add'); ?>"><i class="fa fa-user-circle"></i> 添加地址</a> </li>
        <li class="list-group-item <?php echo $config['actionname']=='profile'?'active':''; ?>"> <a href="<?php echo url('user/profile'); ?>"><i class="fa fa-user-o"></i> <?php echo __('Profile'); ?></a> </li>
        <li class="list-group-item <?php echo $config['actionname']=='changepwd'?'active':''; ?>"> <a href="<?php echo url('user/changepwd'); ?>"><i class="fa fa-key"></i> <?php echo __('Change password'); ?></a> </li>
        <li class="list-group-item <?php echo $config['actionname']=='logout'?'active':''; ?>"> <a href="<?php echo url('user/logout'); ?>"><i class="fa fa-sign-out"></i> <?php echo __('Sign out'); ?></a> </li>
    </ul>
</div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="page-header"><?php echo __('Change password'); ?></h2>
                    <form id="changepwd-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">
                        <?php echo token(); ?>
                        <div class="form-group">
                            <label for="oldpassword" class="control-label col-xs-12 col-sm-2"><?php echo __('Old password'); ?>:</label>
                            <div class="col-xs-12 col-sm-4">
                                <input type="password" class="form-control" id="oldpassword" name="oldpassword" value="" data-rule="required" placeholder="<?php echo __('Old password'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="newpassword" class="control-label col-xs-12 col-sm-2"><?php echo __('New password'); ?>:</label>
                            <div class="col-xs-12 col-sm-4">
                                <input type="password" class="form-control" id="newpassword" name="newpassword" value="" data-rule="required" placeholder="<?php echo __('New password'); ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="renewpassword" class="control-label col-xs-12 col-sm-2"><?php echo __('Renew password'); ?>:</label>
                            <div class="col-xs-12 col-sm-4">
                                <input type="password" class="form-control" id="renewpassword" name="renewpassword" value="" data-rule="required" placeholder="<?php echo __('Renew password'); ?>" />
                            </div>
                        </div>

                        <div class="form-group normal-footer">
                            <label class="control-label col-xs-12 col-sm-2"></label>
                            <div class="col-xs-12 col-sm-8">
                                <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('Submit'); ?></button>
                                <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        </main>

        <footer>
            <div class="container">
                <p>&copy; 2017 FastAdmin. All Rights Reserved.</p>
                <ul class="list-inline">
                    <li>
                        <a href="https://gitee.com/karson/fastadmin"><?php echo __('Gitee'); ?></a>
                    </li>
                    <li>
                        <a href="https://github.com/karsonzhang/fastadmin"><?php echo __('Github'); ?></a>
                    </li>
                    <li>
                        <a href="https://shang.qq.com/wpa/qunwpa?idkey=46c326e570d0f97cfae1f8257ae82322192ec8841c79b2136446df0b3b62028c"><?php echo __('QQ group'); ?></a>
                    </li>
                </ul>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script>
            $(function () {

            });
        </script>

    </body>

</html>

