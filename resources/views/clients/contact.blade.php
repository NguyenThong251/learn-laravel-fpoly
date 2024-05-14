@extends('layouts.client')
@section('title')
    {{$title}}
@endsection
@section('content')
@include('clients.partials.title')
<section class="section-shop container my-7">
    <section class="container contact-header my-7">
        <div
          class="section-header d-flex justify-content-center flex-column align-items-center mb-3"
        >
          <h3 class="fw-bolder">Get in Touch</h3>
          <p class="w-50 text-center fs-6 text-border-color">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi nisi
            facilis provident eos accusamus voluptatibus in
          </p>
        </div>
        <div class="contact-info row g-3 wow fadeInUp">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="border rounded-2 p-3">
              <div class="contact-info-main text-center">
                <ion-icon
                  class="fs-3 text-primary"
                  name="call-outline"
                ></ion-icon>
                <h2 class="fs-5 fw-bolder">Contact</h2>
                <div
                  class="d-flex align-items-center justify-content-center gap-2"
                >
                  <ion-icon name="call-outline"></ion-icon>
                  <span>(+84) 868 412 222</span>
                </div>
                <div
                  class="d-flex align-items-center justify-content-center gap-2"
                >
                  <ion-icon name="call-outline"></ion-icon>
                  <span>(+84) 868 412 222</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="border rounded-2 p-3">
              <div class="contact-info-main text-center">
                <ion-icon
                  class="fs-3 text-primary"
                  name="mail-outline"
                ></ion-icon>
                <h2 class="fs-5 fw-bolder">Mail & Website</h2>
                <div
                  class="d-flex align-items-center justify-content-center gap-2"
                >
                  <ion-icon name="mail-outline"></ion-icon>
                  <span>ht01252004@gmail.com</span>
                </div>
                <div
                  class="d-flex align-items-center justify-content-center gap-2"
                >
                  <ion-icon name="earth-outline"></ion-icon>
                  <span>carrot.com</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="border rounded-2 p-3">
              <div class="contact-info-main text-center">
                <ion-icon class="fs-3 text-primary" name="map-outline"></ion-icon>
                <h2 class="fs-5 fw-bolder">Address</h2>
                <div
                  class="d-flex align-items-center justify-content-center gap-2"
                >
                  <ion-icon name="location-outline"></ion-icon>
                  <span
                    >Công viên phần mềm Quang Trung, Quận 12, Thành phố Hồ Chí
                    Minh</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="section contact-main mb-7 container">
        <div class="row g-3">
          <div
            class="col-lg-6 col-sm-12 col-12 wow fadeInLeft rounded-2 overflow-hidden"
          >
            <iframe
              class="rounded-2"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4435924065333!2d106.62525347628518!3d10.853826357758717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bee0b0ef9e5%3A0x5b4da59e47aa97a8!2zQ8O0bmcgVmnDqm4gUGjhuqduIE3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1svi!2s!4v1710148985606!5m2!1svi!2s"
              width="100%"
              height="100%"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
          <div class="col-lg-6 col-sm-12 col-12 wow fadeInRight">
            <form class="row g-3 needs-validation" novalidate>
              <div class="col-md-12">
                <label for="validationCustom01" class="form-label fw-medium"
                  >Full name</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="validationCustom01"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-12">
                <label for="validationCustom02" class="form-label fw-medium"
                  >Phone number</label
                >
                <input
                  type="number"
                  class="form-control"
                  id="validationCustom02"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-12">
                <label for="validationCustom02" class="form-label fw-medium"
                  >Email</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="validationCustom02"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-12 mb-3">
                <label
                  for="exampleFormControlTextarea1"
                  class="form-label fw-medium"
                  >Example textarea</label
                >
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                ></textarea>
              </div>
              <div class="col-12">
                <button
                  class="btn btn-primary fw-bolder text-white"
                  type="submit"
                >
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
@endsection