@extends('layouts.appbo')

@section('content_title', 'Tambah Data Karyawan')

@section('toolbar')

<li class="nav-item">
    <a class="nav-link" href="{{ route('employee.index') }}">
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

<form role="form" id="frmData" method="POST" action="{{ route('employee.store') }}" enctype="multipart/form-data">
    @csrf
    @include('bo.employee.data-field-items')

</form>

@endsection

@section('js')

    @include('bo.employee._script')

@endsection
