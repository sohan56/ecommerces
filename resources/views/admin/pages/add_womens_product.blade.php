@extends('admin.admin_master')

@section('content')


 <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> {{ _lang('Add Womens product') }}</h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <h3 style="color: green">
                             <?php
                             $message=Session::get('message');
                             if ($message)
                              {
                                echo $message;
                                Session::put('message','');
                             }



                             ?>
                             </h3>
                          
                            {!! Form::open(['url' => '/save-womens-product','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype'=>'multipart/form-data']) !!}
                             @csrf
                                <div class="control-group ">
                                    <label for="firstname" class="control-label">{{ _lang('Product Name') }}</label>
                                    <div class="controls">
                                        <input class="span6 " id="" name="wproduct_name" type="text" required />
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label for="firstname" class="control-label">{{ _lang('Category name') }}</label>
                                    <div class="controls">
                                        <select class="span6 "  style="" name="wcategory_id" required>
                                            
                                            <option value="">Select Category Name</option>
                                            @foreach($wcategory_info as $v_wcategory)
                                            <option value="{{$v_wcategory->wcategory_id}}">{{$v_wcategory->wcategory_name}}</option>
                                            
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                 

                                <div class="control-group ">
                                    <label for="lastname" class="control-label">{{ _lang('Product Short Description') }}</label>
                                    <div class="controls">
                                        
                                        <textarea class="span6 " id="" name="wproduct_short_description" type="text" required></textarea>
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="lastname" class="control-label">{{ _lang('Product Long Description') }}</label>
                                    <div class="controls">
                                        
                                        <textarea class="span6 " id="" name="wproduct_long_description" type="text" required></textarea>
                                    </div>
                                </div>

                               

                                <div class="control-group ">
                                    <label for="firstname" class="control-label">{{ _lang('Product Quantity') }}</label>
                                    <div class="controls">
                                        <input class="span6 " id="" name="wproduct_qty" type="text" required />
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    <label for="firstname" class="control-label">{{ _lang('Product Price') }}</label>
                                    <div class="controls">
                                        <input class="span6 " id="" name="wproduct_price" type="text" required />
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    <label for="lastname" class="control-label">{{ _lang('product Image') }}</label>
                                    <div class="controls">
                                        
                                        <input type="file" name="wproduct_img" required>
                                    </div>
                                </div>


                                <div class="control-group">
                                    <label for="" class="control-label">{{ _lang('Publication Status') }}</label>
                                    <div class="controls">

                                        
                                        <select class="span6 "  style="" name="publication_status" required>
                                            
                                            <option value="">{{ _lang('Select Status') }}</option>
                                            <option value="1">{{ _lang('publish') }}</option>
                                            <option value="0">{{ _lang('Unpublish') }}</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button class="btn btn-success" type="submit">{{ _lang('Save product') }}</button>
                                    <button class="btn" type="reset">{{ _lang('Cancel') }}</button>
                                </div>
                                {!! Form::close() !!}

                           <!-- </form>-->
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>

            @endsection