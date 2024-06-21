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

<!-- event Section Start -->
<section id="event" class="content-section">
@include('website.event-item')
</section>
<!-- event Section End -->

@endsection
<!-- content end -->

