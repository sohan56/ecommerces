 @extends('admin.admin_master')

@section('content')
  <div class="row-fluid">
                <!--BEGIN METRO STATES-->
                <div class="metro-nav">
                     <?php 
                     $all_customer = DB::table('tbl_customer')
                                     ->orderBy('coustomer_id','desc')
                                     ->limit(1)
                                     
                                     ->get();
                        ?>
                    <div class="metro-nav-block nav-block-orange">
                        <a data-original-title="" href="#">
                            <i class="icon-user"></i>
                        @foreach($all_customer as $v_customer)
                            <div class="info">{{$v_customer->coustomer_id}}</div>
                            @endforeach
                            <div class="status">{{ _lang('Total Customer') }}</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-yellow">
                        <a data-original-title="" href="#">
                            <i class="icon-tags"></i>
                            <div class="info">+970</div>
                            <div class="status">{{ _lang('Sales') }}</div>
                        </a>
                    </div>

                    <div class="metro-nav-block nav-block-blue double">
                        <a data-original-title="" href="#">
                            <i class="icon-eye-open"></i>
                            <div class="info">+897</div>
                            <div class="status">{{ _lang('Unique Visitor') }}</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-red">
                        <a data-original-title="" href="#">
                            <i class="icon-bar-chart"></i>
                            <div class="info">+288</div>
                            <div class="status">{{ _lang('Update') }}</div>
                        </a>
                    </div>
                </div>
                <div class="metro-nav">
                    <div class="metro-nav-block nav-block-blue">
                        <a data-original-title="" href="#">
                            <i class="icon-shopping-cart"></i>
                            <div class="info">29</div>
                            <div class="status">{{ _lang('New Order') }}</div>
                        </a>
                    </div>
                   
                    <div class="metro-nav-block nav-block-orange">
                        <a data-original-title="" href="#">
                            <i class="icon-envelope"></i>
                            <div class="info">123</div>
                            <div class="status">{{ _lang('Messages') }}</div>
                        </a>
                    </div>
                    

                
                <div class="space10"></div>
                <!--END METRO STATES-->
            </div>
            @endsection