@extends('layouts.admin')
@section('admincontent')
<div id="main-container" class="pt-7 d-flex flex-column ms-auto">
    <div class="admin-main-content p-3 container-fluid bg-white">
      <div class="bg-light p-3 shadow-sm rounded-2">
        <div class="admin-main-header d-flex justify-content-between">
          <h3 class="admin-main-header-title fs-5 fw-bolder">
            All Comment
          </h3>
          <div class="admin-main-header-btn d-flex align-items-center">
            <button
              class="btn btn-primary text-white fw-medium d-flex align-items-center gap-2"
            >
              <ion-icon class="fs-5" name="add"></ion-icon>
              Add New
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
                  <th class="fw-semibold">Id User</th>
                  <th class="fw-semibold">Des</th>
                  <th class="fw-semibold">Date</th>
                  <th class="fw-semibold">Id Product</th>
                  <th class="fw-semibold">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr class="align-middle">
                  <th>1</th>
                  <td>
                    <p class="text-truncate w-50">
                      Đây là một đoạn văn bản dài, đoạn này sẽ được giới hạn
                      chỉ hiển thị trên một dòng và nếu quá dài, nó sẽ được
                      cắt bớt và thêm dấu ba chấm.
                    </p>
                  </td>

                  <td>25-01-2004</td>
                  <td>2</td>

                  <td>
                    <div
                      class="handle-option d-flex align-items-center gap-2"
                    >
                      <ion-icon
                        class="fs-5 text-danger cursor"
                        name="trash-outline"
                      ></ion-icon>
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