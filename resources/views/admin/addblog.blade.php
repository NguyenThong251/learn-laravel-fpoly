@extends('layouts.admin')
@section('admincontent')
<div id="main-container" class="pt-7 d-flex flex-column ms-auto">
    <div class="admin-main-content p-3 container-fluid bg-white">
      <div class="bg-light p-3 shadow-sm rounded-2 w-50 mx-auto">
        <h4 class="fs-4 fw-medium">Add Blog</h4>
        <form action="" class="mt-5 d-flex flex-column gap-3">
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="Blogid">Blog Id</label>
            <div class="col-9">
              <input
                type="text"
                class="form-control"
                id="Blogid"
                placeholder="Blog Id"
              />
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="Blogname"
              >Blog Name</label
            >
            <div class="col-9">
              <input
                type="text"
                class="form-control"
                id="Blogname"
                placeholder="Blog Name"
              />
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="Blogdate"
              >Blog Date</label
            >
            <div class="col-9">
              <input
                type="date"
                class="form-control"
                id="Blogdate"
                placeholder="Blog Date"
              />
            </div>
          </div>

          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="">Blog Category</label>
            <div class="col-9">
              <select
                class="form-select"
                aria-label="Default select example"
              >
                <option selected>Chọn Category</option>
                <option value="1">Hat</option>
                <option value="2">Trai Cay</option>
                <option value="2">Banh</option>
              </select>
            </div>
          </div>

          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="user-write"
              >User</label
            >
            <div class="col-9">
              <input
                type="text"
                class="form-control"
                id="user-write"
                placeholder="User Write"
              />
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="Trending"
              >Trending</label
            >
            <div class="col-9">
              <select
                class="form-select"
                aria-label="Default select example"
              >
                <option selected>Chọn trạng thái</option>
                <option value="1">Hot</option>
                <option value="2">Trending</option>
                <option value="3">View</option>
              </select>
            </div>
          </div>

          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="Blogimg"
              >Blog Images</label
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
            <label class="col-3 fs-6 fw-medium" for="Blogimg"
              >Blog Description</label
            >
            <div class="col-9">
              <div id="editor"></div>
            </div>
          </div>
          <div class="btn-update ms-auto">
            <button class="btn btn-outline-primary fw-medium">
              Add Blog
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection