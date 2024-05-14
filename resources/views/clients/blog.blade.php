@extends('layouts.client')
@section('content')
@section('title')
{{$title}}
@endsection
@section('content')
<section class="blog container">
    @include('clients.partials.title')
    <div class="highlighted">
      <section class="container py-5">
        <h3 class="fs-5 pb-3">Highlighted</h3>
        <div class="row g-3">
          <div class="col-lg-6 wow fadeInLeft">
            <div class="card-news">
              <div class="news-header px-0 rounded-3 overflow-hidden">
                <img
                  class="w-100 rounded-3"
                  src="{{asset('assets/clients/images/banner-product2.jpg')}}"
                  height="350"
                  
                  alt="alt"
                />
              </div>
              <div class="news-body d-flex flex-column gap-3 pt-3">
                <div
                  class="news-date text-border-color fs-6 fw-medium d-flex align-items-center gap-2"
                >
                  <ion-icon
                    name="calendar-outline"
                    role="img"
                    class=""
                  ></ion-icon
                  ><span>10/09/2023</span>
                </div>
                <div class="news-title">
                  <span class="text-color fw-semibold fs-6"
                    >Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Soluta voluptatibus quidem consequatur
                  </span>
                </div>
                <div class="news-des">
                  <span class="text-dark fs-6 fw-normal"
                    >Read up on Alan Wake 2, how video games scare you, a love
                    letter to the chainsaw, and more in this month’s mausoleum
                    of collected stories.</span
                  >
                </div>
                <a class="mt-2 text-decoration-none" href="">
                  <button class="btn button-news d-flex gap-2 align-items-center">
                    <span class="text-primary fw-medium fs-6"
                      >READ MORE
                    </span>
                    <ion-icon
                      class="text-primary fz-h5 md hydrated"
                      name="arrow-forward"
                      role="img"
                    ></ion-icon></button
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInRight">
            <div class="card-news">
              <div class="news-header rounded-3 px-0 overflow-hidden">
                <img
                  class="w-100 rounded-3"
                  src="{{asset('assets/clients/images/banner-product3.jpg')}}"
                  height="350"
                  alt="alt"
                />
              </div>
              <div class="news-body d-flex flex-column gap-3 pt-3">
                <div
                  class="news-date text-border-color fs-6 fw-medium d-flex align-items-center gap-2"
                >
                  <ion-icon
                    name="calendar-outline"
                    role="img"
                    class=""
                  ></ion-icon
                  ><span>10/09/2023</span>
                </div>
                <div class="news-title">
                  <span class="text-color fw-semibold fs-6"
                    >Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Soluta voluptatibus quidem consequatur
                  </span>
                </div>
                <div class="news-des">
                  <span class="text-dark fs-6 fw-normal"
                    >Read up on Alan Wake 2, how video games scare you, a love
                    letter to the chainsaw, and more in this month’s mausoleum
                    of collected stories.</span
                  >
                </div>
                <a class="mt-2 text-decoration-none" href="">
                  <button class="btn button-news d-flex gap-2 align-items-center">
                    <span class="text-primary fw-medium fs-6"
                      >READ MORE
                    </span>
                    <ion-icon
                      class="text-primary fz-h5 md hydrated"
                      name="arrow-forward"
                      role="img"
                    ></ion-icon></button
                ></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="blog-new">
      <h3 class="fs-5 pb-3 my-3">Hot news</h3>
      <div id="blog-new" class="owl-carousel owl-theme">
        <div class="item wow fadeInUp mx-1">
          <div class="card-news">
            <div class="news-header px-0 rounded-3 overflow-hidden">
              <img
                class="w-100 rounded-3"
                src="{{asset('assets/clients/images/banner-product2.jpg')}}"
                height="180"
                alt="alt"
              />
            </div>
            <div class="news-body d-flex flex-column gap-1 pt-3">
              <div
                class="news-date text-border-color fs-6 fw-medium d-flex align-items-center gap-2"
              >
                <ion-icon
                  name="calendar-outline"
                  role="img"
                  class=""
                ></ion-icon
                ><span>10/09/2023</span>
              </div>
              <div class="news-title">
                <span class="text-color fw-semibold fs-6"
                  >Lorem ipsum dolor sit amet consectetur adipisicing.
                </span>
              </div>
              <div class="news-des">
                <span
                  class="text-dark fs-6 fw-normal text-truncate d-inline-block w-100"
                >
                  Read up on Alan Wake 2, how video games scare you, a love
                  letter to the chainsaw, and more in this month’s mausoleum
                  of collected stories.</span
                >
              </div>
              <a class="mt-2 text-decoration-none" href="">
                <button class="btn button-news d-flex gap-2 align-items-center">
                  <span class="text-primary fw-medium fs-6">READ MORE </span>
                  <ion-icon
                    class="text-primary fz-h5 md hydrated"
                    name="arrow-forward"
                    role="img"
                  ></ion-icon></button
              ></a>
            </div>
          </div>
        </div>
        <div class="item wow fadeInUp mx-1">
          <div class="card-news">
            <div class="news-header px-0 rounded-3 overflow-hidden">
              <img
                class="w-100 rounded-3"
                src="{{asset('assets/clients/images/banner-product2.jpg')}}"
                height="180"
                alt="alt"
              />
            </div>
            <div class="news-body d-flex flex-column gap-1 pt-3">
              <div
                class="news-date text-border-color fs-6 fw-medium d-flex align-items-center gap-2"
              >
                <ion-icon
                  name="calendar-outline"
                  role="img"
                  class=""
                ></ion-icon
                ><span>10/09/2023</span>
              </div>
              <div class="news-title">
                <span class="text-color fw-semibold fs-6"
                  >Lorem ipsum dolor sit amet consectetur adipisicing.
                </span>
              </div>
              <div class="news-des">
                <span
                  class="text-dark fs-6 fw-normal text-truncate d-inline-block w-100"
                >
                  Read up on Alan Wake 2, how video games scare you, a love
                  letter to the chainsaw, and more in this month’s mausoleum
                  of collected stories.</span
                >
              </div>
              <a class="mt-2 text-decoration-none" href="">
                <button class="btn button-news d-flex gap-2 align-items-center">
                  <span class="text-primary fw-medium fs-6">READ MORE </span>
                  <ion-icon
                    class="text-primary fz-h5 md hydrated"
                    name="arrow-forward"
                    role="img"
                  ></ion-icon></button
              ></a>
            </div>
          </div>
        </div>
        <div class="item wow fadeInUp mx-1">
          <div class="card-news">
            <div class="news-header px-0 rounded-3 overflow-hidden">
              <img
                class="w-100 rounded-3"
                src="{{asset('assets/clients/images/banner-product2.jpg')}}"
                height="180"
                alt="alt"
              />
            </div>
            <div class="news-body d-flex flex-column gap-1 pt-3">
              <div
                class="news-date text-border-color fs-6 fw-medium d-flex align-items-center gap-2"
              >
                <ion-icon
                  name="calendar-outline"
                  role="img"
                  class=""
                ></ion-icon
                ><span>10/09/2023</span>
              </div>
              <div class="news-title">
                <span class="text-color fw-semibold fs-6"
                  >Lorem ipsum dolor sit amet consectetur adipisicing.
                </span>
              </div>
              <div class="news-des">
                <span
                  class="text-dark fs-6 fw-normal text-truncate d-inline-block w-100"
                >
                  Read up on Alan Wake 2, how video games scare you, a love
                  letter to the chainsaw, and more in this month’s mausoleum
                  of collected stories.</span
                >
              </div>
              <a class="mt-2 text-decoration-none" href="">
                <button class="btn button-news d-flex gap-2 align-items-center">
                  <span class="text-primary fw-medium fs-6">READ MORE </span>
                  <ion-icon
                    class="text-primary fz-h5 md hydrated"
                    name="arrow-forward"
                    role="img"
                  ></ion-icon></button
              ></a>
            </div>
          </div>
        </div>
        <div class="item wow fadeInUp mx-1">
          <div class="card-news">
            <div class="news-header px-0 rounded-3 overflow-hidden">
              <img
                class="w-100 rounded-3"
                src="{{asset('assets/clients/images/banner-product2.jpg')}}"
                height="180"
                alt="alt"
              />
            </div>
            <div class="news-body d-flex flex-column gap-1 pt-3">
              <div
                class="news-date text-border-color fs-6 fw-medium d-flex align-items-center gap-2"
              >
                <ion-icon
                  name="calendar-outline"
                  role="img"
                  class=""
                ></ion-icon
                ><span>10/09/2023</span>
              </div>
              <div class="news-title">
                <span class="text-color fw-semibold fs-6"
                  >Lorem ipsum dolor sit amet consectetur adipisicing.
                </span>
              </div>
              <div class="news-des">
                <span
                  class="text-dark fs-6 fw-normal text-truncate d-inline-block w-100"
                >
                  Read up on Alan Wake 2, how video games scare you, a love
                  letter to the chainsaw, and more in this month’s mausoleum
                  of collected stories.</span
                >
              </div>
              <a class="mt-2 text-decoration-none" href="">
                <button class="btn button-news d-flex gap-2 align-items-center">
                  <span class="text-primary fw-medium fs-6">READ MORE </span>
                  <ion-icon
                    class="text-primary fz-h5 md hydrated"
                    name="arrow-forward"
                    role="img"
                  ></ion-icon></button
              ></a>
            </div>
          </div>
        </div>
        <div class="item wow fadeInUp mx-1">
          <div class="card-news">
            <div class="news-header px-0 rounded-3 overflow-hidden">
              <img
                class="w-100 rounded-3"
                src="{{asset('assets/clients/images/banner-product2.jpg')}}"
                height="180"
                alt="alt"
              />
            </div>
            <div class="news-body d-flex flex-column gap-1 pt-3">
              <div
                class="news-date text-border-color fs-6 fw-medium d-flex align-items-center gap-2"
              >
                <ion-icon
                  name="calendar-outline"
                  role="img"
                  class=""
                ></ion-icon
                ><span>10/09/2023</span>
              </div>
              <div class="news-title">
                <span class="text-color fw-semibold fs-6"
                  >Lorem ipsum dolor sit amet consectetur adipisicing.
                </span>
              </div>
              <div class="news-des">
                <span
                  class="text-dark fs-6 fw-normal text-truncate d-inline-block w-100"
                >
                  Read up on Alan Wake 2, how video games scare you, a love
                  letter to the chainsaw, and more in this month’s mausoleum
                  of collected stories.</span
                >
              </div>
              <a class="mt-2 text-decoration-none" href="">
                <button class="btn button-news d-flex gap-2 align-items-center">
                  <span class="text-primary fw-medium fs-6">READ MORE </span>
                  <ion-icon
                    class="text-primary fz-h5 md hydrated"
                    name="arrow-forward"
                    role="img"
                  ></ion-icon></button
              ></a>
            </div>
          </div>
        </div>
       
      </div>
    </div>
    <div class="last-post my-7">
      <h3 class="fs-5 pb-3 my-3 border-bottom border-secondary border-2">
        Last news
      </h3>
      <div class="row wow bounceInLeft">
        <div class="col-lg-12 col-md-6 py-3">
          <div class="card-news row d-flex align-items-center">
            <div class="col-lg-3 px-0 news-header rounded-3 overflow-hidden">
              <img
                class="img-cover rounded-3"
                src="{{asset('assets/clients/images/banner-product2.jpg')}}"
                alt="alt"
              />
            </div>
            <div class="col-lg-9 news-body d-flex flex-column gap-2 pt-3">
              <div
                class="news-date text-border-color fs-6 fw-medium d-flex align-items-center gap-2"
              >
                <ion-icon
                  name="calendar-outline"
                  role="img"
                  class=""
                ></ion-icon
                ><span>10/09/2023</span>
              </div>
              <div class="news-title">
                <span class="text-color fw-semibold fs-6"
                  >Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Soluta voluptatibus quidem consequatur
                </span>
              </div>
              <div class="news-des">
                <span class="text-dark fs-6 fw-normal"
                  >Read up on Alan Wake 2, how video games scare you, a love
                  letter to the chainsaw, and more in this month’s mausoleum
                  of collected stories.</span
                >
              </div>
              <a class="mt-2 text-decoration-none" href="">
                <button class="btn button-news d-flex gap-2 align-items-center">
                  <span class="text-primary fw-medium fs-6">READ MORE </span>
                  <ion-icon
                    class="text-primary fz-h5 md hydrated"
                    name="arrow-forward"
                    role="img"
                  ></ion-icon></button
              ></a>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6 py-3">
          <div class="card-news row d-flex align-items-center">
            <div class="col-lg-3 news-header rounded-3 overflow-hidden px-0">
              <img
                class="img-cover rounded-3"
                src="{{asset('assets/clients/images/banner-product2.jpg')}}"
                alt="alt"
              />
            </div>
            <div class="col-lg-9 news-body d-flex flex-column gap-2 pt-3">
              <div
                class="news-date text-border-color fs-6 fw-medium d-flex align-items-center gap-2"
              >
                <ion-icon
                  name="calendar-outline"
                  role="img"
                  class=""
                ></ion-icon
                ><span>10/09/2023</span>
              </div>
              <div class="news-title">
                <span class="text-color fw-semibold fs-6"
                  >Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Soluta voluptatibus quidem consequatur
                </span>
              </div>
              <div class="news-des">
                <span class="text-dark fs-6 fw-normal"
                  >Read up on Alan Wake 2, how video games scare you, a love
                  letter to the chainsaw, and more in this month’s mausoleum
                  of collected stories.</span
                >
              </div>
              <a class="mt-2 text-decoration-none" href="">
                <button class="btn button-news d-flex gap-2 align-items-center">
                  <span class="text-primary fw-medium fs-6">READ MORE </span>
                  <ion-icon
                    class="text-primary fz-h5 md hydrated"
                    name="arrow-forward"
                    role="img"
                  ></ion-icon></button
              ></a>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6 py-3">
          <div class="card-news row d-flex align-items-center">
            <div class="col-lg-3 news-header rounded-3 overflow-hidden px-0">
              <img
                class="img-cover rounded-3"
                src="{{asset('assets/clients/images/banner-product2.jpg')}}"
                alt="alt"
              />
            </div>
            <div class="col-lg-9 news-body d-flex flex-column gap-2 pt-3">
              <div
                class="news-date text-border-color fs-6 fw-medium d-flex align-items-center gap-2"
              >
                <ion-icon
                  name="calendar-outline"
                  role="img"
                  class=""
                ></ion-icon
                ><span>10/09/2023</span>
              </div>
              <div class="news-title">
                <span class="text-color fw-semibold fs-6"
                  >Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Soluta voluptatibus quidem consequatur
                </span>
              </div>
              <div class="news-des">
                <span class="text-dark fs-6 fw-normal"
                  >Read up on Alan Wake 2, how video games scare you, a love
                  letter to the chainsaw, and more in this month’s mausoleum
                  of collected stories.</span
                >
              </div>
              <a class="mt-2 text-decoration-none" href="">
                <button class="btn button-news d-flex gap-2 align-items-center">
                  <span class="text-primary fw-medium fs-6">READ MORE </span>
                  <ion-icon
                    class="text-primary fz-h5 md hydrated"
                    name="arrow-forward"
                    role="img"
                  ></ion-icon></button
              ></a>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6 py-3">
          <div class="card-news row d-flex align-items-center">
            <div class="col-lg-3 news-header rounded-3 overflow-hidden px-0">
              <img
                class="img-cover rounded-3"
                src="{{asset('assets/clients/images/banner-product2.jpg')}}"
                alt="alt"
              />
            </div>
            <div class="col-lg-9 news-body d-flex flex-column gap-2 pt-3">
              <div
                class="news-date text-border-color fs-6 fw-medium d-flex align-items-center gap-2"
              >
                <ion-icon
                  name="calendar-outline"
                  role="img"
                  class=""
                ></ion-icon
                ><span>10/09/2023</span>
              </div>
              <div class="news-title">
                <span class="text-color fw-semibold fs-6"
                  >Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Soluta voluptatibus quidem consequatur
                </span>
              </div>
              <div class="news-des">
                <span class="text-dark fs-6 fw-normal"
                  >Read up on Alan Wake 2, how video games scare you, a love
                  letter to the chainsaw, and more in this month’s mausoleum
                  of collected stories.</span
                >
              </div>
              <a class="mt-2 text-decoration-none" href="">
                <button class="btn button-news d-flex gap-2 align-items-center">
                  <span class="text-primary fw-medium fs-6">READ MORE </span>
                  <ion-icon
                    class="text-primary fz-h5 md hydrated"
                    name="arrow-forward"
                    role="img"
                  ></ion-icon></button
              ></a>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center mt-5">
        <nav aria-label="Page navigation example ">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link text-dark" href="#">Previous</a>
            </li>
            <li class="page-item">
              <a class="page-link text-dark" href="#">1</a>
            </li>
            <li class="page-item">
              <a class="page-link text-dark active-color" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link text-dark" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link text-dark" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </section>

@endsection