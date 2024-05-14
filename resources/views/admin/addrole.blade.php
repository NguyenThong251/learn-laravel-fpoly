@extends('layouts.admin')
@section('admincontent')
<div id="main-container" class="pt-7 d-flex flex-column ms-auto">
    <div class="admin-main-content p-3 container-fluid bg-white">
      <div class="bg-light p-3 shadow-sm rounded-2 w-50 mx-auto">
        <h4 class="fs-4 fw-medium">Add Role</h4>
        <form action="" class="mt-5 d-flex flex-column gap-3">
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="UserId">User Id</label>
            <div class="col-9">
              <input
                type="text"
                class="form-control"
                id="UserId"
                placeholder="User Id"
              />
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="User name"
              >User Name</label
            >
            <div class="col-9">
              <input
                type="text"
                class="form-control"
                id="User name"
                placeholder="User  Name"
              />
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="User date"
              >User Date</label
            >
            <div class="col-9">
              <input
                type="date"
                class="form-control"
                id="User date"
                placeholder="User  Date"
              />
            </div>
          </div>

          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="Status">Status</label>
            <div class="col-9">
              <select
                class="form-select"
                aria-label="Default select example"
              >
                <option selected>Chọn Status</option>
                <option value="1">Activate</option>
                <option value="2">Inactive</option>
              </select>
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="Role">Role</label>
            <div class="col-9">
              <select
                class="form-select"
                aria-label="Default select example"
              >
                <option selected>Chọn Role</option>
                <option value="1">Nhân Viên</option>
                <option value="2">Fouder</option>
                <option value="3">Giám đốc</option>
              </select>
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="Userimg"
              >User Images</label
            >
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
            <label class="col-3 fs-6 fw-medium" for="Userimg"
              >User Description</label
            >
            <div class="col-9">
              <div id="editor"></div>
            </div>
          </div>
          <div class="btn-update ms-auto">
            <button class="btn btn-outline-primary fw-medium">
              Add User
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection