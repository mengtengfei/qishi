<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
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

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admin/b/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/b/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/b/css/my.css" media="screen">
<script src="/admin/b/js/libs/jquery-1.8.3.min.js"></script>

<title>@yield('title')</title>
<style type="text/css">
/*分页修改开始*/
    .pagination>li{
        padding: 0px;
        width: 35px;
    }
    .pagination>li>a {
        display: block;
        width: 35px;
    }
    /*分页结束*/
</style>

</head>

<body>
	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<!-- <img src="/admin/b/images/mws-logo.png" alt="mws admin"> -->
                <span style="color:#fff;font-size: 20px;">琪时.com</span>
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
        	
            
           
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="/admin/b/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        你好：{{session('u_name')}}
                    </div>
                    <ul>
                    	
                        <li><a href="#">修改密码</a></li>
                        <li><a href="/login">退出</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        	<!-- Searchbox -->
        	<div id="mws-searchbox" class="mws-inset">

            	<form action="typography.html">
                	<input type="text" class="mws-search-input" placeholder="查看管理员">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                <li>
                    <a href="#"><i class="icon-user"></i> 管理员管理</a>
                        <ul class="closed">
                            <li><a href="/qishiadmin/users">查看管理员</a></li>
                            <li><a href="/qishiadmin/users/create">新增管理员</a></li>
                            
                        </ul>
                    </li>   
                <li>
                    <a href="#"><i class="icon-user"></i> 栏目管理</a>
                        <ul class="closed">
                            <li><a href="/qishiadmin/column">查看栏目</a></li>
                            <li><a href="/qishiadmin/column/create">新增栏目</a></li>
                            
                        </ul>
                    </li>                
                     <li>
                    <a href="#"><i class="icon-user"></i> 友情链接</a>
                        <ul class="closed">
                            <li><a href="/qishiadmin/links">查看链接</a></li>
                            <li><a href="/qishiadmin/links/create">新增链接</a></li>
                            
                        </ul>
                    </li>                
                    
                </ul>
            </div>         
        </div>
        <div id="mws-container" class="clearfix">
        
                <div class="container">
                    @if(session('success'))
                        <div class="mws-form-message success">
                            {{session('success')}}
                        </div>
                    @endif

                    @if(session('error'))    
                        <div class="mws-form-message warning">
                                {{session('error')}}
                        </div>
                    @endif

                    @section('bodys')
                    @show

                               
                    <!-- Panels End -->
                </div>
                <!-- footer -->
                <div id="mws-footer">
                    版权信息
                </div>
        </div>
        
    </div>

    <!-- JavaScript Plugins -->
    
    <script src="/admin/b/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/admin/b/js/libs/jquery.placeholder.min.js"></script>
    <script src="/admin/b/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/admin/b/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/admin/b/jui/jquery-ui.custom.min.js"></script>
    <script src="/admin/b/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/admin/b/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/admin/b/plugins/flot/jquery.flot.min.js"></script>
    <script src="/admin/b/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/admin/b/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/admin/b/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/admin/b/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/admin/b/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/admin/b/plugins/validate/jquery.validate-min.js"></script>
    <script src="/admin/b/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/admin/b/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admin/b/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/admin/b/js/core/themer.js"></script>
    <script src="/admin/b/js/demo/demo.dashboard.js"></script>

</body>
</html>