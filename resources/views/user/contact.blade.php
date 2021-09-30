@extends('user.app')
@section('title', 'Contact Us')

@section('main-content')


<section class="cmspage mtb-40">
    <div class="container">
      <div class="page-desc">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <h1>Contact</h1>
            <form>
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="E-Mail">
              </div>
              <div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="Phone">
              </div>
              <div class="form-group">
                <textarea name="message" rows="5" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <button class="btn btn-success">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection