<?php if (!defined('THINK_PATH')) exit();?><!--头部尾部公共文件-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>签到详情</title>
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="stylesheet" href="/Public/css/mui.min.css">
	<link rel="stylesheet" href="/Public/css/bootstrap.min.css">
	<link href="/Public/css/newiconfont.css" rel="stylesheet"/>
	<link href="/Public/css/iconfont.css" rel="stylesheet"/>
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
	<script src="/Public/js/mui.min.js"></script>
	<script src="/Public/js/jquery-1.11.2.min.js"></script>
	<header class="mui-bar mui-bar-nav header">
		<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" style="color:white"></a>
		<h1 id="title" class="mui-title"><a href="<?php echo U('Index/index');?>">签到详情</a></h1>
	</header>
	<div class="mui-content">
		<div id="slider" class="mui-slider">
			<div id="sliderSegmentedControl" class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
				<a class="mui-control-item" href="#item1mobile">
					当天签到
				</a>
				<a class="mui-control-item" href="#item2mobile">
					历史签到
				</a>
				<a class="mui-control-item" href="#item3mobile">
					兼职
				</a>
			</div>
			<div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-4"></div>
			<div class="mui-slider-group">
			<!--当天签到-->
				<div id="item1mobile" class="mui-slider-item mui-control-content mui-active">
					<p class='mui-ellipsis' style="text-align:center;margin-top:10px">偶买噶，被你看见~_~</p>
					<div id="scroll1" class="mui-scroll-wrapper">
						<div class="mui-scroll">
							<ul class="mui-table-view" id="ul1">
								<?php if(is_array($data)): foreach($data as $key=>$data): ?><li class="mui-table-view-cell mui-media">
										<a>
											<div class="mui-media-body">
												<p class='mui-ellipsis'>
													<?php echo ($data["username"]); ?>　<span style="float:right">签到时间:<?php echo (date("Y-m-d H:i",$data["startime"])); ?></span>
												</p>
												<p class='mui-ellipsis'>
													时长:<?php echo ($data["time"]); ?>　工资:<?php echo ($data["salary"]); ?>
													<?php if($data["boss"] != ''): ?><span style="float:right">代签：<?php echo ($data["boss"]); ?></span><?php endif; ?>
												</p>
												<p class='mui-ellipsis'>		<?php echo (timePoint($data["point"])); ?>　<?php echo (weekNum($data["week"])); ?>
												<?php if($data["is_check"] == 0): ?>　<button name="<?php echo ($data["id"]); ?>" type="button" class="mui-btn mui-btn-royal check">
													审核
												</button><?php endif; ?>
												<button id="<?php echo ($data["id"]); ?>" style="float:right" type="button" class="mui-btn mui-btn-danger mui-pull-right delete">
													删除
												</button>
												</p>
											</div>
										</a>
									</li><?php endforeach; endif; ?>
							</ul>
						</div>
					</div>
				</div>
				<!--历史签到-->
				<div id="item2mobile" class="mui-slider-item mui-control-content">
					<p class='mui-ellipsis' style="text-align:center;margin-top:10px">偶买噶，这样都被你看见>_<</p>
					<div id="" class="mui-scroll-wrapper">
						<div class="mui-scroll">
							<ul class="mui-table-view mui-grid-view mui-grid-9">
								<!--签到记录-->
								<li class="mui-table-view-cell mui-media mui-col-xs-6 mui-col-sm-6 qiandaodiv">
									<a>
										<span class="spancolor mui-icon iconfont" id="sumMoney"><?php echo ($monthMoney); ?></span>
										<div class="mui-media-body">当月兼职费</div>
									</a>
								</li>
								<!--签到总情况-->
								<li class="mui-table-view-cell mui-media mui-col-xs-6 mui-col-sm-6" style="border-left:solid 1px gray;">
									<a>
										<span class="spancolor mui-icon iconfont" id="allMoney"><?php echo ($allmoney); ?></span>
										<div class="mui-media-body">总兼职费</div>
									</a>
								</li>
							</ul>
						<!--当月兼职详情-->
						<ul class="mui-table-view" id="ul1">
								<?php if(is_array($data2)): foreach($data2 as $key=>$data): ?><li class="mui-table-view-cell mui-media">
										<a>
											<div class="mui-media-body">
												<p class='mui-ellipsis'>
													<?php echo ($data["username"]); ?>　<span style="float:right">签到时间:<?php echo (date("Y-m-d H:i",$data["startime"])); ?></span>
												</p>
												<p class='mui-ellipsis'>
													时长:<?php echo ($data["time"]); ?>　工资:<?php echo ($data["salary"]); ?>
													<?php if($data["boss"] != ''): ?><span style="float:right">代签：<?php echo ($data["boss"]); ?></span><?php endif; ?>
												</p>
												<p class='mui-ellipsis'>		<?php echo (timePoint($data["point"])); ?>　<?php echo (weekNum($data["week"])); ?>
												<?php if($data["is_check"] == 0): ?>　<button name="<?php echo ($data["id"]); ?>" type="button" class="mui-btn mui-btn-royal check">
													审核
												</button><?php endif; ?>
												<button id="<?php echo ($data["id"]); ?>" style="float:right" type="button" class="mui-btn mui-btn-danger mui-pull-right delete">
													删除
												</button>
												</p>
											</div>
										</a>
									</li><?php endforeach; endif; ?>
							</ul>
							
						</div>
					</div>
				</div>
				<!--兼职-->
				<div id="item3mobile" class="mui-slider-item mui-control-content">
					<p class='mui-ellipsis' style="text-align:center;margin-top:10px">偶买噶，这样都被你看见>_<</p>
					<div id="" class="mui-scroll-wrapper">
						<div class="mui-scroll">
							<ul class="mui-table-view" id="list">
								<?php if(is_array($list)): foreach($list as $key=>$data): ?><li class="mui-table-view-cell mui-media">
										<a href="<?php echo U('Admin/detail',array('id'=>$data['id'],'username'=>$data['username']));?>">
											<div class="mui-media-body">
												<?php echo ($data["username"]); ?>
											</div>
										</a>
									</li><?php endforeach; endif; ?>
							</ul>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="/Public/js/count.js"></script>
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
		//审核操作
		$('.check').on('click',function(){
			var result = confirm('你确定要审核吗？');
			if(!result) {
				return 0;
			}
			var _this=$(this);
			var id=_this.attr('name');
			$.ajax({
				url: "<?php echo U('Admin/check');?>",
				dataType: "json",
				async: true,
				data: {id:id},
				type: "POST",
				success: function(ajaxdata) {
					alert(ajaxdata.info);
					if(ajaxdata.status==1){
						_this.css('display','none');
					}
				},
				error: function() {
					alert('网络出错');
				}
			});
		});

		//删除操作
		$('.delete').on('click',function(){
			var result = confirm('你确定要删除吗？');
			if(!result) {
				return 0;
			}
			var _this=$(this);
			var id=_this.attr('id');
			$.ajax({
				url: "<?php echo U('Admin/del');?>",
				dataType: "json",
				async: true,
				data: {id:id},
				type: "POST",
				success: function(ajaxdata) {
					alert(ajaxdata.info);
					if(ajaxdata.status==1){
						_this.parent().parent().parent().parent().remove();
					}
				},
				error: function() {
					alert('网络出错');
				}
			});
		});
	});
</script>
</body>
</html>