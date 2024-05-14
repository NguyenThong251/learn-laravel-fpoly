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
              <img src="{{asset('assets/clients/images/logo.png')}}" alt="" width="120" />
            </div>
            <form class="row g-3 needs-validation" novalidate>
              <div class="col-md-12">
                <label for="validationCustom01" class="form-label fw-medium"
                  >Email Address</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="validationCustom01"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-12">
                <label for="validationCustom02" class="form-label fw-medium"
                  >Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="validationCustom02"
                  required
                  pattern="(?=.*\d.*)(?=.*[a-zA-Z].*)(?=.*[!#\$%&\?].*).{8,}"
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-12 d-flex justify-content-between">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="invalidCheck"
                  />
                  <label class="form-check-label" for="invalidCheck">
                    Remember
                  </label>
                </div>
                <span
                  ><a
                    class="text-border-color text-decoration-none fs-8"
                    href="{{route('forgotpass')}}"
                    >Forgot Password?</a
                  ></span
                >
              </div>
              <div
                class="col-12 d-flex justify-content-between align-items-end"
              >
                <button
                  class="btn btn-primary fw-bolder text-white"
                  type="submit"
                >
                  Login
                </button>
                <span>
                  <a
                    class="text-decoration-none fw-semibold text-primary fs-6"
                    href="{{route('signup')}}"
                    >Signin?</a
                  ></span
                >
              </div>
            </form>
            <div class="social-button">
              <div class="socical-line">
                <div
                  class="line my-3 overflow-visible border-0 bg-secondary text-center"
                  style="height: 1px"
                ></div>
              </div>
              <div class="row g-3 mt-2">
                <div class="col-sm-12">
                  <button
                    class="d-flex justify-content-center w-100 align-items-center gap-2 fw-medium border p-2 border-secondary rounded-2"
                  >
                    <img src="{{asset('assets/clients/images/gg.png')}}" alt="" width="20" /> Sign in
                    with Google
                  </button>
                </div>
                <div class="col-sm-12">
                  <button
                    class="d-flex align-items-center justify-content-center w-100 gap-2 fw-medium border p-2 border-secondary rounded-2"
                  >
                    <img src="{{asset('assets/clients/images/fb.png')}}" alt="" width="20" /> Sign in
                    with Facebook
                  </button>
                </div>
              </div>
            </div>
           
          </div>
          <div class="col-4"></div>
        </div>
      </div>
    </div>
  </section>
@endsection