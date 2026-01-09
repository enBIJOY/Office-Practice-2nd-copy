@extends('frontend.layout.master')
@section('title','Contact Page')
@section('content')
<section class="section">
  <div class="container">
    <!-- <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 class="font-weight-bold mb-4">Contact</h2>
        <form action="#" method="POST" class="row">
          <div class="col-lg-6 mb-3">
            <input type="text" class="form-control mb-2" id="name" name="name" placeholder="Your Name" required>
          </div>
          <div class="col-lg-6 mb-3">
            <input type="email" class="form-control mb-2" id="email" name="email" placeholder="Your Email" required>
          </div>
          <div class="col-12 mb-3">
            <textarea name="message" id="message" class="form-control mb-2" placeholder="Your Message" required></textarea>
          </div>
          <div class="col-12 text-right">
            <button type="submit" value="send" class="btn btn-main btn-main-sm">Send Now</button>
          </div>
        </form>
      </div>
    </div> -->

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 class="font-weight-bold mb-4">Contact</h2>
        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
            @csrf 
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit" value="send" class="btn btn-main btn-main-sm">Send Now</button>
            </div>

          </div>
        </form><!-- End Contact Form -->
      </div>
    </div>

    <div class="hstack gap-3">
    </div>
</section>    
<section>
    <div class="row justify-content-center">
      
      <div class="col-lg-5 col-sm-6 mb-5">
        <h2 class="font-weight-bold mb-4">Central Office</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
        <ul class="list-unstyled contact-list">
          <li class="mb-3"><a href="tel:0124857985320"><i class="tf-ion-ios-telephone mr-2"></i>
              0124857985320</a></li>
          <li class="mb-3"><a href="mailto:demo@email.com"><i class="tf-ion-email mr-2"></i>demo@email.com</a></li>
          <li class="mb-3"><i class="tf-ion-ios-location mr-2"></i>Dhaka, Bangladedsh
          </li>
        </ul>
      </div>
      
      <div class="col-lg-3 col-sm-6 mb-5">
        
        <h2 class="font-weight-bold mb-4">Opening Hours</h2>
        <ul class="list-unstyled">
          
          <li class="mb-2">Monday: 9:00 – 19:00</li>
          
          <li class="mb-2">Tuesday: 9:00 – 19:00</li>
          
          <li class="mb-2">Wednesday: 9:00 – 19:00</li>
          
          <li class="mb-2">Thursday: 9:00 – 19:00</li>
          
          <li class="mb-2">Friday: 9:00 – 19:00</li>
          
          <li class="mb-2">Saturday: 9:00 – 19:00</li>
          
          <li class="mb-2">sunday: 9:00 – 19:00</li>
          
        </ul>
        
      </div>
    </div>

  </div>
</section>
@endsection