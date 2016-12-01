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
	
<?php echo GetHeader(); ?>
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
	
	
<header id="header" class="transparent">
	
	<div class="header-in clearfix">
		
		<h1 id="logo"><a href="index.php"><img src="img/logo.png"></a></h1>
		
		<a id="responsive-nav-button" class="responsive-nav-button" href="#"><img src="img/nav.png" style="margin-left:2px"></a>
		
		<nav id="navigation" class="navigation">
			
			<ul>
				<li class="current-menu-item"><a href="#home">首页</a></li>
				<li><a href="#about">关于我们</a></li>
				<li><a href="#folio">产品展示</a></li>
				<li><a href="#blog">最新资讯</a></li>
				<li><a href="#contacts">在线咨询</a></li>
				<li><a href="http://www.ramer.cn/web/index.php?c=user&a=login&">登陆</a></li>
				<li><a href="http://www.ramer.cn/web/index.php?c=user&a=register&">注册</a></li>
				
			</ul>

		</nav><!--/ #navigation-->
		
	</div><!--/ .header-in-->
	
</header><!--/ #header-->


<!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->


<!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->
	

<div id="wrapper">
	
	<section id="home" class="page">
		
		<section class="section padding-off">
			
			<div id="layerslider-container">
				
				<div id="layerslider">

					<div class="ls-layer" style="slidedirection: left; durationin: 1500; durationout: 1500; easingin: easeInOutQuint; timeshift: -500;">
						
						<img alt="" class="ls-bg" src="img/bg-1.jpg">
						
						<h2 class="ls-s2 align-center" style="top: 43%; left: 130px; slidedirection : top; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint; font-size:4.0em; color:#FFFFFF;">
							石家庄瑞玛儿网络科技有限公司
						</h2>
						
						<h2 class="ls-s2 align-center" style="top: 57%; left: 380px; slidedirection : bottom; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint;font-size:4.0em; color:#FFFFFF;">
							微信公众平台开发
						</h2>
						
					</div><!--/ .ls-layer-->
					
					<div class="ls-layer" style="slidedirection: right; durationin: 1500; durationout: 1500; easingin: easeInOutQuint; timeshift: -500;">
					
					<img alt="" class="ls-bg" src="img/bg-2.jpg">
						
						<h2 class="ls-s2 align-center" style="top: 43%; left: 180px; slidedirection : top; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint;font-size:4.0em; color:#FFFFFF;">
							新媒体代运营
						</h2>
						
						<h2 class="ls-s2 align-center" style="top: 57%; left: 260px; slidedirection : bottom; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint;font-size:4.0em; color:#FFFFFF;">
							 包策划、推广
						</h2>
						
					</div><!--/ .ls-layer-->
					
					<div class="ls-layer" style="slidedirection: right; durationin: 1500; durationout: 1500; easingin: easeInOutQuint; timeshift: -500;">
					
						<img alt="" class="ls-bg" src="img/bg-3.jpg">
						
						<h2 class="ls-s2 align-center" style="top: 43%; left: 360px; slidedirection : top; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint;font-size:4.0em; color:#FFFFFF;">
							全网营销
						</h2>
						
						<h2 class="ls-s2 align-center" style="top: 57%; left: 170px; slidedirection : bottom; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint;font-size:4.0em; color:#FFFFFF;">
							都是最适合你的
						</h2>
						
					</div><!--/ .ls-layer-->

				</div><!--/ #layerslider-->

			</div><!--/ #layerslider-container-->	
	
			
		</section><!--/ .section-->
		
	</section><!--/ .page-->
	
	<section id="about" class="page">
		
		<section class="section">

			<div class="container">

				<div class="row">
					<div class="col-xs-12">
						<hgroup class="section-title align-center opacity">
							<h1>关于我们</h1>
							<h2>我们是你最好的选择</h2>	
						</hgroup>					
					</div>

				</div><!--/ .row-->

				<div class="row">

					<div class="col-md-7 opacity">
						<p>
							<img src="img/slide.jpg" alt="" />
						</p>
					</div><!--/ .col-md-6-->

					<div class="col-md-5">

						<p class="opacity">
							   &nbsp;&nbsp;瑞玛儿网络科技有限公司成立于2015年，同年先后与河北德商网络科技有限公司、一飞教育联盟、河北盛乾投资有限公司、河北红元素文化传媒有限公司等多家大型企业建立线上、线下双轨式战略合作关系，是一家集互联网开发、新媒体运营 、线上拓客推广服务于一体的网络科技公司。公司主要专注于技术创新、寄情于网络IT、投身于互联网事业，并以全新的服务理念服务于企业、回馈社会。<br/>&nbsp;&nbsp;
公司以人为本，以客户为中心，以需求为导向，以服务为宗旨；以诚信、求实、创新、专业、和谐为经营理念。坚持创新科技与最优质的服务保障为发展宗旨，致力于以自媒体网络平台为依托载体，以集团企业家联盟为依托，建立集广告媒体、互联网管理咨询、异业联盟的文化商业服务体系。

						</p>

					<!--	<ul class="list circle-list opacity">

							<li>响应式网站源码</li>
							<li>商城网站源码</li>
							<li>微信网站源码</li>
							<li>各种网站搭建视频教程</li>
							<li>网站、app软件定制方案</li>

						</ul>/ .list-->

					</div><!--/ .col-md-5-->

				</div><!--/ .row-->

			</div><!--/ .container-->	
			
		</section><!--/ .section-->
		
	</section><!--/ .section-->
	
	<section id="folio" class="page">
		
		<section class="section padding-bottom-off">
			
			<div class="container">
				
				<div class="row">
					
					<div class="col-xs-12">
						<hgroup class="section-title align-center opacity">
							<h1>产品展示</h1>
							<h2>如果您对我们产品有兴趣，请在线咨询我们</h2>
						</hgroup>							
					</div>
					
				</div><!--/ .row-->
				
				<div class="row">
					
					<div class="col-xs-12">
						<ul id="portfolio-filter" class="portfolio-filter opacity">
							<li class="filter active" data-filter="all">所有</li>
							<?php echo GetNav1(1);?>
						</ul><!--/ #portfolio-filter -->		
					</div>
					
				</div><!--/ .row-->
					
			</div><!--/ .container-->

			<ul id="portfolio-items" class="portfolio-items">
 <?php
			$sql = "SELECT * FROM `#@__infoimg` WHERE (classid=1 OR parentstr LIKE '%,1,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC";
		    $dopage->GetPage($sql);
				while($row = $dosql->GetArray())
				{
			if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'show.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y') $gourl = 'show-'.$row['classid'].'-'.$row['id'].'-1.html';
					else $gourl = $row['linkurl'];
			?>
				<li class="<?php echo $row['classid']; ?> mix mix_all opacity2x">
					<div class="work-item">
						<img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>" />
						<div class="image-extra">
							<div class="extra-content">
								<div class="inner-extra">
									<h2 class="extra-title"><a style="color:#FFFFFF" href="<?php echo $gourl; ?>"><?php echo $row['title']; ?></a></h2>
				<a href="<?php echo $gourl; ?>" class="single-image plus-icon"></a>
								</div><!--/ .inner-extra-->	
							</div><!--/ .extra-content-->
						</div><!--/ .image-extra-->
					</div><!--/ .work-item-->

				</li>					
