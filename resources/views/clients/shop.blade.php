@extends('layouts.client')
@section('title')
    {{$title}}
@endsection
@section('content')
@include('clients.partials.title')
<section class="section-shop container my-7">
    <div class="row gx-3">
      <div class="col-lg-3 col-12">
        <div
          class="wow fadeInLeft filter position-sticky top-0 bg-third p-3 border border-1 border-secondary rounded-2"
        >
          <div class="filter-category">
            <h4
              class="filter-category-title fs-6 my-3 pb-3 border-bottom border-secondary border-2"
            >
              Category
            </h4>
            <div class="filter-checkbox d-flex flex-column gap-3">
              @foreach ( $categoriesAll as $item)
                
              <div
                class="filter-check-group d-flex justify-content-between align-items-center"
              >
                <div
                  class="filter-check-group-input d-flex gap-2 align-items-center"
                >
                  <input
                    class="form-check-input mt-0"
                    type="checkbox"
                    value=""
                    aria-label="Checkbox for following text input"
                  />
                  <span class="fs-6 text-border-color">{{$item->name}}</span>
                </div>
                <div
                  class="filter-check-group-count-item fs-6 text-border-color"
                >
                  [{{ $item->product_count }}]
                </div>
              </div>
             
              @endforeach
            </div>
            <h4
              class="filter-category-title fs-6 my-3 pb-3 border-bottom border-secondary border-2"
            >
              Price
            </h4>
            <input
              type="range"
              class="form-range w-100"
              id="rangeInput"
              name="rangeInput"
              min="0"
              max="1000"
              value="0"
              oninput="amount.value=rangeInput.value"
            />
            <output
              id="amount"
              name="amount"
              min-value="0"
              max-value="1000"
              for="rangeInput"
              >0</output
            >
            <div class="filter-price-range w-100 mt-3"></div>
            <h4
            class="filter-category-title fs-6 my-3 pb-3 border-bottom border-secondary border-2"
          >
            Brand
          </h4>
          <div class="filter-checkbox d-flex flex-column gap-3">
            @foreach ($brandsAll as $item)
              
           
            <div
              class="filter-check-group-input d-flex gap-2 align-items-center"
            >
              <input
                class="form-check-input mt-0"
                type="checkbox"
                value=""
                aria-label="Checkbox for following text input"
              />
              <span class="fs-6 text-border-color">{{$item -> brand_name}}</span>
            </div>
            @endforeach
          </div>
            <button class="btn btn-primary text-white fw-bolder mt-5">
              Filter Product
            </button>
            {{-- <h4
              class="filter-category-title fs-6 my-3 pb-3 border-bottom border-secondary border-2"
            >
              Category
            </h4>
            <div class="filter-checkbox d-flex flex-column gap-3">
              <div
                class="filter-check-group d-flex justify-content-between align-items-center"
              >
                <div
                  class="filter-check-group-input d-flex gap-2 align-items-center"
                >
                  <input
                    class="form-check-input mt-0"
                    type="checkbox"
                    value=""
                    aria-label="Checkbox for following text input"
                  />
                  <span class="fs-6 text-border-color">Yellow</span>
                </div>
                <div class="filter-color rounded-1 bg-warning"></div>
              </div>
              <div
                class="filter-check-group d-flex justify-content-between align-items-center"
              >
                <div
                  class="filter-check-group-input d-flex gap-2 align-items-center"
                >
                  <input
                    class="form-check-input mt-0"
                    type="checkbox"
                    value=""
                    aria-label="Checkbox for following text input"
                  />
                  <span class="fs-6 text-border-color">Red</span>
                </div>
                <div class="filter-color rounded-1 bg-danger"></div>
              </div>
              <div
                class="filter-check-group d-flex justify-content-between align-items-center"
              >
                <div
                  class="filter-check-group-input d-flex gap-2 align-items-center"
                >
                  <input
                    class="form-check-input mt-0"
                    type="checkbox"
                    value=""
                    aria-label="Checkbox for following text input"
                  />
                  <span class="fs-6 text-border-color">Blue</span>
                </div>
                <div class="filter-color rounded-1 bg-info"></div>
              </div>
            </div> --}}
          
            {{-- <h4
              class="filter-category-title fs-6 my-3 pb-3 border-bottom border-secondary border-2"
            >
              Tages
            </h4>
            <div class="filter tag-inner mt-4">
              <ul class="tag p-0 d-flex flex-wrap gap-3">
                <li class="list-group-item cursor">
                  <a
                    class="text-decoration-none hover-tag border py-1 px-3 text-dark rounded-1"
                    href=""
                    >Vegetables</a
                  >
                </li>
                <li class="list-group-item cursor">
                  <a
                    class="text-decoration-none hover-tag border py-1 px-3 text-dark rounded-1"
                    href=""
                    >Food</a
                  >
                </li>
                <li class="list-group-item cursor">
                  <a
                    class="text-decoration-none hover-tag border py-1 px-3 text-dark rounded-1"
                    href=""
                    >Juice</a
                  >
                </li>
                <li class="list-group-item cursor">
                  <a
                    class="text-decoration-none hover-tag border py-1 px-3 text-dark rounded-1"
                    href=""
                    >Vegetables</a
                  >
                </li>
                <li class="list-group-item cursor">
                  <a
                    class="text-decoration-none hover-tag border py-1 px-3 text-dark rounded-1"
                    href=""
                    >Dry Fruits</a
                  >
                </li>
              </ul>
            </div> --}}
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-12">
        <div class="wow fadeInUp row px-2">
          <div class="col-12 bg-secondary rounded-2 mb-4">
            <div
              class="shop-header p-2 d-flex align-items-center justify-content-between"
            >
              <h2
                class="count-product fs-6 d-flex align-items-center justify-content-center"
              >
                We found {{$productCount}} items for you!
              </h2>
              <div class="d-flex gap-3 ">
                <div class="search">
                  {{-- <form action="" >
                  </form> --}}
                  <input onfocus="this.value=''" class="form-control" type="text" name="search-product" id="search-product" placeholder="Search product">
                </div>
                 <div
                class="shop-select d-flex align-items-center gap-1 border p-1 rounded-2 border-white bg-white"
              >
                <span class="p-0">Sort:</span>
                <select
                  class="form-select border-0 pe-5 py-0"
                  aria-label="Default select example"
                >
                  <option selected>Featured</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              </div>
             
            </div>
          </div>
        </div>
        <div class="row g-3" id="product-result">
          @foreach ($productsAll as  $item)
          @include('clients.partials.product_card', ['item' => $item])
          @endforeach
        </div>
        <div class="row mt-5">
          <nav
            aria-label="..."
            class="wow fadeInRight mb-0 pb-0 d-flex justify-content-center"
          >
          {{$productsAll -> links('pagination::bootstrap-5')}}
            {{-- <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link text-border-color">Previous</a>
              </li>
              <li class="page-item">
                <a class="page-link text-border-color" href="#">1</a>
              </li>
              <li class="page-item" aria-current="page">
                <a class="page-link text-border-color active-color" href="#"
                  >2</a
                >
              </li>
              <li class="page-item">
                <a class="page-link text-border-color" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link text-border-color" href="#">Next</a>
              </li>
            </ul> --}}
          </nav>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('js')
    <script>
      $(document).ready(function() {
        $('#search-product').on('keyup', function(){
          var search = $(this).val();
          $.ajax({
            url: "{{ route('products.search') }}",
            type: "GET",
            data: {
              'search': search
            },
            success: function(data) {
              $('#product-result').html(data);
            }
          });
        })
});
    </script>
  @endsection