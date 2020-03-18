@extends('admin.admin_master')

@section('content')


 <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Advanced form Validation</h4>
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
                          
                            {!! Form::open(['url' => '/save-mens-product','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype'=>'multipart/form-data']) !!}
                             @csrf
                                <div class="control-group ">
                                    <label for="firstname" class="control-label">Product Name</label>
                                    <div class="controls">
                                        <input class="span6 " id="" name="mproduct_name" type="text" required />
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label for="firstname" class="control-label">Category name</label>
                                    <div class="controls">
                                        <select class="span6 "  style="" name="category_id" required>
                                            
                                            <option value="">Select Category Name</option>
                                            @foreach($category_info as $v_category)
                                            <option value="{{$v_category->category_id}}">{{$v_category->category_name}}</option>
                                            
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                 

                                <div class="control-group ">
                                    <label for="lastname" class="control-label">Product Short Description</label>
                                    <div class="controls">
                                        
                                        <textarea class="span6 " id="" name="mproduct_short_description" type="text" required></textarea>
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="lastname" class="control-label">Product Long Description</label>
                                    <div class="controls">
                                        
                                        <textarea class="span6 " id="" name="mproduct_long_description" type="text" required></textarea>
                                    </div>
                                </div>

                               

                                <div class="control-group ">
                                    <label for="firstname" class="control-label">Product Quantity</label>
                                    <div class="controls">
                                        <input class="span6 " id="" name="mproduct_qty" type="text" required />
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    <label for="firstname" class="control-label">Product Price</label>
                                    <div class="controls">
                                        <input class="span6 " id="" name="mproduct_price" type="text" required />
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    <label for="lastname" class="control-label">product Image</label>
                                    <div class="controls">
                                        
                                        <input type="file" name="mproduct_img" required>
                                    </div>
                                </div>


                                <div class="control-group">
                                    <label for="" class="control-label">Publication Status</label>
                                    <div class="controls">

                                        
                                        <select class="span6 "  style="" name="publication_status">
                                            
                                           
                                            <option value="1">publish</option>
                                            <option value="0">Unpublish</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button class="btn btn-success" type="submit">Save product</button>
                                    <button class="btn" type="reset">Cancel</button>
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