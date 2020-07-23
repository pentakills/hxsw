<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:49:"./application/admin/template/index\switch_map.htm";i:1589434587;s:65:"D:\phpStudy\WWW\hxsw\application\admin\template\public\layout.htm";i:1589434587;s:65:"D:\phpStudy\WWW\hxsw\application\admin\template\public\footer.htm";i:1589434587;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="/public/static/admin/css/main.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/page.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/font/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/admin/font/css/font-awesome-ie7.min.css">
<![endif]-->
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var GetUploadify_url = "<?php echo url('Uploadify/upload'); ?>";
    var __root_dir__ = "";
    var __lang__ = "<?php echo $admin_lang; ?>";
</script>  
<link href="/public/static/admin/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="/public/static/admin/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">html, body { overflow: visible;}</style>
<script type="text/javascript" src="/public/static/admin/js/jquery.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/public/static/admin/js/admin.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/common.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.mousewheel.js"></script>
<script src="/public/static/admin/js/myFormValidate.js"></script>
<script src="/public/static/admin/js/myAjax2.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>

</head>
<body style="background-color: #FFF; overflow: auto;min-width: auto;">
<style type="text/css">
    .ncap-form-default dd.opt{
        width: auto;
    }
</style>
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="min-width: auto;">
    <div class="fixed-bar">
        <div class="item-title">
            <div class="subject">
                <h3>功能开关</h3>
                <h5></h5>
            </div>
        </div>
    </div>
    <div class="ncap-form-default">
        <dl class="row">
            <dt class="tit">
                <label for="site_url">插件应用</label>
            </dt>
            <dd class="opt">
                <div class="onoff">
                    <label for="web_weapp_switch1" class="cb-enable <?php if(isset($globalConfig['web_weapp_switch']) && $globalConfig['web_weapp_switch'] == 1): ?>selected<?php endif; ?>">开启</label>
                    <label for="web_weapp_switch0" class="cb-disable <?php if(!isset($globalConfig['web_weapp_switch']) || $globalConfig['web_weapp_switch'] == -1): ?>selected<?php endif; ?>">关闭</label>
                    <input id="web_weapp_switch1" name="web[web_weapp_switch]" value="1" type="radio" <?php if(isset($globalConfig['web_weapp_switch']) && $globalConfig['web_weapp_switch'] == 1): ?> checked="checked"<?php endif; ?> onclick="ajax_submit(this, 'web', 'web_weapp_switch');" data-lmenuid="Weapp_index">
                    <input id="web_weapp_switch0" name="web[web_weapp_switch]" value="-1" type="radio" <?php if(!isset($globalConfig['web_weapp_switch']) || $globalConfig['web_weapp_switch'] == -1): ?> checked="checked"<?php endif; ?> onclick="ajax_submit(this, 'web', 'web_weapp_switch');" data-lmenuid="Weapp_index">
                </div>
                <p class="notic">开启之后，左侧菜单会显示插件应用入口</p>
                <span id="guide_web_weapp_switch" style="<?php if(1 != $globalConfig['web_weapp_switch']): ?> display: none;<?php endif; ?>">
                    &nbsp;<a href="<?php echo url('Weapp/index'); ?>">[上传管理]</a>
                </span>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="site_url">多语言</label>
            </dt>
            <dd class="opt">
                <div class="onoff">
                    <label for="web_language_switch1" class="cb-enable <?php if(isset($globalConfig['web_language_switch']) && $globalConfig['web_language_switch'] == 1): ?>selected<?php endif; ?>">开启</label>
                    <label for="web_language_switch0" class="cb-disable <?php if(empty($globalConfig['web_language_switch'])): ?>selected<?php endif; ?>">关闭</label>
                    <input id="web_language_switch1" name="web[web_language_switch]" value="1" type="radio" <?php if(isset($globalConfig['web_language_switch']) && $globalConfig['web_language_switch'] == 1): ?> checked="checked"<?php endif; ?> onclick="ajax_submit(this, 'web', 'web_language_switch');" data-lmenuid="Language_index">
                    <input id="web_language_switch0" name="web[web_language_switch]" value="0" type="radio" <?php if(empty($globalConfig['web_language_switch'])): ?> checked="checked"<?php endif; ?> onclick="ajax_submit(this, 'web', 'web_language_switch');" data-lmenuid="Language_index">
                </div>
                <p class="notic">开启之后，顶部菜单会显示多语言入口</p>
                <span id="guide_web_language_switch" style="<?php if(empty($globalConfig['web_language_switch'])): ?> display: none;<?php endif; ?>">
                    &nbsp;<a href="<?php echo url('Language/index'); ?>">[多语言设置]</a>
                    &nbsp;<a href="javascript:void(0);" onclick="tag_call('web_language_switch');" class="red">[标签调用]</a>
                </span>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="site_url">会员中心</label>
            </dt>
            <dd class="opt">
                <div class="onoff">
                    <label for="web_users_switch1" class="cb-enable <?php if(isset($globalConfig['web_users_switch']) && $globalConfig['web_users_switch'] == 1): ?>selected<?php endif; ?>">开启</label>
                    <label for="web_users_switch0" class="cb-disable <?php if(empty($globalConfig['web_users_switch'])): ?>selected<?php endif; ?>">关闭</label>
                    <input id="web_users_switch1" name="web[web_users_switch]" value="1" type="radio" <?php if(isset($globalConfig['web_users_switch']) && $globalConfig['web_users_switch'] == 1): ?> checked="checked"<?php endif; ?> onclick="ajax_submit(this, 'web', 'web_users_switch');" data-lmenuid="Member_users_index">
                    <input id="web_users_switch0" name="web[web_users_switch]" value="0" type="radio" <?php if(empty($globalConfig['web_users_switch'])): ?> checked="checked"<?php endif; ?> onclick="ajax_submit(this, 'web', 'web_users_switch');" data-lmenuid="Member_users_index">
                </div>
                <p class="notic">开启之后，左侧菜单会显示会员中心入口</p>
                <span id="guide_web_users_switch" style="<?php if(empty($globalConfig['web_users_switch'])): ?> display: none;<?php endif; ?>">
                    &nbsp;<a href="<?php echo url('Member/users_index'); ?>">[用户列表]</a>
                    &nbsp;<a href="<?php echo url('Member/users_config'); ?>">[功能配置]</a>
                    &nbsp;<a href="javascript:void(0);" onclick="tag_call('web_users_switch');" class="red">[标签调用]</a>
                </span>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="uname">支付功能</label>
            </dt>
            <dd class="opt">
                <div class="onoff">
                    <label for="pay_open1" class="cb-enable <?php if($userConfig['pay_open'] == 1): ?>selected<?php endif; ?>">开启</label>
                    <label for="pay_open0" class="cb-disable <?php if(!isset($userConfig['pay_open']) || empty($userConfig['pay_open'])): ?>selected<?php endif; ?>">关闭</label>
                    <input id="pay_open1" name="pay[pay_open]" value="1" type="radio" <?php if($userConfig['pay_open'] == 1): ?> checked="checked"<?php endif; ?> onclick="ajax_submit(this, 'pay', 'pay_open');">
                    <input id="pay_open0" name="pay[pay_open]" value="0" type="radio" <?php if(!isset($userConfig['pay_open']) || empty($userConfig['pay_open'])): ?> checked="checked"<?php endif; ?> onclick="ajax_submit(this, 'pay', 'pay_open');">
                </div>
                <p class="notic">关闭则自动隐藏支付入口。</p>
                <span id="guide_pay_open" style="<?php if(!isset($userConfig['pay_open']) || empty($userConfig['pay_open'])): ?> display: none;<?php endif; ?>">
                    &nbsp;<a href="<?php echo url('Member/money_index'); ?>">[充值列表]</a>
                    &nbsp;<a href="<?php echo url('Member/pay_set'); ?>">[接口配置]</a>
                </span>
            </dd>
        </dl>
        <dl class="row">
            <dt class="tit">
                <label for="uname">商城中心</label>
            </dt>
            <dd class="opt">
                <div class="onoff">
                    <label for="shop_open1" class="cb-enable <?php if($userConfig['shop_open'] == 1): ?>selected<?php endif; ?>">开启</label>
                    <label for="shop_open0" class="cb-disable <?php if(!isset($userConfig['shop_open']) || empty($userConfig['shop_open'])): ?>selected<?php endif; ?>">关闭</label>
                    <input id="shop_open1" name="shop[shop_open]" value="1" type="radio" <?php if($userConfig['shop_open'] == 1): ?> checked="checked"<?php endif; ?> data-authortoken="<?php echo $is_eyou_authortoken; ?>" data-is_online="<?php echo $is_online; ?>" onclick="ajax_submit(this, 'shop', 'shop_open');" data-lmenuid="Shop_index">
                    <input id="shop_open0" name="shop[shop_open]" value="0" type="radio" <?php if(!isset($userConfig['shop_open']) || empty($userConfig['shop_open'])): ?> checked="checked"<?php endif; ?> data-authortoken="<?php echo $is_eyou_authortoken; ?>" data-is_online="<?php echo $is_online; ?>" onclick="ajax_submit(this, 'shop', 'shop_open');" data-lmenuid="Shop_index">
                </div>
                <p class="notic">关闭则自动隐藏商城中心入口。</p>
                <span id="guide_shop_open" style="<?php if(!isset($userConfig['shop_open']) || empty($userConfig['shop_open'])): ?> display: none;<?php endif; ?>">
                    &nbsp;<a href="<?php echo url('Shop/index'); ?>">[订单列表]</a>
                    &nbsp;<a href="<?php echo url('Shop/conf'); ?>">[功能配置]</a>
                    &nbsp;<a href="javascript:void(0);" onclick="tag_call('shop_open');" class="red">[标签调用]</a>
                </span>
            </dd>
        </dl>
    </div>
</div>

<input type="hidden" name="is_themeusers_exist" id="is_themeusers_exist" value="<?php echo $is_themeusers_exist; ?>">
<input type="hidden" name="is_themeshop_exist" id="is_themeshop_exist" value="<?php echo $is_themeshop_exist; ?>">

<script type="text/javascript">

    // 提交表单
    function ajax_submit(obj, inc_type, name){
        var _parent = parent;
        var value = $(obj).val();
        var lmenuid = $(obj).attr('data-lmenuid');
        var url = "<?php echo url('Index/switch_map', ['_ajax'=>1]); ?>";
        // 验证
        switch (name)
        {
            case 'shop_open':
            case 'pay_open':
                // 第一次使用会员中心，其他功能开关不与会员中心开关关联
                var web_users_switch = $('input[name="web[web_users_switch]"]:checked').val();
                if (1 == $('#is_themeusers_exist').val() && 1 != web_users_switch) {
                    $('label[for='+name+'1]').removeClass('selected');
                    $('#'+name+'1').attr('checked','');
                    $('label[for='+name+'0]').addClass('selected');
                    $('#'+name+'0').attr('checked','checked');
                    if ('pay_open' == name) {
                        nameTitle = '支付功能';
                    } else if ('shop_open' == name) {
                        nameTitle = '商城功能';
                    }
                    parent.layer.alert('使用【<font color="red">'+nameTitle+'</font>】请先开启【<font color="red">会员中心</font>】！', {icon: 3, title:false}, function(){
                        parent.layer.closeAll();
                        // $('label[for=web_users_switch0]').removeClass('selected');
                        // $('#web_users_switch0').attr('checked','');
                        // $('label[for=web_users_switch1]').addClass('selected');
                        // $('#web_users_switch1').attr('checked','checked');
                        // ajax_submit($('#web_users_switch1'), 'web', 'web_users_switch');
                    });
                    return false;
                }
                // --end
                if(false == check_shop_open())
                {
                    return false;
                }
                // 同时开启会员中心
                if (1 == value) {
                    $('label[for=web_users_switch0]').removeClass('selected');
                    $('#web_users_switch0').attr('checked','');
                    $('label[for=web_users_switch1]').addClass('selected');
                    $('#web_users_switch1').attr('checked','checked');
                }
                break;
        }
        // 标签调用按钮的显示与隐藏
        if (1 == value) {
            $('#guide_'+name).show();
        } else {
            $('#guide_'+name).hide();
        }

        if (1 == $('#is_themeusers_exist').val()) {
            $('#is_themeusers_exist').val(0)
            loadmsg = '初始化中';
        } else if (1 == $('#is_themeshop_exist').val()) {
            $('#is_themeshop_exist').val(0)
            loadmsg = '初始化中';
        } else {
            loadmsg = '正在处理';
        }
        parent_layer_loading(loadmsg);

        $.ajax({
            type: "POST",
            url: url,
            data: {inc_type:inc_type,name:name,value:value,lmenuid:lmenuid},
            dataType: 'json',
            success: function (res) {
                if(res.code == 1){
                    // 第一次模板同步下载
                    if ('web_users_switch' == name && 1 == res.data.is_syn) { // 会员中心模板下载
                        syn_theme_users(value,lmenuid);
                        return false;
                    } else if ('shop_open' == name && 1 == res.data.is_syn) { // 订单中心模板下载
                        syn_theme_shop(value,lmenuid);
                        return false;
                    } else {
                        _parent.layer.closeAll();
                        // 根据不同场景进行页面加载的处理
                        _parent.layer.msg(res.msg, {icon: 1, time: 1000}, function(){
                            if (1 == res.data.reload) {
                                window.location.reload();
                            } else if (2 == res.data.reload) {
                                top.window.location.reload();
                            }
                        });
                    }
                }else{
                    if (1 == res.data.code) {
                        _parent.layer.closeAll();
                        _parent.layer.alert(res.msg, {btn: ['购买授权'], icon: 2, title:false}, function(){
                            _parent.layer.closeAll();
                            window.location.reload();
                            window.open('http://www.eyoucms.com/buy');
                        });
                    } else {
                        _parent.layer.closeAll();
                        _parent.layer.alert(res.msg, {icon: 2, title:false}, function(){
                            _parent.layer.closeAll();
                            window.location.reload();
                        });
                    }
                }
                // 控制顶部与左侧菜单的显示与隐藏
                if (1 == value) {
                    $('#'+lmenuid, window.parent.document).show();
                } else {
                    $('#'+lmenuid, window.parent.document).hide();
                }
            },
            error:function(){
                _parent.layer.closeAll();
                _parent.layer.alert('网络失败，请刷新页面后重试', {icon: 2, title:false}, function(){
                    _parent.layer.closeAll();
                    window.location.reload();
                });
            }
        });
    }

    // 会员模板初始化下载
    function syn_theme_users(value,lmenuid)
    {
        $.ajax({
            type : 'get',
            url : "<?php echo url('Member/ajax_syn_theme_users', ['_ajax'=>1]); ?>",
            data : {},
            dataType : 'json',
            success : function(res){
                parent.layer.closeAll();
                if(res.code == 1){
                    parent.layer.msg(res.msg, {icon: 1, time: 1000});
                }else{
                    parent.layer.alert(res.msg, {icon: 2, title:false}, function(){
                        parent.layer.closeAll();
                        window.location.reload();
                    });
                }
                // 控制顶部与左侧菜单的显示与隐藏
                if (1 == value) {
                    $('#'+lmenuid, window.parent.document).show();
                } else {
                    $('#'+lmenuid, window.parent.document).hide();
                }
            },
            error: function(e){
                parent.layer.closeAll();
                parent.layer.alert('网络失败，请刷新页面后重试', {icon: 2, title:false}, function(){
                    parent.layer.closeAll();
                    window.location.reload();
                });
            }
        })
    }

    // 订单模板初始化下载
    function syn_theme_shop(value,lmenuid)
    {
        $.ajax({
            type : 'get',
            url : "<?php echo url('Shop/ajax_syn_theme_shop', ['_ajax'=>1]); ?>",
            data : {},
            dataType : 'json',
            success : function(res){
                parent.layer.closeAll();
                if(res.code == 1){
                    parent.layer.msg(res.msg, {icon: 1, time: 1000});
                }else{
                    parent.layer.alert(res.msg, {icon: 2, title:false}, function(){
                        parent.layer.closeAll();
                        window.location.reload();
                    });
                }
                // 控制顶部与左侧菜单的显示与隐藏
                if (1 == value) {
                    $('#'+lmenuid, window.parent.document).show();
                } else {
                    $('#'+lmenuid, window.parent.document).hide();
                }
            },
            error: function(e){
                parent.layer.closeAll();
                parent.layer.alert('网络失败，请刷新页面后重试', {icon: 2, title:false}, function(){
                    parent.layer.closeAll();
                    window.location.reload();
                });
            }
        })
    }

    function check_shop_open()
    {
        var obj = $('input[name="shop[shop_open]"]:checked');
        var is_online = $(obj).attr('data-is_online');
        if (1 == is_online) {
            var shop_open = $(obj).val();
            if (1 == shop_open && $(obj).attr('data-authortoken') == -1) {
                $('label[for=shop_open1]').removeClass('selected');
                $('#shop_open1').attr('checked','');
                $('label[for=shop_open0]').addClass('selected');
                $('#shop_open0').attr('checked','checked');
                var alert1 = layer.alert('订单功能只限于授权域名！', {
                    icon: 4,
                    title:false,
                    btn: ['购买授权']
                }, function(){
                    window.open('http://www.eyoucms.com/buy');
                    layer.close(alert1);
                });
                return false;
            }
        }
        return true;
    }

    function tag_call(name)
    {
        $.ajax({
            type: "POST",
            url: "<?php echo url('System/ajax_tag_call', ['_ajax'=>1]); ?>",
            data: {name:name},
            dataType: 'json',
            success: function (res) {
                if(res.code == 1){
                    //询问框
                    var confirm = layer.confirm(res.data.msg, {
                            title: false,
                            area: ['60%','80%'],
                            btn: ['关闭'] //按钮

                        }, function(){
                            layer.close(confirm);
                        }
                    );  
                }else{
                    layer.alert(res.msg, {icon: 2, title:false});
                }
            },
            error:function(){
                layer.alert('网络失败，请刷新页面后重试', {icon: 2, title:false});
            }
        });
    }
</script>
<br/>
<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop">
        <i class="fa fa-angle-up"></i>
    </a>
    <a href="JavaScript:void(0);" id="btnbottom">
        <i class="fa fa-angle-down"></i>
    </a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#think_page_trace_open').css('z-index', 99999);
    });
</script>
</body>
</html>