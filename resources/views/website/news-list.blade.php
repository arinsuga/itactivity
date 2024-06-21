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
<section id="event-list" class="content-section">

    <!-- hero items -->
    <div class="content-wrapper">
        <h5 class="section-title">MALINDO AGROTEK PERKASA BLOG'S</h5>
        <div class="event-container">
            @foreach ($viewModel->data as $item)
                <div class="news-item">
                    <div class="news-img">
                        <img src="{{ Arins\Facades\Filex::image($item->image) }}" alt="{{ $item->name }}">
                    </div>

                    <div class="news-info">
                        <a href="{{ route('website.newsShow', ['id' => $item->id]) }}">
                            <h5>{{ $item->name }}</h5>
                        </a>
                        <p>{{ \Arins\Facades\Formater::datetime($item->date) }}</p>
                        <p class="truncate-multiline">{!! nl2br(e($item->description)) !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>
<!-- event Section End -->

@endsection
<!-- content end -->

