<!-- hero items -->
<div class="content-wrapper">
    <h5 class="section-title">{{ $productsubtype != null ? $productsubtype->name : '' }}</h5>
    <div class="event-container">
        @foreach ($viewModel->data as $item)
            <div class="news-item">

                <div class="news-img">
                    <img src="{{ Arins\Facades\Filex::image($item->image) }}" alt="{{ $item->name }}">
                </div>

                <div class="news-info">
                    <h5>{{ $item->name }}</h5>
                    <p>{!! nl2br(e($item->description)) !!}</p>
                </div>
            </div>
        @endforeach

        <div class="event-item text-center">
            <!-- Sementara View All dihilangkan -->
            <a href="{{ route('website.newsList') }}"></a>
        </div>
    </div>
</div>
