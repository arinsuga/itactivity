@extends('layouts.appbo')

@section('content_title', 'Report Detail')

@section('toolbar')

<li class="nav-item">
    <a class="nav-link" data-widget="control-sidebar" href="#" >
        <i class="fas fa-lg fa-filter"></i>
    </a>
</li>

@endsection

@section('control_sidebar')
    <div class="control-sidebar-content">
        @include('bo.support.report-detail-list-filters')
    </div>
@endsection

@section('content')

        <nav class="navbar navbar-expand ">

            <ul class="navbar-nav">

                <li class="nav-item" style="border-bottom: 5px solid red;">
                    <a class="nav-link" href="{{ route('support.report.detail') }}" style="font-weight: bold;">
                        All
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('support.report.detail.custom') }}" style="font-weight: bold;">
                        Custom
                    </a>
                </li>

            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <button id="exportXLS" type="button" class="btn btn-block btn-success btn-flat">Export to Excel</button>
                </li>
                <li class="nav-item">
                    <button id="exportPDF" type="button" class="btn btn-block btn-danger btn-flat">Export to PDF</button>
                </li>
            </ul>


        </nav>


        <div style="margin-top: 10px;">
            @include('bo.support.report-detail-list-items')
        </div>

@endsection

@section('js')

    <script src="{{ asset('js/CustomForIndex.js') }}"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script> -->


    @include('bo.support._script')

@endsection
