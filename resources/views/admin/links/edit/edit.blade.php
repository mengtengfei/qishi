@extends('Admin.public.public')
@section('bodys')
<html>
 <head></head>
 
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-ok"></i> 链接修改</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <form id="mws-validate" class="mws-form" action="/qishiadmin/links/{{$data->l_id}}" novalidate="novalidate" method="post"> 
     <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div> 
     <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">链接名字</label> 
       <div class="mws-form-item"> 
        <input type="text" name="l_name" class="required large" value="{{$data->l_name}}" /> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">链接路由</label> 
       <div class="mws-form-item"> 
        <input type="text" name="l_url" class="required email large" value="{{$data->l_url}}" /> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">链接申请人</label> 
       <div class="mws-form-item"> 
        <input type="text" name="l_username" class="required url large" value="{{$data->l_username}}" /> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">联系方式</label> 
       <div class="mws-form-item"> 
        <input type="text" name="l_tel" class="required url large" value="{{$data->l_tel}}" /> 
       </div> 
      </div>  
     {{method_field('PUT')}}
     {{csrf_field()}}
     <div class="mws-button-row"> 
      <input type="submit" class="btn btn-danger" value="修改" /> 
     </div> 
    </form> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section('title','链接修改')