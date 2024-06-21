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

<!-- shop Section Start -->
<section id="shop" class="shop section-content">
@include('website.shop-item')
</section>
<!-- shop Section End -->

@endsection
<!-- content end -->
