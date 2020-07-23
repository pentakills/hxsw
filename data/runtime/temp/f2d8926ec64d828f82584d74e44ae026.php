<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:57:"./application/admin/template/guestbook\attribute_edit.htm";i:1589434587;s:65:"D:\phpStudy\WWW\hxsw\application\admin\template\public\layout.htm";i:1589434587;s:65:"D:\phpStudy\WWW\hxsw\application\admin\template\public\footer.htm";i:1589434587;}*/ ?>
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
<body style="background-color: #FFF; overflow: auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title"><a class="back" href="javascript:history.back();" title="返回列表"><i class="fa fa-arrow-circle-o-left"></i></a>
            <div class="subject">
                <h3>编辑留言属性</h3>
                <h5></h5>
            </div>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo U('Guestbook/attribute_edit'); ?>" method="post" onsubmit="return false;">
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">
                    <label for="typeid"><em>*</em>所属栏目</label>
                </dt>
                <dd class="opt"> 
                    <?php echo $select_html; ?>
                    <input type="hidden" name="typeid" id="typeid" value="<?php echo (isset($field['typeid']) && ($field['typeid'] !== '')?$field['typeid']:''); ?>">
                    <span class="err" id="err_typeid" style="color:#F00; display:none;"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="ac_name"><em>*</em>属性名称</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="attr_name" value="<?php echo $field['attr_name']; ?>" id="attr_name" class="input-txt">
                    <span class="err" id="err_attr_name" style="color:#F00; display:none;"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="attr_input_type"><em>*</em>属性类型</label>
                </dt>
                <dd class="opt">
                    <label><input type="radio" value="0" name="attr_input_type" <?php if($field['attr_input_type'] == '0'): ?>checked="checked"<?php endif; ?> />单行文本</label>
                    <label><input type="radio" value="2" name="attr_input_type" <?php if($field['attr_input_type'] == '2'): ?>checked="checked"<?php endif; ?> />多行文本</label>
                    <label><input type="radio" value="1" name="attr_input_type" <?php if($field['attr_input_type'] == '1'): ?>checked="checked"<?php endif; ?> />下拉框</label>
                    <span class="err" id="err_attr_input_type" style="color:#F00; display:none;"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row attr_input_type2 <?php if($field['attr_input_type'] != '1'): ?>none<?php endif; ?>">
                <dt class="tit">
                    <label for="attr_values"><em>*</em>可选值列表</label>
                </dt>
                <dd class="opt">
                    <textarea rows="10" cols="30" name="attr_values" id="attr_values" class="input-txt" style="height:100px;" placeholder="一行代表一个可选值"><?php echo $field['attr_values']; ?></textarea>
                    <span id="err_attr_values" class="err" style="color:#F00; display:none;"></span>
                    <p class="notic">一行代表一个可选值</p>
                </dd>
            </dl>
            <div class="bot">
                <input type="hidden" name="attr_id" value="<?php echo $field['attr_id']; ?>">
                <a href="JavaScript:void(0);" onclick="check_submit('post_form','<?php echo U('Guestbook/attribute_edit'); ?>');"  class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
        </div>
    </form>
</div>
<script type="text/javascript">
    $(function(){
        $('input[name=attr_input_type]').click(function(){
            var val = $(this).val();
            if (val == 1) {
                $('.attr_input_type2').show();
            } else {
                $('.attr_input_type2').hide();
            }
        });
    });

    /**
    * ajax 提交属性 到后台去验证然后回到前台提示错误
    * 验证通过后,再通过 form 自动提交
    */
    function check_submit(form_id,submit_url)
    {
        if ($('#typeid').val() == 0) {
            showErrorMsg('请选择栏目…！');
            $('#typeid').focus();
            return false;
        }
        if($.trim($('input[name=attr_name]').val()) == ''){
            showErrorMsg('属性名称不能为空！');
            $('input[name=attr_name]').focus();
            return false;
        }
        if ($('input[name=attr_input_type]').is(':checked') == false) {
            showErrorMsg('请选择属性类型！');
            $($('input[name=attr_input_type]')[0]).focus();
            return false;
        }
        if ($('input[name=attr_input_type]:checked').val() == 1 && $.trim($('#attr_values').val()) == '') {
            showErrorMsg('可选值列表不能为空！');
            $('#attr_values').focus();
            return false;
        }

        layer_loading('正在处理');
        $.ajax({
            type : "POST",
            url  : submit_url,
            data : $('#'+form_id).serialize(),// 你的formid
            dataType: "JSON",
            error: function(request) {
                layer.closeAll();
                layer.alert("网络失败，请刷新页面后重试", {icon: 5, title:false});
                return false;
            },
            success: function(v) {
                layer.closeAll();
                if(v.status == 1)
                {                   
                    if(v.hasOwnProperty('data')){
                        if(v.data.hasOwnProperty('url')){
                            location.href = v.data.url;
                        }else{
                            location.href = location.href;
                        }
                    }else{
                        location.href = location.href;
                    }
                    return true;
                } else {     
                    showErrorMsg(v.msg);                       
                    return false;
                }
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