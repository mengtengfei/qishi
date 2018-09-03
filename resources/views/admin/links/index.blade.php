@extends('admin.public.public')
@section('bodys')
<html>
 <head></head>

 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i> 友情链接列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
     <!-- <div id="DataTables_Table_1_length" class="dataTables_length">
      <label>Show <select size="1" name="DataTables_Table_1_length" aria-controls="DataTables_Table_1"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label>
     </div> -->
     <form action="/qishiadmin/links" method="get">
     <div class="dataTables_filter" id="DataTables_Table_1_filter">
      <label><input type="text" aria-controls="DataTables_Table_1" name="keyword" value="{{$request['keyword'] or ''}}"/><input type="submit" class="btn btn-info" value="搜索" ></label>
     </div>
     </form>
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 170px;">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 226px;">链接名字</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 170px;">地址</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 148px;">添加时间</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 131px;">申请人</th>
         <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 131px;">联系方式</th>
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 181px;">状态</th>
           <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 181px;">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      	@foreach($data as $row)
       <tr class="odd"> 
        <td class="  sorting_1">{{$row->l_id}}</td> 
        <td class=" ">{{$row->l_name}}</td> 
        <td class=" ">{{$row->l_url}}</td> 
        <td class=" ">{{date('Y-m-d',$row->l_time)}}</td> 
        <td class=" ">{{$row->l_username}}</td>
        <td class=" ">{{$row->l_tel}}</td>
        <td class=" ">
        	@if($row->l_state==1)
        		展示中
        		<a href="/qishiadmin/links/{{$row->l_id}}" class="btn btn-info" style="float: right;">下架</a>
        	@elseif($row->l_state==2)
        		待审核
        		<a href="/qishiadmin/links/{{$row->l_id}}" class="btn btn-info" style="float: right;">展示</a>
        	@elseif($row->l_state==0)
        		下架
        		<a href="/qishiadmin/links/{{$row->l_id}}" class="btn btn-info" style="float: right;">展示</a>
        	@endif
        </td>
        <td class=" "><form action="/qishiadmin/links/{{$row->l_id}}" method="post">
        	{{csrf_field()}}
        	{{method_field('DELETE')}}
        	<button class="btn btn-info" style="float: left;">删除</button>
        </form><a href="/qishiadmin/links/{{$row->l_id}}/edit" class="btn btn-info" style="float: left;">修改</a>
        		</td> 
       </tr>
      @endforeach
      </tbody>
     </table>
     <!-- <div class="dataTables_info" id="DataTables_Table_1_info">
      Showing 1 to 10 of 57 entries
     </div> -->
     <div class="dataTables_paginate paging_full_numbers" id="pages">
     {{$data->appends($request)->render()}}
     </div>
    </div> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section('title','链接列表')