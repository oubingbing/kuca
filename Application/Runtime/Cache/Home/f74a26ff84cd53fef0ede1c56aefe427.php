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
	<div class="mui-content" style="margin-top:30px;">
		<ul class="mui-table-view mui-grid-view mui-grid-9" style="background-color: rgba(96,56,17,1);">
		    <li class="mui-table-view-cell mui-media mui-col-xs-6 mui-col-sm-6">
		        <a href="<?php echo U('Admin/help');?>">
					<span class="mui-icon iconfont icon-quanxian" style="color:white"></span>
		            <div class="mui-media-body" style="color:white">签到权限</div>
		        </a>
		    </li>
		   	<li class="mui-table-view-cell mui-media mui-col-xs-6 mui-col-sm-6">
		        <a href="<?php echo U('Admin/jianzhi');?>">
		            <span class="mui-icon iconfont icon-jianzhituijian" style="color:white"></span>
		            <div class="mui-media-body" style="color:white">兼职管理</div>
		        </a>
		    </li>
		    <li class="mui-table-view-cell mui-media mui-col-xs-6 mui-col-sm-6">
		        <a href="<?php echo U('Admin/paiban');?>">
		            <span class="mui-icon iconfont icon-p-date-manage" style="color:white"></span>
		            <div class="mui-media-body" style="color:white">兼职排班</div>
		        </a>
		    </li>
		    <li class="mui-table-view-cell mui-media mui-col-xs-6 mui-col-sm-6">
		        <a href="#">
		            <span class="mui-icon iconfont icon-feiyong" style="color:white"></span>
		            <div class="mui-media-body" style="color:white">统计兼职费</div>
		        </a>
		    </li>
			<li class="mui-table-view-cell mui-media mui-col-xs-6 mui-col-sm-6">
				<a href="<?php echo U('Admin/nornal');?>">
					<span class="mui-icon iconfont icon-zidong" style="color:white"></span>
					<div class="mui-media-body" style="color:white">自动下单管理</div>
				</a>
		    </li>
		    <li class="mui-table-view-cell mui-media mui-col-xs-6 mui-col-sm-6">
		    	<a href="<?php echo U('Admin/power');?>">
		            <span class="mui-icon iconfont icon-permission" style="color:white"></span>
		            <div class="mui-media-body" style="color:white">会员权限</div>
		        </a>
		    </li>
		</ul>
	</div>
<script>
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
</body>
</html>