<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:30:"./template/pc/view_product.htm";i:1589434577;s:43:"D:\phpStudy\WWW\hxsw\template\pc\header.htm";i:1589957599;s:43:"D:\phpStudy\WWW\hxsw\template\pc\footer.htm";i:1589958179;}*/ ?>
<!DOCTYPE html>
<html>
<head> 
  <title><?php echo $eyou['field']['seo_title']; ?></title> 
  <meta name="renderer" content="webkit" /> 
  <meta charset="utf-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0,minimal-ui" /> 
  <meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" /> 
  <meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
  <link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
  <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/basic.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/common.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/widget.css","","",""); echo $__VALUE__; ?> 

    <!--[if lte IE 9]>
    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/lteie9.js","","",""); echo $__VALUE__; ?>
<![endif]--> 
</head> 
 <!--[if lte IE 8]>
    <div class="text-xs-center m-b-0 bg-blue-grey-100 alert">
    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
        <span>×</span>
    </button>
    你正在使用一个 <strong>过时</strong> 的浏览器。请 <a href=https://browsehappy.com/ target=_blank>升级您的浏览器</a>，以提高您的体验。</div>
<![endif]--> 
<body> 
    <!--header-s-->
    <div class="top" style="background: #008f3f;height: 30px;line-height: 30px;overflow: hidden;">
	<div class="container clearfix" style="padding: 0 10px;margin: 0 auto;">
		<p class="left" style="float: left;color: #fff;font-size: 14px;"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_9"); echo $__VALUE__; ?></p>
		<!--<p class="right" style="float: right;color: #fff;">咨询热线：<b><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?></b></p>-->
		<p class="right" style="float: right;color: #fff;font-size: 14px;">
			   <?php  $tagLanguage = new \think\template\taglib\eyou\TagLanguage; $_result = $tagLanguage->getLanguage("list", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["title"] = text_msubstr($field["title"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
			                <img src="<?php echo $field['logo']; ?>" alt="<?php echo $field['title']; ?>"/>
			                <a style="margin-right: 1.25rem;color: #fff;"  href="<?php echo $field['url']; ?>"><?php echo $field['title']; ?></a>
			                <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
		</p>
	</div>
</div>
<header class="ey-head">
	<nav class="navbar navbar-default box-shadow-none ey-nav">
		<div class="container">
			<div class="row">
				<h1 hidden=""><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></h1>
				<div class="navbar-header pull-xs-left">
					<a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/" class="navbar-logo vertical-align block pull-xs-left" title="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>">
						<div class="vertical-align-middle">
							<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>" />
						</div>
					</a>
				</div>

				<div class="db" style="">
					<div class="" style="align-content: 05px;font-size: 24px;line-height: 24px;padding: 20px 0 0 105px;color: #7f7f7f;float: left;">
						<p style="font-size: 18px;"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:11:"zixunrexian";}'); echo $__VALUE__; ?></p>
						<span style="color:#008f3f;"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?></span>
					</div>
				</div>


				<button type="button" class="navbar-toggler hamburger hamburger-close collapsed p-x-5 ey-nav-toggler" data-target="#ey-nav-collapse"
				 data-toggle="collapse">
					<span class="sr-only"></span>
					<span class="hamburger-bar"></span>
				</button>

			</div>
		</div>
	</nav>
	<nav class="navbar navbar-default box-shadow-none ey-nav" style="background: #008f3f;">
		<div class="container">
			<div class="collapse navbar-collapse navbar-collapse-toolbar pull-md-right p-0" id="ey-nav-collapse">
				<ul class="nav navbar-nav navlist">
					<li class="nav-item"> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>" title="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"yybl1";}'); echo $__VALUE__; ?>" class="nav-link <?php if(\think\Request::instance()->param('m') == 'Index'): ?>active<?php endif; ?>"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"yybl1";}'); echo $__VALUE__; ?></a> </li>

					<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 60; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "active"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
					<li class="nav-item dropdown m-l-10"> <a href="<?php echo $field['typeurl']; ?>" class="nav-link dropdown-toggle <?php echo $field['currentstyle']; ?>"
						 <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>data-toggle="dropdown" <?php endif; ?> data-hover="dropdown"
						 aria-haspopup="true" aria-expanded="false"> <?php echo $field['typename']; if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?><span class="fa fa-angle-down p-l-5"></span><?php endif; ?></a>
						<?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-bullet">
							<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,100, true) : $field['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$mod = ($e % 2 );$i= intval($key) + 1;?>
							<div class="dropdown-item dropdown-submenu">
								<a href="<?php echo $field2['typeurl']; ?>" class="dropdown-item col"><?php echo $field2['typename']; ?></a>
								<?php if(!(empty($field2['children']) || (($field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator ) && $field2['children']->isEmpty()))): ?>
								<div class="dropdown-menu animate">
									<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field2['children']) || $field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field2['children']) ? array_slice($field2['children'],0,100, true) : $field2['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field3): $field3["typename"] = text_msubstr($field3["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field3;$mod = ($e % 2 );$i= intval($key) + 1;?>
									<a href="<?php echo $field3['typeurl']; ?>" class="dropdown-item col"><?php echo $field3['typename']; ?></a>
									<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field3 = []; ?>
								</div>
								<?php endif; ?>
							</div>
							<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>
						</div>
						<?php endif; ?>
					</li>
					<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
					</li>

				</ul>
			</div>
		</div>
		</div>
	</nav>
</header>

    <!--header-e-->
    <section class="w-container bannerBox ">
    <div class="banner" style="height: auto;"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_11"); echo $__VALUE__; ?>" alt="banner" title="" style=""  /> </div>
  </section> 
 <section class="ey-crumbs hidden-sm-down" m-id="met_position" m-type="nocontent"> 
     <div class="container"> 
        <div class="row"> 
           <div class="border-bottom clearfix"> 
              <ol class="breadcrumb m-b-0 subcolumn-crumbs breadcrumb-arrow"> 
                 <li class="breadcrumb-item"> <?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"yybl5";}'); echo $__VALUE__; ?>： <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eyou\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", "crumb"); echo $__VALUE__; ?> </li> 
             </ol> 
         </div> 
     </div> 
 </div> 
</section> 
<main class="ey-showproduct pagetype1 animsition"> 
 <div class="ey-showproduct-head page-content block-bg"> 
    <div class="container"> 
       <div class="row">  
          <div class="col-lg-51"> 
             <div class="product-intro"> 
                <h1 class="m-t-0 font-size-24"><?php echo $eyou['field']['title']; ?></h1> 
              
          </div> 
      </div> 
  </div> 
</div> 
</div> 
<div class="ey-showproduct-body page-content"> 
    <div class="container"> 
       <div class="row"> 
          <div class="col-lg-9 pull-lg-right"> 
             <div class="row"> 
                <div class="panel panel-body m-b-0 product-detail"> 
                   <ul class="nav nav-tabs nav-tabs-line m-b-20 ey-showproduct-navtabs"> 
                      <li class="nav-item"> <a class="nav-link active"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"yybl9";}'); echo $__VALUE__; ?></a> </li> 
                  </ul> 
                  <article class="tab-content"> 
                      <section class="tab-pane ey-editor clearfix animation-fade active"> <?php echo $eyou['field']['content']; ?>
                      </section>
                  </article> 
                  
              </div> 
          </div> 
      </div> 
      <div class="col-lg-3"> 
         <div class="row"> 
            <aside class="panel panel-body m-b-0 product-hot ey-sidebar leftsidebar"> 
               <div class="sidebar-piclist"> 
                  <h3 class="m-0 font-size-16 font-weight-300"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"yybl8";}'); echo $__VALUE__; ?></h3> 
                  <ul class="blocks-2 blocks-md-3 blocks-lg-100 m-t-20 text-xs-center imagesize sidebar-piclist-ul">
                      <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 3; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'row' => '3',
  'titlelen' => '30',
  'orderby' => 'rand',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "rand", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
                      <li class="masonry-child"> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" class="block m-b-0"> <img data-original="<?php echo $field['litpic']; ?>" class="cover-image" alt="<?php echo $field['title']; ?>" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/ajax-loader.gif" /></a> <h4 class="m-t-10 m-b-0 font-size-14"> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><?php echo $field['title']; ?></a> </h4> </li> 
                      <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                  </ul> 
              </div> 
          </aside> 
      </div> 
  </div> 
</div> 
</div> 
</div> 
</main>
<!--footer-s-->
  <footer class="ey-foot-info p-y-20 border-top1" e-page="footer"> 
   <div class="langcss text-xs-center1 p-b-20"> 
    <div class="container"> 
     <div class="row mob-masonry" style="border-bottom: 1px solid #fff;"> 
     
     
      
      <div style="text-align: left;"  class="col-lg-8 col-md-12 col-xs-12 info masonry-item font-size-20 " m-id="met_contact" m-type="nocontent"> 
       <p class="font-size-20 " >
				<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>
        </p> 
       <p class="eyou-edit" e-id="web_attr_2" e-type="text" style="font-size: 16px;">
     <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_35"); echo $__VALUE__; ?>
       </p> 
       
      </div> 
      <div style="float: right;" class="col-lg-2 col-md-12 col-xs-12 info masonry-item font-size-20 fr" m-id="met_contact" m-type="nocontent"> 
       
       <?php if(!(empty($eyou['global']['web_attr_4']) || (($eyou['global']['web_attr_4'] instanceof \think\Collection || $eyou['global']['web_attr_4'] instanceof \think\Paginator ) && $eyou['global']['web_attr_4']->isEmpty()))): ?>
        <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?>"  width="100" height="100"/> 
        <p style="font-size: 14px; color: #fff;"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:8:"saoyisao";}'); echo $__VALUE__; ?></p>
       <?php endif; ?>
      </div>
     </div> 
    </div> 
   </div> 
   <div class="copy p-y-10 border-top1"> 
    <div class="container text-xs-center1"> 
     <p style="font-size: 12px;">
      <?php  $tagFlink = new \think\template\taglib\eyou\TagFlink; $_result = $tagFlink->getFlink("all", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["title"] = text_msubstr($field["title"], 0, 15, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
      <a href='<?php echo $field['url']; ?>' <?php echo $field['target']; ?>><?php echo $field['title']; ?></a>
      <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
     </p>
    </div>
    <div class="container text-xs-center1"> 
     <p class="eyou-edit" e-id="web_copyright" e-type="text" style="font-size: 12px;">
         <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("web_copyright", "footer"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
          <?php echo $field['value']; else: ?>
          <?php echo htmlspecialchars_decode($global['web_copyright']); ?>--SEO技术支持：<a href="http://www.0917bjms.com/">麦思科技</a>&nbsp;&nbsp;<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; endif; ?>
     </p>
    </div> 
   </div>  
   <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_thirdcode_pc"); echo $__VALUE__; ?>
  </footer>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
  <input type="hidden" name="met_lazyloadbg" value="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/loading.gif" /> 
  <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/common.js","","",""); echo $__VALUE__; ?>
  <!-- 应用插件标签 start -->
   <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?>
  <!-- 应用插件标签 end -->
<!--footer-e-->
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/PhotoSwipe.js","","",""); echo $__VALUE__;  $tagUi = new \think\template\taglib\eyou\TagUi; $__VALUE__ = $tagUi->getUi(); echo $__VALUE__; ?>
</body>
</html>