<?php
			}
			?>

			</ul><!--/ .portfolio-items-->
			
		</section><!--/ .section-->
		
	</section><!--/ .page-->
	
	<!--<section id="team" class="page">
		
		<section class="section bg-gray-color">
			
			<div class="container">

				<div class="row">

					<div class="col-xs-12">
						<hgroup class="section-title align-center opacity">
							<h1>我们的团队</h1>
							<h2>因为我们有支出色的团队，所以我们能够成功</h2>	
						</hgroup>			
					</div>
					
				</div>

			</div>
			
			<section class="team-member">

				<div class="container">

					<div class="row">

						<div class="col-xs-12">
							
							<div class="team-contents clearfix">

								<article class="scale">

									<div class="contents clearfix">

										<div class="team-info">

											<div class="team-image">
												<img src="img/td1.jpg" alt="" />
											</div>

											<hgroup class="team-group">
												<h2 class="team-title">Ann Nagell</h2>
												<h5 class="team-position">Web Designer</h5>
											</hgroup>

										</div>

										<div class="team-content">
											<div class="team-entry">

												<p>
													Lorem ipsum dolor sit amet, consectur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. 
													Ut posuere neque molestie gravida. Integer eu feugiat neque, elementum posuere purus. Nam vitae convallis ipsum.
													Maecenas a vulputate ipsum, vestibulum lobortis enim. Sed nec consequat felis. Proin sit amet sollicitudin neque, 
													a rhoncus nisl. Aliquam malesuada elementum risus, sit amet dictum tempor nec.  Suspendisse lectus massa, 
													consequat at pellentesque sed.
												</p>	

												<ul class="social-icons">
													<li class="twitter"><a href="#"><i class="icon-twitter"></i>Twitter</a></li>
													<li class="facebook"><a href="#"><i class="icon-facebook"></i>Facebook</a></li>
													<li class="linkedin"><a href="#"><i class="icon-linkedin"></i>LinkedIn</a></li>
													<li class="rss"><a href="#"><i class="icon-rss"></i>Rss</a></li>
													<li class="instagram"><a href="#"><i class="icon-instagramm"></i>Instagram</a></li>
												</ul>

											</div>
										</div>				

									</div>

								</article>

								<article class="scale">

									<div class="contents clearfix">

										<div class="team-info">

											<div class="team-image">
												<img src="img/td2.jpg" alt="" />
											</div>

											<hgroup class="team-group">
												<h2 class="team-title">Jack Nagell</h2>
												<h5 class="team-position">Web Designer</h5>
											</hgroup>

										</div>

										<div class="team-content">
											<div class="team-entry">

												<p>
													Lorem ipsum dolor sit amet, consectur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. 
													Ut posuere neque molestie gravida. Integer eu feugiat neque, elementum posuere purus. Nam vitae convallis ipsum.
													Maecenas a vulputate ipsum, vestibulum lobortis enim. Sed nec consequat felis. Proin sit amet sollicitudin neque, 
													a rhoncus nisl. Aliquam malesuada elementum risus, sit amet dictum tempor nec.  Suspendisse lectus massa, 
													consequat at pellentesque sed.
												</p>	

												<ul class="social-icons">
													<li class="twitter"><a href="#"><i class="icon-twitter"></i>Twitter</a></li>
													<li class="facebook"><a href="#"><i class="icon-facebook"></i>Facebook</a></li>
													<li class="linkedin"><a href="#"><i class="icon-linkedin"></i>LinkedIn</a></li>
													<li class="rss"><a href="#"><i class="icon-rss"></i>Rss</a></li>
													<li class="instagram"><a href="#"><i class="icon-instagramm"></i>Instagram</a></li>
												</ul>												

											</div>

										</div>				

									</div>

								</article>	

								<article class="scale">

									<div class="contents clearfix">

										<div class="team-info">

											<div class="team-image">
												<img src="img/td3.jpg" alt="" />
											</div>

											<hgroup class="team-group">
												<h2 class="team-title">Ingrid Grant</h2>
												<h5 class="team-position">Web Designer</h5>
											</hgroup>

										</div>

										<div class="team-content">
											<div class="team-entry">

												<p>
													Lorem ipsum dolor sit amet, consectur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. 
													Ut posuere neque molestie gravida. Integer eu feugiat neque, elementum posuere purus. Nam vitae convallis ipsum.
													Maecenas a vulputate ipsum, vestibulum lobortis enim. Sed nec consequat felis. Proin sit amet sollicitudin neque, 
													a rhoncus nisl. Aliquam malesuada elementum risus, sit amet dictum tempor nec.  Suspendisse lectus massa, 
													consequat at pellentesque sed.
												</p>	

												<ul class="social-icons">
													<li class="twitter"><a href="#"><i class="icon-twitter"></i>Twitter</a></li>
													<li class="facebook"><a href="#"><i class="icon-facebook"></i>Facebook</a></li>
													<li class="linkedin"><a href="#"><i class="icon-linkedin"></i>LinkedIn</a></li>
													<li class="rss"><a href="#"><i class="icon-rss"></i>Rss</a></li>
													<li class="instagram"><a href="#"><i class="icon-instagramm"></i>Instagram</a></li>
												</ul>	

											</div>
										</div>			

									</div>

								</article>				

								<article class="scale">

									<div class="contents clearfix">

										<div class="team-info">

											<div class="team-image">
												<a class="single-image team-plus-icon" href="#"><img src="img/td4.jpg" alt="" /></a>
											</div>

											<hgroup class="team-group">
												<h2 class="team-title">Mike Rains</h2>
												<h5 class="team-position">Web Designer</h5>
											</hgroup>

										</div>

										<div class="team-content">
											<div class="team-entry">

												<p>
													Lorem ipsum dolor sit amet, consectur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. 
													Ut posuere neque molestie gravida. Integer eu feugiat neque, elementum posuere purus. Nam vitae convallis ipsum.
													Maecenas a vulputate ipsum, vestibulum lobortis enim. Sed nec consequat felis. Proin sit amet sollicitudin neque, 
													a rhoncus nisl. Aliquam malesuada elementum risus, sit amet dictum tempor nec.  Suspendisse lectus massa, 
													consequat at pellentesque sed.
												</p>	

												<ul class="social-icons">
													<li class="twitter"><a href="#"><i class="icon-twitter"></i>Twitter</a></li>
													<li class="facebook"><a href="#"><i class="icon-facebook"></i>Facebook</a></li>
													<li class="linkedin"><a href="#"><i class="icon-linkedin"></i>LinkedIn</a></li>
													<li class="rss"><a href="#"><i class="icon-rss"></i>Rss</a></li>
													<li class="instagram"><a href="#"><i class="icon-instagramm"></i>Instagram</a></li>
												</ul>			

											</div>
										</div>		

									</div>

								</article>	

							</div>
							
						</div>

					</div>

				</div>

			</section>
					
		</section>
		
	</section>
	
	
	

		
	</section><!--/ .page-->
	
	<section id="blog" class="page">
		
		<section class="section bg-gray-color">
			
			<div class="container">

				<div class="row">
					
					<div class="col-xs-12">
						<hgroup class="section-title align-center opacity">
							<h1>最新资讯</h1>
							<h2>资讯在后台添加，用于seo优化</h2>	
						</hgroup>						
					</div>
					
				</div><!--/ .row-->

				<div class="row">
				
					<?php
			$sql = "SELECT * FROM `#@__infoimg` WHERE (classid=2 OR parentstr LIKE '%,2,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC";
		    $dopage->GetPage($sql,3);
			$i=1;
				while($row = $dosql->GetArray())
				{
			if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'show.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y') $gourl = 'show-'.$row['classid'].'-'.$row['id'].'-1.html';
					else $gourl = $row['linkurl'];
			?>
					<div class="col-sm-6 col-lg-4 slideLeft">
						<article class="entry">
							<h2 class="entry-title">
								<a href="<?php echo $gourl; ?>"><?php echo $row['title']; ?></a>
							</h2><!--/ .entry-title-->

							<div class="entry-body">
								<p>
									 <?php
				if($row['description'] != '')
					echo ReStrLen($row['description'],65);
				else
					echo '网站资料更新中...';
				?>   
								</p>
							</div><!--/ .entry-body-->

							<div class="entry-meta">
								<span class="date"><?php echo GetDateTime($row['posttime']); ?></span>
								<span class="date"><a href="<?php echo $gourl; ?>">查看详情>></a></span>
							</div><!--/ .entry-meta-->
						</article><!--/ .entry-->
					</div>

						<?php
	$i++;
			}
			?>   
					
				</div><!--/ .row-->
				
				<div class="col-xs-12">
					<div class="align-center opacity">
						<a href="news.php" class="button large default">更多资讯</a>
					</div>
				</div>
				
			</div><!--/ .container-->	
			
		</section><!--/ .section-->

	
	</section><!--/ .page-->
	
	<!--<section id="pricing" class="page">
		
		<section class="section border bg-gray-color">
		
			<div class="container">
				
				<div class="row">
					
					<div class="col-xs-12">
						<hgroup class="section-title align-center opacity">
							<h1>产品热卖</h1>
							<h2>如果您对我们产品感兴趣，请直接进入淘宝官方店铺购买</h2>	
						</hgroup>						
					</div>
					
				</div>

				<div class="row">

					<div class="col-xs-12">

						<section class="simple-pricing-table col-4 clearfix">

							<div class="column opacity">

								<header class="header">
									<h5 class="title">淘宝源码</h5>
								</header>

								<div class="price">
									<h2 class="cost">￥15</h2>
									<span class="description">原创作品</span>				
								</div>
								<ul class="features">
									<li>手机自适应</li>
									<li>html5响应式</li>
									<li>利于seo优化</li>
									<li>简单实用后台</li>
									<li>完整源码带数据带视频教程</li>
								</ul>

								<footer class="footer">
									<a class="button default" href="https://1hnet.taobao.com/index.htm?spm=2013.1.w5002-11301722250.2.8R8qnv">前往购买</a>
								</footer>

							</div>

							<div class="column opacity">

										<header class="header">
									<h5 class="title">淘宝源码2</h5>
								</header>

								<div class="price">
									<h2 class="cost">￥15</h2>
									<span class="description">原创作品</span>				
								</div>

								<ul class="features">
									<li>手机自适应</li>
									<li>html5响应式</li>
									<li>利于seo优化</li>
									<li>简单实用后台</li>
									<li>完整源码带数据带视频教程</li>
								</ul>

								<footer class="footer">
									<a class="button default" href="https://1hnet.taobao.com/index.htm?spm=2013.1.w5002-11301722250.2.8R8qnv">前往购买</a>
								</footer>

							</div>

							<div class="column featured opacity">

										<header class="header">
									<h5 class="title">淘宝源码3</h5>
								</header>

								<div class="price">
									<h2 class="cost">￥15</h2>
									<span class="description">原创作品</span>				
								</div>

								<ul class="features">
									<li>手机自适应</li>
									<li>html5响应式</li>
									<li>利于seo优化</li>
									<li>简单实用后台</li>
									<li>完整源码带数据带视频教程</li>
								</ul>
								<footer class="footer">
									<a class="button default" href="https://1hnet.taobao.com/index.htm?spm=2013.1.w5002-11301722250.2.8R8qnv">前往购买</a>
								</footer>
							</div>

							<div class="column opacity">

											<header class="header">
									<h5 class="title">淘宝源码4</h5>
								</header>

								<div class="price">
									<h2 class="cost">￥15</h2>
									<span class="description">原创作品</span>				
								</div>

								<ul class="features">
									<li>手机自适应</li>
									<li>html5响应式</li>
									<li>利于seo优化</li>
									<li>简单实用后台</li>
									<li>完整源码带数据带视频教程</li>
								</ul>

								<footer class="footer">
									<a class="button default" href="https://1hnet.taobao.com/index.htm?spm=2013.1.w5002-11301722250.2.8R8qnv">前往购买</a>
								</footer>

							</div>

						</section>

					</div>

				</div>

			</div>
			
		</section>
		
	</section> -->
	
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
							友情链接 <a target="_blank" href="http:\\www.dtavl.com"> 河北专业音响</a>
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
<script src="js/jquery.tweet.js"></script>
<script src="js/jquery.touchswipe.min.js"></script>
<script src="js/config.js"></script>
<script src="js/custom.js"></script>
<a href="#" id="back-top" title="Back To Top" style="display: inline;"><img src="img/top.png" style=" float:left; margin-left:15px; margin-top:12px"></a>
</body>
</html>
