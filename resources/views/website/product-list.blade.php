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

<!-- product Section Start -->
<section id="product" class="product">
@include('website.product-list-item')
</section>
<!-- product Section End -->

@endsection
<!-- content end -->

