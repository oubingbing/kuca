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
<link rel="stylesheet" type="text/css" href="/Public/css/mui.picker.min.css" />
<style type="text/css">
	.mui-card{
		margin-top: 20px;
	}
</style>
<div class="mui-content">
	<div id="slider" class="mui-slider">
		<div id="sliderSegmentedControl" class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
			<a class="mui-control-item" href="#item1mobile">
				录入信息
			</a>
			<a class="mui-control-item" href="#item2mobile">
				收入
			</a>
			<a class="mui-control-item" href="#item3mobile">
				支出
			</a>
		</div>
		<div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-4"></div>
		<div class="mui-slider-group" style="height:550px">
		<!--录入-->
			<div id="item1mobile" class="mui-slider-item mui-control-content mui-active">
				<div id="scroll1" class="mui-scroll-wrapper">
					<div class="mui-scroll">
						<div class="mui-card">
							<form class="mui-input-group" action="<?php echo U('Admin/finance');?>" method="post" id="post_form">
								<div class="mui-input-row">
									<label style="margin-left:-15px" class="btn" data-options='{"type":"date","beginYear":2014,"endYear":2016}'>选择日期</label>
									<input name="ym" id="time" type="text" class="mui-input-clear mui-input inputFont" placeholder="请选择日期">
								</div>
								<div class="mui-input-row">
									<label>营业额</label>
									<input name="allmoney" type="text" class="mui-input-clear mui-input inputFont" placeholder="营业额">
								</div>
								<div class="mui-input-row">
									<label>支付宝</label>
									<input name="alipay" type="text" class="mui-input-clear mui-input inputFont" placeholder="支付宝">
								</div>
								<div class="mui-input-row">
									<label>微信</label>
									<input name="weixinpay" type="text" class="mui-input-clear mui-input inputFont" placeholder="微信">
								</div>
								<div class="mui-input-row">
									<label>银行卡</label>
									<input name="card" type="text" class="mui-input-clear mui-input inputFont" placeholder="银行卡">
								</div>
								<div class="mui-input-row">
									<label>现金</label>
									<input name="cash" type="text" class="mui-input-clear mui-input inputFont" placeholder="现金">
								</div>
								<div class="mui-input-row">
									<label>订单</label>
									<input name="num" type="text" class="mui-input-clear mui-input inputFont" placeholder="订单">
								</div>
								<div class="mui-input-row">
									<label>今日应有</label>
									<input name="todayYingyou" type="text" class="mui-input-clear mui-input inputFont" placeholder="今日应有">
								</div>
								<div class="mui-input-row">
									<label>今日实有</label>
									<input name="todayShiyou" type="text" class="mui-input-clear mui-input inputFont" placeholder="今日实有">
								</div>
								<div class="mui-input-row">
									<label>取走</label>
									<input name="takeUp" type="text" class="mui-input-clear mui-input inputFont" placeholder="取走">
								</div>
								<div class="mui-input-row">
									<label>余零</label>
									<input name="info" type="text" class="mui-input-clear mui-input inputFont" placeholder="余零">
								</div>
								<div class="mui-content-padded">
									<button type="submit" class="mui-btn mui-btn-block mui-btn-warning" style="margin-top:20px">提交</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!--收入-->
			<div id="item2mobile" class="mui-slider-item mui-control-content">
				<p class='mui-ellipsis' style="text-align:center;margin-top:10px">偶买噶，这样都被你看见>_<</p>
				<div id="scroll2" class="mui-scroll-wrapper">
					<div class="mui-scroll">
						<ul class="mui-table-view" id="busuness">
							<?php if(is_array($business)): foreach($business as $key=>$data): ?><li class="mui-table-view-cell mui-media">
									<a>
										<div class="mui-media-body">
											<label style="color:red;">营业额:<?php echo ($data["allmoney"]); ?></label>
											<span style="float:right">日期:<?php echo ($data["ym"]); ?></span>
											<p>
												<label>订单:<?php echo ($data["num"]); ?></label>
												<label style="float:right">现金:<?php echo ($data["cash"]); ?></label>
											</p>
											<p>
												<label>支付宝:<?php echo ($data["alipay"]); ?></label>
												<label style="float:right">微信:<?php echo ($data["weixinpay"]); ?></label>
											</p>
											<p>
												<label>昨日零钱:<?php echo ($data["yesterday"]); ?></label>　　
												<label style="float:right">余零:<?php echo ($data["info"]); ?></label>
											</p>
											<p class='mui-ellipsis'>
												<label>今日应有:<?php echo ($data["todayyingyou"]); ?></label>
												<label style="float:right">今日实有:<?php echo ($data["todayshiyou"]); ?></label>
											</p>
											<p>
												<label>取走:<?php echo ($data["takeup"]); ?></label>
												<button name="<?php echo ($data["id"]); ?>" style="float:right" type="button" class="mui-btn mui-btn-danger mui-pull-right busuness_del">删除</button>
											</p>
										</div>
									</a>
								</li><?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<!--支出-->
			<div id="item3mobile" class="mui-slider-item mui-control-content">
				<p class='mui-ellipsis' style="text-align:center;margin-top:10px">偶买噶，这样都被你看见>_<</p>
				<div id="scroll2" class="mui-scroll-wrapper">
					<div class="mui-scroll">
						<ul class="mui-table-view" id="cf">
							<?php if(is_array($cost)): foreach($cost as $key=>$data): ?><li class="mui-table-view-cell mui-media">
									<a>
										<div class="mui-media-body">
											<label style="color:red;">厨房:<?php echo ($data["chufang"]); ?></label>
											<span style="float:right">日期:<?php echo ($data["ym"]); ?></span>
											<p>
												<label>吧台:<?php echo ($data["batai"]); ?></label>
												<label style="float:right">网购:<?php echo ($data["online"]); ?></label>
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
<script src="/Public/js/jquery-1.11.2.min.js"></script>
<script src="/Public/js/mui.picker.min.js"></script>
<script>
	(function($) {
		$.init();
		var result = $('#result')[0];
		var btns = $('.btn');
		btns.each(function(i, btn) {
			btn.addEventListener('tap', function() {
				var optionsJson = this.getAttribute('data-options') || '{}';
				var options = JSON.parse(optionsJson);
				var id = this.getAttribute('id');
				var picker = new $.DtPicker(options);
				picker.show(function(rs) {
					document.getElementById('time').value=rs.text;
					picker.dispose();1
				});
			}, false);
		});

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
		$("#post_form").submit(function(e){
			var result = confirm('你确定要提交吗？');
			if(!result) {
				return 0;
			}
	        var self = $(this);
	        $.post(self.attr("action"), self.serialize(), success, "json");
	        return false;
	        function success(ajaxdata){
	         	if(ajaxdata.status==1){
	         		mui.alert(ajaxdata.info.tip);
	         		$("#busuness").prepend('<li class="mui-table-view-cell mui-media"><a><div class="mui-media-body"><label style="color:red;">营业额:'+ajaxdata.info.allmoney+'</label><span style="float:right">日期:'+ajaxdata.info.ym+'</span><p><label>订单:'+ajaxdata.info.num+'</label><label style="float:right">现金:'+ajaxdata.info.cash+'</label></p><p><label>支付宝:'+ajaxdata.info.alipay+'</label><label style="float:right">微信:'+ajaxdata.info.weixinpay+'</label></p><p><label>昨日零钱:'+ajaxdata.info.yesterday+'</label>　　<label style="float:right">余零:'+ajaxdata.info.info+'</label></p><p><label>今日应有:'+ajaxdata.info.todayYingyou+'</label><label style="float:right">今日实有:'+ajaxdata.info.todayShiyou+'</label></p><p><label>取走:'+ajaxdata.info.takeUp+'</label><button name="'+ajaxdata.info.id+'" style="float:right" type="button" class="mui-btn mui-btn-danger mui-pull-right busuness_del">删除</button></p></div></a></li>');
		        }else{
		          	mui.toast(ajaxdata.info);
		        }
      		}
  		});

  		//收入删除操作
        $('#busuness').on('click','.busuness_del',function(){
        	var result = confirm('你确定要删除吗？');
			if(!result) {
				return 0;
			}
            var id=$(this).attr("name");
           	var _this=$(this);
            $.ajax({
            	url: "<?php echo U('Admin/busuness_del');?>",
            	dataType: "json",
            	async: true,
            	data: {id:id},
            	type: "POST",
            	success: function(ajaxdata) {
            		if(ajaxdata.status==1){
            			mui.toast(ajaxdata.info);
           				_this.parent().parent().parent().parent().remove();
            		}else{
            			mui.toast(ajaxdata.info);
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