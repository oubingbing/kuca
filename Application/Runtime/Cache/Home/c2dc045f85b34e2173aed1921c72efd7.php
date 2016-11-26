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
<div class="mui-content">
	<div id="slider" class="mui-slider">
		<div id="sliderSegmentedControl" class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
			<a class="mui-control-item" href="#item1mobile">
				签到
			</a>
			<a class="mui-control-item" href="#item2mobile">
				我的签到
			</a>
		</div>
		<div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-6"></div>
		<div class="mui-slider-group">
			<div id="item1mobile" class="mui-slider-item mui-control-content mui-active">
			<p class='mui-ellipsis' style="text-align:center;margin-top:10px">偶买噶，被你看见~_~</p>
				<div id="scroll1" class="mui-scroll-wrapper">
					<div class="mui-scroll">
						<ul class="mui-table-view mui-grid-view mui-grid-9">
							<!--签到-->
							<li class="mui-table-view-cell mui-media mui-col-xs-6 mui-col-sm-6 qiandaodiv" id="do_qiandao">
								<a>
									<img src="/Public/img/loading.gif" id="load" style="z-index:10;width:70px;position: fixed;display:none">
									<span class="spancolor mui-icon iconfont icon-qiandao" style="font-size:70px;z-index:1" id="none_qiandao"></span>
									<div class="mui-media-body" id="word">签到</div>
								</a>
							</li>
							<!--签到情况-->
							<li class="mui-table-view-cell mui-media mui-col-xs-6 mui-col-sm-6" style="border-left:solid 1px gray;">
								<span>今天的兼职</span>
								<a>
									<?php if(is_array($live)): foreach($live as $key=>$live_list): ?><p style="font-size:10px;color:rgba(96,56,17,1)">
										<u>
											<?php echo ($live_list["name"]); ?> <?php echo (weekNum($live_list["week"])); ?> <?php echo (timePoint($live_list["workpoint"])); ?>
										</u>
									</p><?php endforeach; endif; ?>
								</a>
							</li>
						</ul>
						<!--排班表-->
						<ul class="mui-table-view">
						<?php if(is_array($list)): foreach($list as $key=>$data): ?><li class="mui-table-view-cell mui-media">
								<a>
									<img class="mui-media-object mui-pull-left" src="/Public/img/dog.jpg">
									<div class="mui-media-body">
										<?php echo ($data["name"]); ?>
										<p class='mui-ellipsis'><?php echo (weekNum($data["week"])); ?>　<?php echo (timePoint($data["workpoint"])); ?></p>
									</div>
								</a>
							</li><?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<div id="item2mobile" class="mui-slider-item mui-control-content">
				<p class='mui-ellipsis' style="text-align:center;margin-top:10px">偶买噶，这样都被你看见>_<</p>
				<div id="scroll2" class="mui-scroll-wrapper">
					<div class="mui-scroll">
						<ul class="mui-table-view mui-grid-view mui-grid-9">
							<!--签到记录-->
							<li class="mui-table-view-cell mui-media mui-col-xs-6 mui-col-sm-6 qiandaodiv">
								<a>
									<span class="spancolor mui-icon iconfont" id="sumMoney"><?php echo ($sumMoney); ?></span>
									<div class="mui-media-body">当月兼职费</div>
								</a>
							</li>
							<!--签到总情况-->
							<li class="mui-table-view-cell mui-media mui-col-xs-6 mui-col-sm-6" style="border-left:solid 1px gray;">
								<a>
									<span class="spancolor mui-icon iconfont" id="allMoney"><?php echo ($allMoney); ?></span>
									<div class="mui-media-body">总兼职费</div>
								</a>
							</li>
						</ul>
						<!--签到详情-->
						<ul class="mui-table-view" id="list">
							<?php if(is_array($qd_list)): foreach($qd_list as $key=>$data): ?><li class="mui-table-view-cell mui-media">
									<a>
										<div class="mui-media-body">
											<p class='mui-ellipsis'>
												<?php echo ($data["username"]); ?>　时长:<?php echo ($data["time"]); ?>　工资:<?php echo ($data["salary"]); ?>　时间:<?php echo (date("Y-m-d H:i",$data["startime"])); ?>　<?php echo (timePoint($data["point"])); ?>
											</p>
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
		//签到操作
		$('#do_qiandao').on('click',function(){
			var result = confirm('你确定要签到吗？');
			if(!result) {
				return 0;
			}
			$('#load').show();
			var none_qiandao=$('#none_qiandao');
			var successTip=$('#word');
			$.ajax({
				url: "<?php echo U('Main/do_qiandao');?>",
				dataType: "json",
				async: true,
				data: {},
				type: "POST",
				success: function(ajaxdata) {
					$('#load').hide();
					mui.toast(ajaxdata.info);
					if(ajaxdata.status==1){
						none_qiandao.removeClass('icon-qiandao');
						none_qiandao.addClass('icon-qiandao1');
						none_qiandao.css('color','#00CD00');
						successTip.css('color','#00EE00');
						successTip.text('签到成功');
						mui.toast(ajaxdata.info.tip);
						$('#list').prepend('<li class="mui-table-view-cell mui-media"><a><div class="mui-media-body"><p >'+ajaxdata.info.username+'　时长:'+ajaxdata.info.time+'　工资:'+ajaxdata.info.salary+'　</p></div></a></li>');
						$('#sumMoney').html(accAdd($('#sumMoney').html(),ajaxdata.info.salary));
						$('#allMoney').html(accAdd($('#allMoney').html(),ajaxdata.info.salary));
					}
			    },
			    error: function() {
			    	$('#load').hide();
			        alert('网络出错');
			    }
			});
		});
	});
</script>
</body>
</html>