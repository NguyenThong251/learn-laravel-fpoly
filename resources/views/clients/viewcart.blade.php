@extends('layouts.client')
@section('content')
@section('title')
{{$title}}
@endsection
@section('content')
<section class="blog container">
    @include('clients.partials.title')
    <section class="section-detail container my-5">
        <form action="">
          <div
            class="wow fadeInUp table-content border border-2 rounded-2 table-responsive"
          >
            <table class="table mb-0">
              <thead class="table-secondary">
                <tr>
                  <th scope="col " class="fw-semibold">Img</th>
                  <th scope="col " class="fw-semibold">Name</th>
                  <th scope="col " class="fw-semibold">Price</th>
                  <th scope="col " class="fw-semibold">Quantity</th>
                  <th scope="col " class="fw-semibold">Total</th>
                  <th scope="col " class="fw-semibold text-center">Action</th>
                </tr>
              </thead>
              <tbody class="table-light">
                <tr class="align-middle">
                  <th scope="row">
                    <img
                      src="{{asset('assets/clients/images/product1.jpg')}}"
                      alt=""
                      width="60"
                      height="60"
                      class="border border-secondary rounded-2"
                    />
                  </th>
                  <td>
                    <span class="fw-medium text-border-color">Rganic Lemon</span>
                  </td>
                  <td><span class="fw-medium text-border-color">$56.00</span></td>
                  <td>
                    <div
                      class="qty-cart border w-50 rounded-1 bg-white fw-medium text-border-color text-center"
                    >
                      <button class="btn" type="button" class="plus">+</button>
                      <input
                        type="text"
                        class="text-center border-0 qty-cart-input"
                        value="1"
                        minlength="1"
                        maxlength="20"
                      />
                      <button class="btn" type="button" class="plus">-</button>
                    </div>
                  </td>
                  <td><span class="fw-medium text-border-color">$56.00</span></td>
  
                  <td class="text-center">
                    <ion-icon
                      class="cursor fs-5 text-border-color delete-cart-pro"
                      name="trash-sharp"
                    ></ion-icon>
                  </td>
                </tr>
                <tr class="align-middle">
                  <th scope="row">
                    <img
                      src="{{asset('assets/clients/images/product2.jpg')}}"
                      alt=""
                      width="60"
                      height="60"
                      class="border border-secondary rounded-2"
                    />
                  </th>
                  <td>
                    <span class="fw-medium text-border-color">Rganic Lemon</span>
                  </td>
                  <td><span class="fw-medium text-border-color">$56.00</span></td>
                  <td>
                    <div
                      class="qty-cart border w-50 rounded-1 bg-white fw-medium text-border-color text-center"
                    >
                      <button class="btn" type="button" class="plus">+</button>
                      <input
                        type="text"
                        class="text-center border-0 qty-cart-input"
                        value="1"
                        minlength="1"
                        maxlength="20"
                      />
                      <button class="btn" type="button" class="plus">-</button>
                    </div>
                  </td>
                  <td><span class="fw-medium text-border-color">$56.00</span></td>
  
                  <td class="text-center">
                    <ion-icon
                      class="cursor fs-5 text-border-color delete-cart-pro"
                      name="trash-sharp"
                    ></ion-icon>
                  </td>
                </tr>
                <tr class="align-middle">
                  <th scope="row">
                    <img
                      src="{{asset('assets/clients/images/product3.jpg')}}"
                      alt=""
                      width="60"
                      height="60"
                      class="border border-secondary rounded-2"
                    />
                  </th>
                  <td>
                    <span class="fw-medium text-border-color">Rganic Lemon</span>
                  </td>
                  <td><span class="fw-medium text-border-color">$56.00</span></td>
                  <td>
                    <div
                      class="qty-cart border w-50 rounded-1 bg-white fw-medium text-border-color text-center"
                    >
                      <button class="btn" type="button" class="plus">+</button>
                      <input
                        type="text"
                        class="text-center border-0 qty-cart-input"
                        value="1"
                        minlength="1"
                        maxlength="20"
                      />
                      <button class="btn" type="button" class="plus">-</button>
                    </div>
                  </td>
                  <td><span class="fw-medium text-border-color">$56.00</span></td>
  
                  <td class="text-center">
                    <ion-icon
                      class="cursor fs-5 text-border-color delete-cart-pro"
                      name="trash-sharp"
                    ></ion-icon>
                  </td>
                </tr>
                <tr>
                  <td colspan="6" class="text-end py-3 border-bottom-0">
                    <span class="fw-bolder fs-5">Total Price: $123.122</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="cart-update my-4 d-flex justify-content-between mb-7">
            <div class="cart-link">
              <a href="" class="text-dark fw-medium fs-6">Continue Shopping</a>
            </div>
            <button class="btn btn-primary fw-bolder text-white">
              <a class="text-decoration-none text-white "  href="{{route('checkout')}}" >
                Check out
              </a>
            </button>
          </div>
        </form>
      </section>

@endsection