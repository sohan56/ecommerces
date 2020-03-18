@extends('admin.admin_master')

@section('content')


<div class="row-fluid">
	<div class="span12">
		<!-- BEGIN VALIDATION STATES-->
		<div class="widget green">
			<div class="widget-title">
				<h4><i class="icon-reorder"></i> {{ _lang('Create') }}</h4>
			</div>
			<div class="widget-body form">
				<!-- BEGIN FORM-->

				<form action="{{ route('languages.store') }}" class="validate" autocomplete="off" method="post">
				@csrf
				<div class="control-group ">
					<label for="firstname" class="control-label">{{ _lang('Language Name') }}</label>
					<div class="controls">
						<input type="text" class="form-control" name="language_name" value="{{ old('language_name') }}" required>
					</div>
				</div>
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
@endsection