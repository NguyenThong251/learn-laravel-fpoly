@extends('layouts.admin')
@section('admincontent')
<div id="main-container" class="pt-7 d-flex flex-column ms-auto">
    <div class="admin-main-content p-3 container-fluid bg-white">
      <div class="bg-light p-3 shadow-sm rounded-2 w-50 mx-auto">
        <h4 class="fs-4 fw-medium">Add Category</h4>
        <form action="" class="mt-5 d-flex flex-column gap-3">
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="categoryid"
              >Category Id</label
            >
            <div class="col-9">
              <input
                type="text"
                class="form-control"
                id="categoryid"
                placeholder="Category Id"
              />
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="categorydate"
              >Category Date</label
            >
            <div class="col-9">
              <input
                type="date"
                class="form-control"
                id="categorydate"
                placeholder="Category Date"
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
                <option selected>Chọn trạng thái</option>
                <option value="1">Active</option>
                <option value="2">Inactive</option>
              </select>
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
                <option value="1">Low</option>
                <option value="2">Medium</option>
                <option value="3">Top</option>
              </select>
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="categoryname"
              >Category Name</label
            >
            <div class="col-9">
              <input
                type="text"
                class="form-control"
                id="categoryname"
                placeholder="Category Name"
              />
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="categoryimg"
              >Category Images</label
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
          <div class="btn-update ms-auto">
            <button class="btn btn-outline-primary fw-medium">
              Add Category
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection