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

<!-- about Section Start -->
<section id="about" class="about content-section">
    @include('website.about-item')
</section>
<!-- about Section End -->

@endsection
<!-- content end -->

