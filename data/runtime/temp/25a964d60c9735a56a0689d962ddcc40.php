<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:55:"./application/admin/template/uploadify\upload_frame.htm";i:1589434587;}*/ ?>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>文件管理</title>
<link rel="stylesheet" type="text/css" href="/public/plugins/webuploader/webuploader.css?v=<?php echo (isset($version) && ($version !== '')?$version:'1.2.9'); ?>">
<link rel="stylesheet" type="text/css" href="/public/plugins/webuploader/css/style.css?v=<?php echo (isset($version) && ($version !== '')?$version:'1.2.9'); ?>">
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var __root_dir__ = "";
</script> 
</head>
<body>
<div class="upload-box" style="height: 90%;">
    <ul class="tabs">
        <li class="checked" id="upload_tab">本地上传</li>
        <a href="javascript:void(0);" onclick="picture_folder(this);" data-url="<?php echo url('Uploadify/picture_folder',['num'=>$info['num'],'input'=>$info['input'],'path'=>$info['path'],'func'=>$info['func']]); ?>"><li>在线管理</li></a>
        <!-- <li id="search_tab">文件搜索</li> -->
    </ul>
    <div class="container">
        <div class="area upload-area area-checked" id="upload_area">
            <div id="uploader">
                <div class="statusBar" style="display:none;">
                    <div class="progress">
                        <span class="text">0%</span>
                        <span class="percentage"></span>
                    </div><div class="info"></div>
                    <div class="btns">
                        <div id="filePicker2"></div><div class="uploadBtn">开始上传</div>
                        <div class="saveBtn">确定使用</div>
                    </div>
                </div>
                <div class="queueList">
                    <div id="dndArea" class="placeholder">
                        <div id="filePicker"></div>
                        <p>或将文件拖到这里，本次最多可选<?php echo (isset($info['num']) && ($info['num'] !== '')?$info['num']:1); ?>个</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="area manage-area" id="manage_area">
            <ul class="choose-btns">
                <li class="btn sure checked">确定</li>
                <li class="btn cancel">取消</li>
            </ul>
            <div class="file-list">
                <ul id="file_all_list">
                    <!--<li class="checked">
                        <div class="img">
                            <img src="" />
                            <span class="icon"></span>
                        </div>
                        <div class="desc"></div>
                    </li>-->
                </ul>
            </div>
        </div>
        <div class="area search-area" id="search_area">
            <ul class="choose-btns">
                <li class="search">
                    <div class="search-condition">
                        <input class="key" type="text" />
                        <input class="submit" type="button" hidefocus="true" value="搜索" />
                    </div>
                </li>
                <li class="btn sure checked">确定</li>
                <li class="btn cancel">取消</li>
            </ul>
            <div class="file-list">
                <ul id="file_search_list">
                    <!--<li>
                        <div class="img">
                            <img src="" />
                            <span class="icon"></span>
                        </div>
                        <div class="desc"></div>
                    </li>-->
                </ul>
            </div>
        </div>
        <div class="fileWarp" style="display:none;">
            <fieldset>
                <legend>列表</legend>
                <ul>
                </ul>
            </fieldset>
        </div>
    </div>
</div>
<script type="text/javascript" src="/public/static/common/js/jquery.min.js"></script>
<script type="text/javascript" src="/public/plugins/webuploader/webuploader.min.js?v=<?php echo (isset($version) && ($version !== '')?$version:'1.2.9'); ?>"></script>
<script type="text/javascript" src="/public/plugins/webuploader/upload.js?v=<?php echo (isset($version) && ($version !== '')?$version:'1.2.9'); ?>"></script>
<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js?v=<?php echo (isset($version) && ($version !== '')?$version:'1.2.9'); ?>"></script>
<script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>

<script type="text/javascript">
$(function(){
    var config = {
            "swf":"/public/plugins/webuploader/Uploader.swf",
            "server":"<?php echo $info['upload']; ?>",
            "filelistPah":"<?php echo $info['fileList']; ?>",
            "delPath":"<?php echo url('Uploadify/delupload'); ?>",
            "chunked":false,
            "chunkSize":524288,
            "fileNumLimit":<?php echo (isset($info['num']) && ($info['num'] !== '')?$info['num']:1); ?>,
            "fileSizeLimit":209715200,
            "fileSingleSizeLimit":<?php echo $info['size']; ?>,
            "fileVal":"file",
            "auto":true,
            "formData":{},
            // "accept": {
            //     "title": 'Images',
            //     "extensions": '<?php echo $info['type']; ?>',
            //     "mimeTypes": 'image/*'
            // },
            "pick":{"id":"#filePicker","label":"点击选择图片","name":"file"},
            "thumb":{"width":110,"height":110,"quality":70,"allowMagnify":true,"crop":true,"preserveHeaders":false,"type":"image\/jpeg"},
            "compress": {
                "width": 3800,
                "height": 3800,
                "quality": 90,
                "allowMagnify": false,
                "crop": false,
                "preserveHeaders": true
            }
    };
    Manager.upload($.extend(config, {type : "Images"}));
    
    /*点击保存按钮时
     *判断允许上传数，检测是单一文件上传还是组文件上传
     *如果是单一文件，上传结束后将地址存入$input元素
     *如果是组文件上传，则创建input样式，添加到$input后面
     *隐藏父框架，清空列队，移除已上传文件样式*/
    $(".statusBar .saveBtn").click(function(){
        var callback = "<?php echo $info['func']; ?>";
        var num = <?php echo (isset($info['num']) && ($info['num'] !== '')?$info['num']:1); ?>;
        var fileurl_tmp = [];
        if(callback != "undefined"){    
            if(num > 1){    
                 $("input[name^='fileurl_tmp']").each(function(index,dom){
                    fileurl_tmp[index] = dom.value;
                 });    
            }else{
                fileurl_tmp = $("input[name^='fileurl_tmp']").val();    
            }
            /*防止图片上传过程中用户点击确定，导致获取图片失败 by 小虎哥*/
            if (fileurl_tmp == undefined || fileurl_tmp.length == 0) {
                layer.msg('正在处理……', {icon: 6,time: 2000});
                return false;
            }
            /*--end*/
            eval('window.parent.'+callback+'(fileurl_tmp)');
            window.parent.layer.closeAll();
            return;
        }                    
        if(num > 1){
                var fileurl_tmp = "";
                $("input[name^='fileurl_tmp']").each(function(){
                    fileurl_tmp += '<li rel="'+ this.value +'"><input class="input-text" type="text" name="<?php echo $info['input']; ?>[]" value="'+ this.value +'" /><a href="javascript:void(0);" onclick="ClearPicArr(\''+ this.value +'\',\'\')">删除</a></li>'; 
                });         
                $(window.parent.document).find("#<?php echo $info['input']; ?>").append(fileurl_tmp);
        }else{
                $(window.parent.document).find("#<?php echo $info['input']; ?>").val($("input[name^='fileurl_tmp']").val());
        }
        window.parent.layer.closeAll();
    });
});

function picture_folder(obj)
{
    var url = $(obj).attr('data-url');
    layer_loading('正在跳转');
    window.location.href = url;
}
</script>
</body>
</html>