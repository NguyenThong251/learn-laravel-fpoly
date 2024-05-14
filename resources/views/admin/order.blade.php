@extends('layouts.admin')
@section('admincontent')
<div id="main-container" class="pt-7 d-flex flex-column ms-auto">
    <div class="admin-main-content p-3 container-fluid bg-white">
      <div class="bg-light p-3 shadow-sm rounded-2">
        <div class="admin-main-header d-flex justify-content-between">
          <h3 class="admin-main-header-title fs-5 fw-bolder">All Order</h3>
          <div class="admin-main-header-btn d-flex align-items-center">
            <button
              class="btn btn-primary text-white fw-medium d-flex align-items-center gap-2"
            >
              Download All Order
            </button>
          </div>
        </div>
        <div class="admin-main-search my-4">
          <div class="row g-3 align-items-center">
            <div class="col-auto ms-auto">
              <label for="admin-search-item" class="col-form-label"
                >Search</label
              >
            </div>
            <div class="col-auto">
              <input
                type="text"
                id="admin-search-item"
                class="form-control"
              />
            </div>
          </div>
        </div>
        <div class="admin-category">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th class="fw-semibold">User Img</th>
                  <th class="fw-semibold">Order Code</th>
                  <th class="fw-semibold">Date</th>
                  <th class="fw-semibold">Payment Method</th>
                  <th class="fw-semibold">Delivery Status</th>
                  <th class="fw-semibold">Amount</th>
                  <th class="fw-semibold">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr class="align-middle">
                  <td>
                    <img
                      src="../uploads/about-profile.png"
                      alt=""
                      width="80"
                      height="80"
                      class="border border-secondary rounded-2"
                    />
                  </td>
                  <th>#1231</th>
                  <td>25-01-2004</td>
                  <td>Stripe</td>
                  <td>
                    <span class="badge text-bg-danger fs-6">Cancel</span>
                  </td>
                  <td>$12300</td>

                  <td>
                    <div
                      class="handle-option d-flex align-items-center gap-2"
                    >
                      <ion-icon
                        class="fs-5 text-primary cursor"
                        name="eye-outline"
                      ></ion-icon>
                      <ion-icon
                        class="fs-5 text-info cursor"
                        name="create-outline"
                        data-bs-toggle="modal"
                        data-bs-target="#categoryEdit"
                      ></ion-icon>
                      <ion-icon
                        class="fs-5 text-danger cursor"
                        name="trash-outline"
                      ></ion-icon>
                      <button
                        class="btn btn-primary btn-sm fw-medium text-white"
                      >
                        Tracking
                      </button>
                    </div>
                  </td>
                </tr>
                <tr class="align-middle">
                  <td>
                    <img
                      src="../uploads/about-profile.png"
                      alt=""
                      width="80"
                      height="80"
                      class="border border-secondary rounded-2"
                    />
                  </td>
                  <th>#1231</th>
                  <td>25-01-2004</td>
                  <td>Stripe</td>
                  <td>
                    <span class="fs-6 badge text-bg-info"> Pending </span>
                  </td>
                  <td>$12300</td>

                  <td>
                    <div
                      class="handle-option d-flex align-items-center gap-2"
                    >
                      <ion-icon
                        class="fs-5 text-primary cursor"
                        name="eye-outline"
                      ></ion-icon>
                      <ion-icon
                        class="fs-5 text-info cursor"
                        name="create-outline"
                        data-bs-toggle="modal"
                        data-bs-target="#categoryEdit"
                      ></ion-icon>
                      <ion-icon
                        class="fs-5 text-danger cursor"
                        name="trash-outline"
                      ></ion-icon>
                      <button
                        class="btn btn-primary btn-sm fw-medium text-white"
                      >
                        Tracking
                      </button>
                    </div>
                  </td>
                </tr>
                <tr class="align-middle">
                  <td>
                    <img
                      src="../uploads/about-profile.png"
                      alt=""
                      width="80"
                      height="80"
                      class="border border-secondary rounded-2"
                    />
                  </td>
                  <th>#1231</th>
                  <td>25-01-2004</td>
                  <td>Paypal</td>
                  <td>
                    <span class="fs-6 badge text-bg-success">Success</span>
                  </td>
                  <td>$12300</td>

                  <td>
                    <div
                      class="handle-option d-flex align-items-center gap-2"
                    >
                      <ion-icon
                        class="fs-5 text-primary cursor"
                        name="eye-outline"
                      ></ion-icon>
                      <ion-icon
                        class="fs-5 text-info cursor"
                        name="create-outline"
                        data-bs-toggle="modal"
                        data-bs-target="#categoryEdit"
                      ></ion-icon>
                      <ion-icon
                        class="fs-5 text-danger cursor"
                        name="trash-outline"
                      ></ion-icon>
                      <button
                        class="btn btn-primary btn-sm fw-medium text-white"
                      >
                        Tracking
                      </button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <nav aria-label="..." class="d-flex justify-content-end">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
@endsection