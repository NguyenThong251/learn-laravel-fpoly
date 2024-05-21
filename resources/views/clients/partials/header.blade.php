
 <!-- MODEL SEARCH  -->
 
 @include('clients.partials.searchproduct')
<!-- MODAL ADD TO CART  -->
@include('clients.partials.viewcartmodel')
<!-- MODEL SEARCH END  -->
<header class="header">
    <div class="header-top container border-bottom border-2 border-light">
      <div
        class="header-top-main align-items-center justify-content-between py-3"
      >
        <img src="{{asset('assets/clients/images/logoo.png')}}" alt="" class="logo-img logo" width="40" />

        <div
          class="header-top-right d-flex align-items-center gap-3 fs-6 fw-medium"
        >
          <div
            href=""
            class="d-flex align-items-center gap-2 hover-list cursor"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasSearch"
            aria-controls="offcanvasTop"
          >
            <ion-icon class="fs-4" name="search-outline"></ion-icon>
            <span>Search</span>
          </div>
          <ul class="navbar-nav">
            <li class="nav-item dropdown hover-list">
              <div
                class="account nav-link d-flex align-items-center gap-2"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <ion-icon class="fs-4" name="person-outline"></ion-icon>
                <span>Account</span>
              </div>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                <li><a class="dropdown-item" href="{{route('signup')}}">Register</a></li>
                <li>
                  <a class="dropdown-item" href="{{route('checkout')}}">Checkout</a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="{{route('login')}}">Login</a>
                </li>
              </ul>
            </li>
          </ul>
          <a
            href="{{route('wishlist')}}"
            class="d-flex align-items-center gap-2 text-decoration-none  hover-list cursor"
          >
            <ion-icon class="fs-4" name="heart-outline"></ion-icon>
            <span>Wishlist</span>
          </a>

          <div
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasRight"
            aria-controls="offcanvasRight"
            id="cart-click"
            href=""
            class="header-top-right-item header-cart d-flex align-items-center gap-2 hover-list cursor"
          >
            <span class="quality px-2 fs-6 rounded-5 bg-primary text-white"
              >1</span
            >
            <ion-icon class="fs-4 fw-bold" name="cart-outline"></ion-icon>
            <span>Cart</span>
          </div>
        </div>
      </div>
    </div>
    @include('clients.partials.nav')
  </header>
 