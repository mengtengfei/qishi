@extends('Admin.public.public')
@section('bodys')
<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>分配权限</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/qishiadmin/node/save" method="post">

                    		
                    		
                    			<div class="mws-form-row">

                    				<label class="mws-form-label"><span style="color: red; font-size: 23px;">{{$user->u_name}}</span>用户--权限分配---</label>
                    				<div class="mws-form-item clearfix">
                    					<ul class="mws-form-list">
                    						@foreach($node as $row)
                    						<li><input type="checkbox" name="nids[]" value="{{$row->n_id}}" @if(in_array($row->n_id,$nids)) checked @endif > <label>{{$row->n_name}}</label></li>
                    						@endforeach
                    					</ul>
                    				</div>
                    			</div>
                    			
                  			{{csrf_field()}}
                  			<input type="hidden" name="uids" value="{{$user->u_id}}">
                    		<div class="mws-button-row">
                    			<input type="submit" value="Submit" class="btn btn-danger">
                    			
                    		</div>
                    	</form>
                    </div>
                </div>
@endsection 
@section('title','分配权限')