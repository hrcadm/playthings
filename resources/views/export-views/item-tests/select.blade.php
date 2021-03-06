@extends('layouts.master')
@section('page_title', 'Export Item Tests Records')

@section('content')

@if (session('message'))
    <div class="alert alert-warning">
        {{ session('message') }}
    </div>
@endif

{!! Form::open(['method' => 'POST', 'route' => 'post-export-item-test']) !!}

{{ Form::label('Select an Item*') }}<br>
{{ Form::select('item', $items, null, ['id' => 'selectedItem3', 'placeholder' => 'Select an Item', 'required' => 'required']) }}
<br><br>
<p>Export as:*</p>
{{ Form::radio('type', 'excel', true) }}
{{ Form::label('excel') }}<br>

{{ Form::submit('Submit', ['class' => 'btn btn-success']) }}

{!! Form::close() !!}

@if($errors->any())
<p class="alert alert-danger" style="margin-top:2em;">{{ $errors->first() }}</p>
@endif

@stop

@section('javascripts')
<script>
	$(document).ready(function() {
	    $('#selectedItem3').select2();
	});
</script>
@stop