<div class="col-xxl-3 col-xl-4 col-6 wow fadeInUp">
    <div class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm">
      <div class="card-header border-0 h-60 position-relative">
        <a href="{{ route('detail', $item->id) }}">
          <img src="{{ $item->image }}" alt="" class="img-cover border border-2 border-light rounded-3" />
        </a>
        <div class="card-side-view position-absolute translate-middle">
          <ion-icon class="p-2 rounded-5 bg-white border cursor" name="eye-outline" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></ion-icon>
          <ion-icon class="p-2 rounded-5 bg-white border cursor" name="heart-outline"></ion-icon>
        </div>
        <div class="add-to-cart position-absolute top-100 start-50 translate-middle">
          <ion-icon class="p-2 rounded-5 bg-third text-primary border" name="cart-outline"></ion-icon>
        </div>
      </div>
      @if ($item->discount > 0)
        <div class="product-sale position-absolute">
          <span class="text-sale py-1 px-3 rounded-2 text-white fw-medium fs-6 bg-primary">{{ $item->discount }}%</span>
        </div>
      @endif
      @if ($item->hot == 1)
        <div class="product-hot position-absolute">
          <span class="py-1 px-3 rounded-2 text-white fw-medium fs-6 bg-danger shadow-sm">Hot</span>
        </div>
      @endif
      <div class="card-body p-0 pt-3 border-0 text-center">
        <h3 class="product-category fs-8 text-border-color">{{ $item->category_name }}</h3>
        <span class="product-name hover-list fs-6 fw-medium">{{ $item->name }}</span>
        <div class="product-price d-flex gap-2 justify-content-center fs-6 pt-2 align-items-center">
          <span class="price-new fw-bold text-primary">$ <span>{{ number_format($item->price_after_discount) }}</span></span>
          @if ($item->discount > 0)
            <del class="price-old text-border-color fw-normal">$ <span>{{ $item->price }}</span></del>
          @endif
        </div>
      </div>
    </div>
  </div>
  