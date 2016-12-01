<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<?php
//留言内容处理
if(isset($action) and $action=='add')
{


	$r = $dosql->GetOne("SELECT Max(orderid) AS orderid FROM `#@__message`");
	$orderid  = (empty($r['orderid']) ? 1 : ($r['orderid'] + 1));
	$name = htmlspecialchars($name);
	$tel  = htmlspecialchars($tel);
	$no  = htmlspecialchars($no);
	$num  = htmlspecialchars($num);
	$comments  = htmlspecialchars($dz);
	$posttime = GetMkTime(time());
	$ip       = gethostbyname($_SERVER['REMOTE_ADDR']);


	$sql = "INSERT INTO `#@__message` (siteid, nickname, contact, no, num, content, orderid, posttime, htop, rtop, checkinfo, ip) VALUES (1, '$name', '$tel', '$no', '$num', '$comments', '$orderid', '$posttime', '', '', 'false', '$ip')";
	if($dosql->ExecNoneQuery($sql))
	{
		ShowMsg('订单提交成功，我们的工作人员将会马上联系您！','index.php');
		exit();
	}
}

?>
<!DOCTYPE html>
<!--[if lte IE 8]>               <html class="ie8 no-js" lang="en">    <![endif]-->
<!--[if lte IE 10]>				 <html class="ie10 no-js" lang="en">   <![endif]-->
<!--[if !IE]>-->				 <html class="not-ie no-js" lang="en"> <!--<![endif]-->
<head>
	
	<!-- Google Web Fonts
  ================================================== -->
	
	
	<!-- Basic Page Needs
  ================================================== -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<?php echo GetHeader(1,$cid,$id); ?>
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.png">
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/grid.css" />
	<link rel="stylesheet" href="css/layout.css" />
	<link rel="stylesheet" href="css/fontello.css" />
	<link rel="stylesheet" href="css/animation.css" />
	
	<link rel="stylesheet" href="js/layerslider/css/layerslider.css" />
	<link rel="stylesheet" href="js/flexslider/flexslider.css" />
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" />
	
	<!-- HTML5 Shiv
	================================================== -->
	<script src="js/jquery.modernizr.js"></script>
	
</head>

<body data-spy="scroll" data-target="#navigation" class="home">
	
	
	<div class="loader"></div><!--/ .loader-->
	
	
<header id="header" class="transparent header-shrink" style="background-color:#000000;opacity: 0.8;">
	
	<div class="header-in clearfix">
		
		<h1 id="logo"><a href="index.php"><img src="img/logo.png"></a></h1>
		
		<a id="responsive-nav-button" class="responsive-nav-button" href="#"><img src="img/nav.png" style="margin-left:2px"></a>
		
		<nav id="navigation" class="navigation" style="">
			
			<ul>
					<li class="current-menu-item"><a onclick="javascript:window.location.href='index.php'">首页</a></li>
				<li class=""><a onclick="javascript:window.location.href='index.php'"href="index.php#about">关于我们</a></li>
				<li><a onclick="javascript:window.location.href='index.php#folio'">产品展示</a></li>
				
				<li><a onclick="javascript:window.location.href='index.php#blog'">最新资讯</a></li>
				<li><a onclick="javascript:window.location.href='index.php#contacts'">在线订购</a></li>
				<li><a onclick="http://www.ramer.cn/web/index.php?c=user&a=login&">登陆</a></li>	
				<li><a onclick="http://www.ramer.cn/web/index.php?c=user&a=register&">注册</a></li>
			</ul>

		</nav><!--/ #navigation-->
		
	</div><!--/ .header-in-->
	
</header>

<div style="width:100%; float:left; height:140px"></div>
<!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->


<!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->
	

