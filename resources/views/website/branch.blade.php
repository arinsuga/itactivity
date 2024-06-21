@extends('layouts.website')

<!-- styles start -->
@section('style')
@endsection
<!-- styles end -->

<!-- js start -->
@section('js')
@endsection
<!-- js end -->

<!-- content start -->
@section('content')

<!-- branch Section Start -->
<section id="branch" class="branch">
@include('website.branch-item')
</section>
<!-- branch Section End -->

@endsection
<!-- content end -->

