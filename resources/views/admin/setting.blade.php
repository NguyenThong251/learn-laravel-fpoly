@extends('layouts.admin')
@section('admincontent')
<div id="main-container" class="pt-7 d-flex flex-column ms-auto">
    <div class="admin-main-content p-3 container-fluid bg-white">
      <div class="bg-light p-3 shadow-sm rounded-2 w-50 mx-auto">
        <h4 class="fs-4 fw-medium">Profile Setting</h4>
        <form action="" class="mt-5 d-flex flex-column gap-3">
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="Firstname"
              >First Name</label
            >
            <div class="col-9">
              <input
                type="text"
                class="form-control"
                id="Firstname"
                placeholder="Firstname"
              />
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="Lastname"
              >Last Name</label
            >
            <div class="col-9">
              <input
                type="text"
                class="form-control"
                id="Lastname"
                placeholder="Last Name"
              />
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="Number"
              >Phone Number</label
            >
            <div class="col-9">
              <input
                type="number"
                class="form-control"
                id="Number"
                placeholder="Phone Number"
              />
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="Number">Email</label>
            <div class="col-9">
              <input
                type="email"
                class="form-control"
                id="Number"
                placeholder="Email"
              />
            </div>
          </div>

          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="Userimg">Images</label>
            <div class="col-9">
              <input
                class="form-control"
                type="file"
                id="formFileMultiple"
                multiple
              />
            </div>
          </div>

          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="password"
              >Password</label
            >
            <div class="col-9">
              <input
                type="password"
                class="form-control"
                id="password"
                placeholder="Password"
              />
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="passwordconfirm"
              >Password Confirm</label
            >
            <div class="col-9">
              <input
                type="password"
                class="form-control"
                id="passwordconfirm"
                placeholder="Password Confirm"
              />
            </div>
          </div>
          <div class="btn-update ms-auto">
            <button class="btn btn-outline-primary fw-medium">
              Update Profile
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection