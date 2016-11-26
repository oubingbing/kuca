<?php if (!defined('THINK_PATH')) exit();?><!--头部尾部公共文件-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>古卡老屋</title>
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="stylesheet" href="/Public/css/mui.min.css">
	<link rel="stylesheet" href="/Public/css/bootstrap.min.css">
	<link href="/Public/css/newiconfont.css" rel="stylesheet"/>
	<link href="/Public/css/iconfont.css" rel="stylesheet"/>
	<script src="/Public/js/mui.min.js"></script>
</head>
<body>
	<style>
		.mui-control-content {
			background-color: white;
			min-height: 215px;
		}
		.mui-control-content .mui-loading {
			margin-top: 50px;
		}
		html,
		body {
			background-color: #efeff4;
		}
		.header{
			background-color: rgba(96,56,17,1);
			color: #9B30FF;
		}
		.mui-action-back{
			color: white;
			font-size: 5px;
		}
		.mui-title{
			color: white;
		}
		.spancolor{
			color: rgba(96,56,17,1);
		}
		.active{
			color: red;
		}
		.mui-bar~.mui-content .mui-fullscreen {
			top: 44px;
			height: auto;
		}
		.mui-pull-top-tips {
			position: absolute;
			top: -20px;
			left: 50%;
			margin-left: -25px;
			width: 40px;
			height: 40px;
			border-radius: 100%;
			z-index: 1;
		}
		.mui-bar~.mui-pull-top-tips {
			top: 24px;
		}
		.mui-pull-top-wrapper {
			width: 42px;
			height: 42px;
			display: block;
			text-align: center;
			background-color: #efeff4;
			border: 1px solid #ddd;
			border-radius: 25px;
			background-clip: padding-box;
			box-shadow: 0 4px 10px #bbb;
			overflow: hidden;
		}
		.mui-pull-top-tips.mui-transitioning {
			-webkit-transition-duration: 200ms;
			transition-duration: 200ms;
		}
		.mui-pull-top-tips .mui-pull-loading {
			margin: 0;
		}
		.xxx{
			margin-right:0; text-align:left; padding: 5%; border: 1px solid #efeff4;
		}
		.mui-pull-top-wrapper .mui-icon,
		.mui-pull-top-wrapper .mui-spinner {
			margin-top: 7px;
		}
		.mui-pull-top-wrapper .mui-icon.mui-reverse {
			/*-webkit-transform: rotate(180deg) translateZ(0);*/
		}

		.mui-pull-bottom-tips {
			text-align: center;
			background-color: #efeff4;
			font-size: 15px;
			line-height: 40px;
			color: #777;
		}
		.mui-pull-top-canvas {
			overflow: hidden;
			background-color: #fafafa;
			border-radius: 40px;
			box-shadow: 0 4px 10px #bbb;
			width: 40px;
			height: 40px;
			margin: 0 auto;
		}
		.mui-pull-top-canvas canvas {
			width: 40px;
		}
		.mui-slider-indicator.mui-segmented-control {
			background-color: #efeff4;
		}
	</style>
	<script type="text/javascript">
	</script>
	<script src="/Public/js/jquery-1.11.2.min.js"></script>
	<header class="mui-bar mui-bar-nav header">
		<?php if($Think.CONTROLLER_NAME==Buy&&$Think.ACTION_NAME==index): ?><a href="<?php echo U('Buy/clear');?>">
				<span class="mui-icon mui-pull-left" style="color:white;font-size:15px;margin-top:7px">清空</span>
			</a>
		<?php else: endif; ?>
		<h1 id="title" class="mui-title"><a href="<?php echo U('Index/index');?>">古卡老屋</a></h1>
		<?php if($Think.CONTROLLER_NAME==Buy&&$Think.ACTION_NAME==index): ?><a class="mui-tab-item" href="#delete">
				<span class="mui-icon mui-icon-bars mui-pull-right" style="color:white"></span>
			</a>
		<?php else: endif; ?>
	</header>
	<nav class="mui-bar mui-bar-tab" id="nav">
		<a class="mui-tab-item" name="one">
			<span class="spancolor mui-icon iconfont icon-jianzhituijian <?php if($Think.CONTROLLER_NAME==Main&&$Think.ACTION_NAME==index){echo 'active';} ?>"></span>
			<span class="spancolor mui-tab-label <?php if($Think.CONTROLLER_NAME==Main&&$Think.ACTION_NAME==index){echo 'active';} ?>">兼职</span>
		</a>
		<a class="mui-tab-item" name="two">
			<span class="spancolor mui-icon iconfont icon-caigoujinhuo <?php if($Think.CONTROLLER_NAME==Buy&&$Think.ACTION_NAME==index){echo 'active';} ?>"></span>
			<span class="spancolor mui-tab-label <?php if($Think.CONTROLLER_NAME==Buy&&$Think.ACTION_NAME==index){echo 'active';} ?>">采购</span>		
		</a>
		<a class="mui-tab-item" name="three">
			<span class="spancolor mui-icon iconfont icon-caiwu <?php if($Think.CONTROLLER_NAME==Admin&&$Think.ACTION_NAME==finance){echo 'active';} ?>"></span>
			<span class="spancolor mui-tab-label <?php if($Think.CONTROLLER_NAME==Admin&&$Think.ACTION_NAME==finance){echo 'active';} ?>">财务</span>
		</a>
		<a class="mui-tab-item" name="four">
			<span class="spancolor mui-icon iconfont icon-houtai <?php if($Think.CONTROLLER_NAME==Admin&&$Think.ACTION_NAME==index){echo 'active';} ?>"></span>
			<span class="spancolor mui-tab-label <?php if($Think.CONTROLLER_NAME==Admin&&$Think.ACTION_NAME==index){echo 'active';} ?>">管理</span>
		</a>
		<a class="mui-tab-item" name="five">
			<span class="spancolor mui-icon iconfont icon-geren <?php if($Think.CONTROLLER_NAME==Main&&$Think.ACTION_NAME==personal){echo 'active';} ?>" ></span>
			<span class="spancolor mui-tab-label <?php if($Think.CONTROLLER_NAME==Main&&$Think.ACTION_NAME==personal){echo 'active';} ?>">个人</span>
		</a>
	</nav>
	<style type="text/css">
		#bg{
			background-image: url('/Public/img/bg.jpg');
			height: 230px;
			background-size: 440px;
		}
	</style>
	<div class="mui-content　mui-backdrop" id="bg" style="margin-top:10%">				
		<p class="yj">
			<img src="/Public/img/touxiang.jpg" data-preview-src="" data-preview-group="1" style="width: 80px;margin: auto;margin-left: 40%;margin-top: 10%; border-radius:50%"/>
			<div id="myfont" class="whohide" style="text-align:center">
				<span style="width: 80px;margin: auto; color: greenyellow;" ><?php echo (session('username')); ?></span>
			</div>
		</p>	
	</div>
	<div class="mui-content">

	</div>
</body>
<script type="text/javascript">
		(function($) {
		$('.mui-scroll-wrapper').scroll({
			indicators: true 
		});
		mui('#nav').on('tap', 'a', function() {
			switch (this.getAttribute('name')) {
				case 'one':dump_page("<?php echo u('Main/index');?>");break;
				case 'two':dump_page("<?php echo u('Buy/index');?>");break;
				case 'three':dump_page("<?php echo u('Admin/finance');?>");break;
				case 'four':dump_page("<?php echo u('Admin/index');?>");break;
				case 'five':dump_page("<?php echo u('Main/personal');?>");break;
			}
		});
		function dump_page(url){
			window.location.href=url;
		}
	})(mui);
</script>
</html>