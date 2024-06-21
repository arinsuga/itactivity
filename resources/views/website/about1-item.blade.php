<!-- hero background image -->
<div class="hero d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('website/img/about1/about1.jpg') }}')">
</div>

<!-- hero items -->
<div class="about-wrapper py-5 px-4">
    <div class="row">
        <div class="col-sm-12 col-md-5">
            <div class="about1-image">
                <div class="item-full">
                    <img src="{{ asset('website/img/about1/image1.jpg') }}" alt="image1">
                </div>
                <div class="item-full">
                    <img src="{{ asset('website/img/about1/image2.jpg') }}" alt="image1">
                </div>
                <div class="item-nofull">
                        <img src="{{ asset('website/img/about1/image3.jpg') }}" alt="image1">
                        <img src="{{ asset('website/img/about1/image4.jpg') }}" alt="image1">
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-7">

            <div class="row">
                <div class="col-12">
                    <h5>{{ __('about1.title1') }}</h5>
                    <p>{{ __('about1.desc1') }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h5>{{ __('about1.title2') }}</h5>
                    <p>{{ __('about1.desc2') }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h5>{{ __('about1.title3') }}</h5>
                    <p>{{ __('about1.desc3') }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h5>{{ __('about1.title4') }}</h5>
                    <p>{{ __('about1.desc4') }}</p>
                </div>
            </div>

        </div>
    </div>
</div>


