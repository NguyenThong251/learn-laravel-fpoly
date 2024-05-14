@extends('layouts.admin')
@section('admincontent')
<div id="main-container" class="pt-7 d-flex flex-column ms-auto">
    <div class="admin-main-content p-3 container-fluid bg-white">
      <div class="bg-light p-3 shadow-sm rounded-2">
        <div class="admin-main-header d-flex justify-content-between">
          <h3 class="admin-main-header-title fs-5 fw-bolder">
            All Category
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
                  <th class="fw-semibold">Id</th>
                  <th class="fw-semibold">Product Name</th>
                  <th class="fw-semibold">Imgage</th>
                  <th class="fw-semibold">Date</th>
                  <th class="fw-semibold">Status</th>
                  <th class="fw-semibold">Treding</th>
                  <th class="fw-semibold">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr class="align-middle">
                  <th>1</th>
                  <td>Banh so 1</td>
                  <td>
                    <img
                      src="{{asset('assets/clients/images/product1.jpg')}}"
                      alt=""
                      width="80"
                      height="80"
                      class="border border-secondary rounded-2"
                    />
                  </td>
                  <td>25-01-2004</td>
                  <td>Active</td>
                  <td>
                    <span class="badge text-bg-primary text-white"
                      >Top</span
                    >
                  </td>
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
                    </div>
                  </td>
                </tr>
                {{-- <tr class="align-middle">
                  <th>1</th>
                  <td>Banh so 1</td>
                  <td>
                    <img
                      src="{{asset('assets/clients/images/product1.jpg')}}"
                      alt=""
                      width="80"
                      height="80"
                      class="border border-secondary rounded-2"
                    />
                  </td>
                  <td>25-01-2004</td>
                  <td>Inactive</td>
                  <td>
                    <span class="badge text-bg-danger text-white">Low</span>
                  </td>
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
                    </div>
                  </td>
                </tr>
                <tr class="align-middle">
                  <th>1</th>
                  <td>Banh so 1</td>
                  <td>
                    <img
                      src="{{asset('assets/clients/images/product1.jpg')}}"
                      alt=""
                      width="80"
                      height="80"
                      class="border border-secondary rounded-2"
                    />
                  </td>
                  <td>25-01-2004</td>
                  <td>Active</td>
                  <td>
                    <span class="badge text-bg-info text-white"
                      >Medium</span
                    >
                  </td>
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
                    </div>
                  </td>
                </tr>
                <tr class="align-middle">
                  <th>1</th>
                  <td>Banh so 1</td>
                  <td>
                    <img
                      src="{{asset('assets/clients/images/product1.jpg')}}"
                      alt=""
                      width="80"
                      height="80"
                      class="border border-secondary rounded-2"
                    />
                  </td>
                  <td>25-01-2004</td>
                  <td>Active</td>
                  <td>
                    <span class="badge text-bg-primary text-white"
                      >Top</span
                    >
                  </td>
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
                    </div>
                  </td>
                </tr> --}}
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
   <!-- MODAL EDIT  -->
   <div
   class="modal fade"
   id="categoryEdit"
   tabindex="-1"
   aria-labelledby="exampleModalLabel"
   aria-hidden="true"
 >
   <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
       <div class="modal-header">
         <h1 class="modal-title fs-5" id="exampleModalLabel">
           Edit Category
         </h1>
         <button
           type="button"
           class="btn-close"
           data-bs-dismiss="modal"
           aria-label="Close"
         ></button>
       </div>
       <div class="modal-body">
         <form action="" class="d-flex flex-column gap-3">
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
                 fdprocessedid="fz7vtj"
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
                 fdprocessedid="q12jrq"
               />
             </div>
           </div>
           <div class="input-group-item row g-3">
             <label class="col-3 fs-6 fw-medium" for="Status"
               >Status</label
             >
             <div class="col-9">
               <select
                 class="form-select"
                 aria-label="Default select example"
                 fdprocessedid="j61dn5"
               >
                 <option selected="">Chọn trạng thái</option>
                 <option value="1">ACTIVE</option>
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
                 fdprocessedid="awh"
               >
                 <option selected="">Chọn trạng thái</option>
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
                 fdprocessedid="0x9gl6"
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
                 multiple=""
               />
             </div>
           </div>
           <div class="btn-update ms-auto">
             <button
               class="btn btn-outline-primary fw-medium"
               fdprocessedid="dn2sho"
             >
               Upadte
             </button>
           </div>
         </form>
       </div>
     </div>
   </div>
 </div>
  @endsection