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
            <form class="row needs-validation" novalidate>
              <div class="col-md-12">
                <label for="validationServer01" class="form-label fw-medium"
                  >Email</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="validationServer01"
                  required
                />
                <div class="invalid-feedback">Please choose a email.</div>
              </div>
              <div
                class="col-12 mt-2 d-flex justify-content-between align-items-center"
              >
              <span
                ><a
                  class="text-border-color text-decoration-none fs-6"
                  href="{{route('signup')}}"
                  >Signup?</a
                ></span
              >
                <button
                  type="submit"
                  class="btn btn-primary  text-white fw-semibold"
                >
                  Submit
                </button>
              </div>
            </form>
          </div>
          <div class="col-4"></div>
        </div>
      </div>
    </div>
  </section>
  @endsection
