<!-- Teaser start -->
<section id="teaser">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-xs-12 pull-right">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides start -->
          <div class="carousel-inner">
            <div class="item active">
              <h1 class="title">Luxury car from from $28 day
                <span class="subtitle">Treat yourself in USA</span></h1>
              <div class="car-img">
                <img src="<?php echo base_url('assets/site/img/car1.png'); ?>" class="img-responsive" alt="car1">
              </div>
            </div>
            <div class="item">
              <h1 class="title">Get 15% off your rental
                <span class="subtitle">Plan your trip now</span></h1>
              <div class="car-img">
                <img src="<?php echo base_url('assets/site/img/car2.png'); ?>" class="img-responsive" alt="car1">
              </div>
            </div>
          </div>
          <!-- Wrapper for slides end -->

          <!-- Slider Controls start -->
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          <!-- Slider Controls end -->
        </div>
      </div>
      <div class="col-md-5 col-xs-12 pull-left">
        <div class="reservation-form-shadow">

          <form action="#" method="post" name="car-select-form" id="car-select-form">

            <div class="alert alert-danger hidden" id="car-select-form-msg">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <strong>Note:</strong> All fields required!
            </div>

            <!-- Car select start -->
            <div class="styled-select-car">
              <select name="car-select" id="car-select">
                <option value="">Select your car type</option>
                <option value="<?php echo base_url('assets/site/img/vehicle1.jpg'); ?>">VW Golf VII</option>
                <option value="<?php echo base_url('assets/site/img/vehicle2.jpg'); ?>">Audi A1 S-LINE</option>
                <option value="<?php echo base_url('assets/site/img/vehicle3.jpg'); ?>">Toyota Camry</option>
                <option value="<?php echo base_url('assets/site/img/vehicle4.jpg'); ?>">BMW 320 ModernLine</option>
                <option value="<?php echo base_url('assets/site/img/vehicle5.jpg'); ?>">Mercedes-Benz GLK</option>
                <option value="<?php echo base_url('assets/site/img/vehicle6.jpg'); ?>">VW Passat CC</option>
              </select>
            </div>
            <!-- Car select end -->

            <!-- Pick-up location start -->
            <div class="location">
              <div class="input-group pick-up">
                <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span> Pick-up</span>
                <input type="text" name="pick-up-location" id="pick-up-location" class="form-control autocomplete-location" placeholder="Enter a City or Airport">
              </div>
              <!-- Pick-up location end -->

              <a class="different-drop-off" href="#">Need a different drop-off location?</a>

              <!-- Drop-off location start -->
              <div class="input-group drop-off">
                <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span> Drop-off</span>
                <input type="text" name="drop-off-location" id="drop-off-location" class="form-control autocomplete-location" placeholder="Enter a City or Airport">
              </div>
            </div>
            <!-- Drop-off location end -->

            <!-- Pick-up date/time start -->
            <div class="datetime pick-up">
              <div class="date pull-left">
                <div class="input-group">
                  <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span> Pick-up</span>
                  <input type="text" name="pick-up-date" id="pick-up-date" class="form-control datepicker" placeholder="mm/dd/yyyy">
                </div>
              </div>
              <div class="time pull-right">
                <div class="styled-select-time">
                  <select name="pick-up-time" id="pick-up-time">
                    <option value="12:00 AM">12:00 AM</option>
                    <option value="12:30 AM">12:30 AM</option>
                    <option value="01:00 AM">01:00 AM</option>
                    <option value="01:30 AM">01:30 AM</option>
                    <option value="02:00 AM">02:00 AM</option>
                    <option value="02:30 AM">02:30 AM</option>
                    <option value="03:00 AM">03:00 AM</option>
                    <option value="03:30 AM">03:30 AM</option>
                    <option value="04:00 AM">04:00 AM</option>
                    <option value="04:30 AM">04:30 AM</option>
                    <option value="05:00 AM">05:00 AM</option>
                    <option value="05:30 AM">05:30 AM</option>
                    <option value="06:00 AM">06:00 AM</option>
                    <option value="06:30 AM">06:30 AM</option>
                    <option value="07:00 AM">07:00 AM</option>
                    <option value="07:30 AM">07:30 AM</option>
                    <option value="08:00 AM">08:00 AM</option>
                    <option value="08:30 AM">08:30 AM</option>
                    <option value="09:00 AM">09:00 AM</option>
                    <option value="09:30 AM">09:30 AM</option>
                    <option value="10:00 AM">10:00 AM</option>
                    <option value="10:30 AM">10:30 AM</option>
                    <option value="11:00 AM">11:00 AM</option>
                    <option value="11:30 AM">11:30 AM</option>
                    <option value="12:00 PM">12:00 PM</option>
                    <option value="12:30 PM">12:30 PM</option>
                    <option value="01:00 PM">01:00 PM</option>
                    <option value="01:30 PM">01:30 PM</option>
                    <option value="02:00 PM">02:00 PM</option>
                    <option value="02:30 PM">02:30 PM</option>
                    <option value="03:00 PM">03:00 PM</option>
                    <option value="03:30 PM">03:30 PM</option>
                    <option value="04:00 PM">04:00 PM</option>
                    <option value="04:30 PM">04:30 PM</option>
                    <option value="05:00 PM">05:00 PM</option>
                    <option value="05:30 PM">05:30 PM</option>
                    <option value="06:00 PM">06:00 PM</option>
                    <option value="06:30 PM">06:30 PM</option>
                    <option value="07:00 PM">07:00 PM</option>
                    <option value="07:30 PM">07:30 PM</option>
                    <option value="08:00 PM">08:00 PM</option>
                    <option value="08:30 PM">08:30 PM</option>
                    <option value="09:00 PM">09:00 PM</option>
                    <option value="09:30 PM">09:30 PM</option>
                    <option value="10:00 PM">10:00 PM</option>
                    <option value="10:30 PM">10:30 PM</option>
                    <option value="11:00 PM">11:00 PM</option>
                    <option value="11:30 PM">11:30 PM</option>
                  </select>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- Pick-up date/time end -->

            <!-- Drop-off date/time start -->
            <div class="datetime drop-off">
              <div class="date pull-left">
                <div class="input-group">
                  <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span> Drop-off</span>
                  <input type="text" name="drop-off-date" id="drop-off-date" class="form-control datepicker" placeholder="mm/dd/yyyy">
                </div>
              </div>
              <div class="time pull-right">
                <div class="styled-select-time">
                  <select name="drop-off-time" id="drop-off-time">
                    <option value="12:00 AM">12:00 AM</option>
                    <option value="12:30 AM">12:30 AM</option>
                    <option value="01:00 AM">01:00 AM</option>
                    <option value="01:30 AM">01:30 AM</option>
                    <option value="02:00 AM">02:00 AM</option>
                    <option value="02:30 AM">02:30 AM</option>
                    <option value="03:00 AM">03:00 AM</option>
                    <option value="03:30 AM">03:30 AM</option>
                    <option value="04:00 AM">04:00 AM</option>
                    <option value="04:30 AM">04:30 AM</option>
                    <option value="05:00 AM">05:00 AM</option>
                    <option value="05:30 AM">05:30 AM</option>
                    <option value="06:00 AM">06:00 AM</option>
                    <option value="06:30 AM">06:30 AM</option>
                    <option value="07:00 AM">07:00 AM</option>
                    <option value="07:30 AM">07:30 AM</option>
                    <option value="08:00 AM">08:00 AM</option>
                    <option value="08:30 AM">08:30 AM</option>
                    <option value="09:00 AM">09:00 AM</option>
                    <option value="09:30 AM">09:30 AM</option>
                    <option value="10:00 AM">10:00 AM</option>
                    <option value="10:30 AM">10:30 AM</option>
                    <option value="11:00 AM">11:00 AM</option>
                    <option value="11:30 AM">11:30 AM</option>
                    <option value="12:00 PM">12:00 PM</option>
                    <option value="12:30 PM">12:30 PM</option>
                    <option value="01:00 PM">01:00 PM</option>
                    <option value="01:30 PM">01:30 PM</option>
                    <option value="02:00 PM">02:00 PM</option>
                    <option value="02:30 PM">02:30 PM</option>
                    <option value="03:00 PM">03:00 PM</option>
                    <option value="03:30 PM">03:30 PM</option>
                    <option value="04:00 PM">04:00 PM</option>
                    <option value="04:30 PM">04:30 PM</option>
                    <option value="05:00 PM">05:00 PM</option>
                    <option value="05:30 PM">05:30 PM</option>
                    <option value="06:00 PM">06:00 PM</option>
                    <option value="06:30 PM">06:30 PM</option>
                    <option value="07:00 PM">07:00 PM</option>
                    <option value="07:30 PM">07:30 PM</option>
                    <option value="08:00 PM">08:00 PM</option>
                    <option value="08:30 PM">08:30 PM</option>
                    <option value="09:00 PM">09:00 PM</option>
                    <option value="09:30 PM">09:30 PM</option>
                    <option value="10:00 PM">10:00 PM</option>
                    <option value="10:30 PM">10:30 PM</option>
                    <option value="11:00 PM">11:00 PM</option>
                    <option value="11:30 PM">11:30 PM</option>
                  </select>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- Drop-off date/time end -->

            <input type="submit" class="submit" name="submit" value="continue car reservation" id="checkoutModalLabel">
          </form>

        </div>
      </div>

    </div>
  </div>
