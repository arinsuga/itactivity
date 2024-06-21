@extends('layouts.appbo')

@section('content_title', 'Master Category Add')

@section('toolbar')

<li class="nav-item">
    <a class="nav-link" href="{{ route('mastercategory.index') }}">
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

<form role="form" id="frmData" method="POST" action="{{ route('mastercategory.store') }}" enctype="multipart/form-data">
    @csrf

    <div style="display: flex; justify-content=center;">
        @include('bo.mastercategory.data-field-items')
    </div>
</form>

@endsection

@section('js')

    @include('bo.mastercategory._script')

@endsection
