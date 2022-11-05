@include('Frontend.layouts.html_head')
@include('Frontend.layouts.navbar')
@include('Frontend.layouts.scripts')

@yield('html_head')
@yield('navbar')
<main>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-12 mx-auto">
        <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
          <img src="{{asset('assets/images/mixed_agriculture.jpg')}}" class="avatar-image img-fluid" alt="">

          <h2 class="text-white ms-4 mb-0">Packages</h2>
        </div>
        @if(session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
        <div>
          <a class="btn btn-primary" href="{{route('form-store')}}" role="button">Back</a>
        </div>
        <div class="row pt-lg-5">
          <form class="row g-3" method="post" action="{{route('form-store')}}">
            @csrf
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Fullname</label>
              <input type="text" class="form-control" id="fullname" name="fullname">
            </div>
            <div class="col-md-6">
              <label for="citizenshipno" class="form-label">Citizenship Number</label>
              <input name="citizenship_number" type="text" class="form-control" id="number">
            </div>
            <div class="col-md-6">
              <label for="bank_account_number" class="form-label">Bank Account Number</label>
              <input name="account_number" type="text" class="form-control" id="account_number">
            </div>
            <div class="col-12">
              <label for="current_address" class="form-label">Current Address</label>
              <input name="c_address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-12">
              <label for="permanent_address" class="form-label">Permanent Address</label>
              <input name="p_address" type="text" class="form-control" id="inputAddress2"
                placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>
  </section>
</main>

@yield('scripts')