</section>
<div class="arrow-down"></div>
<!-- Teaser end -->



<!-- Services start -->
<section id="services" class="container">
  <div class="row">
    <div class="col-md-12 title">
      <h2>Customer Services</h2>
      <span class="underline">&nbsp;</span>
    </div>

    <!-- Service Box start -->
    <div class="col-md-6">
      <div class="service-box wow fadeInLeft" data-wow-offset="100">
        <div class="service-icon">+</div>
        <h3 class="service-title">Special rates on car booking</h3>
        <div class="clearfix"></div>
        <p class="service-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed  nonumy eirmod tempor invidunt ut labore et dolore magnaed aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
      </div>
    </div>
    <!-- Service Box end -->

    <!-- Service Box start -->
    <div class="col-md-6">
      <div class="service-box wow fadeInRight" data-wow-offset="100">
        <div class="service-icon">+</div>
        <h3 class="service-title">Mobile Phone Reservation</h3>
        <div class="clearfix"></div>
        <p class="service-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed  nonumy eirmod tempor invidunt ut labore et dolore magnaed aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
      </div>
    </div>
    <!-- Service Box end -->

    <!-- Service Box start -->
    <div class="col-md-6">
      <div class="service-box wow fadeInLeft" data-wow-offset="100">
        <div class="service-icon">+</div>
        <h3 class="service-title">Unlimited Miles Car Rental</h3>
        <div class="clearfix"></div>
        <p class="service-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed  nonumy eirmod tempor invidunt ut labore et dolore magnaed aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
      </div>
    </div>
    <!-- Service Box end -->

    <!-- Service Box start -->
    <div class="col-md-6">
      <div class="service-box wow fadeInRight" data-wow-offset="100">
        <div class="service-icon">+</div>
        <h3 class="service-title">One Way Car Rentals</h3>
        <div class="clearfix"></div>
        <p class="service-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed  nonumy eirmod tempor invidunt ut labore et dolore magnaed aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
      </div>
    </div>
    <!-- Service Box end -->

  </div>
</section>
<!-- Services end -->



<!-- Newsletter start -->
<section id="newsletter" class="wow slideInLeft" data-wow-offset="300">
  <div class="container">
    <div class="row">
      <div class="col-md-12"><div class="alert hidden" id="newsletter-form-msg"></div></div>
      <div class="col-md-5 col-xs-12">
        <h2 class="title">Sign up for amazing offers
          <span class="subtitle">exclusive access for offers and promotions</span></h2>
      </div>
      <div class="col-md-7">
        <div class="newsletter-form pull-left">
          <form action="#" method="post" name="newsletter-form" id="newsletter-form">
            <div class="input-group">
              <input type="email" name="newsletter-email" class="form-control" placeholder="Enter your Email Address">
                        <span class="input-group-btn">
                          <input class="btn btn-default button" type="submit" value="send">
                        </span>
            </div>
          </form>
        </div>
        <div class="social-icons pull-right">
          <ul>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="googleplus" href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          </ul>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</section>
<!-- Newsletter end -->



<!-- Vehicles start -->
<section id="vehicles" class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="title wow fadeInDown" data-wow-offset="200">Vehicle Models - <span class="subtitle">Our rental fleet at a glance</span></h2>
    </div>

    <!-- Vehicle nav start -->
    <div class="col-md-3 wow fadeInUp" data-wow-offset="100">
      <div id="vehicle-nav-container">
        <ul class="vehicle-nav">
          <li class="active"><a href="#vehicle-1">VW Golf VII</a><span class="active">&nbsp;</span></li>
          <li><a href="#vehicle-2">Audi A1 S-LINE</a><span class="active">&nbsp;</span></li>
          <li><a href="#vehicle-3">Toyota Camry</a><span class="active">&nbsp;</span></li>
          <li><a href="#vehicle-4">BMW 320 ModernLine</a><span class="active">&nbsp;</span></li>
          <li><a href="#vehicle-5">Mercedes-Benz GLK</a><span class="active">&nbsp;</span></li>
          <li><a href="#vehicle-6">VW Passat CC</a><span class="active">&nbsp;</span></li>
        </ul>
      </div>
    </div>
    <!-- Vehicle nav end -->

    <!-- Vehicle 1 data start -->
    <div class="vehicle-data" id="vehicle-1">
      <div class="col-md-6 wow fadeIn" data-wow-offset="100">
        <div class="vehicle-img">
          <img class="img-responsive" src="<?php echo base_url('assets/site/img/vehicle1.jpg'); ?>" alt="Vehicle">
        </div>
      </div>
      <div class="col-md-3 wow fadeInUp" data-wow-offset="200">
        <div class="vehicle-price">$ 37.40 <span class="info">rent per day</span></div>
        <table class="table vehicle-features">
          <tr>
            <td>Model</td>
            <td>Limousine</td>
          </tr>
          <tr>
            <td>Doors</td>
            <td>4</td>
          </tr>
          <tr>
            <td>Seats</td>
            <td>5</td>
          </tr>
          <tr>
            <td>Luggage</td>
            <td>2 Suitcases / 2 Bags</td>
          </tr>
          <tr>
            <td>Transmission</td>
            <td>Automatic</td>
          </tr>
          <tr>
            <td>Air conditioning</td>
            <td>Yes</td>
          </tr>
          <tr>
            <td>Minimum age</td>
            <td>25 years</td>
          </tr>
        </table>
        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
      </div>
    </div>
    <!-- Vehicle 1 data end -->

    <!-- Vehicle 2 data start -->
    <div class="vehicle-data" id="vehicle-2">
      <div class="col-md-6" data-wow-offset="200">
        <div class="vehicle-img">
          <img class="img-responsive" src="<?php echo base_url('assets/site/img/vehicle2.jpg'); ?>" alt="Vehicle">
        </div>
      </div>
      <div class="col-md-3" data-wow-offset="200">
        <div class="vehicle-price">$ 70.40 <span class="info">rent per day</span></div>
        <table class="table vehicle-features">
          <tr>
            <td>Model</td>
            <td>Limousine</td>
          </tr>
          <tr>
            <td>Doors</td>
            <td>4</td>
          </tr>
          <tr>
            <td>Seats</td>
            <td>5</td>
          </tr>
          <tr>
            <td>Luggage</td>
            <td>2 Suitcases / 2 Bags</td>
          </tr>
          <tr>
            <td>Transmission</td>
            <td>Automatic</td>
          </tr>
          <tr>
            <td>Air conditioning</td>
            <td>Yes</td>
          </tr>
          <tr>
            <td>Minimum age</td>
            <td>25 years</td>
          </tr>
        </table>
        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
      </div>
    </div>
    <!-- Vehicle 1 data end -->

    <!-- Vehicle 3 data start -->
    <div class="vehicle-data" id="vehicle-3">
      <div class="col-md-6" data-wow-offset="200">
        <div class="vehicle-img">
          <img class="img-responsive" src="<?php echo base_url('assets/site/img/vehicle3.jpg'); ?>" alt="Vehicle">
        </div>
      </div>
      <div class="col-md-3" data-wow-offset="200">
        <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
        <table class="table vehicle-features">
          <tr>
            <td>Model</td>
            <td>Limousine</td>
          </tr>
          <tr>
            <td>Doors</td>
            <td>4</td>
          </tr>
          <tr>
            <td>Seats</td>
            <td>5</td>
          </tr>
          <tr>
            <td>Luggage</td>
            <td>2 Suitcases / 2 Bags</td>
          </tr>
          <tr>
            <td>Transmission</td>
            <td>Automatic</td>
          </tr>
          <tr>
            <td>Air conditioning</td>
            <td>Yes</td>
          </tr>
          <tr>
            <td>Minimum age</td>
            <td>25 years</td>
          </tr>
        </table>
        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
      </div>
    </div>
    <!-- Vehicle 3 data end -->

    <!-- Vehicle 4 data start -->
    <div class="vehicle-data" id="vehicle-4">
      <div class="col-md-6" data-wow-offset="200">
        <div class="vehicle-img">
          <img class="img-responsive" src="<?php echo base_url('assets/site/img/vehicle4.jpg'); ?>" alt="Vehicle">
        </div>
      </div>
      <div class="col-md-3" data-wow-offset="200">
        <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
        <table class="table vehicle-features">
          <tr>
            <td>Model</td>
            <td>Limousine</td>
          </tr>
          <tr>
            <td>Doors</td>
            <td>4</td>
          </tr>
          <tr>
            <td>Seats</td>
            <td>5</td>
          </tr>
          <tr>
            <td>Luggage</td>
            <td>2 Suitcases / 2 Bags</td>
          </tr>
          <tr>
            <td>Transmission</td>
            <td>Automatic</td>
          </tr>
          <tr>
            <td>Air conditioning</td>
            <td>Yes</td>
          </tr>
          <tr>
            <td>Minimum age</td>
            <td>25 years</td>
          </tr>
        </table>
        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
      </div>
    </div>
    <!-- Vehicle 4 data end -->

    <!-- Vehicle 5 data start -->
    <div class="vehicle-data" id="vehicle-5">
      <div class="col-md-6" data-wow-offset="200">
        <div class="vehicle-img">
          <img class="img-responsive" src="<?php echo base_url('assets/site/img/vehicle5.jpg'); ?>" alt="Vehicle">
        </div>
      </div>
      <div class="col-md-3" data-wow-offset="200">
        <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
        <table class="table vehicle-features">
          <tr>
            <td>Model</td>
            <td>Limousine</td>
          </tr>
          <tr>
            <td>Doors</td>
            <td>4</td>
          </tr>
          <tr>
            <td>Seats</td>
            <td>5</td>
          </tr>
          <tr>
            <td>Luggage</td>
            <td>2 Suitcases / 2 Bags</td>
          </tr>
          <tr>
            <td>Transmission</td>
            <td>Automatic</td>
          </tr>
          <tr>
            <td>Air conditioning</td>
            <td>Yes</td>
          </tr>
          <tr>
            <td>Minimum age</td>
            <td>25 years</td>
          </tr>
        </table>
        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
      </div>
    </div>
    <!-- Vehicle 5 data end -->

    <!-- Vehicle 6 data start -->
    <div class="vehicle-data" id="vehicle-6">
      <div class="col-md-6" data-wow-offset="200">
        <div class="vehicle-img">
          <img class="img-responsive" src="<?php echo base_url('assets/site/img/vehicle6.jpg'); ?>" alt="Vehicle">
        </div>
      </div>
      <div class="col-md-3" data-wow-offset="200">
        <div class="vehicle-price">$ 100.40 <span class="info">rent per day</span></div>
        <table class="table vehicle-features">
          <tr>
            <td>Model</td>
            <td>Limousine</td>
          </tr>
          <tr>
            <td>Doors</td>
            <td>4</td>
          </tr>
          <tr>
            <td>Seats</td>
            <td>5</td>
          </tr>
          <tr>
            <td>Luggage</td>
            <td>2 Suitcases / 2 Bags</td>
          </tr>
          <tr>
            <td>Transmission</td>
            <td>Automatic</td>
          </tr>
          <tr>
            <td>Air conditioning</td>
            <td>Yes</td>
          </tr>
          <tr>
            <td>Minimum age</td>
            <td>25 years</td>
          </tr>
        </table>
        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
      </div>
    </div>
    <!-- Vehicle 6 data end -->

  </div>
</section>
<!-- Vehicles end -->



<!-- Reviews start -->
<section id="reviews" class="container wow fadeInUp">
  <div class="row text-center">
    <div class="col-md-12 stars">
      <span class="glyphicon glyphicon-star"></span>
      <span class="glyphicon glyphicon-star"></span>
      <span class="glyphicon glyphicon-star big"></span>
      <span class="glyphicon glyphicon-star"></span>
      <span class="glyphicon glyphicon-star"></span>
    </div>
    <div class="col-md-10 col-md-offset-1">
      <div id="reviews-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">

          <!-- Review item 1 start -->
          <div class="item active">
            <div class="review">
              It is always a positive experience when renting from your 5th street location. The staff is very professional and efficient and always smiling. And I always feel welcome and appreciated. The management is always prompt to solve any issue at any moment. Their efficiency and professionalism makes it my number one choice.
            </div>
            <div class="author">
              – Michael Smith, Santa Barbara CA
            </div>
          </div>
          <!-- Review item 1 end -->

          <!-- Review item 2 start -->
          <div class="item">
            <div class="review">
              This rental was the best rental experience ever! After completing all details on-line myself, the pick-up was super efficient, extremely friendly, and free of the usual 5 - 10 min very unpleasant drilling of why one is not signing up to all options (insurance, etc). I was handed the keys and a wide register print out that required...
            </div>
            <div class="author">
              – Jon Doe, Las Vegas NV
            </div>
          </div>
          <!-- Review item 2 end -->

          <!-- Review item 3 start -->
          <div class="item">
            <div class="review">
              This was my first time renting from car|rental. And over all it was a wonderful experience I have no complaints. The service rep help me find the best rental to suit my needs. I also love the fact that you guys provide luxury rentals at a great price. I will definitely rent with this company again.
            </div>
            <div class="author">
              – Michael Smith, Santa Barbara CA
            </div>
          </div>
          <!-- Review item 3 end -->

        </div>

        <!-- Review Nav start -->
        <ol class="carousel-indicators">
          <li data-target="#reviews-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#reviews-carousel" data-slide-to="1"></li>
          <li data-target="#reviews-carousel" data-slide-to="2"></li>
        </ol>
        <!-- Review Nav end -->

      </div>
    </div>
  </div>
</section>
<!-- Reviews end -->



<!-- Locations start -->
<section id="locations">
  <div class="container location-select-container wow bounceInDown" data-wow-offset="200">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="location-select">
          <div class="row">
            <div class="col-md-6">
              <h2>Car Rental Locations</h2>
            </div>
            <div class="col-md-6">
              <div class="styled-select-location">
                <select id="location-map-select"></select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="arrow-down-location">&nbsp;</div>
  </div>
  <div class="map wow bounceInUp" data-wow-offset="100"><!-- map by gmap3 --></div>
</section>
<!-- Locations end -->



<!-- Information start -->
<section id="information" class="container">

  <!-- Single photo start -->
  <div class="row wow fadeInLeft" data-wow-offset="100">
    <div class="col-md-6 col-xs-12 pull-right">
      <img src="<?php echo base_url('assets/site/img/info-img.jpg'); ?>" alt="Info Img" class="img-responsive">
    </div>
    <div class="col-md-6 pull-left">
      <h2 class="title">Quality Guaranteed</h2>
      <h3 class="subtitle">Here is an example with one single photo displayed on the right.</h3>
      <p>Here is some dummy text. <span class="my-tooltip" data-toggle="tooltip" title="" data-original-title="This is an demo tooltip!">Hover over me!</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vero voluptas delectus explicabo maxime ad qui incidunt! Saepe.</p>
      <a href="http://themeforest.net/item/car-rental-landing-page/8245093?ref=themeinjection" class="btn">More information</a>
      <a href="http://themeforest.net/item/car-rental-landing-page/8245093?ref=themeinjection" class="btn btn-gray">Buy this theme</a>
    </div>
  </div>
  <!-- Single photo end -->

  <!-- Video start -->
  <div class="row wow fadeInRight" data-wow-offset="50">
    <div class="col-md-6">
      <div class="video">
        <!-- Youtube iframe start -->
        <iframe width="420" height="315" src="//www.youtube.com/embed/9_5pjZlWV3A?rel=0&autoplay=0" allowfullscreen></iframe>
        <!-- Youtube iframe end -->
      </div>
    </div>
    <div class="col-md-6">
      <h2 class="title">Watch our info tour</h2>
      <h3 class="subtitle">You can also show youtube videos in this section!</h3>
      <p>Here is some dummy text. Lorem ipsum dolor sit amet, <span class="label label-default">This is an labeled text snippet!</span>, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vero voluptas delectus explicabo maxime ad qui incidunt! no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
    </div>
  </div>
  <!-- Video end -->

