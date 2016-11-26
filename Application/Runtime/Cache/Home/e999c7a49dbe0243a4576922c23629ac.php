<?php if (!defined('THINK_PATH')) exit();?><!--头部尾部公共文件-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>搜索</title>
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
		<a href="<?php echo U('Buy/index');?>" class=" mui-icon mui-icon-left-nav mui-pull-left" style="color:white"></a>
		<h1 id="title" class="mui-title"><a href="<?php echo U('Index/index');?>">原料搜索</a></h1>
	</header>
	<div class="mui-content">
		<div id="slider" class="mui-slider">
			<div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-6"></div>
			<div class="mui-slider-group">
				<div id="item1mobile" class="mui-slider-item mui-control-content mui-active">
					<div id="scroll1" class="mui-scroll-wrapper">
						<div class="mui-scroll">
							<div class="mui-card" style="margin-top:15px">
								<form class="mui-input-group" action="<?php echo U('Buy/search');?>" method="post" id="post_form">
									<div class="mui-input-row">
									<label>原料名称</label>
									<input name="name" type="text" class="mui-input-clear mui-input inputFont" placeholder="请输入原料名称">
								</div>
									<div class="mui-content-padded">
										<button type="submit" class="mui-btn mui-btn-block mui-btn-warning" style="margin-top:20px">搜索</button>
									</div>
								</form>
							</div>
							<?php if($result != ''): ?><hr>
								<span style="text-align:center;margin-left:10px">关键词：<?php echo ($name); ?>，搜索结果：一共<?php echo ($num); ?>条结果</span>
								<ul class="mui-table-view" id="list">
									<?php if(is_array($result)): foreach($result as $key=>$data): ?><li class="mui-table-view-cell mui-media">
											<a>
												<div class="mui-media-body">
													<?php echo ($data["name"]); ?><span style="float:right">数量:<?php echo ($data["num"]); ?>　价格:<?php echo ($data["price"]); ?></span>
													<p><?php if($data["buyman"] != ''): ?>采购：<?php echo ($data["buyman"]); ?>　<?php else: ?>采购:无<?php endif; ?><span style="float:right">日期:<?php echo (date("Y-m-d H:i",$data["time"])); ?></span></p>
												</div>
											</a>
										</li><?php endforeach; endif; ?>
								</ul>
								<?php else: endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
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
		$(document).ready(function(){
		//设置页面的高
		$('.mui-slider-group').height($(document).height()-80);
		//添加兼职操作
	});
</script>
</body>
</html>