
<header
id="page-header"
class="w-auto position-fixed top-0 start-0 end-0 z-3"
>
<div
  class="page-header-content bg-white shadow-sm d-flex justify-content-between align-items-center mx-auto px-3"
>
  <div class="d-flex gap-2">
    <button
      type="button"
      class="d-lg-none d-flex align-items-center justify-content-center"
    >
      <ion-icon
        class="text-primary bg-secondary border-third fs-5 border p-2 border-2 rounded-2 hydrated"
        name="grid"
        role="img"
      ></ion-icon>
    </button>
    <form
      class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
    >
      <div class="input-group">
        <input
          type="text"
          class="form-control bg-light border-0"
          placeholder="Search for"
          aria-label="Search"
          aria-describedby="basic-addon2"
        />
        <div class="input-group-text border-0">
          <button
            class="btn btn-primary d-flex align-items-center justify-content-center"
            type="button"
          >
            <ion-icon class="text-white" name="search"></ion-icon>
          </button>
        </div>
      </div>
    </form>
  </div>
  <ul class="navbar-nav ms-auto">
    <div class="dropdown">
      <a
        href=""
        class="nav-link dropdown-toggle d-flex align-items-center gap-2"
        data-bs-toggle="dropdown"
        aria-expanded="false"
      >
        <span>Hoàng Thông</span>
        <img
          src="{{asset('assets/clients/images/about-profile.png')}}"
          class="rounded-circle"
          width="30"
      /></a>

      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li>
          <a class="dropdown-item" href="#">Something else here</a>
        </li>
      </ul>
    </div>
  </ul>
</div>
</header>