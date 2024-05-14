@extends('layouts.client')
@section('content')
@section('title')
{{$title}}
@endsection
@section('content')
<section class="blog container">
    @include('clients.partials.title')
   <!-- Modal -->
   <div
   class="modal fade"
   id="voucher"
   tabindex="-1"
   aria-labelledby="exampleModalLabel"
   aria-hidden="true"
 >
   <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
       <div class="modal-header">
         <h1 class="modal-title fs-5" id="exampleModalLabel">
           Reedem voucher
         </h1>
         <button
           type="button"
           class="btn-close"
           data-bs-dismiss="modal"
           aria-label="Close"
         ></button>
       </div>
       <form action="">
         <div class="modal-body d-flex flex-column">
           <label for="" class="fs-6 fw-semibold">Voucher</label>
           <input
             class="border border-2 border-secondary mt-3 py-2 px-3 shadow-sm rounded-2"
             type="text"
             placeholder="Voucher"
           />
           <div id="result-error"></div>
         </div>
         <div class="modal-footer">
           <button
             type="button"
             class="btn btn-secondary fw-bolder text-border-color"
             data-bs-dismiss="modal"
           >
             Close
           </button>
           <button
             type="button"
             class="btn btn-primary fw-bolder text-white"
           >
             Save changes
           </button>
         </div>
       </form>
     </div>
   </div>
 </div>
 <!-- CHECKOUT -->
 <section class="section-detail container my-5">
   <div class="row g-3">
     <div
       class="checkout-right wow fadeInLeft col-lg-4 col-md-12 d-flex flex-column gap-3"
     >
       <div
         class="checkout-right-detail-pro p-3 border rounded-1 border-secondary border-2"
       >
         <div
           class="checkout-right-detail-pro-content d-flex flex-column gap-3"
         >
           <h3 class="fs-5 fw-medium">Summary</h3>

           <div class="add-voucher">
             <button
               data-bs-toggle="modal"
               data-bs-target="#voucher"
               type="button"
               class="d-flex align-items-center p-1 gap-2 rounded-2 btn fw-medium text-light btn-primary"
             >
               <ion-icon name="cash-outline"></ion-icon>Add Voucher
             </button>
           </div>
           <div class="sub-total d-flex justify-content-between">
             <span>Sub-total</span>
             <h5 class="fs-6">$ <span>80.00</span></h5>
           </div>
           <div class="voucher d-flex justify-content-between">
             <span>Voucher</span>
             <h5 class="fs-6">$ <span>10.00</span></h5>
           </div>
           <div
             class="delivery d-flex justify-content-between border-bottom border-secondary pb-3"
           >
             <span>Delivery Charges</span>
             <h5 class="fs-6">$ <span>80.00</span></h5>
           </div>
           <div class="sub-total d-flex justify-content-between">
             <span class="fs-5 fw-semibold">Total Amount</span>
             <h5 class="fs-5 fw-semibold">$ <span>80.00</span></h5>
           </div>
           <div class="checkout-pro row">
             <div
               class="col-sm-12 border-top border-secondary py-2 border-2"
             >
               <div class="row">
                 <div class="col-lg-3 col-sm-12">
                   <img
                     src="{{asset('assets/clients/images/product1.jpg')}}"
                     alt=""
                     width="80"
                     width="80"
                     class="border border-2 rounded-2 border-secondary"
                   />
                 </div>
                 <div class="col-lg-9 col-sm-12">
                   <div
                     class="name-pro-checkout d-flex justify-content-between"
                   >
                     <h3 class="fw-medium fs-6">Dates Value Pack Pouch</h3>
                     <div class="checkout-pro-qty text-border-color">
                       x <span>3</span>
                     </div>
                   </div>
                   <div class="checkout-pro-cate">
                     <span class="text-border-color">Vegetable</span>
                   </div>
                   <div
                     class="product-price d-flex gap-2 fs-6 pt-2 align-items-center"
                   >
                     <span class="price-new fw-bold text-primary"
                       >$ <span>120.25</span></span
                     >
                     <del class="price-old text-border-color fw-normal"
                       >$ <span>123.25</span></del
                     >
                   </div>
                 </div>
               </div>
             </div>
             <div
               class="col-sm-12 border-top border-secondary py-2 border-2"
             >
               <div class="row">
                 <div class="col-lg-3 col-sm-12">
                   <img
                     src="{{asset('assets/clients/images/product1.jpg')}}"
                     alt=""
                     width="80"
                     width="80"
                     class="border border-2 rounded-2 border-secondary"
                   />
                 </div>
                 <div class="col-lg-9 col-sm-12">
                   <div
                     class="name-pro-checkout d-flex justify-content-between"
                   >
                     <h3 class="fw-medium fs-6">Dates Value Pack Pouch</h3>
                     <div class="checkout-pro-qty text-border-color">
                       x <span>3</span>
                     </div>
                   </div>
                   <div class="checkout-pro-cate">
                     <span class="text-border-color">Vegetable</span>
                   </div>
                   <div
                     class="product-price d-flex gap-2 fs-6 pt-2 align-items-center"
                   >
                     <span class="price-new fw-bold text-primary"
                       >$ <span>120.25</span></span
                     >
                     <del class="price-old text-border-color fw-normal"
                       >$ <span>123.25</span></del
                     >
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div
         class="checkout-right-delivery p-3 border rounded-1 border-secondary border-2"
       >
         <div
           class="checkout-right-delivery-content d-flex flex-column gap-2"
         >
           <h3 class="fs-5 fw-medium">Delivery Method</h3>
           <span class="text-border-color"
             >Please select the preferred shipping method to use on this
             order.</span
           >
           <div class="delivery-option row">
             <div class="col-6 d-flex flex-column gap-2">
               <span class="fw-medium">Free Shipping</span>
               <div class="form-check">
                 <input
                   class="form-check-input"
                   type="radio"
                   name="flexRadioDefault"
                   id="flexRadioDefault1"
                 />
                 <label class="form-check-label" for="flexRadioDefault1">
                   Rate - $0 .00
                 </label>
               </div>
             </div>
             <div class="col-6 d-flex flex-column gap-2">
               <span class="fw-medium">Flat Rate</span>
               <div class="form-check">
                 <input
                   class="form-check-input"
                   type="radio"
                   name="flexRadioDefault"
                   id="flexRadioDefault2"
                   checked
                 />
                 <label class="form-check-label" for="flexRadioDefault2">
                   Rate - $5.00
                 </label>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div
         class="checkout-right-delivery p-3 border rounded-1 border-secondary border-2"
       >
         <h3 class="fs-5 fw-medium">Delivery Method</h3>
         <img src="{{asset('assets/clients/images/payment.png')}}" alt="" />
       </div>
     </div>
     <div class="checkout-left col-lg-8 wow fadeInRight col-md-12">
       <form action="" class="needs-validation" novalidate>
         <div
           class="bill-info p-3 border rounded-1 border-secondary border-2"
         >
           <div class="row">
             <h3 class="fs-5">Billing Information</h3>
             <span class="fs-6 text-border-color">
               Fill in the information to go to the next step.</span
             >
           </div>
           <div class="row g-3 mt-3">
             <div class="col-md-6 position-relative">
               <label for="validationTooltip01" class="form-label fw-medium"
                 >First name</label
               >
               <input
                 type="text"
                 class="form-control"
                 id="validationTooltip01"
                 required
               />
               <div class="invalid-tooltip">Please Firstname</div>
             </div>
             <div class="col-md-6 position-relative">
               <label for="validationTooltip02" class="form-label fw-medium"
                 >Last name</label
               >
               <input
                 type="text"
                 class="form-control"
                 id="validationTooltip02"
                 required
               />
               <div class="invalid-tooltip">Please Lastname</div>
             </div>
             <div class="col-md-12 position-relative">
               <label for="email" class="form-label fw-medium">Email</label>
               <div class="input-group has-validation">
                 <input
                   type="email"
                   class="form-control"
                   id="email"
                   aria-describedby="validationTooltipUsernamePrepend"
                   required
                 />
                 <div class="invalid-tooltip">
                   Please choose a unique and valid email.
                 </div>
               </div>
             </div>
             <div class="col-md-12 position-relative">
               <label for="Address" class="form-label fw-medium"
                 >Address</label
               >
               <div class="input-group has-validation">
                 <input
                   type="text"
                   class="form-control"
                   id="Address"
                   aria-describedby="validationTooltipUsernamePrepend"
                   required
                 />
                 <div class="invalid-tooltip">Please choose Address</div>
               </div>
             </div>
             <div class="col-md-6 position-relative">
               <label for="validationTooltip03" class="form-label fw-medium"
                 >City</label
               >
               <input
                 type="text"
                 class="form-control"
                 id="validationTooltip03"
                 required
               />
               <div class="invalid-tooltip">
                 Please provide a valid city.
               </div>
             </div>

             <div class="col-md-6 position-relative">
               <label for="validationTooltip05" class="form-label fw-medium"
                 >Zip</label
               >
               <input
                 type="text"
                 class="form-control"
                 id="validationTooltip05"
                 required
               />
               <div class="invalid-tooltip">Please provide a valid zip.</div>
             </div>
             <div class="col-md-6 position-relative">
               <label for="country" class="form-label fw-medium"
                 >Country</label
               >
               <input
                 type="text"
                 class="form-control"
                 id="country"
                 required
               />
               <div class="invalid-tooltip">Please choose a country.</div>
             </div>
             <div class="col-md-6 position-relative">
               <label for="number" class="form-label fw-medium"
                 >Phonenumber</label
               >
               <input
                 type="number"
                 class="form-control"
                 id="number"
                 required
               />
               <div class="invalid-tooltip">Please choose a number.</div>
             </div>
             <div class="col-md-12 mt-3">
               <label for="floatingTextarea2" class="fw-medium"
                 >Comments</label
               >
               <textarea
                 class="form-control mt-3"
                 placeholder="Leave a comment here"
                 id="floatingTextarea2"
                 style="height: 100px"
               ></textarea>
             </div>
             <div class="col-12 mt-3">
               <div class="accordion" id="accordionExample">
                 <div class="accordion-item">
                   <h2 class="accordion-header" id="headingOne">
                     <button
                       class="accordion-button"
                       type="button"
                       data-bs-toggle="collapse"
                       data-bs-target="#collapseOne"
                       aria-expanded="true"
                       aria-controls="collapseOne"
                     >
                       Other recipient information
                     </button>
                   </h2>
                   <div
                     id="collapseOne"
                     class="accordion-collapse collapse"
                     aria-labelledby="headingOne"
                     data-bs-parent="#accordionExample"
                   >
                     <div class="accordion-body row">
                       <div class="col-md-6 position-relative">
                         <label
                           for="validationTooltip01"
                           class="form-label fw-medium"
                           >First name</label
                         >
                         <input
                           type="text"
                           class="form-control"
                           id="validationTooltip01"
                         />
                       </div>
                       <div class="col-md-6 position-relative">
                         <label
                           for="validationTooltip02"
                           class="form-label fw-medium"
                           >Last name</label
                         >
                         <input
                           type="text"
                           class="form-control"
                           id="validationTooltip02"
                         />
                       </div>

                       <div class="col-md-12 position-relative">
                         <label for="Address" class="form-label fw-medium"
                           >Address</label
                         >
                         <div class="input-group has-validation">
                           <input
                             type="text"
                             class="form-control"
                             id="Address"
                             aria-describedby="validationTooltipUsernamePrepend"
                           />
                         </div>
                       </div>
                       <div class="col-md-6 position-relative">
                         <label
                           for="validationTooltip03"
                           class="form-label fw-medium"
                           >City</label
                         >
                         <input
                           type="text"
                           class="form-control"
                           id="validationTooltip03"
                         />
                       </div>

                       <div class="col-md-6 position-relative">
                         <label
                           for="validationTooltip05"
                           class="form-label fw-medium"
                           >Zip</label
                         >
                         <input
                           type="text"
                           class="form-control"
                           id="validationTooltip05"
                         />
                       </div>
                       <div class="col-md-6 position-relative">
                         <label for="country" class="form-label fw-medium"
                           >Country</label
                         >
                         <input
                           type="text"
                           class="form-control"
                           id="country"
                         />
                       </div>
                       <div class="col-md-6 position-relative">
                         <label for="number" class="form-label fw-medium"
                           >Phonenumber</label
                         >
                         <input
                           type="number"
                           class="form-control"
                           id="number"
                         />
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-12">
               <button
                 class="btn btn-primary text-white fw-bolder mt-3"
                 type="submit"
               >
                 Place Order
               </button>
             </div>
           </div>
        
         </div>
       </form>
     </div>
   </div>
 </section>

@endsection