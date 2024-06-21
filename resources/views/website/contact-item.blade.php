<!-- hero background image -->
<div class="hero" style="background-image: url('{{ asset('website/img/contact.jpg') }}'); background-color: #1E1E1E;">
</div>

<!-- hero items -->
<div class="py-5 px-4">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <!-- branch information -->
            @include('website.components.office-address')
        </div>

        <div class="col-sm-12 col-md-6">
            <!-- contact form -->
            <div class="container">
                @include('website.components.contact-form')
            </div>

            <!-- brand list -->
            <div class="container">
                @include('website.components.brand-list-type1')
            </div>
        </div>
    </div>
</div>


