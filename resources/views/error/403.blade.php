<div class="container my-7 mt-11">
    <div class=" d-flex justify-content-center wow fadeInUp">
      <img src="uploads/main.png" alt="" width="700" />
    </div>
    <div class=" d-flex justify-content-center flex-column">
      <h2 class="text-center fw-medium">{{$exception->getMessage()}}</h2>
      <p class="text-center my-2 fs-6 text-border-color">
        We're sorry, the page you requested could not be found please go back to
        the homepage
      </p>
    </div>
    <a href="#" class="d-flex justify-content-center mt-3 text-decoration-none">
      <button
        class="btn btn-primary fw-bolder fs-5 text-white d-flex align-items-center gap-2"
      >
        <ion-icon name="chevron-back-outline"></ion-icon>
        Go Back Home
      </button>
    </a>
  </div>
  