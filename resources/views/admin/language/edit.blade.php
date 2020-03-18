@extends('admin.admin_master')

@section('content')


<div class="row-fluid">
	<div class="span12">
		<!-- BEGIN VALIDATION STATES-->
		<div class="widget green">
			<div class="widget-title">
				<h4><i class="icon-reorder"></i> {{ _lang('Advanced form Validation') }}</h4>
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
					$message=Session::get('success');
					if ($message)
					{
						echo $message;
						Session::put('success','');
					}
					?>
				</h3>

				<form action="{{ route('languages.update', $id) }}" class="validate" autocomplete="off" method="post">
					@csrf
					@method('PUT')
					@foreach($language as $key=>$lang)
					<div class="col-md-12" style="width: 50%; float: left;">
						<div class="form-group">
							<label class="control-label">{{ ucwords($key) }}</label>						
							<input type="text" class="form-control" name="language[{{ str_replace(' ','_',$key) }}]" value="{{ $lang }}" style="width: 80%;" required>
						</div>
					</div>
					@endforeach


					<div class="form-actions">
						<button class="btn btn-success" type="submit">{{ _lang('Save') }}</button>
					</div>
				</form>

				<!-- </form>-->
				<!-- END FORM-->
			</div>
		</div>
		<!-- END VALIDATION STATES-->
	</div>
</div>
<script type="text/javascript">
	$('select[name=stripe_active]').val('{{ get_option('stripe_active') }}');
	$('select[name=stripe_currency]').val('{{ get_option('stripe_currency') }}');
</script>
@endsection