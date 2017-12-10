@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/recomends') }}">Recomend</a> :
@endsection
@section("contentheader_description", $recomend->$view_col)
@section("section", "Recomends")
@section("section_url", url(config('laraadmin.adminRoute') . '/recomends'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Recomends Edit : ".$recomend->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($recomend, ['route' => [config('laraadmin.adminRoute') . '.recomends.update', $recomend->id ], 'method'=>'PUT', 'id' => 'recomend-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nama_barang')
					@la_input($module, 'stock_tambah')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/recomends') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#recomend-edit-form").validate({
		
	});
});
</script>
@endpush
