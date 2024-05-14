@extends('layouts.client')
@section('title')
{{$title}}
@endsection
@section('content')
@include('clients.partials.title')
<section class="container section-about-list my-7">
    <div class="row g-5">
      <div class="col-lg-6 col-sm-12 wow fadeInLeft">
        <div class="about-img rounded-2 overflow-hidden">
          <img
           
            src="{{asset('assets/clients/images/aboutus.jpg')}}"
            alt=""
            class="img-cover"
            height="500px"
          />
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 p-5 wow fadeInRight">
        <div class="about-content d-flex flex-column gap-3">
          <h2 class="fw-bolder fs-3">About The Carrot</h2>

          <span class="text-border-color fs-6 fw-semibold"
            >Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Ratione, recusandae necessitatibus quasi incidunt alias adipisci
            pariatur earum iure beatae assumenda rerum quod. Tempora magni
            autem a voluptatibus neque</span
          >
          <div class="row g-5">
            <div class="col-lg-6 col-sm-12">
              <span class="text-border-color fs-6"
                >Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Ratione, recusandae necessitatibus quasi incidunt alias
                adipisci pariatur earum iure beatae assumenda rerum quod.
                Tempora magni autem a voluptatibus neque</span
              >
            </div>
            <div class="col-lg-6 col-sm-12">
              <span class="text-border-color fs-6"
                >Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Ratione, recusandae necessitatibus quasi incidunt alias
                adipisci pariatur earum iure beatae assumenda rerum quod.
                Tempora magni autem a voluptatibus neque</span
              >
            </div>
          </div>
          <div
            class="row border bg-secondary rounded-2 border-2 border-third py-3"
          >
            <div class="col-lg-4 col-sm-12">
              <div class="group-text text-center">
                <h4 class="fs-2 fw-bold text-primary">
                  1.2 <span class="fs-6">k</span>
                </h4>
                <h3 class="fs-6">Vendors</h3>
              </div>
            </div>
            <div class="col-lg-4 col-sm-12">
              <div class="group-text text-center">
                <h4 class="fs-2 fw-bold text-primary">
                  410 <span class="fs-6">k</span>
                </h4>
                <h3 class="fs-6">Customers</h3>
              </div>
            </div>
            <div class="col-lg-4 col-sm-12">
              <div class="group-text text-center">
                <h4 class="fs-2 fw-bold text-primary">
                  120 <span class="fs-6">k</span>
                </h4>
                <h3 class="fs-6">Product</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container about-list my-7">
    <div class="contact-info row g-3 wow fadeInUp">
      <div class="col-lg-3 col-md-6 col-12">
        <div class="border rounded-2 p-3 bg-third">
          <div class="contact-info-main text-center">
            <ion-icon
              class="fs-1 text-primary"
              name="mail-outline"
            ></ion-icon>
            <h2 class="fs-5 fw-bolder">Product packing</h2>
            <div
              class="d-flex align-items-center justify-content-center gap-2"
            >
              <span
                >Lorem ipsunn dolor sit at-net, consectetur adipisicing.</span
              >
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="border rounded-2 p-3 bg-third">
          <div class="contact-info-main text-center">
            <ion-icon
              class="fs-1 text-primary"
              name="call-outline"
            ></ion-icon>
            <h2 class="fs-5 fw-bolder">24/7 support</h2>
            <div
              class="d-flex align-items-center justify-content-center gap-2"
            >
              <span
                >Lorem ipsunn dolor sit at-net, consectetur adipisicing.</span
              >
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="border rounded-2 p-3 bg-third">
          <div class="contact-info-main text-center">
            <ion-icon
              class="fs-1 text-primary"
              name="cube-outline"
            ></ion-icon>
            <h2 class="fs-5 fw-bolder">Delivery in 5 Days</h2>
            <div
              class="d-flex align-items-center justify-content-center gap-2"
            >
              <span
                >Lorem ipsunn dolor sit at-net, consectetur adipisicing.</span
              >
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="border rounded-2 p-3 bg-third">
          <div class="contact-info-main text-center">
            <ion-icon
              class="fs-1 text-primary"
              name="cash-outline"
            ></ion-icon>
            <h2 class="fs-5 fw-bolder">Pa ment Secure</h2>
            <div
              class="d-flex align-items-center justify-content-center gap-2"
            >
              <span
                >Lorem ipsunn dolor sit at-net, consectetur adipisicing.</span
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection