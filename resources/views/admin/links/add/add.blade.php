@extends('admin.public.public')

@section('bodys')
<html>
 <head></head>

 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-ok"></i> 链接添加</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <form id="mws-validate" class="mws-form" action="/qishiadmin/links" novalidate="novalidate" method="post"> 
     <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div> 
     <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">链接名字</label> 
       <div class="mws-form-item"> 
        <input type="text" name="l_name" class="required large" /> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">链接路由</label> 
       <div class="mws-form-item"> 
        <input type="text" name="l_url" class="required email large" value="http://" /> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">链接申请人</label> 
       <div class="mws-form-item"> 
        <input type="text" name="l_username" class="required url large" /> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">联系方式</label> 
       <div class="mws-form-item"> 
        <input type="text" name="l_tel" class="required url large" /> 
       </div> 
      </div>  
      <div class="mws-form-row"> 
       <label class="mws-form-label">链接状态</label> 
       <div class="mws-form-item"> 
        <ul class="mws-form-list"> 
        <!--  <li><input id="gender_male" type="radio" name="l_state" class="required" value="2" /> <label for="gender_male">待审核</label></li>  -->
         <li><input id="gender_female" type="radio" name="l_state" value="1" /> <label for="gender_female">展示</label></li> 
         <li><input id="gender_female" type="radio" name="l_state" value="0" /> <label for="gender_female">下架</label></li> 
        </ul> 
        <label for="gender" class="error plain" generated="true" style="display:none"></label> 
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
@section('title','链接添加')