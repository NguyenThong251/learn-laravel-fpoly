<!-- MODAL ADD TO CART  -->
<div
class="offcanvas offcanvas-end"
tabindex="-1"
id="offcanvasRight"
aria-labelledby="offcanvasRightLabel"
>
<div class="offcanvas-header">
  <h5 class="offcanvas-title fs-5 fw-bolder" id="offcanvasRightLabel">
    My Cart
  </h5>
  <button
    type="button"
    class="btn-close"
    data-bs-dismiss="offcanvas"
    aria-label="Close"
  ></button>
</div>
<div class="offcanvas-body d-flex flex-column justify-content-between">
  <div class="overlay-cart-top">
    <ul class="modal-cart-list px-0">
      <li
        class="list-group-item mx-1 my-4 modal-cart-item border-bottom border-secondary border-2 mb-3 pb-3"
      >
        <div class="row">
          <div class="col-4 overflow-hidden rounded-2">
            <img src="{{asset('assets/clients/images/cart1.jpg')}}" class="img-cover" alt="" />
          </div>
          <div class="col-8">
            <div
              class="d-flex justify-content-between align-items-center"
            >
              <h3 class="modal-product-name fs-6">Fresh Pomearanate</h3>
              <code class="cursor remove-pro"
                ><ion-icon class="fs-5" name="close-outline"></ion-icon
              ></code>
            </div>
            <span class="modal-product-price">
              $ <span>123.000</span></span
            >
            <div class="modal-cart-qty text-center mt-1">
              <div
                class="modal-cart-qty-plus-minus border rounded-2 m-0 d-flex align-items-center justify-content-center border-1"
              >
                <button type="button" class="btn">
                  <ion-icon name="add-outline"></ion-icon>
                </button>
                <input
                  type="text"
                  name=""
                  value="1"
                  minlength="1"
                  maxlength="20"
                  class="quatity text-center border-0"
                  id=""
                />
                <button type="button" class="btn">
                  <ion-icon name="remove-outline"></ion-icon>
                </button>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li
        class="list-group-item mx-1 my-4 modal-cart-item border-bottom border-secondary border-2 mb-3 pb-3"
      >
        <div class="row">
          <div class="col-4 overflow-hidden rounded-2">
            <img src="{{asset('assets/clients/images/cart2.jpg')}}" class="img-cover" alt="" />
          </div>
          <div class="col-8">
            <div
              class="d-flex justify-content-between align-items-center"
            >
              <h3 class="modal-product-name fs-6">Fresh Pomearanate</h3>
              <code class="cursor remove-pro"
                ><ion-icon class="fs-5" name="close-outline"></ion-icon
              ></code>
            </div>
            <span class="modal-product-price">
              $ <span>123.000</span></span
            >
            <div class="modal-cart-qty text-center mt-1">
              <div
                class="modal-cart-qty-plus-minus border rounded-2 m-0 d-flex align-items-center justify-content-center border-1"
              >
                <button type="button" class="btn">
                  <ion-icon name="add-outline"></ion-icon>
                </button>
                <input
                  type="text"
                  name=""
                  value="1"
                  minlength="1"
                  maxlength="20"
                  class="quatity text-center border-0"
                  id=""
                />
                <button type="button" class="btn">
                  <ion-icon name="remove-outline"></ion-icon>
                </button>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li
        class="list-group-item mx-1 my-4 modal-cart-item border-bottom border-secondary border-2 mb-3 pb-3"
      >
        <div class="row">
          <div class="col-4 overflow-hidden rounded-2">
            <img src="{{asset('assets/clients/images/cart3.jpg')}}" class="img-cover" alt="" />
          </div>
          <div class="col-8">
            <div
              class="d-flex justify-content-between align-items-center"
            >
              <h3 class="modal-product-name fs-6">Fresh Pomearanate</h3>
              <code class="cursor remove-pro"
                ><ion-icon class="fs-5" name="close-outline"></ion-icon
              ></code>
            </div>
            <span class="modal-product-price">
              $ <span>123.000</span></span
            >
            <div class="modal-cart-qty text-center mt-1">
              <div
                class="modal-cart-qty-plus-minus border rounded-2 m-0 d-flex align-items-center justify-content-center border-1"
              >
                <button type="button" class="btn">
                  <ion-icon name="add-outline"></ion-icon>
                </button>
                <input
                  type="text"
                  name=""
                  value="1"
                  minlength="1"
                  maxlength="20"
                  class="quatity text-center border-0"
                  id=""
                />
                <button type="button" class="btn">
                  <ion-icon name="remove-outline"></ion-icon>
                </button>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
  <div
    class="modal-cart-bottom border-top border-secondary border-2 pt-3"
  >
    <div class="modal-cart-sub-total">
      <div
        class="d-flex justify-content-between py-2 align-items-between"
      >
        <h5 class="fs-6 fw-normal text-border-color">Sub-Total:</h5>
        <span class="fw-bold fs-6">$300.00</span>
      </div>
      <div
        class="d-flex justify-content-between py-2 align-items-between"
      >
        <h5 class="fs-6 fw-normal text-border-color">VAT (20%) :</h5>
        <span class="fw-bold fs-6">$60.00</span>
      </div>
      <div
        class="d-flex justify-content-between py-2 align-items-between"
      >
        <h5 class="fs-6 fw-normal text-border-color">Sub-Total</h5>
        <span class="fw-bold fs-6">$360.00</span>
      </div>
    </div>
    <div class="modal-cart-btn d-flex justify-content-between gap-7 mb-3">
      <button
        type="button"
        class="btn btn-primary fw-bolder w-50 text-white"
      >
      <a href="{{route('viewcart')}}" class="text-decoration-none text-white">

        View Cart
      </a>
      </button>
      <button
        type="button"
        class="btn border-primary fw-bolder w-50 text-primary"
      >
      <a href="{{route('checkout')}}" class="text-decoration-none text-primary">
        Checkout
        </a>
      </button>
    </div>
  </div>
</div>
</div>
<!-- MODEL SEARCH END  -->