@extends('layouts.client')
@section('title')
    {{$title}}
@endsection
@section('content')
     <!-- BANNER  -->
     <section class="banner">
        <div
          id="carouselExampleDark"
          class="carousel carousel-dark slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselExampleDark"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleDark"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="{{asset('assets/clients/images/banner.jpg')}}" class="d-block w-100" alt="..." />
              <div
                class="carousel-caption top-25 start-15 text-start d-none d-md-block"
              >
                <h3 class="fw-bold fs-2 py-3 wow fadeInUp">
                  <span class="text-decoration-underline text-primary fw-bold"
                    >100%</span
                  >
                  Organic Fruits
                </h3>
                <h1 class="fs-1 fw-bold pe-11 pb-3 wow fadeInUp">
                  Explore fresh & juicy fruits.
                </h1>
                <span class="fs-6 fw-normal text-light-emphasis wow fadeInUp">
                  Some representative placeholder content for the first slide.
                </span>
                <div class="mt-4 wow fadeInUp">
                  <button class="btn btn-primary text-white fw-bold fs-5">
                    Shop Now
                  </button>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="{{asset('assets/clients/images/banner-2')}}.jpg" class="d-block w-100" alt="..." />
              <div
                class="carousel-caption top-25 start-15 text-start d-none d-md-block"
              >
                <h3 class="fw-bold fs-2 py-3 wow fadeInUp">
                  <span class="text-decoration-underline text-primary fw-bold"
                    >100%</span
                  >
                  Organic Fruits
                </h3>
                <h1 class="fs-1 fw-bold pe-11 pb-3 wow fadeInUp">
                  Explore fresh & juicy fruits.
                </h1>
                <span class="fs-6 fw-normal text-light-emphasis wow fadeInUp">
                  Some representative placeholder content for the first slide.
                </span>
                <div class="mt-4 wow fadeInUp">
                  <button class="btn btn-primary text-white fw-bold fs-5">
                    Shop Now
                  </button>
                </div>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleDark"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleDark"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
      <!-- BODY  -->
      <section class="section-categories position-relative my-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-12 p-3">
              <div class="section-categories-main">
                <ul class="nav d-flex flex-column gap-2">
                  <li
                    class="nav-item category-list border w-100 d-flex align-items-center justify-content-center py-3 border-2 rounded-2 border-light bg-third"
                  >
                    <button
                      class=" d-flex flex-column align-items-center fs-6 fw-medium btn"
                    >
                      Cake & Milk
                      <span class="text-black fw-normal lh-lg">(65)item</span>
                    </button>
                  </li>
                  <li
                    class="nav-item category-list border w-100 d-flex align-items-center justify-content-center py-3 border-2 rounded-2 border-light bg-third"
                  >
                    <button
                      class="d-flex flex-column align-items-center fs-6 fw-medium btn"
                    >
                      Cake & Milk
                      <span class="text-black fw-normal lh-lg">(65)item</span>
                    </button>
                  </li>
                  <li
                    class="nav-item category-list border w-100 d-flex align-items-center justify-content-center py-3 border-2 rounded-2 border-light bg-third"
                  >
                    <button
                      class="d-flex flex-column align-items-center fs-6 fw-medium btn"
                    >
                      Cake & Milk
                      <span class="text-black fw-normal lh-lg">(65)item</span>
                    </button>
                  </li>
                  <li
                    class="nav-item category-list border w-100 d-flex align-items-center justify-content-center py-3 border-2 rounded-2 border-light bg-third"
                  >
                    <button
                      class="d-flex flex-column align-items-center fs-6 fw-medium btn"
                    >
                      Cake & Milk
                      <span class="text-black fw-normal lh-lg">(65)item</span>
                    </button>
                  </li>
                  <li
                    class="nav-item category-list border w-100 d-flex align-items-center justify-content-center py-3 border-2 rounded-2 border-light bg-third"
                  >
                    <button
                      class="d-flex flex-column align-items-center fs-6 fw-medium btn"
                    >
                      Cake & Milk
                      <span class="text-black fw-normal lh-lg">(65)item</span>
                    </button>
                  </li>
                  <a
                    href="#"
                    class="nav-item text-decoration-none border w-100 d-flex align-items-center justify-content-center py-3 border-2 rounded-2 border-light bg-third"
                  >
                    <button
                      class="btn d-flex align-items-center fs-6 fw-bold text-primary"
                    >
                      View More
                    </button>
                  </a>
                </ul>
              </div>
            </div>
            <div class="col-lg-8 col-12 p-3">
              <div class="row g-4">
                <div class="col-lg-6 wow fadeInUp">
                  <div
                    class="border rounded-2 overflow-hidden category-item cursor"
                  >
                    <div class="category-sale d-flex align-items-center gap-2">
                      <h4 class="text-white fs-sale fw-bold fw-bolder">40</h4>
                      <span class="d-flex flex-column fs-6 text-white fw-bolder">
                        <span>%</span>
                        <span>OFF</span>
                      </span>
                    </div>
                    <div class="category-content">
                      <div
                        class="category-name text-white fs-4 fw-bolder fw-bolder text-center pb-3"
                      >
                        Cake
                      </div>
                      <div
                        class="category-button d-flex justify-content-center align-items-center"
                      >
                        <button class="btn btn-primary fs-6 fw-bolder text-white">
                          Shop Now
                        </button>
                      </div>
                    </div>
                    <img src="{{asset('assets/clients/images/category1.jpg')}}" alt="" class="img-cover" />
                  </div>
                </div>
                <div class="col-lg-6 wow fadeInUp">
                  <div
                    class="border rounded-2 overflow-hidden category-item cursor"
                  >
                    <div class="category-sale d-flex align-items-center gap-2">
                      <h4 class="text-white fs-sale fw-bold fw-bolder">40</h4>
                      <span class="d-flex flex-column fs-6 text-white fw-bolder">
                        <span>%</span>
                        <span>OFF</span>
                      </span>
                    </div>
                    <div class="category-content">
                      <div
                        class="category-name text-white fs-4 fw-bolder fw-bolder text-center pb-3"
                      >
                        Milk
                      </div>
                      <div
                        class="category-button d-flex justify-content-center align-items-center"
                      >
                        <button class="btn btn-primary fs-6 fw-bolder text-white">
                          Shop Now
                        </button>
                      </div>
                    </div>
                    <img src="{{asset('assets/clients/images/category2.jpg')}}" alt="" class="img-cover" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- PRODUCT POPULAR -->
      <section class="product-popular position-relative my-6">
        <div class="container">
          <div
            class="section-header d-flex justify-content-center flex-column align-items-center mb-3"
          >
            <h3 class="fw-bolder">Popular Products</h3>
            <p class="w-50 text-center fs-6 text-border-color">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi nisi
              facilis provident eos accusamus voluptatibus in
            </p>
          </div>
        </div>
        <div class="container position-relative product-main">
          <div class="row g-3">
            <div class="col-xl-3 col-lg-4 col-12">
              <div class="row g-3 position-sticky top-0">
                <div class="col-lg-12 col-sm-6 col-6 wow fadeInLeft">
                  <div class="product-tab">
                    <ul class="product-tab-lists p-0 d-flex flex-column gap-2">
                      <li
                        class="p-3 cursor w-100 product-tab-list active fs-6 fw-bold bg-third border border-1 rounded-2 d-flex align-items-center justify-content-between"
                      >
                        <span>All</span>
                        <ion-icon
                          class="fs-5"
                          name="arrow-forward-outline"
                        ></ion-icon>
                      </li>
                      <li
                        class="p-3 cursor w-100 product-tab-list fs-6 fw-bold bg-third border border-1 rounded-2 d-flex align-items-center justify-content-between"
                      >
                        <span>Snack</span>
                        <ion-icon
                          class="fs-5"
                          name="arrow-forward-outline"
                        ></ion-icon>
                      </li>
                      <li
                        class="p-3 cursor w-100 product-tab-list fs-6 fw-bold bg-third border border-1 rounded-2 d-flex align-items-center justify-content-between"
                      >
                        <span>Vegetable</span>
                        <ion-icon
                          class="fs-5"
                          name="arrow-forward-outline"
                        ></ion-icon>
                      </li>
                      <li
                        class="p-3 cursor w-100 product-tab-list fs-6 fw-bold bg-third border border-1 rounded-2 d-flex align-items-center justify-content-between"
                      >
                        <span>Fruit</span>
                        <ion-icon
                          class="fs-5"
                          name="arrow-forward-outline"
                        ></ion-icon>
                      </li>
                      <li
                        class="p-3 cursor w-100 product-tab-list fs-6 fw-bold bg-third border border-1 rounded-2 d-flex align-items-center justify-content-between"
                      >
                        <span>Bakery</span>
                        <ion-icon
                          class="fs-5"
                          name="arrow-forward-outline"
                        ></ion-icon>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-12 col-sm-6 col-6 wow fadeInLeft">
                  <div
                    class="product-banner position-relative rounded-2 overflow-hidden"
                  >
                    <img
                      src="{{asset('assets/clients/images/product-banner')}}.jpg"
                      class="align-middle img-cover"
                      alt=""
                    />
                    <div
                      class="position-absolute top-10 start-5 banner-content d-flex flex-column"
                    >
                      <h2 class="text-white">Juicy</h2>
                      <h1 class="text-warning fs-1 fw-bold">FRUIT</h1>
                      <span class="text-white fs-5 mb-2">100% Natural</span>
                      <div class="product-banner-btn">
                        <div class="btn btn-primary fw-bold text-white">
                          Shop Now
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-12">
              <div class="row g-3">
                <div class="col-xxl-3 col-xl-4 col-6 wow fadeInUp">
                  <div
                    class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
                  >
                    <div class="card-header border-0 h-60 position-relative">
                      <img
                        src="{{asset('assets/clients/images/product1.jpg')}}"
                        alt=""
                        class="img-cover border border-2 border-light rounded-3"
                      />
                      <div
                        class="card-side-view position-absolute translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="eye-outline"
                          data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop"
                          data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop"
                        ></ion-icon>
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="heart-outline"
                        ></ion-icon>
                      </div>
                      <div
                        class="add-to-cart position-absolute top-100 start-50 translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-third text-primary border"
                          name="cart-outline"
                        ></ion-icon>
                      </div>
                    </div>
                    <div class="product-sale position-absolute">
                      <span
                        class="text-sale py-1 px-4 rounded-2 text-white fw-bolder bg-primary"
                        >Sale</span
                      >
                    </div>
                    <div class="card-body p-0 pt-3 border-0 text-center">
                      <h3 class="product-category fs-8 text-border-color">
                        Vegetable
                      </h3>
                      <span class="product-name hover-list fs-6 fw-medium"
                        >Fresh organic villa farm lomon 500gm pack</span
                      >
                      <div
                        class="product-price d-flex gap-2 justify-content-center fs-6 pt-2 align-items-center"
                      >
                        <span class="price-new fw-bold text-primary"
                          >$ <span>120.25</span></span
                        >
                        <del class="price-old text-border-color fw-normal"
                          >$ <span>123.25</span></del
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-6 wow fadeInUp">
                  <div
                    class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
                  >
                    <div class="card-header border-0 h-60 position-relative">
                      <img
                        src="{{asset('assets/clients/images/product2.jpg')}}"
                        alt=""
                        class="img-cover border border-2 border-light rounded-3"
                      />
                      <div
                        class="card-side-view position-absolute translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="eye-outline"
                          data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop"
                        ></ion-icon>
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="heart-outline"
                        ></ion-icon>
                      </div>
                      <div
                        class="add-to-cart position-absolute top-100 start-50 translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-third text-primary border"
                          name="cart-outline"
                        ></ion-icon>
                      </div>
                    </div>
  
                    <div class="card-body p-0 pt-3 border-0 text-center">
                      <h3 class="product-category fs-8 text-border-color">
                        Vegetable
                      </h3>
                      <span class="product-name hover-list fs-6 fw-medium"
                        >Fresh organic villa farm lomon 500gm pack</span
                      >
                      <div
                        class="product-price d-flex gap-2 justify-content-center fs-6 pt-2 align-items-center"
                      >
                        <span class="price-new fw-bold text-primary"
                          >$ <span>120.25</span></span
                        >
                        <del class="price-old text-border-color fw-normal"
                          >$ <span>123.25</span></del
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-6 wow fadeInUp">
                  <div
                    class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
                  >
                    <div class="card-header border-0 h-60 position-relative">
                      <img
                        src="{{asset('assets/clients/images/product3.jpg')}}"
                        alt=""
                        class="img-cover border border-2 border-light rounded-3"
                      />
                      <div
                        class="card-side-view position-absolute translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="eye-outline"
                          data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop"
                        ></ion-icon>
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="heart-outline"
                        ></ion-icon>
                      </div>
                      <div
                        class="add-to-cart position-absolute top-100 start-50 translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-third text-primary border"
                          name="cart-outline"
                        ></ion-icon>
                      </div>
                    </div>
                    <div class="product-sale position-absolute">
                      <span
                        class="text-sale py-1 px-4 rounded-2 text-white fw-bolder bg-primary"
                        >Sale</span
                      >
                    </div>
                    <div class="card-body p-0 pt-3 border-0 text-center">
                      <h3 class="product-category fs-8 text-border-color">
                        Vegetable
                      </h3>
                      <span class="product-name hover-list fs-6 fw-medium"
                        >Fresh organic villa farm lomon 500gm pack</span
                      >
                      <div
                        class="product-price d-flex gap-2 justify-content-center fs-6 pt-2 align-items-center"
                      >
                        <span class="price-new fw-bold text-primary"
                          >$ <span>120.25</span></span
                        >
                        <del class="price-old text-border-color fw-normal"
                          >$ <span>123.25</span></del
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-6 wow fadeInUp">
                  <div
                    class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
                  >
                    <div class="card-header border-0 h-60 position-relative">
                      <img
                        src="{{asset('assets/clients/images/product4.jpg')}}"
                        alt=""
                        class="img-cover border border-2 border-light rounded-3"
                      />
                      <div
                        class="card-side-view position-absolute translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="eye-outline"
                          data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop"
                        ></ion-icon>
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="heart-outline"
                        ></ion-icon>
                      </div>
                      <div
                        class="add-to-cart position-absolute top-100 start-50 translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-third text-primary border"
                          name="cart-outline"
                        ></ion-icon>
                      </div>
                    </div>
                    <div class="card-body p-0 pt-3 border-0 text-center">
                      <h3 class="product-category fs-8 text-border-color">
                        Vegetable
                      </h3>
                      <span class="product-name hover-list fs-6 fw-medium"
                        >Fresh organic villa farm lomon 500gm pack</span
                      >
                      <div
                        class="product-price d-flex gap-2 justify-content-center fs-6 pt-2 align-items-center"
                      >
                        <span class="price-new fw-bold text-primary"
                          >$ <span>120.25</span></span
                        >
                        <del class="price-old text-border-color fw-normal"
                          >$ <span>123.25</span></del
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-6 wow fadeInUp">
                  <div
                    class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
                  >
                    <div class="card-header border-0 h-60 position-relative">
                      <img
                        src="{{asset('assets/clients/images/product1.jpg')}}"
                        alt=""
                        class="img-cover border border-2 border-light rounded-3"
                      />
                      <div
                        class="card-side-view position-absolute translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="eye-outline"
                          data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop"
                        ></ion-icon>
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="heart-outline"
                        ></ion-icon>
                      </div>
                      <div
                        class="add-to-cart position-absolute top-100 start-50 translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-third text-primary border"
                          name="cart-outline"
                        ></ion-icon>
                      </div>
                    </div>
                    <div class="product-sale position-absolute">
                      <span
                        class="text-sale py-1 px-4 rounded-2 text-white fw-bolder bg-primary"
                        >Sale</span
                      >
                    </div>
                    <div class="card-body p-0 pt-3 border-0 text-center">
                      <h3 class="product-category fs-8 text-border-color">
                        Vegetable
                      </h3>
                      <span class="product-name hover-list fs-6 fw-medium"
                        >Fresh organic villa farm lomon 500gm pack</span
                      >
                      <div
                        class="product-price d-flex gap-2 justify-content-center fs-6 pt-2 align-items-center"
                      >
                        <span class="price-new fw-bold text-primary"
                          >$ <span>120.25</span></span
                        >
                        <del class="price-old text-border-color fw-normal"
                          >$ <span>123.25</span></del
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-6 wow fadeInUp">
                  <div
                    class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
                  >
                    <div class="card-header border-0 h-60 position-relative">
                      <img
                        src="{{asset('assets/clients/images/product2.jpg')}}"
                        alt=""
                        class="img-cover border border-2 border-light rounded-3"
                      />
                      <div
                        class="card-side-view position-absolute translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="eye-outline"
                          data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop"
                        ></ion-icon>
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="heart-outline"
                        ></ion-icon>
                      </div>
                      <div
                        class="add-to-cart position-absolute top-100 start-50 translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-third text-primary border"
                          name="cart-outline"
                        ></ion-icon>
                      </div>
                    </div>
  
                    <div class="card-body p-0 pt-3 border-0 text-center">
                      <h3 class="product-category fs-8 text-border-color">
                        Vegetable
                      </h3>
                      <span class="product-name hover-list fs-6 fw-medium"
                        >Fresh organic villa farm lomon 500gm pack</span
                      >
                      <div
                        class="product-price d-flex gap-2 justify-content-center fs-6 pt-2 align-items-center"
                      >
                        <span class="price-new fw-bold text-primary"
                          >$ <span>120.25</span></span
                        >
                        <del class="price-old text-border-color fw-normal"
                          >$ <span>123.25</span></del
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-6 wow fadeInUp">
                  <div
                    class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
                  >
                    <div class="card-header border-0 h-60 position-relative">
                      <img
                        src="{{asset('assets/clients/images/product3.jpg')}}"
                        alt=""
                        class="img-cover border border-2 border-light rounded-3"
                      />
                      <div
                        class="card-side-view position-absolute translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="eye-outline"
                          data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop"
                        ></ion-icon>
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="heart-outline"
                        ></ion-icon>
                      </div>
                      <div
                        class="add-to-cart position-absolute top-100 start-50 translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-third text-primary border"
                          name="cart-outline"
                        ></ion-icon>
                      </div>
                    </div>
                    <div class="product-sale position-absolute">
                      <span
                        class="text-sale py-1 px-4 rounded-2 text-white fw-bolder bg-primary"
                        >Sale</span
                      >
                    </div>
                    <div class="card-body p-0 pt-3 border-0 text-center">
                      <h3 class="product-category fs-8 text-border-color">
                        Vegetable
                      </h3>
                      <span class="product-name hover-list fs-6 fw-medium"
                        >Fresh organic villa farm lomon 500gm pack</span
                      >
                      <div
                        class="product-price d-flex gap-2 justify-content-center fs-6 pt-2 align-items-center"
                      >
                        <span class="price-new fw-bold text-primary"
                          >$ <span>120.25</span></span
                        >
                        <del class="price-old text-border-color fw-normal"
                          >$ <span>123.25</span></del
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-6 wow fadeInUp">
                  <div
                    class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
                  >
                    <div class="card-header border-0 h-60 position-relative">
                      <img
                        src="{{asset('assets/clients/images/product4.jpg')}}"
                        alt=""
                        class="img-cover border border-2 border-light rounded-3"
                      />
                      <div
                        class="card-side-view position-absolute translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="eye-outline"
                          data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop"
                        ></ion-icon>
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="heart-outline"
                        ></ion-icon>
                      </div>
                      <div
                        class="add-to-cart position-absolute top-100 start-50 translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-third text-primary border"
                          name="cart-outline"
                        ></ion-icon>
                      </div>
                    </div>
                    <div class="card-body p-0 pt-3 border-0 text-center">
                      <h3 class="product-category fs-8 text-border-color">
                        Vegetable
                      </h3>
                      <span class="product-name hover-list fs-6 fw-medium"
                        >Fresh organic villa farm lomon 500gm pack</span
                      >
                      <div
                        class="product-price d-flex gap-2 justify-content-center fs-6 pt-2 align-items-center"
                      >
                        <span class="price-new fw-bold text-primary"
                          >$ <span>120.25</span></span
                        >
                        <del class="price-old text-border-color fw-normal"
                          >$ <span>123.25</span></del
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-6 wow fadeInUp">
                  <div
                    class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
                  >
                    <div class="card-header border-0 h-60 position-relative">
                      <img
                        src="{{asset('assets/clients/images/product5.jpg')}}"
                        alt=""
                        class="img-cover border border-2 border-light rounded-3"
                      />
                      <div
                        class="card-side-view position-absolute translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="eye-outline"
                          data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop"
                        ></ion-icon>
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="heart-outline"
                        ></ion-icon>
                      </div>
                      <div
                        class="add-to-cart position-absolute top-100 start-50 translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-third text-primary border"
                          name="cart-outline"
                        ></ion-icon>
                      </div>
                    </div>
                    <div class="product-sale position-absolute">
                      <span
                        class="text-sale py-1 px-4 rounded-2 text-white fw-bolder bg-primary"
                        >Sale</span
                      >
                    </div>
                    <div class="card-body p-0 pt-3 border-0 text-center">
                      <h3 class="product-category fs-8 text-border-color">
                        Vegetable
                      </h3>
                      <span class="product-name hover-list fs-6 fw-medium"
                        >Fresh organic villa farm lomon 500gm pack</span
                      >
                      <div
                        class="product-price d-flex gap-2 justify-content-center fs-6 pt-2 align-items-center"
                      >
                        <span class="price-new fw-bold text-primary"
                          >$ <span>120.25</span></span
                        >
                        <del class="price-old text-border-color fw-normal"
                          >$ <span>123.25</span></del
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-6 wow fadeInUp">
                  <div
                    class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
                  >
                    <div class="card-header border-0 h-60 position-relative">
                      <img
                        src="{{asset('assets/clients/images/product6.jpg')}}"
                        alt=""
                        class="img-cover border border-2 border-light rounded-3"
                      />
                      <div
                        class="card-side-view position-absolute translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="eye-outline"
                          data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop"
                        ></ion-icon>
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="heart-outline"
                        ></ion-icon>
                      </div>
                      <div
                        class="add-to-cart position-absolute top-100 start-50 translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-third text-primary border"
                          name="cart-outline"
                        ></ion-icon>
                      </div>
                    </div>
  
                    <div class="card-body p-0 pt-3 border-0 text-center">
                      <h3 class="product-category fs-8 text-border-color">
                        Vegetable
                      </h3>
                      <span class="product-name hover-list fs-6 fw-medium"
                        >Fresh organic villa farm lomon 500gm pack</span
                      >
                      <div
                        class="product-price d-flex gap-2 justify-content-center fs-6 pt-2 align-items-center"
                      >
                        <span class="price-new fw-bold text-primary"
                          >$ <span>120.25</span></span
                        >
                        <del class="price-old text-border-color fw-normal"
                          >$ <span>123.25</span></del
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-6 wow fadeInUp">
                  <div
                    class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
                  >
                    <div class="card-header border-0 h-60 position-relative">
                      <img
                        src="{{asset('assets/clients/images/product7.jpg')}}"
                        alt=""
                        class="img-cover border border-2 border-light rounded-3"
                      />
                      <div
                        class="card-side-view position-absolute translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="eye-outline"
                          data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop"
                        ></ion-icon>
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="heart-outline"
                        ></ion-icon>
                      </div>
                      <div
                        class="add-to-cart position-absolute top-100 start-50 translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-third text-primary border"
                          name="cart-outline"
                        ></ion-icon>
                      </div>
                    </div>
                    <div class="product-sale position-absolute">
                      <span
                        class="text-sale py-1 px-4 rounded-2 text-white fw-bolder bg-primary"
                        >Sale</span
                      >
                    </div>
                    <div class="card-body p-0 pt-3 border-0 text-center">
                      <h3 class="product-category fs-8 text-border-color">
                        Vegetable
                      </h3>
                      <span class="product-name hover-list fs-6 fw-medium"
                        >Fresh organic villa farm lomon 500gm pack</span
                      >
                      <div
                        class="product-price d-flex gap-2 justify-content-center fs-6 pt-2 align-items-center"
                      >
                        <span class="price-new fw-bold text-primary"
                          >$ <span>120.25</span></span
                        >
                        <del class="price-old text-border-color fw-normal"
                          >$ <span>123.25</span></del
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-6 wow fadeInUp">
                  <div
                    class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
                  >
                    <div class="card-header border-0 h-60 position-relative">
                      <img
                        src="{{asset('assets/clients/images/product8.jpg')}}"
                        alt=""
                        class="img-cover border border-2 border-light rounded-3"
                      />
                      <div
                        class="card-side-view position-absolute translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="eye-outline"
                          data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop"
                        ></ion-icon>
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="heart-outline"
                        ></ion-icon>
                      </div>
                      <div
                        class="add-to-cart position-absolute top-100 start-50 translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-third text-primary border"
                          name="cart-outline"
                        ></ion-icon>
                      </div>
                    </div>
                    <div class="card-body p-0 pt-3 border-0 text-center">
                      <h3 class="product-category fs-8 text-border-color">
                        Vegetable
                      </h3>
                      <span class="product-name hover-list fs-6 fw-medium"
                        >Fresh organic villa farm lomon 500gm pack</span
                      >
                      <div
                        class="product-price d-flex gap-2 justify-content-center fs-6 pt-2 align-items-center"
                      >
                        <span class="price-new fw-bold text-primary"
                          >$ <span>120.25</span></span
                        >
                        <del class="price-old text-border-color fw-normal"
                          >$ <span>123.25</span></del
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- PRODUCT BANNER  -->
      <section class="section-product-banner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 wow fadeInRight">
              <div id="banner-product" class="owl-carousel owl-theme">
                <div
                  class="item m-1 card-banner card overflow-hidden border-0 position-relative"
                >
                  <img
                    src="{{asset('assets/clients/images/banner-product2')}}.jpg"
                    class="card-img-top"
                    alt="..."
                  />
                  <div class="card-body position-absolute top-10">
                    <h2 class="card-title fs-5 w-75 fw-bold">
                      Healthy Bakery Products
                    </h2>
                    <h3 class="card-text fs-5 fw-bold text-primary">
                      30%
                      <span class="fs-8 fw-medium text-border-color"
                        >Off on first order</span
                      >
                    </h3>
                    <a href="#" class="btn btn-primary fw-bolder text-white"
                      >Shop Now</a
                    >
                  </div>
                </div>
                <div
                  class="item m-1 card-banner card overflow-hidden border-0 position-relative"
                >
                  <img
                    src="{{asset('assets/clients/images/banner-product4')}}.jpg"
                    class="card-img-top"
                    alt="..."
                  />
                  <div class="card-body position-absolute top-10">
                    <h2 class="card-title fs-5 w-75 fw-bold">
                      Fresh & Healthy Organic Fruits
                    </h2>
                    <h3 class="card-text fs-5 fw-bold text-primary">
                      30%
                      <span class="fs-8 fw-medium text-border-color"
                        >Off on first order</span
                      >
                    </h3>
                    <a href="#" class="btn btn-primary fw-bolder text-white"
                      >Shop Now</a
                    >
                  </div>
                </div>
                <div
                  class="item m-1 card-banner card overflow-hidden border-0 position-relative"
                >
                  <img
                    src="{{asset('assets/clients/images/banner-product3')}}.jpg"
                    class="card-img-top"
                    alt="..."
                  />
                  <div class="card-body position-absolute top-10">
                    <h2 class="card-title fs-5 w-75 fw-bold">
                      Fresh Snacks & Sweets
                    </h2>
                    <h3 class="card-text fs-5 fw-bold text-primary">
                      30%
                      <span class="fs-8 fw-medium text-border-color"
                        >Off on first order</span
                      >
                    </h3>
                    <a href="#" class="btn btn-primary fw-bolder text-white"
                      >Shop Now</a
                    >
                  </div>
                </div>
                <div
                  class="item m-1 card-banner card overflow-hidden border-0 position-relative"
                >
                  <img
                    src="{{asset('assets/clients/images/banner-product2')}}.jpg"
                    class="card-img-top"
                    alt="..."
                  />
                  <div class="card-body position-absolute top-10">
                    <h2 class="card-title fs-5 w-75 fw-bold">
                      Healthy Bakery Products
                    </h2>
                    <h3 class="card-text fs-5 fw-bold text-primary">
                      30%
                      <span class="fs-8 fw-medium text-border-color"
                        >Off on first order</span
                      >
                    </h3>
                    <a href="#" class="btn btn-primary fw-bolder text-white"
                      >Shop Now</a
                    >
                  </div>
                </div>
                <div
                  class="item m-1 card-banner card overflow-hidden border-0 position-relative"
                >
                  <img
                    src="{{asset('assets/clients/images/banner-product4')}}.jpg"
                    class="card-img-top"
                    alt="..."
                  />
                  <div class="card-body position-absolute top-10">
                    <h2 class="card-title fs-5 w-75 fw-bold">
                      Fresh & Healthy Organic Fruits
                    </h2>
                    <h3 class="card-text fs-5 fw-bold text-primary">
                      30%
                      <span class="fs-8 fw-medium text-border-color"
                        >Off on first order</span
                      >
                    </h3>
                    <a href="#" class="btn btn-primary fw-bolder text-white"
                      >Shop Now</a
                    >
                  </div>
                </div>
                <div
                  class="item m-1 card-banner card overflow-hidden border-0 position-relative"
                >
                  <img
                    src="{{asset('assets/clients/images/banner-product3')}}.jpg"
                    class="card-img-top"
                    alt="..."
                  />
                  <div class="card-body position-absolute top-10">
                    <h2 class="card-title fs-5 w-75 fw-bold">
                      Fresh Snacks & Sweets
                    </h2>
                    <h3 class="card-text fs-5 fw-bold text-primary">
                      30%
                      <span class="fs-8 fw-medium text-border-color"
                        >Off on first order</span
                      >
                    </h3>
                    <a href="#" class="btn btn-primary fw-bolder text-white"
                      >Shop Now</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- SERVICE  -->
      <div class="section-service position-relative my-6">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 wow fadeInLeft">
              <div id="" class="row g-3">
                <div
                  class="col-3 "
                >
                <div class=" border  card-service card bg-third p-3 d-flex flex-column align-items-center justify-content-center">
                  <div
                    class="card-img d-flex align-items-center justify-content-center"
                  >
                    <img src="{{asset('assets/clients/images/service7.webp')}}" alt="" class="service-img" />
                  </div>
                  <div class="card-body text-center">
                    <h3 class="card-title fs-5 fw-medium">
                      Fast & Secure delivery
                    </h3>
                    <p class="card-text fs-6 text-border-color">
                      Tell about your service
                    </p>
                  </div></div>
                </div>
                <div
                  class="col-3 "
                >
                <div class=" border  card-service card bg-third p-3 d-flex flex-column align-items-center justify-content-center">
                  <div
                    class="card-img d-flex align-items-center justify-content-center"
                  >
                    <img src="{{asset('assets/clients/images/service8.webp')}}" alt="" class="service-img" />
                  </div>
                  <div class="card-body text-center">
                    <h3 class="card-title fs-5 fw-medium">
                      Fast & Secure delivery
                    </h3>
                    <p class="card-text fs-6 text-border-color">
                      Tell about your service
                    </p>
                  </div></div>
                </div>
                <div
                  class="col-3 "
                >
                <div class=" border  card-service card bg-third p-3 d-flex flex-column align-items-center justify-content-center">
                  <div
                    class="card-img d-flex align-items-center justify-content-center"
                  >
                    <img src="{{asset('assets/clients/images/service9.webp')}}" alt="" class="service-img" />
                  </div>
                  <div class="card-body text-center">
                    <h3 class="card-title fs-5 fw-medium">
                      Fast & Secure delivery
                    </h3>
                    <p class="card-text fs-6 text-border-color">
                      Tell about your service
                    </p>
                  </div></div>
                </div>
                <div
                  class="col-3 "
                >
                <div class=" border  card-service card bg-third p-3 d-flex flex-column align-items-center justify-content-center">
                  <div
                    class="card-img d-flex align-items-center justify-content-center"
                  >
                    <img src="{{asset('assets/clients/images/service10.webp')}}" alt="" class="service-img" />
                  </div>
                  <div class="card-body text-center">
                    <h3 class="card-title fs-5 fw-medium">
                      Fast & Secure delivery
                    </h3>
                    <p class="card-text fs-6 text-border-color">
                      Tell about your service
                    </p>
                  </div></div>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- SECTION SALE SEAL  -->
      <section class="section-deal my-6">
        <div class="bg-banner-deal">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="deal-main d-flex align-items-center">
                  <div
                    class="wow fadeInUp deal-content rounded-3 text-bg-third bg-opacity-25 shadow-sm p-5"
                  >
                    <h3
                      class="fs-4 fw-bold text-primary d-flex gap-1 align-items-end"
                    >
                      35%<span class="fs-5 text-white fw-medium">OFF</span>
                    </h3>
                    <h2 class="fs-3 fw-bolder">Great deal on organic food.</h2>
                    <span class="text-border-color fw-light">
                      Lorem ipsum dolor sit ametr consectetur adipiscing elit, sed
                      do maecenas accumsan lacus vel facilisis.
                    </span>
                    <div
                      class="counter border border-primary rounded-2 d-flex justify-content-center mt-3"
                    >
                      <div
                        class="py-2 px-4 deal-couter d-flex mt-3 gap-3 align-items-center"
                      >
                        <h4
                          class="fw-medium fs-6 justify-content-center align-items-center text-border-color d-flex flex-column"
                        >
                          <span class="fw-bold fs-3 text-dark" id="days">40</span
                          >Day
                        </h4>
                        <span class="fw-bold">:</span>
                        <h4
                          class="fw-medium fs-6 justify-content-center align-items-center text-border-color d-flex flex-column"
                        >
                          <span class="fw-bold fs-3 text-dark" id="hours">14</span
                          >Hour
                        </h4>
                        <span class="fw-bold">:</span>
                        <h4
                          class="fw-medium fs-6 justify-content-center align-items-center text-border-color d-flex flex-column"
                        >
                          <span class="fw-bold fs-3 text-dark" id="minutes"
                            >13</span
                          >Min
                        </h4>
                        <span class="fw-bold">:</span>
                        <h4
                          class="fw-medium fs-6 justify-content-center align-items-center text-border-color d-flex flex-column"
                        >
                          <span class="fw-bold fs-3 text-dark" id="seconds"
                            >41</span
                          >Sec
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- HOT PRODUCT  -->
      <section class="product-hot position-relative my-6">
        <div class="container">
          <div
            class="section-header d-flex justify-content-center flex-column align-items-center mb-3"
          >
            <h3 class="fw-bolder">Hot Products</h3>
            <p class="w-50 text-center fs-6 text-border-color">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi nisi
              facilis provident eos accusamus voluptatibus in
            </p>
          </div>
        </div>
        <div class="product-main container">
          <div class="row">
            <div class="col-xxl-7 col-xl-6 col-lg-6 col-sm-12 wow slideInLeft">
              <div id="hot-product" class="owl-carousel owl-theme">
                <div class="item m-2">
                  <div
                    class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
                  >
                    <div class="card-header border-0 h-60 position-relative">
                      <img
                        src="{{asset('assets/clients/images/product8.jpg')}}"
                        alt=""
                        class="img-cover border border-2 border-light rounded-3"
                      />
                      <div
                        class="card-side-view position-absolute translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="eye-outline"
                          data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop"
                        ></ion-icon>
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="heart-outline"
                        ></ion-icon>
                      </div>
                      <div
                        class="add-to-cart position-absolute top-100 start-50 translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-third text-primary border"
                          name="cart-outline"
                        ></ion-icon>
                      </div>
                    </div>
  
                    <div class="card-body p-0 pt-3 border-0 text-center">
                      <h3 class="product-category fs-8 text-border-color">
                        Vegetable
                      </h3>
                      <span class="product-name hover-list fs-6 fw-medium"
                        >Fresh organic villa farm lomon 500gm pack</span
                      >
                      <div
                        class="product-price d-flex gap-2 justify-content-center fs-6 pt-2 align-items-center"
                      >
                        <span class="price-new fw-bold text-primary"
                          >$ <span>120.25</span></span
                        >
                        <del class="price-old text-border-color fw-normal"
                          >$ <span>123.25</span></del
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item m-2">
                  <div
                    class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
                  >
                    <div class="card-header border-0 h-60 position-relative">
                      <img
                        src="{{asset('assets/clients/images/product1.jpg')}}"
                        alt=""
                        class="img-cover border border-2 border-light rounded-3"
                      />
                      <div
                        class="card-side-view position-absolute translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="eye-outline"
                          data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop"
                        ></ion-icon>
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="heart-outline"
                        ></ion-icon>
                      </div>
                      <div
                        class="add-to-cart position-absolute top-100 start-50 translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-third text-primary border"
                          name="cart-outline"
                        ></ion-icon>
                      </div>
                    </div>
                    <div class="product-sale position-absolute">
                      <span
                        class="text-sale py-1 px-4 rounded-2 text-white fw-bolder bg-primary"
                        >Sale</span
                      >
                    </div>
                    <div class="card-body p-0 pt-3 border-0 text-center">
                      <h3 class="product-category fs-8 text-border-color">
                        Vegetable
                      </h3>
                      <span class="product-name hover-list fs-6 fw-medium"
                        >Fresh organic villa farm lomon 500gm pack</span
                      >
                      <div
                        class="product-price d-flex gap-2 justify-content-center fs-6 pt-2 align-items-center"
                      >
                        <span class="price-new fw-bold text-primary"
                          >$ <span>120.25</span></span
                        >
                        <del class="price-old text-border-color fw-normal"
                          >$ <span>123.25</span></del
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item m-2">
                  <div
                    class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
                  >
                    <div class="card-header border-0 h-60 position-relative">
                      <img
                        src="{{asset('assets/clients/images/product4.jpg')}}"
                        alt=""
                        class="img-cover border border-2 border-light rounded-3"
                      />
                      <div
                        class="card-side-view position-absolute translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="eye-outline"
                          data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop"
                        ></ion-icon>
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="heart-outline"
                        ></ion-icon>
                      </div>
                      <div
                        class="add-to-cart position-absolute top-100 start-50 translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-third text-primary border"
                          name="cart-outline"
                        ></ion-icon>
                      </div>
                    </div>
  
                    <div class="card-body p-0 pt-3 border-0 text-center">
                      <h3 class="product-category fs-8 text-border-color">
                        Vegetable
                      </h3>
                      <span class="product-name hover-list fs-6 fw-medium"
                        >Fresh organic villa farm lomon 500gm pack</span
                      >
                      <div
                        class="product-price d-flex gap-2 justify-content-center fs-6 pt-2 align-items-center"
                      >
                        <span class="price-new fw-bold text-primary"
                          >$ <span>120.25</span></span
                        >
                        <del class="price-old text-border-color fw-normal"
                          >$ <span>123.25</span></del
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item m-2">
                  <div
                    class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
                  >
                    <div class="card-header border-0 h-60 position-relative">
                      <img
                        src="{{asset('assets/clients/images/product3.jpg')}}"
                        alt=""
                        class="img-cover border border-2 border-light rounded-3"
                      />
                      <div
                        class="card-side-view position-absolute translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="eye-outline"
                          data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop"
                        ></ion-icon>
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="heart-outline"
                        ></ion-icon>
                      </div>
                      <div
                        class="add-to-cart position-absolute top-100 start-50 translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-third text-primary border"
                          name="cart-outline"
                        ></ion-icon>
                      </div>
                    </div>
                    <div class="product-sale position-absolute">
                      <span
                        class="text-sale py-1 px-4 rounded-2 text-white fw-bolder bg-primary"
                        >Sale</span
                      >
                    </div>
                    <div class="card-body p-0 pt-3 border-0 text-center">
                      <h3 class="product-category fs-8 text-border-color">
                        Vegetable
                      </h3>
                      <span class="product-name hover-list fs-6 fw-medium"
                        >Fresh organic villa farm lomon 500gm pack</span
                      >
                      <div
                        class="product-price d-flex gap-2 justify-content-center fs-6 pt-2 align-items-center"
                      >
                        <span class="price-new fw-bold text-primary"
                          >$ <span>120.25</span></span
                        >
                        <del class="price-old text-border-color fw-normal"
                          >$ <span>123.25</span></del
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item m-2">
                  <div
                    class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
                  >
                    <div class="card-header border-0 h-60 position-relative">
                      <img
                        src="{{asset('assets/clients/images/product2.jpg')}}"
                        alt=""
                        class="img-cover border border-2 border-light rounded-3"
                      />
                      <div
                        class="card-side-view position-absolute translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="eye-outline"
                          data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop"
                        ></ion-icon>
                        <ion-icon
                          class="p-2 rounded-5 bg-white border cursor"
                          name="heart-outline"
                        ></ion-icon>
                      </div>
                      <div
                        class="add-to-cart position-absolute top-100 start-50 translate-middle"
                      >
                        <ion-icon
                          class="p-2 rounded-5 bg-third text-primary border"
                          name="cart-outline"
                        ></ion-icon>
                      </div>
                    </div>
                    <div class="product-sale position-absolute">
                      <span
                        class="text-sale py-1 px-4 rounded-2 text-white fw-bolder bg-primary"
                        >Sale</span
                      >
                    </div>
                    <div class="card-body p-0 pt-3 border-0 text-center">
                      <h3 class="product-category fs-8 text-border-color">
                        Vegetable
                      </h3>
                      <span class="product-name hover-list fs-6 fw-medium"
                        >Fresh organic villa farm lomon 500gm pack</span
                      >
                      <div
                        class="product-price d-flex gap-2 justify-content-center fs-6 pt-2 align-items-center"
                      >
                        <span class="price-new fw-bold text-primary"
                          >$ <span>120.25</span></span
                        >
                        <del class="price-old text-border-color fw-normal"
                          >$ <span>123.25</span></del
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-5 col-xl-6 col-lg-6 col-sm-12 wow slideInRight">
              <div class="product-view m-1 pt-2">
                <div class="product-view-main rounded-2 overflow-hidden">
                  <img
                    src="{{asset('assets/clients/images/products-rightview')}}.jpg"
                    alt=""
                    class="img-cover"
                  />
                  <div class="product-view-content"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- CUSTOMER  -->
      <section class="customer my-6">
        <div class="container">
          <div
            class="section-header d-flex justify-content-center flex-column align-items-center mb-3"
          >
            <h3 class="fw-bolder">Great Words From People</h3>
            <p class="w-50 text-center fs-6 text-border-color">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi nisi
              facilis provident eos accusamus voluptatibus in
            </p>
          </div>
        </div>
        <div class="customer-main container">
          <div class="row">
            <div class="col-12 wow fadeInUpBig">
              <div id="customer-carousel" class="owl-carousel owl-theme">
                <div
                  class="customer-item item mx-2 mt-5 bg-third position-relative border border-2 rounded-2"
                >
                  <div
                    class="customer-img rounded-circle p-3 bg-white overflow-hidden position-absolute start-50 translate-middle top-0"
                  >
                    <img
                      src="{{asset('assets/clients/images/1.jpg')}}"
                      alt=""
                      class="img-cover rounded-circle"
                    />
                  </div>
                  <div class="customer-content mt-6 px-5 text-center mb-3">
                    <h5 class="customer-role fs-6 text-border-color">Manager</h5>
                    <h3 class="customer-name fs-5 fw-bolder">Hoang Thong</h3>
                    <span class="customer-des text-border-color"
                      >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad
                      ipsa atque hic</span
                    >
                    <div class="customer-review mt-3">
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon
                        class="text-warning"
                        name="star-outline"
                      ></ion-icon>
                    </div>
                  </div>
                </div>
                <div
                  class="customer-item item mx-2 mt-5 bg-third position-relative border border-2 rounded-2"
                >
                  <div
                    class="customer-img rounded-circle p-3 bg-white overflow-hidden position-absolute start-50 translate-middle top-0"
                  >
                    <img
                      src="{{asset('assets/clients/images/2.jpg')}}"
                      alt=""
                      class="img-cover rounded-circle"
                    />
                  </div>
                  <div class="customer-content mt-6 px-5 text-center mb-3">
                    <h5 class="customer-role fs-6 text-border-color">Manager</h5>
                    <h3 class="customer-name fs-5 fw-bolder">Ngoc Han</h3>
                    <span class="customer-des text-border-color"
                      >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad
                      ipsa atque hic</span
                    >
                    <div class="customer-review mt-3">
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon
                        class="text-warning"
                        name="star-outline"
                      ></ion-icon>
                    </div>
                  </div>
                </div>
                <div
                  class="customer-item item mx-2 mt-5 bg-third position-relative border border-2 rounded-2"
                >
                  <div
                    class="customer-img rounded-circle p-3 bg-white overflow-hidden position-absolute start-50 translate-middle top-0"
                  >
                    <img
                      src="{{asset('assets/clients/images/3.jpg')}}"
                      alt=""
                      class="img-cover rounded-circle"
                    />
                  </div>
                  <div class="customer-content mt-6 px-5 text-center mb-3">
                    <h5 class="customer-role fs-6 text-border-color">Manager</h5>
                    <h3 class="customer-name fs-5 fw-bolder">Kim Phuong</h3>
                    <span class="customer-des text-border-color"
                      >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad
                      ipsa atque hic</span
                    >
                    <div class="customer-review mt-3">
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon
                        class="text-warning"
                        name="star-outline"
                      ></ion-icon>
                    </div>
                  </div>
                </div>
                <div
                  class="customer-item item mx-2 mt-5 bg-third position-relative border border-2 rounded-2"
                >
                  <div
                    class="customer-img rounded-circle p-3 bg-white overflow-hidden position-absolute start-50 translate-middle top-0"
                  >
                    <img
                      src="{{asset('assets/clients/images/1.jpg')}}"
                      alt=""
                      class="img-cover rounded-circle"
                    />
                  </div>
                  <div class="customer-content mt-6 px-5 text-center mb-3">
                    <h5 class="customer-role fs-6 text-border-color">Manager</h5>
                    <h3 class="customer-name fs-5 fw-bolder">Hoang Thong</h3>
                    <span class="customer-des text-border-color"
                      >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad
                      ipsa atque hic</span
                    >
                    <div class="customer-review mt-3">
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon
                        class="text-warning"
                        name="star-outline"
                      ></ion-icon>
                    </div>
                  </div>
                </div>
                <div
                  class="customer-item item mx-2 mt-5 bg-third position-relative border border-2 rounded-2"
                >
                  <div
                    class="customer-img rounded-circle p-3 bg-white overflow-hidden position-absolute start-50 translate-middle top-0"
                  >
                    <img
                      src="{{asset('assets/clients/images/2.jpg')}}"
                      alt=""
                      class="img-cover rounded-circle"
                    />
                  </div>
                  <div class="customer-content mt-6 px-5 text-center mb-3">
                    <h5 class="customer-role fs-6 text-border-color">Manager</h5>
                    <h3 class="customer-name fs-5 fw-bolder">Ngoc Han</h3>
                    <span class="customer-des text-border-color"
                      >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad
                      ipsa atque hic</span
                    >
                    <div class="customer-review mt-3">
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon
                        class="text-warning"
                        name="star-outline"
                      ></ion-icon>
                    </div>
                  </div>
                </div>
                <div
                  class="customer-item item mx-2 mt-5 bg-third position-relative border border-2 rounded-2"
                >
                  <div
                    class="customer-img rounded-circle p-3 bg-white overflow-hidden position-absolute start-50 translate-middle top-0"
                  >
                    <img
                      src="{{asset('assets/clients/images/3.jpg')}}"
                      alt=""
                      class="img-cover rounded-circle"
                    />
                  </div>
                  <div class="customer-content mt-6 px-5 text-center mb-3">
                    <h5 class="customer-role fs-6 text-border-color">Manager</h5>
                    <h3 class="customer-name fs-5 fw-bolder">Kim Phuong</h3>
                    <span class="customer-des text-border-color"
                      >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad
                      ipsa atque hic</span
                    >
                    <div class="customer-review mt-3">
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon class="text-warning" name="star"></ion-icon>
                      <ion-icon
                        class="text-warning"
                        name="star-outline"
                      ></ion-icon>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- NEWS  -->
      <div class="section-last-news my-6">
        <div class="container">
          <div
            class="section-header d-flex justify-content-center flex-column align-items-center mb-3"
          >
            <h3 class="fw-bolder">Latest News</h3>
            <p class="w-50 text-center fs-6 text-border-color">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi nisi
              facilis provident eos accusamus voluptatibus in
            </p>
          </div>
        </div>
        <div class="last-news-main">
          <div class="container">
            <div class="row">
              <div class="col-12 wow bounceInLeft">
                <div id="news-carousel" class="owl-carousel owl-theme">
                  <div class="item m-2">
                    <div class="blog cursor card overflow-hidden">
                      <div class="blog-content card-header bg-white">
                        <span
                          class="d-flex gap-2 text-border-color align-items-center fs-6"
                        >
                          <code>By Admin</code>| <code>Snacks</code></span
                        >
                        <h3 class="fs-5 fw-bolder">
                          Urna pretium elit mauris cursus at elit Vestibulum.
                        </h3>
                        <button
                          class="btn btn-news d-flex gap-2 align-items-center fw-bold text-primary"
                        >
                          Read more
                          <ion-icon name="arrow-forward-outline"></ion-icon>
                        </button>
                      </div>
                      <div class="position-relative p-0 rounded-0">
                        <div class="new-img p-0 overflow-hidden">
                          <img src="{{asset('assets/clients/images/new1.jpg')}}" alt="" class="img-cover" />
                        </div>
                        <div
                          class="date position-absolute bottom-0 end-0 d-flex flex-column p-3 text-bg-dark rounded-2 fs-5 fw-bold"
                        >
                          <span>10</span>
                          <span>oct</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item m-2">
                    <div class="blog cursor card overflow-hidden">
                      <div class="blog-content card-header bg-white">
                        <span
                          class="d-flex gap-2 text-border-color align-items-center fs-6"
                        >
                          <code>By Admin</code>| <code>Snacks</code></span
                        >
                        <h3 class="fs-5 fw-bolder">
                          Urna pretium elit mauris cursus at elit Vestibulum.
                        </h3>
                        <button
                          class="btn btn-news d-flex gap-2 align-items-center fw-bold text-primary"
                        >
                          Read more
                          <ion-icon name="arrow-forward-outline"></ion-icon>
                        </button>
                      </div>
                      <div class="position-relative p-0 rounded-0">
                        <div class="new-img p-0 overflow-hidden">
                          <img src="{{asset('assets/clients/images/new2.jpg')}}" alt="" class="img-cover" />
                        </div>
                        <div
                          class="date position-absolute bottom-0 end-0 d-flex flex-column p-3 text-bg-dark rounded-2 fs-5 fw-bold"
                        >
                          <span>10</span>
                          <span>oct</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item m-2">
                    <div class="blog cursor card overflow-hidden">
                      <div class="blog-content card-header bg-white">
                        <span
                          class="d-flex gap-2 text-border-color align-items-center fs-6"
                        >
                          <code>By Admin</code>| <code>Food</code></span
                        >
                        <h3 class="fs-5 fw-bolder">
                          Urna pretium elit mauris cursus at elit Vestibulum.
                        </h3>
                        <button
                          class="btn btn-news d-flex gap-2 align-items-center fw-bold text-primary"
                        >
                          Read more
                          <ion-icon name="arrow-forward-outline"></ion-icon>
                        </button>
                      </div>
                      <div class="position-relative p-0 rounded-0">
                        <div class="new-img p-0 overflow-hidden">
                          <img src="{{asset('assets/clients/images/new3.jpg')}}" alt="" class="img-cover" />
                        </div>
                        <div
                          class="date position-absolute bottom-0 end-0 d-flex flex-column p-3 text-bg-dark rounded-2 fs-5 fw-bold"
                        >
                          <span>10</span>
                          <span>oct</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item m-2">
                    <div class="blog cursor card overflow-hidden">
                      <div class="blog-content card-header bg-white">
                        <span
                          class="d-flex gap-2 text-border-color align-items-center fs-6"
                        >
                          <code>By Admin</code>| <code>Vegetable</code></span
                        >
                        <h3 class="fs-5 fw-bolder">
                          Urna pretium elit mauris cursus at elit Vestibulum.
                        </h3>
                        <button
                          class="btn btn-news d-flex gap-2 align-items-center fw-bold text-primary"
                        >
                          Read more
                          <ion-icon name="arrow-forward-outline"></ion-icon>
                        </button>
                      </div>
                      <div class="position-relative p-0 rounded-0">
                        <div class="new-img p-0 overflow-hidden">
                          <img src="{{asset('assets/clients/images/new2.jpg')}}" alt="" class="img-cover" />
                        </div>
                        <div
                          class="date position-absolute bottom-0 end-0 d-flex flex-column p-3 text-bg-dark rounded-2 fs-5 fw-bold"
                        >
                          <span>10</span>
                          <span>oct</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item m-2">
                    <div class="blog cursor card overflow-hidden">
                      <div class="blog-content card-header bg-white">
                        <span
                          class="d-flex gap-2 text-border-color align-items-center fs-6"
                        >
                          <code>By Admin</code>| <code>Snacks</code></span
                        >
                        <h3 class="fs-5 fw-bolder">
                          Urna pretium elit mauris cursus at elit Vestibulum.
                        </h3>
                        <button
                          class="btn btn-news d-flex gap-2 align-items-center fw-bold text-primary"
                        >
                          Read more
                          <ion-icon name="arrow-forward-outline"></ion-icon>
                        </button>
                      </div>
                      <div class="position-relative p-0 rounded-0">
                        <div class="new-img p-0 overflow-hidden">
                          <img src="{{asset('assets/clients/images/new3.jpg')}}" alt="" class="img-cover" />
                        </div>
                        <div
                          class="date position-absolute bottom-0 end-0 d-flex flex-column p-3 text-bg-dark rounded-2 fs-5 fw-bold"
                        >
                          <span>10</span>
                          <span>oct</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item m-2">
                    <div class="blog cursor card overflow-hidden">
                      <div class="blog-content card-header bg-white">
                        <span
                          class="d-flex gap-2 text-border-color align-items-center fs-6"
                        >
                          <code>By Admin</code>| <code>Snacks</code></span
                        >
                        <h3 class="fs-5 fw-bolder">
                          Urna pretium elit mauris cursus at elit Vestibulum.
                        </h3>
                        <button
                          class="btn btn-news d-flex gap-2 align-items-center fw-bold text-primary"
                        >
                          Read more
                          <ion-icon name="arrow-forward-outline"></ion-icon>
                        </button>
                      </div>
                      <div class="position-relative p-0 rounded-0">
                        <div class="new-img p-0 overflow-hidden">
                          <img src="{{asset('assets/clients/images/new2.jpg')}}" alt="" class="img-cover" />
                        </div>
                        <div
                          class="date position-absolute bottom-0 end-0 d-flex flex-column p-3 text-bg-dark rounded-2 fs-5 fw-bold"
                        >
                          <span>10</span>
                          <span>oct</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection