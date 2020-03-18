@extends('admin.admin_master')

@section('content')


<div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget purple">
                         <div class="widget-title">
                             <h4><i class="icon-reorder"></i> {{ _lang('View All Customers') }}</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                         </div>
                         <div class="widget-body">
                             <div>
                                 <div class="clearfix">
                                     
                                     <div class="col-md-5" align="right">
                                        <a href="{{ url('dynamic_pdf/pdf') }}" class="btn btn-danger">Convert into PDF</a>
                                     </div>
                                 </div>
                                 <div class="space15"></div>
                                 <div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row-fluid"><div class="span6"></div></div>
                                 <table class="table table-striped table-hover table-bordered dataTable" id="editable-sample" aria-describedby="editable-sample_info">
                                     <thead>
                                     <tr role="row">
                                        <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Username" style="width: 193px;">{{ _lang('Customer No') }} :</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column ascending" style="width: 288px;">{{ _lang('Customer Name') }}</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Points: activate to sort column ascending" style="width: 128px;">{{ _lang('Customer Email') }}</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Notes: activate to sort column ascending" style="width: 184px;">{{ _lang('Mobile No') }}</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Notes: activate to sort column ascending" style="width: 184px;">{{ _lang('Country') }}</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="editable-sample" rowspan="1" colspan="1" aria-label="Notes: activate to sort column ascending" style="width: 184px;">{{ _lang('City') }}</th>
                                        
                                    </tr>
                                     </thead>
                                     
                                 <tbody role="alert" aria-live="polite" aria-relevant="all">
                                    @foreach($all_customer as $v_customer)
                                    <tr class="odd ">
                                         <td class="  sorting_1">{{$v_customer->coustomer_id}}</td>
                                         <td class=" ">{{$v_customer->customer_name}}</td>
                                         <td class=" ">{{$v_customer->email_address}}</td>
                                         <td class=" ">{{$v_customer->mobile_number}}</td>
                                         <td class=" ">{{$v_customer->country}}</td>
                                         <td class=" ">{{$v_customer->city}}</td>
                                         
                                         <td class="center ">
                                            
                                            <a href="{{URL::to('/delete-customer',$v_customer->coustomer_id)}}" class="btn btn-danger" onclick="return checkDelete()"><i class="icon-trash"></i></a>

                                         </td>
                                         
                                     </tr>
                                     @endforeach
                                     
                                 </tbody>
                             </table>
                             <div class="row-fluid">
                                <div class="span6">
                                    <div class="dataTables_info" id="editable-sample_info">Showing 1 to 5 of 12 entries</div>
                                </div>
                                <div class="span6">
                                    <div class="dataTables_paginate paging_bootstrap pagination">
                                        <ul><li class="prev disabled"><a href="#">? Prev</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li class="next"><a href="#">Next ? </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                             </div>
                         </div>
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
                 </div>
             </div>


                 @endsection