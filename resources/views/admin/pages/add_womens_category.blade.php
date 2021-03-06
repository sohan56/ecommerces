@extends('admin.admin_master')

@section('content')


 <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> {{ _lang('Add Womens category') }}</h4>
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
                          
                            {!! Form::open(['url' => '/save-womens-category','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post']) !!}
                             @csrf
                                <div class="control-group ">
                                    <label for="firstname" class="control-label">{{ _lang('Category Name') }}</label>
                                    <div class="controls">
                                        <input class="span6 " id="" name="wcategory_name" type="text" required />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="lastname" class="control-label">{{ _lang('Category Description') }}</label>
                                    <div class="controls">
                                        
                                        <textarea class="span6 " id="" name="wcategory_description" type="text" required></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="" class="control-label">{{ _lang('Publication Status') }}</label>
                                    <div class="controls">

                                        
                                        <select class="span6 "  style="" name="publication_status" required>
                                            
                                           
                                            <option value="1">{{ _lang('publish') }}</option>
                                            <option value="0">{{ _lang('Unpublish') }}</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button class="btn btn-success" type="submit">{{ _lang('Save') }}</button>
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