<div id="wrapper">
 <?php

			//检测文档正确性
			$r = $dosql->GetOne("SELECT * FROM `#@__infoimg` WHERE id=$id");
			if(@$r)
			{
			//增加一次点击量
			$dosql->ExecNoneQuery("UPDATE `#@__infoimg` SET hits=hits+1 WHERE id=$id");
			$row = $dosql->GetOne("SELECT * FROM `#@__infoimg` WHERE id=$id");
			?>
	<section class="section parallax parallax-bg-1 bg-turquoise-color">

			<div class="full-bg-image" style="background-position: 50% 35px;"></div>

			<div class="container">

				<div class="row">
					<div class="col-xs-12">
						
						<ul class="quotes opacityRun" data-timeout="6000">

							<li class="align-center">
							<div class="quote-author"><span><?php echo $row['title']; ?></span></div>
							<?php if($row['picurl']){ ?><div class="quote-image"><img alt="Jack Black" src="<?php echo $row['picurl']; ?>"></div><?php }?>
								
								<blockquote class="quote-text">
									<p> <?php
				if($row['content'] != '')
					echo GetContPage($row['content']);
				else
					echo '网站资料更新中...';
				?> 
									</p>
								</blockquote>
								
							</li>

						</ul><!--/ .quotes-->
						<p style="text-align:center"><?php
	
				//获取上一篇信息
				$r = $dosql->GetOne("SELECT * FROM `#@__infoimg` WHERE classid=".$row['classid']." AND orderid<".$row['orderid']." AND delstate='' AND checkinfo=true ORDER BY orderid DESC");
				if($r < 1)
				{
					echo '上一篇：已经没有了&nbsp;&nbsp;&nbsp;&nbsp;';
				}
				else
				{
					if($cfg_isreurl != 'Y')
						$gourl = 'show.php?cid='.$r['classid'].'&id='.$r['id'];
					else
						$gourl = 'show-'.$r['classid'].'-'.$r['id'].'-1.html';

					echo '上一篇：<a style=" color:#ffffff" href="'.$gourl.'">'.$r['title'].'</a>&nbsp;&nbsp;&nbsp;&nbsp;';
				}

				//获取下一篇信息
				$r = $dosql->GetOne("SELECT * FROM `#@__infoimg` WHERE classid=".$row['classid']." AND orderid>".$row['orderid']." AND delstate='' AND checkinfo=true ORDER BY orderid ASC");
				if($r < 1)
				{
					echo '下一篇：已经没有了';
				}
				else
				{
					if($cfg_isreurl != 'Y')
						$gourl = 'show.php?cid='.$r['classid'].'&id='.$r['id'];
					else
						$gourl = 'show-'.$r['classid'].'-'.$r['id'].'-1.html';

					echo '下一篇：<a style=" color:#ffffff" href="'.$gourl.'">'.$r['title'].'</a>';
				}
				?></p>
					</div>
					
				</div><!--/ .row-->

			</div><!--/ .container-->

		</section>
		<?php
			}
			?> 
	
	<section id="contacts" class="page">
		
		<section class="section padding-bottom-off">
			
			<div class="container">

				<div class="row">
					
					<div class="col-xs-12">
						<hgroup class="section-title align-center opacity">
							<h1>在线留言</h1>
							<h2>如果您对我们产品有兴趣，请提交您的信息我们会及时联系您或者在线咨询我们</h2>	
						</hgroup>		
					</div>
					
				</div><!--/ .row-->

			</div><!--/ .container-->
			
		</section><!--/ .section-->

	
	<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
	<script type="text/javascript">
function cfm_msg()
{
var reg=/^[a-z0-9](\w|\.|-)*@([a-z0-9]+-?[a-z0-9]+\.){1,3}[a-z]{2,4}$/i;
if($("#name").val() == "" || $("#name").val() == "姓名")
        {
        alert("请填写您的姓名！");
        $("#name").focus();
        return false;
    }
	if($("#tel").val() == "" || $("#tel").val() == "手机号码")
        {
        alert("请填写您的手机号码！");
        $("#tel").focus();
        return false;
    }
    var tel = $("#tel").val(); //获取手机号
var telReg = !!tel.match(/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/);
//如果手机号码不能通过验证
if(telReg == false){
   alert("请填写正确的手机号码！");
        $("#tel").focus();
        return false;
}
//if($("#no").val() == "" || $("#no").val() == "产品编号")
   //     {
    //    alert("请填写您需要订购的产品编号！");
    //    $("#no").focus();
    //    return false;
    //}
	//if($("#num").val() == "" || $("#num").val() == "订货数量")
   //     {
  //      alert("请填写需要订购的产品数量！");
   //     $("#num").focus();
   //     return false;
   // }
	// if(isNaN($("#num").val()))
   //   {
   //      alert("订货数量必须输入数字！");
   //       $("#num").focus();
   //     return false;
   //   }
	//  if($("#dz").val() == "" || $("#dz").val() == "收货地址(必填)")
    //    {
   //     alert("请填写您的收货地址！");
   //     $("#dz").focus();
   //     return false;
   // }
	
		
	$("#form").submit();
}
</script>
	
	<footer id="footer">
		
		<section class="section parallax parallax-bg-4">

			<div class="full-bg-image"></div>

			<div class="container">

				<div class="row">

					<div class="col-md-6 opacity">

						<form class="contact-form" method="post" id="form" action="index.php">

							<p class="input-block">
								<input type="text" name="name" id="name" placeholder="姓名" />
							</p>

							<p class="input-block">
								<input type="text" name="tel" id="tel" placeholder="手机号码" />
							</p>

							<p class="input-block">
								<input type="text" name="no" id="no" placeholder="座机电话" />
							</p>
							
							<!--<p class="input-block">
								<input type="text" name="num" id="num" placeholder="订购数量" />
							</p>-->

							<p class="input-block">
								<textarea name="dz" id="dz" placeholder="问题描述"></textarea>	
							</p>
							

							<p class="input-block">
							 <input type="hidden" name="action" id="action" value="add" />
								<button onClick="cfm_msg();return false;" class="button turquoise submit" type="submit"><img src="img/1.png"></button>
							</p>

						</form><!--/ .contact-form-->	

					</div>

					<div class="col-md-6">
						<div class="widget widget_contacts opacity">
							
							<ul class="contact-details">
								<li>地址:石家庄市金裕商务803</li>
								<li>电话: <?php echo $cfg_hotline; ?></li>
								<li>Email:302571996@qq.com</li>
							</ul><!--/ .contact-details-->
							<footer class="footer">
									<a class="button default" href="http://wpa.qq.com/msgrd?v=3&uin=302571996&site=石家庄瑞玛尔网络科技有限公司&menu=yes">在线咨询</a>
								</footer><!-- .footer -->
						</div><!--/ .widget-->
						
						
						<div class="widget widget_social opacity">
						
						

							
						</div><!--/ .widget-->
						
					</div>

				</div><!--/ .row-->

			</div><!--/ .container-->

		</section><!--/ .section-->	
		
		<div class="logo-in-footer">
			
			<div class="container">
				
				<div class="row">
					<div class="col-xs-12">
						<h1><a href="index.html">石家庄瑞玛儿网络科技有限公司</a></h1>
					</div>
				</div><!--/ .row-->
				
			</div><!--/ .container-->
			
		</div><!--/ .logo-in-footer-->

		<div class="bottom-footer clearfix">

			<div class="container">
				
				<div class="row">
					
					<div class="col-sm-6">
						
						<div class="copyright">
							Copyright © 冀ICP备15022459号-1 <a target="_blank" href="#">石家庄瑞玛儿网络科技有限公司</a>. 版权所有
						</div><!--/ .cppyright-->
						
					</div>
					
					<div class="col-sm-3 col-sm-offset-3">
						
						<div class="developed">
							友情链接 <a target="_blank" href="http:\\www.dtavl.com">河北专业音响</a>
						</div><!--/ .developed-->
						
					</div>
					
				</div><!--/ .row-->
				
			</div><!--/ .container-->

		</div><!--/ .bottom-footer-->	
		
	</footer><!--/ #footer-->


	
	<!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->

	
</div><!--/ #wrapper-->


<!-- - - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - - -->



<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
<![endif]-->
<script src="js/jquery.queryloader2.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.easing.1.3.min.js"></script>
<script src="js/jquery.cycle.all.min.js"></script>
<script src="js/layerslider/js/layerslider.transitions.js"></script>
<script src="js/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
<script src="js/jquery.mixitup.js"></script>
<script src="js/jquery.mb.YTPlayer.js"></script>
<script src="js/jquery.smoothscroll.js"></script>
<script src="js/flexslider/jquery.flexslider.js"></script>
<script src="js/fancybox/jquery.fancybox.pack.js"></script>

<script src="js/jquery.gmap.min.js"></script>
<script src="twitter/jquery.tweet.js"></script>
<script src="js/jquery.touchswipe.min.js"></script>
<script src="js/config.js"></script>
<script src="js/custom.js"></script>
<a href="#" id="back-top" title="Back To Top" style="display: inline;"><img src="img/top.png" style=" float:left; margin-left:15px; margin-top:12px"></a>
</body>
</html>
