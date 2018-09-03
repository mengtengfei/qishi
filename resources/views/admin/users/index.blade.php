@extends('Admin.public.public')
@section('bodys')
<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>管理员列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid"> 
     <form action="" method="get">
     <div class="dataTables_filter" id="DataTables_Table_1_filter"> 
      <label><input type="text" aria-controls="DataTables_Table_1" name="keyword" value="{{$request['keyword'] or ''}}" /><input type="submit" class="btn btn-info" value="搜索"></label>
     </div>
     </form> 
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row"> 
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 46px;" aria-label="Rendering engine: activate to sort column ascending">ID</th> 
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 181.006px;" aria-label="Browser: activate to sort column ascending">管理员名称</th>
         <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 181.006px;" aria-label="Browser: activate to sort column ascending">管理员账号</th>  
         <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 166.006px;" aria-label="Platform(s): activate to sort column ascending">联系方式</th>
        
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 166.006px;" aria-label="Platform(s): activate to sort column ascending">权限备注</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 166.006px;" aria-label="Platform(s): activate to sort column ascending">添加时间</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 166.006px;" aria-label="Platform(s): activate to sort column ascending">状态</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 187.006px;" aria-label="Engine version: activate to sort column ascending">操作</th>
       
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      	@foreach($user as $row)
       <tr class="odd"> 
        <td class="">{{$row->u_id}}</td> 
        <td class="">{{$row->u_name}}</td> 
        <td class="">{{$row->u_account}}</td>
        <td class="">{{$row->u_tel}}</td>
        <td class="">{{$row->u_note}}</td>
        <td class="">{{date('Y-m-d',$row->u_time)}}</td>

        <td class="">@if($row->u_status == 0)
                      <div style="color: red">已注销</div>
                    @elseif($row->u_status == 1)
                    <div style="color: green">正在使用</div>
                    @endif
        </td>
        <td class=""><form action="/qishiadmin/users/{{$row->u_id}}" method="post">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <button class="btn btn-info" style="float: left;">删除</button>
        </form><a href="/qishiadmin/{{$row->u_id}}/edit" class="btn btn-info" style="float: left;">修改</a><a href="/qishiadmin/node/auth/{{$row->u_id}}" class="btn btn-info">分配权限</a></td> 
       </tr>
       @endforeach
       
      </tbody>
     </table>
     
     <div class="dataTables_paginate paging_full_numbers" id="pages">
      {{$user->appends($request)->render()}}
     </div>
    </div> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section('title','管理员列表')