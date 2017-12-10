@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/kodbars') }}">Kodbar</a> :
@endsection
@section("contentheader_description", $kodbar->$view_col)
@section("section", "Kodbars")
@section("section_url", url(config('laraadmin.adminRoute') . '/kodbars'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Kodbars Edit : ".$kodbar->$view_col)

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
				{!! Form::model($kodbar, ['route' => [config('laraadmin.adminRoute') . '.kodbars.update', $kodbar->id ], 'method'=>'PUT', 'id' => 'kodbar-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'kode_barang')
					@la_input($module, 'nama_barang')
					@la_input($module, 'tanggal_masuk')
					@la_input($module, 'harga_beli')
					@la_input($module, 'harga_jual')
					@la_input($module, 'kategori_barang')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/kodbars') }}">Cancel</a></button>
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
	$("#kodbar-edit-form").validate({
		
	});
});
</script>
@endpush
