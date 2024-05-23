<section class="section-login my-7 container">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-4"></div>
          <div
            class="col-4 wow fadeInUp d-flex shadow-sm justify-content-center p-4 border rounded-2 border-secondary d-flex flex-column gap-3"
          >
            <div class="form-logo d-flex justify-content-center">
              <img src="{{asset('assets/clients/images/logoo.png')}}" alt="" width="120" />
            </div>
            {{-- action="{{"/admin-dashboard"}}" --}}
            <form action="{{route('login.admin')}}" method="POST" class="row g-3 needs-validation" id="loginAdminForm">
              {{-- @if ($errors->any())
            <div class="alert alert-danger text-center">
              {{$errorMessage}}
              </div>
            @endif --}}
            {{-- @error('msg')
            <div class="alert alert-danger text-center">
              {{$message}}
              </div>
            @enderror --}}
            <div class="alert alert-danger text-center msg" style="display: none;">
            </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
              <div class="col-md-12">
                <label for="validationCustom01" class="form-label fw-medium"
                  >Email</label
                >
                <input
                  type="email"
                  name="admin_email"
                  class="form-control"
                  id="validationCustom01"
                  value="{{old('admin_email')}}"
                />
                {{-- @error('admin_email')
                    <span class="text-danger email-error">{{$message}}</span>
                @enderror --}}
                {{-- <div class="valid-feedback">Looks good!</div> --}}
                <span class="text-danger admin_email_error error"></span>

              </div>
              <div class="col-md-12">
                <label for="validationCustom02" class="form-label fw-medium"
                  >Mật khẩu</label
                >
                <input
                  type="password"
                  name="admin_password"
                  class="form-control"
                  id="validationCustom02"
                  value="{{old('admin_password')}}"
                  />
                {{-- @error('admin_password')
                <span class="text-danger password-error">{{$message}}</span>
            @enderror --}}
            <span class="text-danger admin_password_error error"></span>

              </div>
              
              <div
                class="col-12 mt-4 d-flex justify-content-end"
              >
                <button
                  class="btn btn-primary fw-bolder text-white"
                  type="submit"
                >
                  Đăng nhập
                </button>
                
              </div>
            </form>
          </div>
          <div class="col-4"></div>
        </div>
      </div>
    </div>
  </section>
  @section('js')
    <script>
      $(document).ready(function() {
   $('#loginAdminForm').on('submit',(e)=>{
    e.preventDefault();
    let email = $('input[name="admin_email"]').val().trim();
    let password = $('input[name="admin_password"]').val().trim();
    let token = $(this).find('input[name="_token"]').val();
    let actionUrl = $(this).attr('action')
    $('.error').text('')
    // console.log(actionUrl);
    $.ajax({
      type: "POST",
      url: actionUrl,
      data: {
        admin_email: email,
        admin_password:  password,
        _token: token
      },
      dataType: "json",
      success: function (response) {
        console.log(response);
        if (response.status === 'success') {
                    window.location.href = response.redirect;
                }
      },
      error: function(error){
        console.log(error);
        $('.msg').show();
        let responseJSON = error.responseJSON.errors;
        if (Object.keys(responseJSON).length > 0) {
          $('.msg').text(responseJSON.msg)
                        for (let key in responseJSON) {
                            $('.' + key + '_error').text(responseJSON[key][0]);
                        }
                    }
                  }
    });
   })
});
    </script>
  @endsection