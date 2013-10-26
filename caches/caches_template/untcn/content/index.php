<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo SKIN_PATH;?>untcn/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo SKIN_PATH;?>untcn/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>

<script>
function addToFavorite()
{
   if (document.all)
   {
      window.external.addFavorite('<?php echo siteurl($siteid);?>',"UNT-SMC.CN &ndash;");
   }
   else if (window.sidebar)
   {
      window.sidebar.addPanel("UNT-SMC.CN &ndash;", '<?php echo siteurl($siteid);?>', "");
   }else{
       alert("您的浏览器不支持点击收藏，请按快捷键 Ctrl+D 收藏UNT-SMC");
    }
   
}
</script>


</head>
<body>
<div class="header">

<div class="head">
  	<div class="logo"><a href="<?php echo siteurl($siteid);?>/"><img src="<?php echo IMG_PATH;?>v9/logo.gif" /></a></div>
    <div class="top">
	<div class="top_a">
    <a  href="javascript:addToFavorite()" rel="nofollow" title="加入收藏" class="STYLE3">加入收藏</a>
    &nbsp;|&nbsp;
    <a href="http://www.unt-smc.com" title="ENGLISH" class="STYLE3">ENGLISH<img src="<?php echo SKIN_PATH;?>untcn/images/2d2.gif"></a>
     &nbsp;|&nbsp;
    <a href="http://www.unt-smc.cn" title="中文版" class="STYLE3">中文版<img src="<?php echo SKIN_PATH;?>untcn/images/2d2.gif"></a>
	</div>
	
 </div>
</div>	
  
<!---nav begin---->
    <div id="nav">
    <div class="navsearch">
         <form action="<?php echo APP_PATH;?>index.php" method="get" target="_blank">
            <input type="hidden" name="m" value="search"/>
            <input type="hidden" name="c" value="index"/>
            <input type="hidden" name="a" value="init"/>
            <input type="hidden" name="typeid" value="3" id="typeid"/>
            <input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
           <div class="input">搜索 <input type="text" name="q" id="q" onfocus="if(this.value=='请查询值') {this.value=''}" onblur="if(this.value=='') this.value='请查询值'"/></div>
            <div  class="inputimg"><input type="submit" name="submit" style="width:37px; height:22px;" value="搜 索"/></div>
        </form>
    </div>
     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
        	<ul  id="navmenu">
			<li><a href="<?php echo siteurl($siteid);?>"><span>首页</span></a></li>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			 <li><img src="<?php echo SKIN_PATH;?>untcn/images/index_new_55.jpg" /></li>
			<li><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a></li>
			<?php $n++;}unset($n); ?>
            </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	 <?php echo runhook('glogal_menu')?>
    </div>
    <!---nav end---->
    
</div>
<!--banner begin--->
<div class="banner">
   <!-- 代码 开始 -->
	<script language='javascript'> 
	linkarr = new Array();
	picarr = new Array();
	textarr = new Array();
	var swf_width=1000;
	var swf_height=300;
	//文字颜色|文字位置|文字背景颜色|文字背景透明度|按键文字颜色|按键默认颜色|按键当前颜色|自动播放时间|图片过渡效果|是否显示按钮|打开方式
	var configtg='0xffffff|0|0x3FA61F|5|0xffffff|0xC5DDBC|0x000033|2|3|1|_blank';
	var files = "";
	var links = "";
	var texts = "";
	//这里设置调用标记
	linkarr[1] = "http://www.unt-smc.cn";
	picarr[1]  = "<?php echo SKIN_PATH;?>untcn/images/04.jpg";
	linkarr[2] = "http://www.unt-smc.cn";
	picarr[2]  = "<?php echo SKIN_PATH;?>untcn/images/02.jpg";
	linkarr[3] = "http://www.unt-smc.cn";
	picarr[3]  = "<?php echo SKIN_PATH;?>untcn/images/03.jpg";

	for(i=1;i<picarr.length;i++){
	if(files=="") files = picarr[i];
	else files += "|"+picarr[i];
	}
	for(i=1;i<linkarr.length;i++){
	if(links=="") links = linkarr[i];
	else links += "|"+linkarr[i];
	}
	
	document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
	document.write('<param name="movie" value="<?php echo SKIN_PATH;?>untcn/images/bcastr3.swf"><param name="quality" value="high">');
	document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
	document.write('<param name="FlashVars" value="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'">');
	document.write('<embed src="<?php echo SKIN_PATH;?>untcn/images/bcastr3.swf" wmode="opaque" FlashVars="bcastr_file='+files+'&bcastr_link='+links+'& menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); document.write('</object>'); 
	</script>

 </div>
 
<!---banner end--->

<!--main-->
<div class="main index">
<!--index news begin--->
<div class="index-news">
<div class="title"><div class="chinese"></div><div class="more fr"><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=12"><img src="<?php echo SKIN_PATH;?>/untcn/images/more.png"></a></div></div>
<div class="content">

<div class="first">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=24d4dc2b764c0f4a630bff10e4f79c83&action=position&posid=2&catid=12&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','catid'=>'12','order'=>'listorder DESC','limit'=>'1',));}?>
    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
    <dt><a href="<?php echo $v['url'];?>" target="_blank"<?php echo title_style($v[style]);?>><img src="<?php echo thumb($v[thumb],120,100);?>" width="120" height="100" /></a></dt>
    <dd>
     <h4><a href="<?php echo $v['url'];?>" target="_blank"<?php echo title_style($v[style]);?>><?php echo $v['title'];?></a></h4>
     <p><?php echo str_cut(strip_tags($v[description]), 120,'...');?></p>
    </dd>  
    <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=73bd56c4ae0c668528df17c4e4d7de51&action=lists&catid=12&order=id+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'12','order'=>'id DESC','limit'=>'4',));}?>
    <ul class="list">
    <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
        <li><a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target="_blank"<?php echo title_style($v[style]);?>><?php echo str_cut($v[title], 30);?></a></li>
              
    <?php $n++;}unset($n); ?>
   </ul>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
 <div class="bk20 hr"><hr></div>