</section>
<!-- Information end -->



<!-- Partners start -->
<section id="partners" class="wow fadeIn" data-wow-offset="50">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Meet Our Partners</h2>
        <span class="underline">&nbsp;</span>
        <p>To contribute to positive change and achieve our sustainability goals, we partner with many extraordinary organizations around the world. Their expertise enables us to do far more than we could alone, and their passion and talent inspire us. It is our pleasure to introduce you to a handful of the organizations whose accomplishments and commitments are representative of all the organizations we are fortunate to call our partners.</p>
      </div>
      <div class="col-md-3 col-xs-6 text-center">
        <img src="<?php echo base_url('assets/site/img/partner1.png'); ?>" alt="Partner" class="img-responsive wow fadeInUp" data-wow-delay="0.5s" data-wow-offset="200">
      </div>
      <div class="col-md-3 col-xs-6 text-center">
        <img src="<?php echo base_url('assets/site/img/partner2.png'); ?>" alt="Partner" class="img-responsive wow fadeInUp" data-wow-delay="1s" data-wow-offset="200">
      </div>
      <div class="col-md-3 col-xs-6 text-center">
        <img src="<?php echo base_url('assets/site/img/partner3.png'); ?>" alt="Partner" class="img-responsive wow fadeInUp" data-wow-delay="1.5s" data-wow-offset="200">
      </div>
      <div class="col-md-3 col-xs-6 text-center">
        <img src="<?php echo base_url('assets/site/img/partner4.png'); ?>" alt="Partner" class="img-responsive wow fadeInUp" data-wow-delay="2s" data-wow-offset="200">
      </div>
    </div>
  </div>
</section>
<!-- Partners end -->



