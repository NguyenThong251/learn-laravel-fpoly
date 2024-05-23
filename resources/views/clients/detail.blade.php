@extends('layouts.client')
@section('title')
{{$title}}
@endsection
@section('content')
@include('clients.partials.title')
 <!-- MAIN DETAIL -->
 <div class="container my-5">
    <div class="row">
      <div class="col-md-4 col-12 wow fadeInLeft">
        <div class="detail-banner">
          <div
            class="detail-banner-img rounded-2 overflow-hidden border-1 border-secondary"
          >
            <img src=" {{$productsDetail-> image}}" class="img-cover" alt="" />
          </div>
          <div class="slide-img wow fadeInUp mt-3">
            <div id="slide-img" class="owl-carousel owl-theme">
              {{-- @foreach ( as )
                <div
                class="item cursor mx-1 position-relative slide-img-list overflow-hidden rounded-2"
              >
                <img src="uploads/product2.jpg" alt="" class="img-cover" />
                <div
                  class="img-overlay bg-dark bg-opacity-50 w-100 h-100 d-flex align-items-center justify-content-center position-absolute top-50 start-50 translate-middle"
                >
                  <ion-icon
                    class="fs-4 text-third"
                    name="logo-instagram"
                  ></ion-icon>
                </div>
              </div>
              @endforeach --}}
              
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-12 wow fadeInRight">
        <div class="detail-right d-flex flex-column gap-3 w-75">
          <h2 class="modal-product-name fs-5 fw-medium">
           {{$productsDetail-> name}}
          </h2>
          <span class="modal-product-des text-border-color"
            > {{$productsDetail-> description}}</span
          >
          {{-- <div
            class="modal-review border-top border-2 mt-2 pt-2 d-flex gap-2 align-items-center"
          >
            <div class="star fs-5 text-warning">
              <ion-icon name="star"></ion-icon
              ><ion-icon name="star"></ion-icon
              ><ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-half"></ion-icon>
            </div>
            <span class="fw-medium text-border-color">( 75 Review )</span>
          </div> --}}
          <div class="deatail-list">
            <ul class="list-group w-50 my-2 gap-3">
              <li
                class="list-group-item border-0 d-flex justify-content-between p-0"
              >
                <label class="fw-bolder" for="">Brand <span>:</span> </label>
                {{ $productsDetail->brand_name}}
              </li>
              <li
                class="list-group-item border-0 d-flex justify-content-between p-0"
              >
                <label class="fw-bolder" for=""
                  >Category<span>:</span>
                </label>
                {{ $productsDetail->category_name}}
              </li>
              <li
                class="list-group-item border-0 d-flex justify-content-between p-0"
              >
                <label class="fw-bolder" for=""
                  >Create at <span>:</span>
                </label>
                {{ $productsDetail-> created_at }}
              </li>
            
              <li
                class="list-group-item border-0 d-flex justify-content-between p-0"
              >
                <label class="fw-bolder" for="">Items<span>:</span> </label>
                {{ $productsDetail-> quantity }}
              </li>
            </ul>
          </div>
          {{-- <div class="modal-product-price d-flex gap-3 align-items-end">
            <span class="modal-price-old fs-3 fw-bolder text-primary"
              >$ <span>{{ $productsDetail-> created_at }}</span></span
            >
            <del class="modal-price-new fs-4 text-border-color"
              >$ <span>{{ $productsDetail-> created_at }}</span></del
            >
          </div> --}}
          <div
          class="modal-product-price d-flex gap-3 align-items-end"
        >
        <span class="price-new fw-bold text-primary fs-3">$ <span>{{$productsDetail->price_after_discount}}</span></span>
        @if ($productsDetail->discount > 0)
        <del class="price-old text-border-color fw-normal fs-4">$ <span>{{$productsDetail->price}}</span></del>
        @endif
        </div>
          {{-- <div class="modal-size-weight d-flex mt-2 gap-2">
            <h5 class="fs-6 fw-medium">Size/Weight:</h5>
            <div class="modal-kg">
              <ul class="d-flex gap-2 p-0">
                <li
                  class="active-color list-group-item cursor border px-1 rounded-2 d-flex align-items-center justify-content-center fs-8"
                >
                  500gm
                </li>
                <li
                  class="list-group-item cursor border px-1 rounded-2 d-flex align-items-center justify-content-center fs-8"
                >
                  1kg
                </li>
                <li
                  class="list-group-item cursor border px-1 rounded-2 d-flex align-items-center justify-content-center fs-8"
                >
                  1.5kg
                </li>
                <li
                  class="list-group-item cursor border px-1 rounded-2 d-flex align-items-center justify-content-center fs-8"
                >
                  2kg
                </li>
                <li
                  class="list-group-item cursor border px-1 rounded-2 d-flex align-items-center justify-content-center fs-8"
                >
                  5kg
                </li>
              </ul>
            </div>
          </div> --}}
          <div class="modal-addcart d-flex gap-3">
            <div class="modal-quatity d-flex gap-2">
              <input
                type="text"
                name=""
                minlength="1"
                maxlength="20"
                value="1"
                id=""
                class="quatity text-center border-secondary rounded-2 px-2"
              />
              <div
                class="modal-btn-add-del d-flex flex-column justify-content-between"
              >
                <button
                  type="submit"
                  class="plus border border-border-color rounded-2 d-flex align-items-center justify-content-center"
                  id="modal-add"
                >
                  <ion-icon name="add"></ion-icon>
                </button>
                <button
                  type="submit"
                  class="minus border border-border-color rounded-2 d-flex align-items-center justify-content-center"
                  id="modal-remove"
                >
                  <ion-icon name="remove"></ion-icon>
                </button>
              </div>
            </div>
            <button
              type="submit"
              class="btn btn-primary text-white fw-bolder"
            >
              Add To Cart
            </button>

            {{-- <ion-icon
              class="p-2 rounded-1 fs-5 hover-tag border border-secondary cursor"
              name="eye-outline"
              data-bs-toggle="modal"
              data-bs-target="#staticBackdrop"
              data-bs-toggle="modal"
              data-bs-target="#staticBackdrop"
            ></ion-icon> --}}
            <ion-icon
              class="hover-tag p-2 rounded-1 fs-5 border border-secondary cursor"
              name="heart-outline"
            ></ion-icon>
          </div>
        </div>
      </div>
      <div class="wow fadeInUp">
        <div class="delivery p-4 my-5 border rounded-2">
          <div class="delivery-des-main">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link fw-medium active"
                  id="pills-home-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-home"
                  type="button"
                  role="tab"
                  aria-controls="pills-home"
                  aria-selected="true"
                >
                  Infomation
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link fw-medium"
                  id="pills-profile-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-profile"
                  type="button"
                  role="tab"
                  aria-controls="pills-profile"
                  aria-selected="false"
                >
                  Description
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link fw-medium"
                  id="pills-contact-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-contact"
                  type="button"
                  role="tab"
                  aria-controls="pills-contact"
                  aria-selected="false"
                >
                  Review
                </button>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div
                class="tab-pane fade show active"
                id="pills-home"
                role="tabpanel"
                aria-labelledby="pills-home-tab"
                tabindex="0"
              >
                <div class="content-info">
                  <div class="delivary-des my-5">
                    <p class="text-border-color fw-medium">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Error in vero sapiente odio, error dolore vero
                      temporibus consequatur, nobis veniam odit dignissimos
                      consectetur quae in perferendis doloribusdebitis
                      corporis, eaque dicta, repellat amet, illum adipisci vel
                      perferendis dolor! Quis vel consequuntur repellat
                      distinctio rem. Corrupti ratione alias odio, error
                      dolore temporibus consequatur, nobis veniam odit laborum
                      dignissimos consectetur quae vero in perferendis
                      provident quis.
                    </p>
                  </div>
                  <h4
                    class="filter-category-title text-dark fs-5 my-3 pb-3 border-bottom border-secondary border-2"
                  >
                    Category
                  </h4>
                  <div class="delivary-des my-5">
                    <p class="text-border-color fw-medium">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Error in vero perferendis dolor! Quis vel consequuntur
                      repellat distinctio rem. Corrupti ratione alias odio,
                      error dolore temporibus consequatur, nobis veniam odit
                      laborum dignissimos consectetur quae vero in perferendis
                      provident quis.
                    </p>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="pills-profile"
                role="tabpanel"
                aria-labelledby="pills-profile-tab"
                tabindex="0"
              >
                <div class="content-des">
                  <div class="delivary-des my-5">
                    <p class="text-border-color fw-medium">
                      {{ $productsDetail-> description_detail }}
                    </p>
                  </div>
                  <h4
                    class="filter-category-title text-dark fs-5 my-3 pb-3 border-bottom border-secondary border-2"
                  >
                    Infomation Product
                  </h4>
                  <div class="deatail-list">
                    <ul class="list-group w-50 my-2 gap-3">
                      <li
                      class="list-group-item border-0 d-flex gap-3 p-0"
                    >
                      <label class="fw-bolder" for="">Brand <span>:</span> </label>
                      {{ $productsDetail->brand_name}}
                    </li>
                    <li
                      class="list-group-item border-0 d-flex gap-3 p-0"
                    >
                      <label class="fw-bolder" for=""
                        >Category<span>:</span>
                      </label>
                      {{ $productsDetail->category_name}}
                    </li>
                    <li
                      class="list-group-item border-0 d-flex gap-3 p-0"
                    >
                      <label class="fw-bolder" for=""
                        >Create at <span>:</span>
                      </label>
                      {{ $productsDetail-> created_at }}
                    </li>
                  
                    <li
                      class="list-group-item border-0 d-flex gap-3 p-0"
                    >
                      <label class="fw-bolder" for="">Items<span>:</span> </label>
                      {{ $productsDetail-> quantity }}
                    </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="pills-contact"
                role="tabpanel"
                aria-labelledby="pills-contact-tab"
                tabindex="0"
              >
                <h4
                  class="text-dark filter-category-title fs-5 my-3 pb-3 border-bottom border-secondary border-2"
                >
                  Recent comments
                </h4>
                <div
                  class="user-comment d-flex text-dark flex-column gap-4 mt-4"
                >
                  <div class="d-flex flex-start">
                    <img
                      class="rounded-circle shadow-1-strong me-3 quatity"
                      src="uploads/2.jpg"
                      alt="avatar"
                    />
                    <div>
                      <h6 class="fw-bold mb-1">Maggie Marsh</h6>
                      <div class="d-flex align-items-center gap-3 mb-3">
                        <p class="mb-0">March 07, 2021</p>
                        <div class="star fs-5 text-warning">
                          <ion-icon name="star"></ion-icon
                          ><ion-icon name="star"></ion-icon
                          ><ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star-half"></ion-icon>
                        </div>

                        <a href="#!" class="link-muted"
                          ><i class="fas fa-pencil-alt ms-2"></i
                        ></a>
                        <a href="#!" class="link-muted"
                          ><i class="fas fa-redo-alt ms-2"></i
                        ></a>
                        <a href="#!" class="link-muted"
                          ><i class="fas fa-heart ms-2"></i
                        ></a>
                      </div>
                      <p class="mb-0">
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        scrambled it.
                      </p>
                    </div>
                  </div>
                  <div class="d-flex flex-start">
                    <img
                      class="rounded-circle shadow-1-strong me-3 quatity"
                      src="uploads/2.jpg"
                      alt="avatar"
                    />
                    <div>
                      <h6 class="fw-bold mb-1">Maggie Marsh</h6>
                      <div class="d-flex align-items-center gap-3 mb-3">
                        <p class="mb-0">March 07, 2021</p>
                        <div class="star fs-5 text-warning">
                          <ion-icon name="star"></ion-icon
                          ><ion-icon name="star"></ion-icon
                          ><ion-icon name="star"></ion-icon>
                          <ion-icon name="star"></ion-icon>
                          <ion-icon name="star-half"></ion-icon>
                        </div>

                        <a href="#!" class="link-muted"
                          ><i class="fas fa-pencil-alt ms-2"></i
                        ></a>
                        <a href="#!" class="link-muted"
                          ><i class="fas fa-redo-alt ms-2"></i
                        ></a>
                        <a href="#!" class="link-muted"
                          ><i class="fas fa-heart ms-2"></i
                        ></a>
                      </div>
                      <p class="mb-0">
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        scrambled it.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card border-0 p-0">
                  <div class="card-body p-4">
                    <div class="d-flex flex-start w-100">
                      <div class="w-100">
                        <h5>Add a comment</h5>
                        <div
                          class="profile d-flex gap-3 py-3 align-items-center"
                        >
                          <img
                            class="rounded-circle"
                            width="60"
                            src="uploads/1.jpg"
                            alt=""
                          />
                          <div
                            class="profile-right d-flex flex-column justify-content-center"
                          >
                            <h3 class="profile-name fs-5">Hoang Thong</h3>
                            <ul
                              class="rating mb-3 d-flex p-0"
                              data-mdb-toggle="rating"
                            >
                              <li class="list-group-item">
                                <ion-icon
                                  class="text-warning"
                                  name="star-outline"
                                ></ion-icon>
                              </li>
                              <li class="list-group-item">
                                <ion-icon
                                  class="text-warning"
                                  name="star-outline"
                                ></ion-icon>
                              </li>
                              <li class="list-group-item">
                                <ion-icon
                                  class="text-warning"
                                  name="star-outline"
                                ></ion-icon>
                              </li>
                              <li class="list-group-item">
                                <ion-icon
                                  class="text-warning"
                                  name="star-outline"
                                ></ion-icon>
                              </li>
                              <li class="list-group-item">
                                <ion-icon
                                  class="text-warning"
                                  name="star-outline"
                                ></ion-icon>
                              </li>
                            </ul>
                          </div>
                        </div>

                        <div class="form-outline">
                          <textarea
                            class="form-control"
                            id="textAreaExample"
                            placeholder="What is your view?"
                            rows="4"
                          ></textarea>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                          <button
                            type="button"
                            class="btn btn-primary fw-bolder text-white"
                          >
                            Send
                            <i class="fas fa-long-arrow-alt-right ms-1"></i>
                          </button>
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
    </div>
  </div>
  <!-- PRODUCT POPULAR  -->
  <div class="popular-detail">
    <div class="container">
      <div
        class="section-header d-flex justify-content-center flex-column align-items-center mb-3"
      >
        <h3 class="fw-bolder">Related products</h3>
        <p class="w-50 text-center fs-6 text-border-color">
          But the product that stands out is related to the above product
        </p>
      </div>
    </div>
    <div class="container">
      <div class="row g-3">
        @foreach ($relatedProducts as  $item)
        <div class="col-xxl-3 col-xl-4 col-6 wow fadeInUp">
          <div
            class="position-relative card-product cursor card p-3 border border-2 bg-white border-light rounded-3 shadow-sm"
          >
          <div class="card-header border-0 h-60 position-relative">
              <a href="{{route('detail',$item->id)}}">
                <img
                src="{{$item->image}}"
                alt=""
                class="img-cover border border-2 border-light rounded-3"
                />
              </a>
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
            @if ($item->discount > 0)
            <div class="product-sale position-absolute">
                <span class="text-sale py-1 px-3 rounded-2 text-white fw-medium fs-6 bg-primary">{{$item->discount}}%</span>
            </div>
            @endif
            @if ($item->hot == 1)
            <div class="product-hot position-absolute">
              <span class=" py-1 px-3 rounded-2 text-white fw-medium fs-6 bg-danger shadow-sm">Hot</span>
          </div>
          @endif
            <div class="card-body p-0 pt-3 border-0 text-center">
              <h3 class="product-category fs-8 text-border-color">
                {{$item->category_name}}
              </h3>
              <span class="product-name hover-list fs-6 fw-medium"
                >{{$item->name}}</span
              >
              <div
                class="product-price d-flex gap-2 justify-content-center fs-6 pt-2 align-items-center"
              >
              <span class="price-new fw-bold text-primary">$ <span>{{number_format($item->price_after_discount)}}</span></span>
              @if ($item->discount > 0)
              <del class="price-old text-border-color fw-normal">$ <span>{{$item->price}}</span></del>
              @endif
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection