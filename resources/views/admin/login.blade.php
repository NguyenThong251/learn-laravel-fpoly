<section class="section-login my-7 container">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-4"></div>
          <div
            class="col-4 wow fadeInUp d-flex shadow-sm justify-content-center p-4 border rounded-2 border-secondary d-flex flex-column gap-3"
          >
            <div class="form-logo d-flex justify-content-center">
              <img src="{{asset('assets/clients/images/logo.png')}}" alt="" width="120" />
            </div>
            {{-- action="{{"/admin-dashboard"}}" --}}
            <form action="" method="POST" class="row g-3 needs-validation" novalidate>
              @if ($errors->any())
            <div class="alert alert-danger text-center">
                 Vui lòng kiểm tra dữ liệu
              </div>
            @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
              <div class="col-md-12">
                <label for="validationCustom01" class="form-label fw-medium"
                  >Email Address</label
                >
                <input
                  type="email"
                  name="admin_email"
                  class="form-control"
                  id="validationCustom01"
                  required
                />
                @error('admin_email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-12">
                <label for="validationCustom02" class="form-label fw-medium"
                  >Password</label
                >
                <input
                  type="password"
                  name="admin_password"
                  class="form-control"
                  id="validationCustom02"
                  required
                  pattern="(?=.*\d.*)(?=.*[a-zA-Z].*)(?=.*[!#\$%&\?].*).{8,}"
                />
                @error('admin_password')
                <span class="text-danger">{{$message}}</span>
            @enderror
              </div>
              
              <div
                class="col-12 mt-4 d-flex justify-content-end"
              >
                <button
                  class="btn btn-primary fw-bolder text-white"
                  type="submit"
                >
                  Login
                </button>
                
              </div>
            </form>
          </div>
          <div class="col-4"></div>
        </div>
      </div>
    </div>
  </section>