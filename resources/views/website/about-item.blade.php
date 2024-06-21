<!-- hero background image -->
<div class="hero" style="background-image: url('{{ asset('website/img/about.jpg') }}')">
    <a href="https://play.google.com/store/apps/details?id=com.malindo.droneapp.booking" target="_blank">
        <img src="{{ asset('website/img/playstore.png') }}" class="hero-img-1 d-block" alt="playstore">
    </a>

    <h5>{{ __('about.hero1') }}</h5>
    <h5>{{ __('about.hero2') }}</h5>
    <h5>{{ __('about.hero3') }}</h5>

    <div class="row pt-5">
        <div class="col-sm-12 col-md-6">
            <img src="{{ asset('website/img/icons/mission.png') }}" class="hero-img-1 d-block" alt="{{ __('about.mission') }}">
            <ul>
                <li>- {{ __('about.mission_text1') }}</li>
                <li>- {{ __('about.mission_text2') }}</li>
                <li>- {{ __('about.mission_text3') }}</li>
                <li>- {{ __('about.mission_text4') }}</li>
            </ul>
        </div>

        <div class="col-sm-12 col-md-6">
            <img src="{{ asset('website/img/icons/vision.png') }}" class="hero-img-1 d-block" alt="{{ __('about.vision') }}">
            <ul>
                <li>{{ __('about.vision_text1') }}</li>
            </ul>
        </div>
    </div>
</div>

<!-- hero items -->
<div class="about-wrapper pt-5">
    <div class="listrow listrow-between">
        <div class="listrow-item">
            <a href="{{ route('website.about1') }}">
                <img src="{{ asset('website/img/icons/production.png') }}" alt="production">
            </a>
            <h6>{{ __('about1.title') }}</h6>
        </div>

        <div class="listrow-item">
            <a href="{{ route('website.about2') }}">
                <img src="{{ asset('website/img/icons/service.png') }}" alt="service">
            </a>
            <h6>{{ __('about2.title') }}</h6>
        </div>

        <div class="listrow-item">
            <a href="{{ route('website.about3') }}">
                <img src="{{ asset('website/img/icons/distribution.png') }}" alt="distribution">
            </a>
            <h6>{{ __('about3.title') }}</h6>
        </div>
    </div>
</div>
