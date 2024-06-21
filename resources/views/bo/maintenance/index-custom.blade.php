@extends('layouts.appbo')

@section('content_title', 'Maintenance List')

@section('toolbar')

<li class="nav-item">
    <a class="nav-link" href="{{ route('maintenance.create') }}">
        <i class="fas fa-lg fa-plus"></i>
    </a>
</li>

<li class="nav-item">
    <a onclick="event.preventDefault(); document.getElementById('frmData').submit();"
       class="nav-link" href="#">
        <i class="fas fa-lg fa-search"></i>
    </a>
</li>

@endsection

@section('control_sidebar')
    <div class="control-sidebar-content">
        @include('bo.maintenance.data-list-filters')
    </div>
@endsection

@section('content')

        <nav class="navbar navbar-expand ">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('maintenance.index.today') }}" style="font-weight: bold;">
                        Today
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('maintenance.index.open') }}" style="font-weight: bold;">
                        Open
                    </a>
                </li>

                <li class="nav-item" style="border-bottom: 5px solid red;">
                    <a class="nav-link" href="{{ route('maintenance.index.custom') }}" style="font-weight: bold;">
                        Custom
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('maintenance.index') }}" style="font-weight: bold;">
                        All
                    </a>
                </li>

            </ul>

        </nav>

        @if (!isset($viewModel->data->datalist))
        <!-- Form Custom Search -->
        <div>

            <form role="form" id="frmData" method="POST" action="{{ route('maintenance.index.custom.post') }}" enctype="multipart/form-data">
                @csrf

                <div style="display: flex; justify-content=center;">
                    @include('bo.maintenance.index-custom-fields')
                </div>
            </form>

        </div>        
        @endif

        @if (isset($viewModel->data->datalist))
            <div style="margin-top: 10px;">
                @include('bo.maintenance.index-custom-datalist')
            </div>
        @endif

@endsection

@section('js')

    <script src="{{ asset('js/CustomForIndex.js') }}" defer></script>
    @include('bo.maintenance._script')

@endsection
