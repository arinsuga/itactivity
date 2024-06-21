<!-- hero background image -->
<div class="hero" style="background-image: url('{{ asset('website/img/event.jpg') }}'); background-color: #1E1E1E;">
</div>

<!-- hero items -->
<div class="content-wrapper">
    <h5 class="section-title">MALINDO AGROTEK PERKASA BLOG'S</h5>
    <div class="event-container">
        @foreach ($viewModel->data->news as $item)
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

        <div class="event-item text-center">
            <a href="{{ route('website.newsList') }}">View All</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="listrow" style="margin-bottom: 100px;">
        @foreach ($viewModel->data->event as $item)
            <div class="listrow-item">
                <a href="{{ $item->link }}">
                    <img src="{{ Arins\Facades\Filex::image($item->image) }}" alt="event 1">
                    <h6>{{ $item->name }}</h6>
                </a>
            </div>
        @endforeach
    </div>
</div>
