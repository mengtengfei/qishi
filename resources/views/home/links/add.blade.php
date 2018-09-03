@extends('home.public.public')
@section('bodys')
<div class="container love-flowers clearfix">
<form action="/" method="post">
  <div class="container inquiry">
    <div class="inquiry-title">
     
      <h3><span>链接申请</span></h3>
    </div>
    <div class="inquiry-con">
      <label><input type="text" name="l_name" class="pro-name" placeholder="请输入网站名字"><span>*</span></label>
      <label><input type="text" name="l_url" class="pro-name" value="http://"><span>*</span></label>
      <label><input type="text" name="l_username" class="pro-name" placeholder="申请人"><span>*</span></label>
      <label><input type="text" name="l_tel" class="pro-name" placeholder="联系方式"><span>*</span></label>
      <label class="content-la"><textarea class="pro-name" name="l_title" placeholder="网站简介"></textarea><span>*</span></label>
      <!-- <label class="code-la clearfix"><input type="text" class="code" value="验证码" /><img src="images/codeimg.jpg" alt="" /><a href="#">看不清？换一张</a></label> -->
     {{csrf_field()}}
      
      <label class="sub"><input type="submit" value="提交"></label>
    </div>
  </div>
</form>
</div>


@endsection