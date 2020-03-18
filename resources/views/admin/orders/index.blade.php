@extends('admin.admin_master')

@section('content')


<div class="row-fluid">
	<div class="span12">
		<!-- BEGIN EXAMPLE TABLE widget-->
		<div class="widget purple">
			<div class="widget-title">
				<h4><i class="icon-reorder"></i> Orders List</h4>
				<span class="tools">
					<a href="{{ url('orders/export/excel') }}" class="btn btn-success">
						{{ _lang('Export Excel') }}
					</a>
				</span>
			</div>
			<div class="widget-body">
				<div>
					<div class="clearfix">
						
					</div>

					<table class="table table-striped table-hover table-bordered dataTable" id="editable-sample" aria-describedby="editable-sample_info">
						<thead>
							<tr role="row">
								<th>#</th>
								<th>Customer Name</th>
								<th>Amount</th>
								<th>Payment Type</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						
						<tbody role="alert" aria-live="polite" aria-relevant="all">
							@foreach($orders as $order)
							<tr class="odd ">
								<td class="  sorting_1">{{$order->id}}</td>
								<td class=" ">{{$order->customer_name}}</td>
								<td class=" ">{{$order->total_amount}}</td>
								<td class=" ">{{$order->payment_type}}</td>
								<td class=" ">
									@if($order->status==1)
									{{ _lang('Paid') }}
									@elseif($order->status==2)
									{{ _lang('Cancel') }}
									@else
									{{ _lang('Unpaid') }}
									@endif
								</td>
								<td class="center ">
									@if($order->status==0)
									<a href="{{URL::to('orders/status/paid',$order->id)}}" class="btn btn-success" title="{{ _lang('click to paid') }}">
										<i class="icon-thumbs-up"></i>
									</a>
									<a href="{{URL::to('orders/status/cancel',$order->id)}}" class="btn btn-danger" title="{{ _lang('click to cancel order') }}">
										<i class="icon-thumbs-down"></i>
									</a>
									@endif
									<a href="{{URL::to('orders',$order->id)}}" class="btn btn-info" title="{{ _lang('show') }}" target="_blank">
										<i class="icon-download"></i>
									</a>
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