<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:89:"D:\Nicmic\wamp64\www\fastadmin\public/../application/admin\view\express\address\edit.html";i:1524042005;s:73:"D:\Nicmic\wamp64\www\fastadmin\application\admin\view\layout\default.html";i:1523974191;s:70:"D:\Nicmic\wamp64\www\fastadmin\application\admin\view\common\meta.html";i:1523974191;s:72:"D:\Nicmic\wamp64\www\fastadmin\application\admin\view\common\script.html";i:1523974191;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/fastadmin/public/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/fastadmin/public/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/fastadmin/public/assets/js/html5shiv.js"></script>
  <script src="/fastadmin/public/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="form-group">
        <label for="c-userid" class="control-label col-xs-12 col-sm-2"><?php echo __('Userid'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-userid" class="form-control" name="row[userid]" type="number" value="<?php echo $row['userid']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="c-name" class="control-label col-xs-12 col-sm-2"><?php echo __('Name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-name" data-rule="required" class="form-control" name="row[name]" type="text" value="<?php echo $row['name']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="c-mobile" class="control-label col-xs-12 col-sm-2"><?php echo __('Mobile'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-mobile" data-rule="required" class="form-control" name="row[mobile]" type="text" value="<?php echo $row['mobile']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="c-province" class="control-label col-xs-12 col-sm-2"><?php echo __('Province'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-province" data-rule="required" class="form-control" name="row[province]" type="text" value="<?php echo $row['province']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="c-city" class="control-label col-xs-12 col-sm-2"><?php echo __('City'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <div class='control-relative'><input id="c-city" data-rule="required" class="form-control" data-toggle="city-picker" name="row[city]" type="text" value="<?php echo $row['city']; ?>"></div>
        </div>
    </div>
    <div class="form-group">
        <label for="c-area" class="control-label col-xs-12 col-sm-2"><?php echo __('Area'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-area" data-rule="required" class="form-control" name="row[area]" type="text" value="<?php echo $row['area']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="c-address" class="control-label col-xs-12 col-sm-2"><?php echo __('Address'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-address" class="form-control" name="row[address]" type="text" value="<?php echo $row['address']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="c-is_default" class="control-label col-xs-12 col-sm-2"><?php echo __('Is_default'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-is_default" class="form-control selectpicker" name="row[is_default]">
                <?php if(is_array($isDefaultList) || $isDefaultList instanceof \think\Collection || $isDefaultList instanceof \think\Paginator): if( count($isDefaultList)==0 ) : echo "" ;else: foreach($isDefaultList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['is_default'])?$row['is_default']:explode(',',$row['is_default']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/fastadmin/public/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/fastadmin/public/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo $site['version']; ?>"></script>
    </body>
</html>