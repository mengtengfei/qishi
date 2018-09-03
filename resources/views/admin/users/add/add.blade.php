@extends('Admin.public.public')
@section('bodys')
<html>
 <head></head>

 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-ok"></i> 管理员添加</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <form id="mws-validate" class="mws-form" action="/qishiadmin/users" novalidate="novalidate" method="post"> 
     <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div> 
     <div class="mws-form-inline"> 
       <div class="mws-form-row"> 
       <label class="mws-form-label">管理员名称</label> 
       <div class="mws-form-item"> 
        <input type="text" name="u_name" class="required large" value="{{old('u_name')}}" /> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">管理员账号</label> 
       <div class="mws-form-item"> 
        <input type="text" name="u_account" class="required large" value="{{old('u_name')}}" /> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">密码</label> 
       <div class="mws-form-item"> 
        <input type="password" name="u_pass" class="required email large" /> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">确认密码</label> 
       <div class="mws-form-item"> 
        <input type="password" name="u_repass" class="required url large" /> 
       </div> 
      </div>
      <div class="mws-form-row"> 
       <label class="mws-form-label">联系电话</label> 
       <div class="mws-form-item"> 
        <input type="text" name="u_tel" class="required url large" /> 
       </div> 
      </div>
     <div class="mws-form-row"> 
       <label class="mws-form-label">权限备注</label> 
       <div class="mws-form-item"> 
        <input type="text" name="u_note" class="required url large" /> 
       </div> 
      </div>
     
      
     </div> 
     {{csrf_field()}}
     <div class="mws-button-row"> 
      <input type="submit" class="btn btn-danger" /> 
     </div> 
    </form> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section('title','管理员添加')