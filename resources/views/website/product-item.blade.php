<!-- hero background image -->
<div class="hero" style="background-image: url('{{ asset('website/img/product.jpg') }}');">
</div>

<!-- hero items capation -->
<div  class="product-wrapper py-5 px-4 d-flex justify-content-center">
    <div class="row">
        <div class="col-12">
            <div class="product-category-list">

                @foreach ($viewModel->data->types as $key => $tipe)
                    @if ($tipe->productsubtypes->count() > 0)
                        <!-- sprayer -->
                        <div class="category-item">
                            <h5 class="text-center text-danger">{{ __($tipe->name) }}</h5>
                            <div class="img-border">
                                <!-- products -->
                                <div id="carouselControls{{ $tipe->id }}" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">

                                    @foreach ($tipe->productsubtypes as $key => $item)
                                    <div class="carousel-item {{ ($key == 0) ? 'active' : '' }}">
                                        <a href="{{ route('website.productList', ['producttype_id' => $tipe->id, 'productsubtype_id' => $item->id]) }}">
                                            <div class="product-item-img">
                                                <img src="{{ asset(\Arins\Facades\Filex::image($item->image)) }}" alt="...">
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls{{ $tipe->id }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselControls{{ $tipe->id }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div> <!-- end products -->
                            </div>
                        </div>
                    @endif
                @endforeach
            </div> <!-- end product-category-list -->
        </div>
    </div>
</div>
