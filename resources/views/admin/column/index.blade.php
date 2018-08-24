@extends('admin.public.public')
@section('bodys')
<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i>栏目列表</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
                        	<div id="DataTables_Table_1_length" class="dataTables_length">
                        		<label>Show <select size="1" name="DataTables_Table_1_length" aria-controls="DataTables_Table_1">
                        			<option value="10" selected="selected">10</option>
                        			<option value="25">25</option>
                        			<option value="50">50</option>
                        			<option value="100">100</option>
                        		</select> entries</label>
                        	</div>
                        	<div class="dataTables_filter" id="DataTables_Table_1_filter">
                        		<label>Search: <input type="text" aria-controls="DataTables_Table_1"></label></div>
                        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                            <thead>
                                <tr role="row">
                                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 136px;" aria-label="Rendering engine: activate to sort column ascending">Rendering engine</th>
                                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 181.006px;" aria-label="Browser: activate to sort column ascending">Browser</th>
                                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 166.006px;" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 117.006px;" aria-label="Engine version: activate to sort column ascending">Engine version</th><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 86.0057px;" aria-sort="ascending" aria-label="CSS grade: activate to sort column descending">CSS grade</th></tr>
                            </thead>
                            
                        <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                                    <td class="">Misc</td>
                                    <td class="">NetFront 3.4</td>
                                    <td class="">Embedded devices</td>
                                    <td class="">-</td>
                                    <td class="  sorting_1">A</td>
                                </tr><tr class="even">
                                    <td class="">Gecko</td>
                                    <td class="">Epiphany 2.20</td>
                                    <td class="">Gnome</td>
                                    <td class="">1.8</td>
                                    <td class="  sorting_1">A</td>
                                </tr><tr class="odd">
                                    <td class="">Webkit</td>
                                    <td class="">iPod Touch / iPhone</td>
                                    <td class="">iPod</td>
                                    <td class="">420.1</td>
                                    <td class="  sorting_1">A</td>
                                </tr><tr class="even">
                                    <td class="">KHTML</td>
                                    <td class="">Konqureror 3.3</td>
                                    <td class="">KDE 3.3</td>
                                    <td class="">3.3</td>
                                    <td class="  sorting_1">A</td>
                                </tr><tr class="odd">
                                    <td class="">KHTML</td>
                                    <td class="">Konqureror 3.5</td>
                                    <td class="">KDE 3.5</td>
                                    <td class="">3.5</td>
                                    <td class="  sorting_1">A</td>
                                </tr><tr class="even">
                                    <td class="">Presto</td>
                                    <td class="">Nokia N800</td>
                                    <td class="">N800</td>
                                    <td class="">-</td>
                                    <td class="  sorting_1">A</td>
                                </tr><tr class="odd">
                                    <td class="">Gecko</td>
                                    <td class="">Camino 1.0</td>
                                    <td class="">OSX.2+</td>
                                    <td class="">1.8</td>
                                    <td class="  sorting_1">A</td>
                                </tr><tr class="even">
                                    <td class="">Webkit</td>
                                    <td class="">Safari 1.2</td>
                                    <td class="">OSX.3</td>
                                    <td class="">125.5</td>
                                    <td class="  sorting_1">A</td>
                                </tr><tr class="odd">
                                    <td class="">Webkit</td>
                                    <td class="">Safari 1.3</td>
                                    <td class="">OSX.3</td>
                                    <td class="">312.8</td>
                                    <td class="  sorting_1">A</td>
                                </tr><tr class="even">
                                    <td class="">Gecko</td>
                                    <td class="">Camino 1.5</td>
                                    <td class="">OSX.3+</td>
                                    <td class="">1.8</td>
                                    <td class="  sorting_1">A</td>
                                </tr></tbody></table><div class="dataTables_info" id="DataTables_Table_1_info">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate"><a tabindex="0" class="first paginate_button paginate_button_disabled" id="DataTables_Table_1_first">First</a><a tabindex="0" class="previous paginate_button paginate_button_disabled" id="DataTables_Table_1_previous">Previous</a><span><a tabindex="0" class="paginate_active">1</a><a tabindex="0" class="paginate_button">2</a><a tabindex="0" class="paginate_button">3</a><a tabindex="0" class="paginate_button">4</a><a tabindex="0" class="paginate_button">5</a></span><a tabindex="0" class="next paginate_button" id="DataTables_Table_1_next">Next</a><a tabindex="0" class="last paginate_button" id="DataTables_Table_1_last">Last</a></div></div>
                    </div>
                </div>
@endsection