</div>
</div>
<!---index news end---->

<!---index about begin---->
<div class="index-about">
<div class="title"><div class="chinese"></div><div class="more fr"><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=2"><img src="<?php echo SKIN_PATH;?>/untcn/images/more.png"></a></div></div>
<div class="content">
<p>
<span ><img src="http://localhost/unt-smc.cn/uploadfile/2013/1025/20131025111315179.gif" style="float:right;padding-left:10px;"></span>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=10da0066eb577eea228914acfb548423&sql=SELECT+%2A+FROM+unt_page+where+catid%3D2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM unt_page where catid=2 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
  <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
      <?php echo str_cut(strip_tags($val[content]),1020,"...");?>
 <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

</p>
</div>
</div>
<!---index about end---->
<div class="clear"></div>
<!---index contact begin---->
<div class="index-contact">

<div class="ad"><img src="<?php echo SKIN_PATH;?>untcn/images/coship_cn_12.jpg" width="295"></div>
<div class="content">
<li>地 址：深圳市优耐特自动化有限公司</li>
<li>电 话：0755-27103957</li>
<li>传 真： 0755-22639723</li> 
<li>邮 箱： <a href="mailto: yanglw861908@163.com"> yanglw861908@163.com</a></li> 

</div>
</div>
<!---index contact end---->

<!---index product begin---->
<div class="index-product">
<div class="title"><div class="chinese"></div><div class="more fr"><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=6"><img src="<?php echo SKIN_PATH;?>/untcn/images/more.png"></a></div></div>
<div class="content">

<div id="indexTopicPro2">
<link href="<?php echo SKIN_PATH;?>untcn/css/indexProTurn.css" type="text/css" rel="stylesheet">
<div class="rollBox3">
<div class="LeftBotton" onmousedown="ISL_GoDown()" onmouseup="ISL_StopDown()" onmouseout="ISL_StopDown()"></div>
<div class="cont" id="ISL_Cont">
<div class="scrCont">
<div id="List1">

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f2c85d367e8381e1ee9cc308b0150fdb&action=position&posid=12&thumb=1&catid=6&order=listorder+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'12','thumb'=>'1','catid'=>'6','order'=>'listorder DESC','limit'=>'10',));}?>
<ul class="content news-photo picbig">
 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <li>
        <div class="img-wrap">
            <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo thumb($r[thumb],140,109);?>" title="<?php echo $r['title'];?>"/></a>
        </div>
        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],20);?></a>
    </li>
    <?php $n++;}unset($n); ?>
     
</ul>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<div id="List2">
</div>
</div>
</div>
<div class="RightBotton" onmousedown="ISL_GoUp()" onmouseup="ISL_StopUp()" onmouseout="ISL_StopUp()"></div>
</div>
<script language="javascript" type="text/javascript" src="<?php echo SKIN_PATH;?>untcn/js/picTurn3.js"></script>
</div>
</div>
</div>
<!---index product end---->
</div>
<script type="text/javascript"> 
$(function(){
	new slide("#main-slide","cur",310,260,1);//焦点图
	new SwapTab(".SwapTab","span",".tab-content","ul","fb");//排行TAB
})
</script>
<?php include template("content","footer"); ?>