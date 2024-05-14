<nav class="navbar navbar-expand-lg">
    <div class="container">
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarScroll"
        aria-controls="navbarScroll"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul
          class="navbar-nav me-auto my-2 d-flex gap-3 my-lg-0 navbar-nav-scroll"
          style="--bs-scroll-height: 100px"
        >
          <li class="nav-item hover-list">
            <a
              class="nav-link nav-link-item active fs-6 fw-medium"
              aria-current="page"
              href="{{route('home')}}"
              >Home</a
            >
          </li>
          <li class="nav-item hover-list">
            <a
              class="nav-link nav-link-item active fs-6 fw-medium"
              aria-current="page"
              href="{{route('products')}}"
              >Shop</a
            >
          </li>

          {{-- <li class="nav-item dropdown">
            <a
              class="nav-link nav-link-item d-flex align-items-center gap-2 fs-6 fw-medium text-black"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Shop <ion-icon name="chevron-down-outline"></ion-icon>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item fs-6 fw-medium" href="#">Apple</a>
              </li>
              <li>
                <a class="dropdown-item fs-6 fw-medium" href="#">Banana</a>
              </li>
              <li>
                <a class="dropdown-item fs-6 fw-medium" href="#">coconut</a>
              </li>
            </ul>
          </li> --}}
          <li class="nav-item">
            <a
              class="nav-link nav-link-item active fs-6 fw-medium"
              aria-current="page"
              href="{{route('blog')}}"
              >Blog</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link nav-link-item active fs-6 fw-medium"
              aria-current="page"
              href="{{route('contact')}}"
              >Contact</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link nav-link-item active fs-6 fw-medium"
              aria-current="page"
              href="{{route('about')}}"
              >About</a
            >
          </li>
        </ul>
        <div class="menu-call">
          <div class="call d-flex align-items-center gap-2 fw-medium">
            <ion-icon name="call-outline" class="fs-4"></ion-icon>
            <span class="fs-5">(+84) 868 412 519</span>
          </div>
        </div>
      </div>
    </div>
  </nav>