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
                          
                            {!! Form::open(['url' => '/update-mens-product','name'=>'edit_mproduct','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype'=>'multipart/form-data']) !!}
                             @csrf

                                <div class="control-group ">
                                    <label for="firstname" class="control-label">{{ _lang('Product Name') }}</label>
                                    <div class="controls">
                                        <input class="span6 " id="" name="mproduct_name" type="text" value="{{$mproduct_info->mproduct_name}}" required />
                                        <input class="span6 " id="" name="mproduct_id" type="hidden" value="{{$mproduct_info->mproduct_id}}" />
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label for="firstname" class="control-label">{{ _lang('Category name') }}</label>
                                    <div class="controls">
                                        <select class="span6 "  style="" name="category_id" required>
                                            
                                            <option value="">{{ _lang('Select Category Name') }}</option>
                                            @foreach($category_info as $v_category)
                                            <option value="{{$v_category->category_id}}">{{$v_category->category_name}}</option>
                                            
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                


                                <div class="control-group ">
                                    <label for="lastname" class="control-label">{{ _lang('Product Long Description') }}</label>
                                    <div class="controls">
                                        
                                        <textarea class="span6 " id="" name="mproduct_long_description" type="text" required >{{$mproduct_info->mproduct_long_description}}</textarea>
                                    </div>
                                </div>

                               

                                <div class="control-group ">
                                    <label for="firstname" class="control-label">{{ _lang('Product Quantity') }}</label>
                                    <div class="controls">
                                        <input class="span6 " id="" name="mproduct_qty" type="text" value="{{$mproduct_info->mproduct_qty}}" required />
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    <label for="firstname" class="control-label">{{ _lang('Product Price') }}</label>
                                    <div class="controls">
                                        <input class="span6 " id="" name="mproduct_price" type="text" value="{{$mproduct_info->mproduct_price}}" required />
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    <label for="lastname" class="control-label">{{ _lang('product Image') }}</label>
                                    <div class="controls">
                                      <input type="file" name="mproduct_img" required> <span><img src="{{asset($mproduct_info->mproduct_img)}}" width="50" height="50"  ></span>
                                        
                                        <input type="hidden" name="old_mproduct_img" value="{{$mproduct_info->mproduct_img}}">
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

                document.forms['edit_mproduct'].elements['publication_status'].value='<?php echo $mproduct_info->publication_status ?>';
                document.forms['edit_mproduct'].elements['category_id'].value='<?php echo $mproduct_info->category_id ?>';
            </script>

            @endsection