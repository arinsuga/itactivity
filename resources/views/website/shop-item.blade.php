<!-- hero background image -->
<div class="hero" style="background-image: url('{{ asset('website/img/shop.jpg') }}'); background-color: #1E1E1E;">
</div>

<!-- hero items -->
<div class="py-5 px-4">
    <div class="row">
        <div class="col-sm-12 col-md-6 px-5">
            <div class="mt-3">
                <!-- branch information -->
                @include('website.components.online-shop')
            </div>

            <div class="mt-3 d-flex justify-content-center">
                @include('website.components.logo-playstore')
            </div>
        </div>

        <div class="col-sm-12 col-md-6">
            <!-- contact form -->
            <div class="container">
                @include('website.components.contact-form')
            </div>
        </div>
    </div>
</div>


