<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">

<link href="/admin/login/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/admin/login/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="/admin/login/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/admin/b/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/b/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admin/b/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/b/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/b/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admin/b/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/b/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/b/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admin/b/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admin/b/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/b/jui/jquery-ui.custom.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/b/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/b/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/b/css/my.css" media="screen">
<title>后台登录</title>

</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />

<div class="loginWraper">

  <div id="loginform" class="loginBox">


   @if(session('error'))    
                        <div class="mws-form-message warning">
                                {{session('error')}}
                        </div>
                    @endif
    <form class="form form-horizontal" action="/qishiadmin/login" method="post">
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-xs-8">
          <input name="u_account" type="text" placeholder="账号" class="input-text size-L"><span></span>
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-xs-8">
          <input name="u_pass" type="password" placeholder="密码" class="input-text size-L">
        </div>
      </div>
     <!--  <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input class="input-text size-L" type="text" placeholder="验证码" onblur="if(this.value==''){this.value='验证码:'}" onclick="if(this.value=='验证码:'){this.value='';}" value="验证码:" style="width:150px;">
          <img src=""> <a id="kanbuq" href="javascript:;">看不清，换一张</a> </div>
      </div> -->
     <!--  <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <label for="online">
            <input type="checkbox" name="online" id="online" value="">
            使我保持登录状态</label>
        </div>
      </div> -->
      {{csrf_field()}}
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
          
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">Copyright 琪时科技有限公司</div>


</body>
</html>