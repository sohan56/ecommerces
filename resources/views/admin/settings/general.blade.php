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
					$message=Session::get('message');
					if ($message)
					{
						echo $message;
						Session::put('message','');
					}
					?>
				</h3>

				{!! Form::open(['url' => '/settings/general','class'=>'cmxform form-horizontal','id'=>'signupForm','method'=>'post']) !!}
				@csrf
				<div class="control-group">
					<label for="" class="control-label">{{ _lang('Stripe Active') }}</label>
					<div class="controls">
						<select class="form-control" name="stripe_active" required="">
							<option value="Yes">{{ _lang('Yes') }}</option>
							<option value="No">{{ _lang('No') }}</option>
						</select>
					</div>
				</div>
				<div class="control-group ">
					<label for="firstname" class="control-label">{{ _lang('Secret Key') }}</label>
					<div class="controls">
						<input type="text" class="form-control" name="stripe_secret_key" value="{{ get_option('stripe_secret_key') }}">
					</div>
				</div>
				<div class="control-group ">
					<label for="lastname" class="control-label">{{ _lang('Publishable Key') }}</label>
					<div class="controls">
						<input type="text" class="form-control" name="stripe_publishable_key" value="{{ get_option('stripe_publishable_key') }}">
					</div>
				</div>
				<div class="control-group">
					<label for="" class="control-label">{{ _lang('Stripe Currency') }}</label>
					<div class="controls">
						<select class="form-control" name="stripe_currency" required="">
							<option value="USD">USD</option>
							<option value="EUR">EUR</option>
							<option value="AUD">AUD</option>
							<option value="CAD">CAD</option>
							<option value="NZD">NZD</option>
							<option value="GBP">GBP</option>
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
<script type="text/javascript">
	$('select[name=stripe_active]').val('{{ get_option('stripe_active') }}');
	$('select[name=stripe_currency]').val('{{ get_option('stripe_currency') }}');
</script>
@endsection