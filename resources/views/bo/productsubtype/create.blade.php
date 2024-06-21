@extends('layouts.appbo')

@section('content_title', 'Product SUb Type Add')

@section('toolbar')

<li class="nav-item">
    <a class="nav-link" href="{{ route('productsubtype.index') }}">
        <i class="fas fa-lg fa-arrow-left"></i>
    </a>
</li>

<li class="nav-item">
    <a onclick="event.preventDefault(); document.getElementById('frmData').submit();"
       class="nav-link" href="#">
        <i class="fas fa-lg fa-save"></i>
    </a>
</li>

@endsection


@section('content')

<form role="form" id="frmData" method="POST" action="{{ route('productsubtype.store') }}" enctype="multipart/form-data">
    @csrf
    @include('bo.productsubtype.data-field-items')

</form>

@endsection

@section('js')

    @include('bo.productsubtype._script')

@endsection
