<?php if (!defined('THINK_PATH')) exit();?><!--头部尾部公共文件-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>采购详情</title>
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
		<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" style="color:white;"></a>
		<h1 id="title" class="mui-title"><a href="<?php echo U('Index/index');?>">采购详情</a></h1>
	</header>
	<div class="mui-content">
		<ul class="mui-table-view mui-grid-view mui-grid-9">
			<!--总支出-->
			<li class="mui-table-view-cell mui-media mui-col-xs-6 mui-col-sm-6">
				<a>
					<span class="spancolor mui-icon iconfont" id="none_qiandao"><?php echo ($money); ?></span>
					<div class="mui-media-body" id="word">总支出</div>
				</a>
			</li>
			<!--网购支出-->
			<li class="mui-table-view-cell mui-media mui-col-xs-6 mui-col-sm-6" style="border-left:solid 1px gray;">
				<a>
					<span class="spancolor mui-icon iconfont" id="none_qiandao"><?php echo ($onlinemoney); ?></span>
					<div class="mui-media-body" id="word">网购支出</div>
				</a>
			</li>
		</ul>
		<!--采购列表-->
		<ul class="mui-table-view">
		<li class="mui-table-view-cell mui-media" style="text-align:center">统计</li>
		<?php if(is_array($zhichu)): foreach($zhichu as $key=>$i): ?><li class="mui-table-view-cell mui-media" style="color:rgba(96,56,17,1);">
				<a>
					<div class="mui-media-body">
						姓名：<?php echo ($i["buyman"]); ?>　　￥<?php echo ($i["kucapay"]); ?>
					</div>
				</a>
			</li><?php endforeach; endif; ?>
			<?php if(is_array($data)): foreach($data as $key=>$data): ?><li class="mui-table-view-cell mui-media">
					<a>
						<div class="mui-media-body">
							名称：<?php echo ($data["name"]); ?>
							<p><span>数量：<?php echo ($data["num"]); ?></span><span style="float:right">金额：<?php echo ($data["price"]); ?>￥</span></p>
						</div>
					</a>
				</li><?php endforeach; endif; ?>
		</ul>
	</div>
</body>
</html>