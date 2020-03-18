@extends('admin.admin_master')

@section('content')


 <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> {{ _lang('Edit mens category') }}</h4>
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
                          
                            {!! Form::open(['url' => '/update-mens-category','name'=>'edit_mens_category','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post','enctype'=>'multipart/form-data']) !!}
                             @csrf

                              
                                <div class="control-group ">
                                    <label for="firstname" class="control-label">{{ _lang('Category Name') }}</label>
                                    <div class="controls">
                                        <input class="span6 " id="" name="category_name" type="text" required value="{{$category_info->category_name}}" />
                                        <input class="span6 " id="" name="category_id" type="hidden" value="{{$category_info->category_id}}" />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="lastname" class="control-label">{{ _lang('Category Description') }}</label>
                                    <div class="controls">
                                        
                                        <textarea class="span6 " id="" name="category_description" type="text" required >{{$category_info->category_description}}</textarea>
                                    </div>
                                </div>
                               

                                 <div class="control-group">
                                    <label for="" class="control-label">Publication Status</label>
                                    <div class="controls">

                                        
                                        <select class="span6 "  style="" name="publication_status" required>
                                            
                                            
                                            <option value="1">publish</option>
                                            <option value="0">Unpublish</option>
                                            
                                        </select>
                                    </div>
                                </div>


                               

                                <div class="form-actions">
                                    <button class="btn btn-success" type="submit">{{ _lang('Update Category') }}</button>
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

                document.forms['edit_mens_category'].elements['publication_status'].value='<?php echo $category_info->publication_status ?>';
               
            </script>

            @endsection