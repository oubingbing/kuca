<?php if (!defined('THINK_PATH')) exit();?><!--头部尾部公共文件-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>签到权限</title>
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="stylesheet" href="/Public/css/mui.min.css">
	<link rel="stylesheet" href="/Public/css/bootstrap.min.css">
	<link href="/Public/css/newiconfont.css" rel="stylesheet"/>
	<link href="/Public/css/iconfont.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="/Public/css/mui.picker.min.css" />
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
		<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" style="color:white"></a>
		<h1 id="title" class="mui-title"><a href="<?php echo U('Index/index');?>">帮助签到</a></h1>
		<a href="<?php echo U('Admin/signIn');?>" class="mui-pull-right" style="color:white;margin-top:13px">签到详情</a>
	</header>
	<div class="mui-content">
		<div class="mui-scroll">
			<div class="mui-card" style="margin-top:15px">
				<form class="mui-input-group" action="<?php echo U('Admin/help');?>" method="post" id="post_form">
					<div class="mui-input-row">
						<label>兼　职</label>
						<select name="username" style="text-align:center;float: left;width:100px">
							<?php if(is_array($list)): foreach($list as $key=>$data): ?><option value="<?php echo ($data["username"]); ?>"><?php echo ($data["username"]); ?></option><?php endforeach; endif; ?>
						</select>
					</div>
					<div class="mui-input-row">
						<label>时间段</label>
						<select name="workpoint" style="text-align:center;float: left;width:100px"> 
							<option value="1">中班</option>
							<option value="2">午班</option>
							<option value="3">晚班</option>
						</select>
					</div>
					<div class="mui-input-row">
						<label>星　期</label>
						<select name="week" style="text-align:center;float: left;width:100px">             
							<option value="1">星期一</option>
							<option value="2">星期二</option>
							<option value="3">星期三</option>
							<option value="4">星期四</option>
							<option value="5">星期五</option>
							<option value="6">星期六</option>
							<option value="0">星期天</option>
						</select>
					</div>
					<div class="mui-input-row">
						<label>费　用</label>
						<input name="money" type="text" class="mui-input-clear mui-input inputFont" placeholder="请输入兼职的费用" id="emplyeerMoney">
					</div>
					<div class="mui-input-row">
						<label>时　长</label>
						<input name="time" type="text" class="mui-input-clear mui-input inputFont" placeholder="请输入兼职的时长">
					</div>
					<div class="mui-input-row">
						<label style="margin-left:-15px" class="btn" data-options='{"type":"date","beginYear":2014,"endYear":2016}'>选择日期</label>
						<input name="timeUnix" id="time" type="text" class="mui-input-clear mui-input inputFont" placeholder="请选择日期">
					</div>
					<div class="mui-content-padded">
						<button type="submit" class="mui-btn mui-btn-block mui-btn-warning" style="margin-top:20px">提交</button>
					</div>
				</form>
			</div>
		</div>
		
	</div>
	<script src="/Public/js/mui.picker.min.js"></script>
	<script>
		(function($) {
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
		})(mui);
		$(document).ready(function(){
		//设置页面的高
		$('.mui-slider-group').height($(document).height()-80);
		//添加兼职操作
		$("#post_form").submit(function(e){
			var result = confirm('你确定要提交吗？');
			if(!result) {
				return false;
			}
			if($('#emplyeerMoney').val()==''){
				alert('费用不能为空');
				return false;
			}
			var self = $(this);
			$.post(self.attr("action"), self.serialize(), success, "json");
			return false;
			function success(ajaxdata){
				if(ajaxdata.status==1){
					mui.alert(ajaxdata.info);
				}else{
					mui.toast(ajaxdata.info);
				}
			}
		});

	});
</script>
</body>
</html>