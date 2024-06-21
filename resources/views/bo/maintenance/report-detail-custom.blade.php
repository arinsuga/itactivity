@extends('layouts.appbo')

@section('content_title', 'Report Detail')

@section('toolbar')

<li class="nav-item">
    <a onclick="event.preventDefault(); document.getElementById('frmData').submit();"
       class="nav-link" href="#">
        <i class="fas fa-lg fa-search"></i>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" data-widget="control-sidebar" href="#" >
        <i class="fas fa-lg fa-filter"></i>
    </a>
</li>

@endsection

@section('control_sidebar')
    <div class="control-sidebar-content">
        @include('bo.maintenance.report-detail-list-filters')
    </div>
@endsection

@section('content')

        <nav class="navbar navbar-expand ">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('maintenance.report.detail') }}" style="font-weight: bold;">
                        All
                    </a>
                </li>

                <li class="nav-item" style="border-bottom: 5px solid red;">
                    <a class="nav-link" href="{{ route('maintenance.report.detail.custom') }}" style="font-weight: bold;">
                        Custom
                    </a>
                </li>

            </ul>

            @if (isset($viewModel->data->datalist))

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <button id="exportXLS" type="button" class="btn btn-block btn-success btn-flat">Export to Excel</button>
                    </li>
                    <li class="nav-item">
                        <button id="exportPDF" type="button" class="btn btn-block btn-danger btn-flat">Export to PDF</button>
                    </li>
                </ul>

            @endif

        </nav>

        @if (!isset($viewModel->data->datalist))
        <!-- Form Custom Search -->
        <div>

            <form role="form" id="frmData" method="POST" action="{{ route('maintenance.report.detail.custom.post') }}" enctype="multipart/form-data">
                @csrf

                <div style="display: flex; justify-content=center;">
                    @include('bo.maintenance.report-detail-custom-fields')
                </div>
            </form>

        </div>        
        @endif


        @if (isset($viewModel->data->datalist))
            <div style="margin-top: 10px;">
                @include('bo.maintenance.report-detail-custom-list-items')
            </div>
        @endif


@endsection

@section('js')

    <script src="{{ asset('js/CustomForIndex.js') }}"></script>
    @include('bo.maintenance._script')

@endsection