<!-- Contact start -->
<section id="contact" class="container wow bounceInUp" data-wow-offset="50">
  <div class="row">
    <div class="col-md-12">
      <h2>Contact Us</h2>
    </div>
    <div class="col-md-4 col-xs-12 pull-right">
      <h4 class="contact-box-title">Customer Center</h4>
      <div class="contact-box">
        <img src="<?php echo base_url('assets/site/img/contact-box-img1.jpg'); ?>" alt="contact-img">
        <div class="contact-box-name">Sarah Connor</div>
        <div class="contact-box-phon"><span class="highlight">Phone:</span> 666-999-888</div>
        <div class="contact-box-email"><span class="highlight">Email:</span> connor@example.com</div>
        <div class="clearfix"></div>
      </div>
      <div class="contact-box-border">&nbsp;</div>

      <div class="contact-box-divider">&nbsp;</div>

      <h4 class="contact-box-title">Change or Cancel Reservation</h4>
      <div class="contact-box">
        <img src="<?php echo base_url('assets/site/img/contact-box-img2.jpg'); ?>" alt="contact-img">
        <div class="contact-box-name">Mike Smith</div>
        <div class="contact-box-phon"><span class="highlight">Phone:</span> 666-999-888</div>
        <div class="contact-box-email"><span class="highlight">Email:</span> connor@example.com</div>
        <div class="clearfix"></div>
      </div>
      <div class="contact-box-border">&nbsp;</div>

      <div class="contact-box">
        <img src="<?php echo base_url('assets/site/img/contact-box-img3.jpg'); ?>" alt="contact-img">
        <div class="contact-box-name">Jane Doe</div>
        <div class="contact-box-phon"><span class="highlight">Phone:</span> 666-999-888</div>
        <div class="contact-box-email"><span class="highlight">Email:</span> connor@example.com</div>
        <div class="clearfix"></div>
      </div>
      <div class="contact-box-border">&nbsp;</div>
    </div>
    <div class="col-md-8 col-xs-12 pull-left">
      <p class="contact-info">You have any questions or need additional information? <br>
        <span class="address"><span class="highlight">Address:</span>  Car|Rental / 3861 Sepulveda Blvd. / Culver City, CA 90230</span></p>
      <form action="#" method="post" id="contact-form" name="contact-form">

        <div class="alert hidden" id="contact-form-msg"></div>

        <div class="form-group">
          <input type="text" class="form-control first-name text-field" name="first-name" placeholder="First Name:">
          <input type="text" class="form-control last-name text-field" name="last-name" placeholder="Last Name:">
          <div class="clearfix"></div>
        </div>

        <div class="form-group">
          <input type="tel" class="form-control telephone text-field" name="telephone" placeholder="Telephone:">
        </div>

        <div class="form-group">
          <input type="email" class="form-control email text-field" name="email" placeholder="Email:">
        </div>

        <div class="form-group">
          <textarea class="form-control message" name="message" placeholder="Message:"></textarea>
        </div>

        <input type="submit" class="btn submit-message" name="submit-message" value="Submit Message">


      </form>
    </div>

  </div>
</section>
<!-- Contact end -->


<a href="#" class="scrollup">ScrollUp</a>


<!-- Footer start -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <ul class="footer-nav">
          <li><a class="scroll-to" href="#top">Home</a></li>
          <li><a class="scroll-to" href="#services">Service</a></li>
          <li><a class="scroll-to" href="#vehicles">Vehicle Models</a></li>
          <li><a class="scroll-to" href="#reviews">Reviews</a></li>
          <li><a class="scroll-to" href="#locations">Locations</a></li>
          <li><a class="scroll-to" href="#contact">Contact</a></li>
        </ul>
        <div class="clearfix"></div>
        <p class="copyright">©2014 Themeinjection, All Rights Reserved</p>
      </div>
    </div>
  </div>
</footer>
<!-- Footer end -->



