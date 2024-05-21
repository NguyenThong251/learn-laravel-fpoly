<div
id="sidebar"
class="position-fixed z-4 top-0 bottom-0 start-0 h-100 bg-white w-100 shadow-sm"
>
<div class="sidebar-header bg-primary">
  <div
    class="side-header-content px-3 w-250 d-flex justify-content-between align-items-center"
  >
    <a href="" class="sidebar-header-logo">
      <img src="{{asset('assets/clients/images/logoo.png')}}" alt="" width="100px" />
    </a>  
    <div class="sidebar-header-btn d-flex align-items-center gap-2">
      <button
        type="button"
        class="d-lg-none p-1 bg-secondary border-third d-flex align-items-center justify-content-center border border-2 rounded-2"
      >
        <ion-icon class="text-primary fs-6" name="close"></ion-icon>
      </button>
      <button
        type="button"
        class="p-1 bg-secondary border-third d-flex align-items-center justify-content-center border border-2 rounded-2"
      >
        <ion-icon
          class="text-primary fs-6"
          name="moon-outline"
        ></ion-icon>
      </button>
    </div>
  </div>
</div>
<ul class="side-nav p-3 d-flex flex-column gap-2 overflow-y">
  <li class="side-nav-item list-group-item">
    <div
      class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center cursor hover-item active-navbar"
    >
      <ion-icon class="text-primary fs-5" name="rocket"></ion-icon>
      <span class="fs-6 fw-medium">Dashboard</span>
    </div>
  </li>
  
  <div class="accordion" id="accordionExample">

  
  <li class="side-nav-item list-group-item" data-bs-toggle="collapse" data-bs-target="#collapseOne-category">
    <div class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center cursor hover-item">
        <ion-icon class="text-primary fs-5" name="list"></ion-icon>
        <span class="fs-6 fw-medium">Category</span>
    </div>
    <div id="collapseOne-category" class="collapse">
        <div class="accordion-body">
            <ul class="gap-3 d-flex flex-column">
                <li>
                    <a id="category-list-link" class="text-decoration-none hover-list text-dark fw-medium" href="{{ route('allcategory') }}">
                        Category List
                    </a>
                </li>
                <li>
                    <a id="category-add-link" class="text-decoration-none hover-list text-dark fw-medium" href="{{ route('addcategory') }}">
                        Category Add
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <li class="side-nav-item list-group-item" data-bs-toggle="collapse" data-bs-target="#collapseOne-product">
      <div class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center cursor hover-item">
          <ion-icon class="text-primary fs-5" name="layers"></ion-icon>
          <span class="fs-6 fw-medium">Product</span>
      </div>
      <div id="collapseOne-product" class="collapse">
          <div class="accordion-body">
              <ul class="gap-3 d-flex flex-column">
                  <li>
                      <a id="product-list-link" class="text-decoration-none hover-list text-dark fw-medium" href="{{ route('allproduct') }}">
                          Product List
                      </a>
                  </li>
                  <li>
                      <a id="product-add-link" class="text-decoration-none hover-list text-dark fw-medium" href="{{ route('addproduct') }}">
                          Product Add
                      </a>
                  </li>
              </ul>
          </div>
      </div>
  </li>
    <li class="side-nav-item list-group-item" data-bs-toggle="collapse" data-bs-target="#collapseOne-user">
      <div class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center cursor hover-item">
          <ion-icon class="text-primary fs-5" name="people"></ion-icon>
          <span class="fs-6 fw-medium">User</span>
      </div>
      <div id="collapseOne-user" class="collapse">
          <div class="accordion-body">
              <ul class="gap-3 d-flex flex-column">
                  <li>
                      <a id="user-list-link" class="text-decoration-none hover-list text-dark fw-medium" href="{{ route('alluser') }}">
                        User List
                      </a>
                  </li>
                  <li>
                      <a id="user-add-link" class="text-decoration-none hover-list text-dark fw-medium" href="{{ route('adduser') }}">
                        User Add
                      </a>
                  </li>
              </ul>
          </div>
      </div>
  </li>
  </li>
    <li class="side-nav-item list-group-item" data-bs-toggle="collapse" data-bs-target="#collapseOne-role">
      <div class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center cursor hover-item">
          <ion-icon class="text-primary fs-5" name="person"></ion-icon>
          <span class="fs-6 fw-medium">Role</span>
      </div>
      <div id="collapseOne-role" class="collapse">
          <div class="accordion-body">
              <ul class="gap-3 d-flex flex-column">
                  <li>
                      <a id="role-list-link" class="text-decoration-none hover-list text-dark fw-medium" href="{{ route('allrole') }}">
                        Role List
                      </a>
                  </li>
                  <li>
                      <a id="role-add-link" class="text-decoration-none hover-list text-dark fw-medium" href="{{ route('addrole') }}">
                        Role Add
                      </a>
                  </li>
              </ul>
          </div>
      </div>
    </li>
  </li>
    <li class="side-nav-item list-group-item" data-bs-toggle="collapse" data-bs-target="#collapseOne-blog">
      <div class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center cursor hover-item">
          <ion-icon class="text-primary fs-5" name="albums"></ion-icon>
          <span class="fs-6 fw-medium">Blog</span>
      </div>
      <div id="collapseOne-blog" class="collapse">
          <div class="accordion-body">
              <ul class="gap-3 d-flex flex-column">
                  <li>
                      <a id="blog-list-link" class="text-decoration-none hover-list text-dark fw-medium" href="{{ route('allblog') }}">
                        Blog List
                      </a>
                  </li>
                  <li>
                      <a id="blog-add-link" class="text-decoration-none hover-list text-dark fw-medium" href="{{ route('addblog') }}">
                        Blog Add
                      </a>
                  </li>
              </ul>
          </div>
      </div>
    </li>
   
  </div>
  

  <li class="side-nav-item list-group-item">
    <div 
      class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center jus cursor hover-item  "
    >
      <ion-icon class="text-primary fs-5" name="bag-handle"></ion-icon>
      <a  class="fs-6 fw-medium text-dark text-decoration-none"  href="{{ route('order') }}">Order</a>
    </div>
  </li>
  <li class="side-nav-item list-group-item">
    <div
      class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center jus cursor hover-item"
    >
      <ion-icon
        class="text-primary fs-5"
        name="chatbox-ellipses"
      ></ion-icon>
      <a  class="fs-6 fw-medium text-dark text-decoration-none"  href="{{ route('comment') }}">Comment</a>
    </div>
  </li>

  <li class="side-nav-item list-group-item">
    <div
      class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center jus cursor hover-item"
    >
      <ion-icon class="text-primary fs-5" name="settings"></ion-icon>
      <a  class="fs-6 fw-medium text-dark text-decoration-none"  href="{{ route('setting') }}">Setting</a>
    </div>
  </li>
  <li class="side-nav-item list-group-item">
    <div
      class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center jus cursor hover-item"
    >
      <ion-icon class="text-primary fs-5" name="log-out"></ion-icon>
      <a  class="fs-6 fw-medium text-dark text-decoration-none"  href="{{ route('logout') }}">Logout</a>
    </div>
  </li>

</div>

