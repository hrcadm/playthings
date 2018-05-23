@extends('layouts.app')
@section('page_title', 'Export Item Tests Records')

@section('content')

{!! Form::open(['method' => 'POST', 'route' => 'post-export-item-test']) !!}

{{ Form::label('Select an Item*') }}<br>
{{ Form::select('item', $items, null, ['id' => 'selectedItem', 'placeholder' => 'Select an Item', 'required' => 'required']) }}
<br><br>
<p>Export as:*</p>
{{ Form::radio('type', 'excel') }}
{{ Form::label('Excel') }}<br>
{{ Form::radio('type', 'pdf') }}
{{ Form::label('PDF') }}<br>
{{ Form::radio('type', 'word') }}
{{ Form::label('Word') }}<br>

{{ Form::submit('Submit', ['class' => 'btn btn-success']) }} <br>
<a href="{{ URL::previous() }}" style="btn btn-primary">Back</a>

{!! Form::close() !!}

@if($errors->any())
<p class="alert alert-danger" style="margin-top:2em;">{{ $errors->first() }}</p>
@endif

@stop