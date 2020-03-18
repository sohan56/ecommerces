@extends('admin.admin_master')

@section('content')


<div class="row-fluid">
	<div class="span12">
		<!-- BEGIN EXAMPLE TABLE widget-->
		<div class="widget purple">
			<div class="widget-title">
				<h4><i class="icon-reorder"></i> {{ _lang('Languages List') }}</h4>
				<span class="tools">
					<a href="{{ route('languages.create') }}" class="btn btn-success">
						{{ _lang('Add New') }}
					</a>
				</span>
			</div>
			<div class="widget-body">
				<div>
					<div class="clearfix">
						<h3 style="color: green">
					<?php
					$message=Session::get('success');
					if ($message)
					{
						echo $message;
						Session::put('success','');
					}
					?>
				</h3>
					</div>

					<table class="table table-striped table-hover table-bordered dataTable" id="editable-sample" aria-describedby="editable-sample_info">
						<thead>
							<tr role="row">
								<th>{{ _lang('Language Name') }}</th>
								<th class="text-center">{{ _lang('Edit Translation') }}</th>
								<th class="text-center">{{ _lang('Active') }}</th>
								<th class="text-center">{{ _lang('Action') }}</th>
							</tr>
						</thead>
						
						<tbody role="alert" aria-live="polite" aria-relevant="all">
							@foreach(get_language_list() as $language)
							@if ($language != '')
							<tr>
								<td>{{ ucwords($language) }}</td>
								<td>
									<a href="{{ route('languages.edit', $language) }}" class="btn btn-danger" title="{{ _lang('click to paid') }}">
										<i class="icon-pencil"></i>
									</a>
								</td>
								<td>
									@if (ucwords($language) == ucwords(get_option('language')))
										{{ _lang('Active') }}
									@endif
								</td>
								<td>
									@if (ucwords($language) == ucwords(get_option('language')))
									<a href="#" class="btn btn-success" title="{{ _lang('active language') }}">
										<i class="icon-thumbs-up"></i>
									</a>
									@else
									<a href="{{URL::to('admin/languages/set',$language)}}" class="btn btn-danger" title="{{ _lang('click to set language') }}">
										<i class="icon-thumbs-down"></i>
									</a>
									@endif
									<a href="{{ url('admin/languages/destroy/' . $language) }}" class="btn btn-danger" title="{{ _lang('click to cancel order') }}">
										<i class="icon-remove"></i>
									</a>
								</td>
							</tr>
							@endif
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