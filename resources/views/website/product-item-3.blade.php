<!-- herbicides - todo: buat slide -->
<!-- sprayer - todo:buat slide -->
<div id="carouselControls3" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item product-slide">
      <a href="{{ route('website.productInfo', ['id' => 1]) }}">
        <div class="product-item-img">
          <img src="{{ asset('storage/products/drone1.png') }}" alt="...">
        </div>
        <h5 class="text-center">DRONE 1</h5>
      </a>
    </div>
    <div class="carousel-item active">
      <a href="{{ route('website.productInfo', ['id' => 2]) }}">
        <div class="product-item-img">
          <img src="{{ asset('storage/products/drone2.png') }}" alt="...">
        </div>
        <h5 class="text-center">DRONE 2</h5>
      </a>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls3" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselControls3" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
