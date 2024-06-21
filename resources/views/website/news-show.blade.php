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
<section id="event-show" class="content-section">

<div class="content-wrapper">
    <h1 class="mb-3">{{ $viewModel->data->name }}</h1>

    <div class="frame">
        <img src="{{ Arins\Facades\Filex::image($viewModel->data->image) }}" alt="{{ $viewModel->data->name }}">
    </div>
    
    <p>{{ \Arins\Facades\Formater::datetimeMonth($viewModel->data->date) }}</p>
    <p>{!! nl2br(e($viewModel->data->description)) !!}</p>
</div>

</section>
<!-- event Section End -->

@endsection
<!-- content end -->