<!-- Checkout Modal Start -->
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="#" method="post" id="checkout-form" name="checkout-form">

        <!-- Modal header start -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Complete reservation</h4>
        </div>
        <!-- Modal header end -->

        <!-- Modal body start -->
        <div class="modal-body">

          <!-- Checkout Info start -->
          <div class="checkout-info-box">
            <h3><i class="fa fa-info-circle"></i> Upon completing this reservation enquiry, you will receive::</h3>
            <p>Your rental voucher to produce on arrival at the rental desk and a toll-free customer support number.</p>
          </div>
          <!-- Checkout Info end -->

          <!-- Checkout Rental Info start -->
          <div class="checkout-vehicle-info">
            <div class="location-date-info">
              <h3>Location & Date</h3>
              <div class="info-box">
                <span class="glyphicon glyphicon-calendar"></span>
                <h4 class="info-box-title">Pick-Up Time</h4>
                <p class="info-box-description"><span id="pick-up-date-ph"></span> at <span id="pick-up-time-ph"></span></p>
                <input type="hidden" name="pick-up" id="pick-up" value="">
              </div>
              <div class="info-box">
                <span class="glyphicon glyphicon-calendar"></span>
                <h4 class="info-box-title">Drop-Off Time</h4>
                <p class="info-box-description"><span id="drop-off-date-ph"></span> at <span id="drop-off-time-ph"></span></p>
                <input type="hidden" name="drop-off" id="drop-off" value="">
              </div>
              <div class="info-box">
                <span class="glyphicon glyphicon-map-marker"></span>
                <h4 class="info-box-title">Pick-Up Location</h4>
                <p class="info-box-description" id="pickup-location-ph"></p>
                <input type="hidden" name="pickup-location" id="pickup-location" value="">
              </div>
              <div class="info-box">
                <span class="glyphicon glyphicon-map-marker"></span>
                <h4 class="info-box-title">Drop-Off Location</h4>
                <p class="info-box-description" id="dropoff-location-ph"></p>
                <input type="hidden" name="dropoff-location" id="dropoff-location" value="">
              </div>
            </div>

            <div class="vehicle-info">
              <h3>CAR: <span id="selected-car-ph"></span></h3> <a href="#vehicles" class="scroll-to">[ Vehicle Models ]</a>
              <input type="hidden" name="selected-car" id="selected-car" value="">
              <div class="clearfix"></div>
              <div class="vehicle-image">
                <img class="img-responsive" id="selected-vehicle-image" src="<?php echo base_url('assets/site/img/vehicle1.jpg'); ?>" alt="Vehicle">
              </div>
            </div>

            <div class="clearfix"></div>

          </div>
          <!-- Checkout Rental Info end -->

          <hr>

          <!-- Checkout Personal Info start -->
          <div class="checkout-personal-info">
            <div class="alert hidden" id="checkout-form-msg">
              test
            </div>
            <h3>PERSONAL INFORMATION</h3>
            <div class="form-group left">
              <label for="first-name">First Name:</label>
              <input type="text" class="form-control" name="first-name" id="first-name" placeholder="Enter your first name">
            </div>
            <div class="form-group right">
              <label for="last-name">Last Name:</label>
              <input type="text" class="form-control" name="last-name" id="last-name" placeholder="Enter your last name">
            </div>
            <div class="form-group left">
              <label for="phone-number">Phone Number:</label>
              <input type="text" class="form-control" name="phone-number" id="phone-number" placeholder="Enter your phone number">
            </div>
            <div class="form-group right age">
              <label for="age">Age:</label>
              <div class="styled-select-age">
                <select name="age" id="age">
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                  <option value="32">32</option>
                  <option value="33">33</option>
                  <option value="34">34</option>
                  <option value="35">35</option>
                  <option value="36">36</option>
                  <option value="37">37</option>
                  <option value="38">38</option>
                  <option value="39">39</option>
                  <option value="40">40</option>
                  <option value="41">41</option>
                  <option value="42">42</option>
                  <option value="43">43</option>
                  <option value="44">44</option>
                  <option value="45">45</option>
                  <option value="46">46</option>
                  <option value="47">47</option>
                  <option value="48">48</option>
                  <option value="49">49</option>
                  <option value="50">50</option>
                  <option value="51">51</option>
                  <option value="52">52</option>
                  <option value="53">53</option>
                  <option value="54">54</option>
                  <option value="55">55</option>
                  <option value="56">56</option>
                  <option value="57">57</option>
                  <option value="58">58</option>
                  <option value="59">59</option>
                  <option value="50">50</option>
                  <option value="61">61</option>
                  <option value="62">62</option>
                  <option value="63">63</option>
                  <option value="64">64</option>
                  <option value="65">65</option>
                  <option value="66">66</option>
                  <option value="67">67</option>
                  <option value="68">68</option>
                  <option value="69">69</option>
                  <option value="70">70</option>
                  <option value="71">71</option>
                  <option value="72">72</option>
                  <option value="73">73</option>
                  <option value="74">74</option>
                  <option value="75">75</option>
                  <option value="76">76</option>
                  <option value="77">77</option>
                  <option value="78">78</option>
                  <option value="79">79</option>
                  <option value="80">80</option>
                  <option value="81">81</option>
                  <option value="82">82</option>
                  <option value="83">83</option>
                  <option value="84">84</option>
                  <option value="85">85</option>
                  <option value="86">86</option>
                  <option value="87">87</option>
                  <option value="88">88</option>
                  <option value="89">89</option>
                  <option value="90">90</option>
                  <option value="91">91</option>
                  <option value="92">92</option>
                  <option value="93">93</option>
                  <option value="94">94</option>
                  <option value="95">95</option>
                  <option value="96">96</option>
                  <option value="97">97</option>
                  <option value="98">98</option>
                  <option value="99">99</option>
                  <option value="100">100</option>
                </select>
              </div>
            </div>
            <div class="form-group left">
              <label for="email-address">Email Address:</label>
              <input type="email" class="form-control" name="email-address" id="email-address" placeholder="Enter your email address">
            </div>
            <div class="form-group right">
              <label for="email-address-confirm">Confirm Email Address:</label>
              <input type="email" class="form-control" name="email-address-confirm" id="email-address-confirm" placeholder="Confirm your email address">
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- Checkout Personal Info end -->

          <!-- Checkout Address Info start -->
          <div class="checkout-address-info">
            <div class="form-group address">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="Enter your Street an No.">
            </div>
            <div class="form-group city">
              <label for="city">City</label>
              <input type="text" class="form-control" name="city" id="city" placeholder="Enter your City">
            </div>
            <div class="form-group zip-code">
              <label for="zip-code">Zip Code</label>
              <input type="text" class="form-control" name="zip-code" id="zip-code" placeholder="Enter your Zip Code">
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- Checkout Address Info end -->

          <div class="newsletter">
            <div class="form-group">
              <div class="checkbox">
                <input id="check1" type="checkbox" name="newsletter" value="yes">
                <label for="check1">Please send me latest news and updates</label>
              </div>
            </div>

          </div>
        </div>
        <!-- Modal body end -->