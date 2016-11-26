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
	.mui-card{
		margin-top: 20px;
	}
	#card{
		background-color: rgba(96,56,17,0.6);
		color: white;
		width: 100px;
		height: 50px;
		font-size: 25px;
		text-align: center;
		vertical-align: middle;
		position: fixed;
		z-index: 10;
		margin-bottom: 20px;
		margin-top: 50px;
		padding-top: 10px;
		
	}
</style>

<div class="mui-content">
	<div class="mui-card" id="card"><?php echo ($allmoney); ?></div>
	<!--弹出层-->
	<div id="delete" class="mui-popover mui-popover-action mui-popover-bottom">
		<a>
		</a>
		<ul class="mui-table-view whichShow" name="1">
			<li class="mui-table-view-cell">
				<a href="#" style="color: rgba(96,56,17,1);">厨房采购单</a>
			</li>
		</ul>
		<ul class="mui-table-view whichShow" name="2">
			<li class="mui-table-view-cell">
				<a href="#" style="color: rgba(96,56,17,1);">吧台采购单</a>
			</li>
		</ul>
		<ul class="mui-table-view whichShow" name="3">
			<li class="mui-table-view-cell">
				<a href="#" style="color: rgba(96,56,17,1);">网购采购网</a>
			</li>
		</ul>
		<ul class="mui-table-view whichShow" id="autoAdd">
			<li class="mui-table-view-cell">
				<a href="<?php echo U('Buy/auto');?>" style="color: rgba(96,56,17,1);">自动下单</a>
			</li>
		</ul>
		<ul class="mui-table-view whichShow">
			<li class="mui-table-view-cell">
				<a href="<?php echo U('Buy/search');?>" style="color: rgba(96,56,17,1);">搜索</a>
			</li>
		</ul>
	</div>
	<div id="slider" class="mui-slider">
		<div id="sliderSegmentedControl" class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
			<a class="mui-control-item" href="#item1mobile">
				入料
			</a>
			<a class="mui-control-item" href="#item2mobile">
				采购单
			</a>
			<a class="mui-control-item" href="#item4mobile">
				采购明细
			</a>
		</div>
		<div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-4"></div>
		<div class="mui-slider-group">
			<!--入料-->
			<div id="item1mobile" class="mui-slider-item mui-control-content mui-active">
				<div id="scroll1" class="mui-scroll-wrapper" style="height:350px">
					<div class="mui-scroll">
						<div class="mui-card">
							<form class="mui-input-group" action="<?php echo U('Buy/add_src');?>" method="post" id="post_form">
								<div class="mui-input-row mui-radio">
									<label>厨房</label>
									<input name="radio" type="radio" value="1" checked>
								</div>
								<div class="mui-input-row mui-radio">
									<label>吧台</label>
									<input name="radio" type="radio" value="2">
								</div>
								<div class="mui-input-row mui-radio">
									<label>网购</label>
									<input name="radio" type="radio" value="3">
								</div>
								<div class="mui-input-row">
									<label>原料</label>
									<input id="src-name" name="name" type="text" class="mui-input-clear mui-input inputFont" placeholder="请输入名称">
								</div>
								<div class="mui-input-row">
									<label>价格</label>
									<input id="src-price" name="price" type="text" class="mui-input-clear mui-input inputFont" placeholder="请输入价格">
								</div>
								<div class="mui-input-row">
									<label>数量</label>
									<input id="src-num" name="num" type="text" class="mui-input-clear mui-input inputFont" placeholder="请输入数量">
								</div>
								<div class="mui-content-padded">
									<button type="submit" class="mui-btn mui-btn-block mui-btn-warning" style="margin-top:20px">提交</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!--当日采购单-->
			<div id="item2mobile" class="mui-slider-item mui-control-content">
				<p class='mui-ellipsis' style="text-align:center;margin-top:10px">偶买噶，这样都被你看见>_<</p>
				<div id="scroll2" class="mui-scroll-wrapper">
					<div class="mui-scroll">
						<!--厨房-->
						<ul class="mui-table-view" id="cf">
							<?php if(is_array($chufang)): foreach($chufang as $key=>$data): ?><li class="mui-table-view-cell mui-media">
									<a>
										<div class="mui-media-body">
											<label style="color:red;"><?php echo ($data["name"]); ?></label>　<span style="float:right">下单日期:<?php echo (date("Y-m-d H:i",$data["time"])); ?></span>
											<p>数量：<input class="inputChange cf_num_chg" type="text" name="num" value="<?php echo ($data["num"]); ?>" style="width:80px;height:30px;text-align:center" id="<?php echo ($data["id"]); ?>">　　<span style="float:right">总金额：<input class="inputChange cf_price_chg" type="text" name="<?php echo ($data["id"]); ?>" value="<?php echo ($data["price"]); ?>" style="width:80px;height:30px;text-align:center;"></span><br><label>下单：</label><?php echo ($data["username"]); ?>　<button name="<?php echo ($data["id"]); ?>" style="float:right" type="button" class="mui-btn mui-btn-danger mui-pull-right cf_do_del">删除</button><?php if($data["buyman"] == 'null'): ?><button type="button" style="float:right;margin-right:20px" name="<?php echo ($data["price"]); ?>" id="<?php echo ($data["id"]); ?>" class="mui-btn mui-btn-warning cf_do_buy">采购</button>　<?php else: ?><label>采购：</label><?php echo ($data["buyman"]); endif; ?></p>
										</div>

									</a>
								</li><?php endforeach; endif; ?>
						</ul>
						<!--吧台-->
						<ul class="mui-table-view" style="display:none" id="bt">
							<?php if(is_array($batai)): foreach($batai as $key=>$data): ?><li class="mui-table-view-cell mui-media">
									<a>
										<div class="mui-media-body">
											<label style="color:red;"><?php echo ($data["name"]); ?></label>　<span style="float:right">下单日期:<?php echo (date("Y-m-d H:i",$data["time"])); ?></span>
											<p>数量：<input class="inputChange bt_num_chg" type="text" name="num" value="<?php echo ($data["num"]); ?>" style="width:80px;height:30px;text-align:center" id="<?php echo ($data["id"]); ?>">　　<span style="float:right">总金额：<input class="inputChange bt_price_chg" type="text" name="<?php echo ($data["id"]); ?>" value="<?php echo ($data["price"]); ?>" style="width:80px;height:30px;text-align:center;"></span><br><label>下单：</label><?php echo ($data["username"]); ?>　<button style="float:right" name="<?php echo ($data["id"]); ?>" type="button" class="mui-btn mui-btn-danger mui-pull-right bt_do_del">删除</button><?php if($data["buyman"] == 'null'): ?><button style="float:right;margin-right:20px" type="button" class="mui-btn mui-btn-warning bt_do_buy" id="<?php echo ($data["id"]); ?>">采购</button><?php else: ?><label>采购：</label><?php echo ($data["buyman"]); endif; ?></p>
										</div>
									</a>
								</li><?php endforeach; endif; ?>
						</ul>
						<!--网购-->
						<ul class="mui-table-view" style="display:none" id="ol">
							<?php if(is_array($online)): foreach($online as $key=>$data): ?><li class="mui-table-view-cell mui-media">
									<a>
										<div class="mui-media-body">
											<label style="color:red;"><?php echo ($data["name"]); ?></label>　<span style="float:right">下单日期:<?php echo (date("Y-m-d H:i",$data["time"])); ?></span>
											<p>数量：<input class="inputChange ol_num_chg" type="text" name="num" value="<?php echo ($data["num"]); ?>" style="width:80px;height:30px;text-align:center" id="<?php echo ($data["id"]); ?>">　　<span style="float:right">总金额：<input class="inputChange ol_price_chg" type="text" name="<?php echo ($data["id"]); ?>" value="<?php echo ($data["price"]); ?>" style="width:80px;height:30px;text-align:center;"></span><br><label>下单：</label><?php echo ($data["username"]); ?>　<button style="float:right" type="button" class="mui-btn mui-btn-danger mui-pull-right ol_do_del" name="<?php echo ($data["id"]); ?>">删除</button><?php if($data["buyman"] == 'null'): ?><button type="button" class="do_buy mui-btn mui-btn-warning ol_do_buy" style="float:right;margin-right:20px" id="<?php echo ($data["id"]); ?>">采购</button><?php else: ?><label>采购：</label><?php echo ($data["buyman"]); endif; ?></p>
										</div>
									</a>
								</li><?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<!--采购明细-->
			<div id="item4mobile" class="mui-slider-item mui-control-content">
				<p class='mui-ellipsis' style="text-align:center;margin-top:10px">偶买噶，这样都被你看见>_<</p>
				<div id="scroll2" class="mui-scroll-wrapper">
					<div class="mui-scroll">
						<ul class="mui-table-view">
							<?php if(is_array($buyList)): foreach($buyList as $key=>$data): ?><li class="mui-table-view-cell mui-media">
									<a>
										<div class="mui-media-body">
											<label style="color:red;">序列号：<?php echo ($data["id"]); ?></label><label style="float:right">金额：<?php echo ($data["price"]); ?></label>
											<p>
												<label>日期：</label><span><?php echo (date("Y-m-d H:i",$data["time"])); ?></span><a href="<?php echo U('Buy/detail',array('id'=>$data['id']));?>"><button style="float:right" type="button" class="mui-btn mui-btn-danger mui-pull-right">详情</button></a>
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
		$("#post_form").submit(function(e){
	        //简单的前端判断
	        if($('input[name="name"]').val()==''){
	        	mui.toast("原料名称不能为空");
	        	return false;
	        }
	        if($('input[name="price"]').val()==''){
	        	mui.toast("原料价格不能为空");
	        	return false;
	        }
	        if($('input[name="num"]').val()==''){
	        	mui.toast("原料数量不能为空");
	        	return false;
	        }
	        var self = $(this);
	        $.post(self.attr("action"), self.serialize(), success, "json");
	        return false;
	        function success(ajaxdata){
	        	if(ajaxdata.status==1){
	        		mui.alert(ajaxdata.info.tip);
	        		$('#src-name').val('');
	        		$('#src-price').val('');
	        		$('#src-num').val('');
	        		switch (ajaxdata.info.where) {
	        			case '1':
	        			$("#cf").prepend('<li class="mui-table-view-cell mui-media"><a><div class="mui-media-body"><label style="color:red;">'+ajaxdata.info.name+'</label>　<span style="float:right">下单日期:刚刚</span><p>数量：<input class="inputChange cf_num_chg" id="'+ajaxdata.info.id+'" type="text" name="num" value="'+ajaxdata.info.num+'" style="width:80px;height:30px;text-align:center">　　<span style="float:right">总金额：<input class="inputChange cf_price_chg" type="text" name="'+ajaxdata.info.id+'" value="'+ajaxdata.info.price+'" style="width:80px;height:30px;text-align:center;"></span><br><label>下单：</label>'+ajaxdata.info.username+'　<button name="'+ajaxdata.info.id+'" style="float:right" type="button" class="mui-btn mui-btn-danger mui-pull-right cf_do_del">删除</button><button type="button" class="mui-btn mui-btn-warning cf_do_buy" style="float:right;margin-right:20px" id="'+ajaxdata.info.id+'" name="'+ajaxdata.info.price+'">采购</button></p></div></a></li>');
	        			break;
	        			case '2':
	        			$("#bt").prepend('<li class="mui-table-view-cell mui-media"><a><div class="mui-media-body"><label style="color:red;">'+ajaxdata.info.name+'</label>　<span style="float:right">下单日期:刚刚</span><p>数量：<input class="inputChange bt_num_chg" type="text" id="'+ajaxdata.info.id+'" name="num" value="'+ajaxdata.info.num+'" style="width:80px;height:30px;text-align:center">　　<span style="float:right">总金额：<input class="inputChange bt_price_chg" type="text" name="'+ajaxdata.info.id+'" value="'+ajaxdata.info.price+'" style="width:80px;height:30px;text-align:center;"></span><br><label>下单：</label>'+ajaxdata.info.username+'　<button style="float:right" type="button" class="mui-btn mui-btn-danger mui-pull-right bt_do_del" name="'+ajaxdata.info.id+'">删除</button><button type="button" class="mui-btn mui-btn-warning bt_do_buy" style="float:right;margin-right:20px" id="'+ajaxdata.info.id+'">采购</button></p></div></a></li>');
	        			break;
	        			case '3':
	        			$("#ol").prepend('<li class="mui-table-view-cell mui-media"><a><div class="mui-media-body"><label style="color:red;">'+ajaxdata.info.name+'</label>　<span style="float:right">下单日期:刚刚</span><p>数量：<input class="inputChange ol_num_chg" type="text" id="'+ajaxdata.info.id+'" name="num" value="'+ajaxdata.info.num+'" style="width:80px;height:30px;text-align:center">　　<span style="float:right">总金额：<input class="inputChange ol_price_chg" type="text" name="'+ajaxdata.info.id+'" value="'+ajaxdata.info.price+'" style="width:80px;height:30px;text-align:center;"></span><br><label>下单：</label>'+ajaxdata.info.username+'　<button style="float:right" type="button" class="mui-btn mui-btn-danger mui-pull-right ol_do_del" name="'+ajaxdata.info.id+'">删除</button><button type="button" class="mui-btn mui-btn-warning ol_do_buy" style="float:right;margin-right:20px" id="'+ajaxdata.info.id+'">采购</button></p></div></a></li>');
	        			break;
	        		}

	        	}else{
	        		mui.toast(ajaxdata.info);
	        	}
	        }
	    });

		//显示那个采购单
		$('.whichShow').on('click',function(){
			var name=$(this).attr('name');
			var cf=$('#cf');
			var bt=$('#bt');
			var ol=$('#ol');
			switch (name) {
				case '1':
				cf.css('display','');
				bt.css('display','none');
				ol.css('display','none');
				break;
				case '2':
				cf.css('display','none');
				bt.css('display','');
				ol.css('display','none');
				break;
				case '3':
				cf.css('display','none');
				bt.css('display','none');
				ol.css('display','');
				break;
			}
		});

		//获取动态产生的元素
		//厨房采购操作
		$('#cf').on('click','.cf_do_buy',function(){
			var id=$(this).attr("id");
			var _this=$(this);
			var value=$('#card').html();
			var price=$(this).siblings('span').children().val();
			$.ajax({
				url: "<?php echo U('Buy/cf_do_buy');?>",
				dataType: "json",
				async: true,
				data: {id:id},
				type: "POST",
				success: function(ajaxdata) {
					if(ajaxdata.status==1){
						mui.toast(ajaxdata.info);
						_this.css('display','none');
            			//加上个人采购价格
            			$('#card').html(accAdd(value,price));
            		}else{
            			mui.toast(ajaxdata.info);
            		}
            	},
            	error: function() {
            		alert('网络出错');
            	}
            });
		});

        //厨房删除操作
        $('#cf').on('click','.cf_do_del',function(){
        	var result = confirm('你确定要删除吗？');
        	if(!result) {
        		return 0;
        	}
        	var id=$(this).attr("name");
        	var _this=$(this);
        	$.ajax({
        		url: "<?php echo U('Buy/cf_do_del');?>",
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

        //吧台采购操作
        $('#bt').on('click','.bt_do_buy',function(){
        	var id=$(this).attr("id");
        	var value=$('#card').html();
        	var price=$(this).siblings('span').children().val();
        	var _this=$(this);
        	$.ajax({
        		url: "<?php echo U('Buy/bt_do_buy');?>",
        		dataType: "json",
        		async: true,
        		data: {id:id},
        		type: "POST",
        		success: function(ajaxdata) {
        			if(ajaxdata.status==1){
        				mui.toast(ajaxdata.info);
        				$('#card').html(accAdd(value,price));
        				_this.css('display','none');
        			}else{
        				mui.toast(ajaxdata.info);
        			}
        		},
        		error: function() {
        			alert('网络出错');
        		}
        	});
        });

        //厨房删除操作
        $('#bt').on('click','.bt_do_del',function(){
        	var result = confirm('你确定要删除吗？');
        	if(!result) {
        		return 0;
        	}
        	var id=$(this).attr("name");
        	var _this=$(this);
        	$.ajax({
        		url: "<?php echo U('Buy/bt_do_del');?>",
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

        //网购采购操作
        $('#ol').on('click','.ol_do_buy',function(){
        	var id=$(this).attr("id");
        	var value=$('#card').html();
        	var price=$(this).siblings('span').children().val();
        	var _this=$(this);
        	$.ajax({
        		url: "<?php echo U('Buy/ol_do_buy');?>",
        		dataType: "json",
        		async: true,
        		data: {id:id},
        		type: "POST",
        		success: function(ajaxdata) {
        			if(ajaxdata.status==1){
        				mui.toast(ajaxdata.info);
        				$('#card').html(accAdd(value,price));
        				_this.css('display','none');
        			}else{
        				mui.toast(ajaxdata.info);
        			}
        		},
        		error: function() {
        			alert('网络出错');
        		}
        	});
        });

        //网购删除操作
        $('#ol').on('click','.ol_do_del',function(){
        	var result = confirm('你确定要删除吗？');
        	if(!result) {
        		return 0;
        	}
        	var id=$(this).attr("name");
        	var _this=$(this);
        	$.ajax({
        		url: "<?php echo U('Buy/ol_do_del');?>",
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

        //厨房数量更新
        $('#cf').on('mouseleave','.cf_num_chg',function(){
        	var id=$(this).attr("id");
        	var val=$(this).val();
        	var _this=$(this);
        	$.ajax({
        		url: "<?php echo U('Buy/cf_changeNum');?>",
        		dataType: "json",
        		async: true,
        		data: {id:id,value:val},
        		type: "POST",
        		success: function(ajaxdata) {
        			if(ajaxdata.status==1){
        				mui.toast(ajaxdata.info);
        				_this.val(val);
        			}else{
        				mui.toast(ajaxdata.info);
        			}
        		},
        		error: function() {
        			alert('网络出错');
        		}
        	});
        });

		//厨房价格更新
		$('#cf').on('mouseleave','.cf_price_chg',function(){
			var id=$(this).attr("name");
			var val=$(this).val();
			var _this=$(this);
			$.ajax({
				url: "<?php echo U('Buy/cf_changePrice');?>",
				dataType: "json",
				async: true,
				data: {id:id,value:val},
				type: "POST",
				success: function(ajaxdata) {
					if(ajaxdata.status==1){
						mui.toast(ajaxdata.info);
						_this.val(val);
					}else{
						mui.toast(ajaxdata.info);
					}
				},
				error: function() {
					alert('网络出错');
				}
			});
		});

		//吧台数量更新
		$('#bt').on('mouseleave','.bt_num_chg',function(){
			var id=$(this).attr("id");
			var val=$(this).val();
			var _this=$(this);
			$.ajax({
				url: "<?php echo U('Buy/bt_changeNum');?>",
				dataType: "json",
				async: true,
				data: {id:id,value:val},
				type: "POST",
				success: function(ajaxdata) {
					if(ajaxdata.status==1){
						mui.toast(ajaxdata.info);
						_this.val(val);
					}else{
						mui.toast(ajaxdata.info);
					}
				},
				error: function() {
					alert('网络出错');
				}
			});
		});

		//吧台价格更新
		$('#bt').on('mouseleave','.bt_price_chg',function(){
			var id=$(this).attr("name");
			var val=$(this).val();
			var _this=$(this);
			$.ajax({
				url: "<?php echo U('Buy/bt_changePrice');?>",
				dataType: "json",
				async: true,
				data: {id:id,value:val},
				type: "POST",
				success: function(ajaxdata) {
					if(ajaxdata.status==1){
						mui.toast(ajaxdata.info);
						_this.val(val);
					}else{
						mui.toast(ajaxdata.info);
					}
				},
				error: function() {
					alert('网络出错');
				}
			});
		});

		//网购数量更新
		$('#ol').on('mouseleave','.ol_num_chg',function(){
			var id=$(this).attr("id");
			var val=$(this).val();
			var _this=$(this);
			$.ajax({
				url: "<?php echo U('Buy/ol_changeNum');?>",
				dataType: "json",
				async: true,
				data: {id:id,value:val},
				type: "POST",
				success: function(ajaxdata) {
					if(ajaxdata.status==1){
						mui.toast(ajaxdata.info);
						_this.val(val);
					}else{
						mui.toast(ajaxdata.info);
					}
				},
				error: function() {
					alert('网络出错');
				}
			});
		});

		//网购价格更新
		$('#ol').on('mouseleave','.ol_price_chg',function(){
			var id=$(this).attr("name");
			var val=$(this).val();
			var _this=$(this);
			$.ajax({
				url: "<?php echo U('Buy/ol_changePrice');?>",
				dataType: "json",
				async: true,
				data: {id:id,value:val},
				type: "POST",
				success: function(ajaxdata) {
					if(ajaxdata.status==1){
						mui.toast(ajaxdata.info);
						_this.val(val);
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