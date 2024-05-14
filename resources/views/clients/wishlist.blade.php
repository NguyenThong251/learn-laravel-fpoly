@extends('layouts.client')
@section('title')
    {{$title}}
@endsection
@section('content')
@include('clients.partials.title')
<div class="popular-detail my-7">
    <div class="container">
      <div class="row g-3">
        <div class="col-xxl-3 col-lg-3 col-xl-4 col-6 wow fadeInUp">
          <div
            class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
          >
            <div class="card-header border-0 h-60 position-relative">
              <img
                src="{{asset('assets/clients/images/product1.jpg')}}"
                alt=""
                class="img-cover border border-2 border-light rounded-3"
              />
              <div class="card-side-view position-absolute translate-middle">
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

        <div class="col-xxl-3 col-lg-3 col-xl-4 col-6 wow fadeInUp">
          <div
            class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
          >
            <div class="card-header border-0 h-60 position-relative">
              <img
                src="{{asset('assets/clients/images/product2.jpg')}}"
                alt=""
                class="img-cover border border-2 border-light rounded-3"
              />
              <div class="card-side-view position-absolute translate-middle">
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
        <div class="col-xxl-3 col-lg-3 col-xl-4 col-6 wow fadeInUp">
          <div
            class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
          >
            <div class="card-header border-0 h-60 position-relative">
              <img
                src="{{asset('assets/clients/images/product3.jpg')}}"
                alt=""
                class="img-cover border border-2 border-light rounded-3"
              />
              <div class="card-side-view position-absolute translate-middle">
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
        <div class="col-xxl-3 col-lg-3 col-xl-4 col-6 wow fadeInUp">
          <div
            class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
          >
            <div class="card-header border-0 h-60 position-relative">
              <img
                src="{{asset('assets/clients/images/product4.jpg')}}"
                alt=""
                class="img-cover border border-2 border-light rounded-3"
              />
              <div class="card-side-view position-absolute translate-middle">
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
  @endsection