@extends('admin.admin_master')

@section('content')


 <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> {{ _lang('Edit Home Product') }}</h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            
                             </h3>
                          
                            {!! Form::open(['url' => '/update-womens-product','name'=>'edit_wproduct','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype'=>'multipart/form-data']) !!}
                             @csrf

                                <div class="control-group ">
                                    <label for="firstname" class="control-label">{{ _lang('Product Name') }}</label>
                                    <div class="controls">
                                        <input class="span6 " id="" name="wproduct_name" type="text" value="{{$wproduct_info->wproduct_name}}" />
                                        <input class="span6 " id="" name="wproduct_id" type="hidden" value="{{$wproduct_info->wproduct_id}}" />
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label for="firstname" class="control-label">{{ _lang('Category name') }}</label>
                                    <div class="controls">
                                        <select class="span6 "  style="" name="wcategory_id">
                                            
                                            <option value="">{{ _lang('Select Category Name') }}</option>
                                            @foreach($wcategory_info as $v_wcategory)
                                            <option value="{{$v_wcategory->wcategory_id}}">{{$v_wcategory->wcategory_name}}</option>
                                            
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                


                                <div class="control-group ">
                                    <label for="lastname" class="control-label">{{ _lang('Product Long Description') }}</label>
                                    <div class="controls">
                                        
                                        <textarea class="span6 " id="" name="wproduct_long_description" type="text">{{$wproduct_info->wproduct_long_description}}</textarea>
                                    </div>
                                </div>

                               

                                <div class="control-group ">
                                    <label for="firstname" class="control-label">{{ _lang('Product Quantity') }}</label>
                                    <div class="controls">
                                        <input class="span6 " id="" name="wproduct_qty" type="text" value="{{$wproduct_info->wproduct_qty}}" />
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    <label for="firstname" class="control-label">{{ _lang('Product Price') }}</label>
                                    <div class="controls">
                                        <input class="span6 " id="" name="wproduct_price" type="text" value="{{$wproduct_info->wproduct_price}}" />
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    <label for="lastname" class="control-label">{{ _lang('product Image') }}</label>
                                    <div class="controls">
                                      <input type="file" name="wproduct_img"> <span><img src="{{asset($wproduct_info->wproduct_img)}}" width="50" height="50"></span>
                                        
                                        <input type="hidden" name="old_wproduct_img" value="{{$wproduct_info->wproduct_img}}">
                                    </div>
                                </div>

                                 <div class="control-group">
                                    <label for="" class="control-label">Publication Status</label>
                                    <div class="controls">

                                        
                                        <select class="span6 "  style="" name="publication_status">
                                            
                                            <option value="">Select Status</option>
                                            <option value="1">publish</option>
                                            <option value="0">Unpublish</option>
                                            
                                        </select>
                                    </div>
                                </div>


                               

                                <div class="form-actions">
                                    <button class="btn btn-success" type="submit">{{ _lang('Save product') }}</button>
                                    <button class="btn" type="reset">{{ _lang('Cancel')}}</button>
                                </div>
                                {!! Form::close() !!}

                           <!-- </form>-->
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>
             <script type="text/javascript">

                document.forms['edit_wproduct'].elements['publication_status'].value='<?php echo $wproduct_info->publication_status ?>';
                document.forms['edit_wproduct'].elements['wcategory_id'].value='<?php echo $wproduct_info->wcategory_id ?>';
            </script>

            @endsection