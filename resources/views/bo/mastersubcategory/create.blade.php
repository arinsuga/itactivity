@extends('layouts.appbo')

@section('content_title', 'Master Sub Category Add')

@section('toolbar')

<li class="nav-item">
    <a class="nav-link" href="{{ route('mastersubcategory.index') }}">
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

<form role="form" id="frmData" method="POST" action="{{ route('mastersubcategory.store') }}" enctype="multipart/form-data">
    @csrf

    <div style="display: flex; justify-content=center;">
        @include('bo.mastersubcategory.data-field-items')
    </div>
</form>

@endsection

@section('js')

    @include('bo.mastersubcategory._script')

@endsection
