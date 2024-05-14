@extends('layouts.client')
@section('title')
{{$title}}
@endsection
@section('content')
@include('clients.partials.title')
<section class="section-login my-7 container">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-4"></div>
          <div
            class="col-4 wow fadeInUp d-flex justify-content-center p-4 border rounded-2 border-secondary d-flex flex-column gap-3"
          >
            <div class="form-logo d-flex justify-content-center">
              <img src="uploads/logo.png" alt="" width="120" />
            </div>
            <form class="row g-3 needs-validation" novalidate>
              <div class="col-md-12">
                <label for="password" class="form-label fw-medium"
                  >Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  aria-describedby="inputGroupPrepend"
                  required
                  pattern="(?=.*\d.*)(?=.*[a-zA-Z].*)(?=.*[!#\$%&\?].*).{8,}"
                />
                <div class="invalid-feedback">
                  Incorrect password formatPlease
                </div>
              </div>
              <div class="col-md-12">
                <label for="passwordconfirm" class="form-label fw-medium"
                  >Password confirm</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="passwordconfirm"
                  aria-describedby="inputGroupPrepend"
                  required
                  pattern="(?=.*\d.*)(?=.*[a-zA-Z].*)(?=.*[!#\$%&\?].*).{8,}"
                />
                <div class="invalid-feedback">
                  Incorrect password formatPlease
                </div>
              </div>

              <div
                class="col-12 d-flex justify-content-between align-items-end mt-4"
              >
                <button
                  class="btn btn-primary fw-bolder text-white"
                  type="submit"
                >
                  Submit
                </button>
                <span>
                  <a
                    class="text-decoration-none fw-semibold text-primary fs-6"
                    href="#"
                    >Signin?</a
                  ></span
                >
              </div>
            </form>
          </div>
          <div class="col-4"></div>
        </div>
      </div>
    </div>
  </section>
  @endsection