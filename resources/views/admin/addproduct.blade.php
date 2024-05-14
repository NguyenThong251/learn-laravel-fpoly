@extends('layouts.admin')
@section('admincontent')
<div id="main-container" class="pt-7 d-flex flex-column ms-auto">
    <div class="admin-main-content p-3 container-fluid bg-white">
      <div class="bg-light p-3 shadow-sm rounded-2 w-50 mx-auto">
        <h4 class="fs-4 fw-medium">Add Product</h4>
        <form action="" class="mt-5 d-flex flex-column gap-3">
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="Productid"
              >Product Id</label
            >
            <div class="col-9">
              <input
                type="text"
                class="form-control"
                id="Productid"
                placeholder="Product Id"
              />
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="Productname"
              >Product Name</label
            >
            <div class="col-9">
              <input
                type="text"
                class="form-control"
                id="Productname"
                placeholder="Product Name"
              />
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="Productdate"
              >Product Date</label
            >
            <div class="col-9">
              <input
                type="date"
                class="form-control"
                id="Productdate"
                placeholder="Product Date"
              />
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="ProductQuatity"
              >Product Quatity</label
            >
            <div class="col-9">
              <input
                type="number"
                class="form-control"
                id="ProductQuatity"
                placeholder="ProductQuatity"
              />
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="ProducPrice"
              >Product Price</label
            >
            <div class="col-9">
              <input
                type="number"
                class="form-control"
                id="Product Price"
                placeholder="Product Price"
              />
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="Produc Category"
              >Product Category</label
            >
            <div class="col-9">
              <input
                type="text"
                class="form-control"
                id="Product Category"
                placeholder="Product  Category"
              />
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="ProducOffer"
              >Product Offer</label
            >
            <div class="col-9">
              <input
                type="range"
                class="form-range w-100"
                id="rangeInput"
                name="rangeInput"
                min="0"
                max="100"
                value="0"
                oninput="amount.value=rangeInput.value"
              />
              <output
                id="amount"
                name="amount"
                min-value="0"
                max-value="100"
                for="rangeInput"
                >0</output
              >
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
                <option value="2">Pending</option>
                <option value="2">Disable</option>
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
                <option value="1">Hot</option>
                <option value="2">Trending</option>
                <option value="3">View</option>
              </select>
            </div>
          </div>

          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="Productimg"
              >Product Images</label
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
            <label class="col-3 fs-6 fw-medium" for="Productimg"
              >Thumbnail Image</label
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
            <label class="col-3 fs-6 fw-medium" for="Productimg"
              >Product Color</label
            >
            <div class="col-9">
              <div class="d-flex gap-3">
                <input
                  type="color"
                  class="form-control form-control-color"
                  id="exampleColorInput"
                  value="#56234"
                  title="Choose your color"
                />
                <input
                  type="color"
                  class="form-control form-control-color"
                  id="exampleColorInput"
                  value="#D22828"
                  title="Choose your color"
                />
                <input
                  type="color"
                  class="form-control form-control-color"
                  id="exampleColorInput"
                  value="#563d7c"
                  title="Choose your color"
                />
              </div>
            </div>
          </div>
          <div class="input-group-item row g-3">
            <label class="col-3 fs-6 fw-medium" for="Productimg"
              >Product Description</label
            >
            <div class="col-9">
              <div id="editor"></div>
            </div>
          </div>
          <div class="btn-update ms-auto">
            <button class="btn btn-outline-primary fw-medium">
              Add Product
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection