@extends('layouts.appbo')

@section('content_title', 'Master Item Add')

@section('toolbar')

<li class="nav-item">
    <a class="nav-link" href="{{ route('masteritem.index') }}">
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

<form role="form" id="frmData" method="POST" action="{{ route('masteritem.store') }}" enctype="multipart/form-data">
    @csrf

    <div style="display: flex; justify-content=center;">
        @include('bo.masteritem.data-field-items')
    </div>
</form>

@endsection

@section('js')

    @include('bo.masteritem._script')

@endsection
