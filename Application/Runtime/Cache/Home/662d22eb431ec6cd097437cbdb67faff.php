<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="ui-page-login">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>登录</title>
    <link href="/Public/css/mui.min.css" rel="stylesheet" />
    <link href="/Public/css/style.css" rel="stylesheet" />
    <style>
      .mui-input-group{
        background-color: rgba(248 ,248 ,255,0.4);
      }
      .area {
        margin: 20px auto 0px auto;
      }
      .mui-input-group {
        margin-top: 10px;
      }
      .mui-input-group:first-child {
        margin-top: 20px;
      }
      .mui-input-group label {
        width: 22%;
      }
      .mui-input-row label~input,
      .mui-input-row label~select,
      .mui-input-row label~textarea {
        width: 78%;
      }
      .mui-checkbox input[type=checkbox],
      .mui-radio input[type=radio] {
        top: 6px;
      }
      .mui-content-padded {
        margin-top: 25px;
      }
      .mui-btn {
        padding: 10px;
      }
      .link-area {
        display: block;
        margin-top: 25px;
        text-align: center;
      }
      .spliter {
        color: #bbb;
        padding: 0px 8px;
      }
      .oauth-area {
        position: absolute;
        bottom: 20px;
        left: 0px;
        text-align: center;
        width: 100%;
        padding: 0px;
        margin: 0px;
      }
      .oauth-area .oauth-btn {
        display: inline-block;
        width: 50px;
        height: 50px;
        background-size: 30px 30px;
        background-position: center center;
        background-repeat: no-repeat;
        margin: 0px 20px;
        /*-webkit-filter: grayscale(100%); */
        border: solid 1px #ddd;
        border-radius: 25px;
      }
      .oauth-area .oauth-btn:active {
        border: solid 1px #aaa;
      }
      .oauth-area .oauth-btn.disabled {
        background-color: #ddd;
      }
      .mui-title,.mui-action-back{
        color:white;
      }
      .mui-bar{
        background:rgba(96,56,17,1);
      }
      #code{
          position: fixed;
          z-index: 1;
      }
      #imgcode{
       position: relative;
       z-index: 10;
       float: right;
       margin-right: 5px;
       margin-bottom: 10px;
     }
     #login{
      margin-top: 30px;
     }
     .mui-action-back{
      font-size: 10px;

     }
     .inputFont{
      font-size:13px;
     }
     .mui-btn-block{
      background:rgba(96,56,17,1);
      color: white;
     }
    </style>
  </head>
  <body>
    <header class="mui-bar mui-bar-nav">
      <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" href="<?php echo U('Index/index');?>"></a>
      <h1 class="mui-title">欢迎登陆</h1>
    </header>
    <div class="mui-content">
      <form id='login_form' class="mui-input-group" method="post" action="<?php echo U('Index/index');?>">
        <div class="mui-input-row">
          <label>账号</label>
          <input id='account' name="username" type="text" class="mui-input-clear mui-input inputFont" placeholder="请输入账号">
        </div>
        <div class="mui-input-row">
          <label>密码</label>
          <input id='password' name="password" type="password" class="mui-input-clear mui-input inputFont" placeholder="请输入密码">
        </div>
        <div class="mui-input-row" id="codeDiv" style="margin:8px auto">
        <input id='code' name="code" type="text" class="mui-input-clear mui-input code inputFont" placeholder="请输入验证码">
          <img src="<?php echo U('Public/code');?>" id="imgcode" onclick="this.src=this .src+'?'+Math.random" />
        </div>
        <div class="mui-content-padded">
          <button type="submit" class="mui-btn mui-btn-block">登录</button>
        </div>
      </form>
      <div class="mui-content-padded">
        <div class="link-area"><a id="reg_dump" style="color:rgba(96,56,17,1)" href="<?php echo U('Index/register');?>">注册账号</a> <span class="spliter fontColor">|</span> <a id='forgetPassword' style="color:rgba(96,56,17,1)">忘记密码</a>
        </div>
      </div>
    </div>
    <script src="/Public/js/jquery-1.11.2.min.js"></script>
    <script src="/Public/js/mui.min.js"></script>
    <script>
      $(document).ready(function(){
        //登录
        $("#login_form").submit(function(e){
          var self = $(this);
          $.post(self.attr("action"), self.serialize(), success, "json");
          return false;
          function success(ajaxdata){
            if(ajaxdata.status==1){
              alert(ajaxdata.info);
              //跳转到用户页面
              window.location.href="<?php echo U('Main/index');?>";
            }else{
              mui.toast(ajaxdata.info);
              //自动更新验证码
              var imgattr=$("#imgcode").attr("src");
              $("#imgcode").attr("src",imgattr+'?'+Math.random);
            }
          }
        });
      });
    </script>
  </body>
</html>