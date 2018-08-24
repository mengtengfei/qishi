@extends('admin.public.public')
@section('bodys')
<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>Block Form</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="form_layouts.html">
                    		<div class="mws-form-row">
                    				<label class="mws-form-label">栏目级别</label>
                    				<div class="mws-form-item">
                    					<select class="large">
                    						<option value="0">--请选择--</option>
                    						@foreach($column as $val)
                    							<option>
                    								@for($i=0;$i<substr_count($val->c_path,',');$i++)
                    									|—
                    								@endfor
                    								
                    								{{$val->c_name}}
                    							</option>
                    						@endforeach
                    					</select>
                    				</div>
                    			</div>
                    		
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">栏目名称</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="large">
                    				</div>
                    			</div>
                    		</div>
                    		<div class="mws-button-row">
                    			<input type="submit" value="确定" class="btn btn-danger">
                    			<input type="reset" value="重置" class="btn ">
                    		</div>
                    	</form>
                    </div>
                </div>
@endsection