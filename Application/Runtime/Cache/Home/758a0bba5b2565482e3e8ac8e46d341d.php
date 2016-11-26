<?php if (!defined('THINK_PATH')) exit();?><!--头部尾部公共文件-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>兼职排班</title>
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
		<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" style="color:white"></a>
		<h1 id="title" class="mui-title"><a href="<?php echo U('Index/index');?>">兼职管理</a></h1>
	</header>
	<div class="mui-content">
		<div id="slider" class="mui-slider">
			<div id="sliderSegmentedControl" class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
				<a class="mui-control-item" href="#item1mobile">
					排班
				</a>
				<a class="mui-control-item" href="#item2mobile">
					排班列表
				</a>
			</div>
			<div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-6"></div>
			<div class="mui-slider-group">
				<div id="item1mobile" class="mui-slider-item mui-control-content mui-active">
					<!-- <p class='mui-ellipsis' style="text-align:center;margin-top:10px">偶买噶，被你看见~_~</p> -->
					<div id="scroll1" class="mui-scroll-wrapper">
						<div class="mui-scroll">
							<div class="mui-card" style="margin-top:20px">
								<form class="mui-input-group" action="<?php echo U('Admin/paiban');?>" method="post" id="post_form">
									<div class="mui-input-row">
									<label>兼　职</label>
										<select name="name" style="text-align:center;float: left;width:100px">
											<?php if(is_array($jianzhi_list)): foreach($jianzhi_list as $key=>$data): ?><option value="<?php echo ($data["username"]); ?>"><?php echo ($data["username"]); ?></option><?php endforeach; endif; ?>
										</select>
									</div>
									<div class="mui-input-row">
										<label>money</label>
										<input name="money" type="text" class="mui-input-clear mui-input inputFont" placeholder="每小时工资">
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
									<div class="mui-content-padded">
										<button type="submit" class="mui-btn mui-btn-block mui-btn-warning" style="margin-top:20px">提交</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div id="item2mobile" class="mui-slider-item mui-control-content">
					<p class='mui-ellipsis' style="text-align:center;margin-top:10px">偶买噶，这样都被你看见>_<</p>
					<div id="scroll2" class="mui-scroll-wrapper">
						<div class="mui-scroll">
							<!--签到详情-->
							<ul class="mui-table-view" id="list">
								<?php if(is_array($qiandao_list)): foreach($qiandao_list as $key=>$data): ?><li class="mui-table-view-cell mui-media">
										<a>
											<div class="mui-media-body">
												<?php echo ($data["name"]); ?>
												<p class='mui-ellipsis'>
													<span><?php echo (timePoint($data["workpoint"])); ?>　<?php echo (weekNum($data["week"])); ?>　工资:<?php echo ($data["money"]); ?>(小时/元)</span>
													<span style="float:right"><button name="<?php echo ($data["id"]); ?>" style="float:right" type="button" class="mui-btn mui-btn-danger mui-pull-right del">移除</button></span>
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
	<script>
		(function($) {
			$('.mui-scroll-wrapper').scroll({
				indicators: true 
			});
		})(mui);
		$(document).ready(function(){
		//设置页面的高
		$('.mui-slider-group').height($(document).height()-80);
		//排班操作
		$("#post_form").submit(function(e){
	        //简单的前端判断
	        var self = $(this);
	        $.post(self.attr("action"), self.serialize(), success, "json");
	        return false;
	        function success(ajaxdata){
	         	if(ajaxdata.status==1){
	         		mui.alert(ajaxdata.info.tip);
	         		$("#list").prepend('<li class="mui-table-view-cell mui-media"><a><div class="mui-media-body">'+ajaxdata.info.name+'<p class="mui-ellipsis"><span>'+ajaxdata.info.workpoint+'　'+ajaxdata.info.week+'</span><span style="float:right"><button name="'+ajaxdata.info.id+'" style="float:right" type="button" class="mui-btn mui-btn-danger mui-pull-right cf_do_del">移除</button></span></p></div></a></li>');
		        }else{
		          	mui.toast(ajaxdata.info);
		        }
      		}
  		});

  		//排班删除操作
        $('#list').on('click','.del',function(){
        	var result = confirm('你确定要删除吗？');
			if(!result) {
				return 0;
			}
            var id=$(this).attr("name");
           	var _this=$(this);
            $.ajax({
            	url: "<?php echo U('Admin/paiban_del');?>",
            	dataType: "json",
            	async: true,
            	data: {id:id},
            	type: "POST",
            	success: function(ajaxdata) {
            		if(ajaxdata.status==1){
            			mui.toast(ajaxdata.info);
           				_this.parent().parent().parent().parent().parent().remove();
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