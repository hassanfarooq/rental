
// Custom JS for the Theme

// Config 
//-------------------------------------------------------------

var companyName = "Car Rental Station"; // Enter your event title


// Initialize Tooltip  
//-------------------------------------------------------------

$('.my-tooltip').tooltip();



// Initialize jQuery Placeholder  
//-------------------------------------------------------------

$('input, textarea').placeholder();

// select city by province

$('#select-province').on('click', function() {

  var province_id = $(this).val();  
  if(province_id != 0) 
  {
	jQuery.ajax({
    type: "POST",
    data: {province_id: province_id},
    url: "Index.php/Home/selectCitiesByProvinceId/" + province_id,
    dataType: 'json',
    success: function(data){
	  //console.table(data.cities);
	  var html = '';
	  for(var i = 0; i < data.cities.length; i++) 
	  {
			html += '<option value="' + data.cities[i].city_id + '">'+data.cities[i].city_name+'</option>';
	  }
      $('#select-city').html(html);
    }

	});  
  };
  
});

//search page select city by province

$('#search-select-province').on('click', function() {

  var province_id = $(this).val();  
  if(province_id != 0) 
  {
	jQuery.ajax({
    type: "POST",
    data: {province_id: province_id},
    url: "Home/selectCitiesByProvinceId/" + province_id,
    dataType: 'json',
    success: function(data){
	  //console.table(data.cities);
	  var html = '';
	  for(var i = 0; i < data.cities.length; i++) 
	  {
			html += '<option value="' + data.cities[i].city_id + '">'+data.cities[i].city_name+'</option>';
	  }
      $('#search-select-city').html(html);
    }

	});  
  };
  
});

// select car by manufacturer
 
$('#select-manufacturer').on('click', function() {
  var manf_id = $(this).val();  
  if(manf_id != 0) 
  {
	jQuery.ajax({
    type: "POST",
    data: {manf_id: manf_id},
    url: "index.php/Home/selectCarByManufacturer/" + manf_id,
    dataType: 'json',
    success: function(data){
	  var html = '';
	  for(var i = 0; i < data.cars.length; i++) 
	  {
			html += '<option value="' + data.cars[i].car_id + '">'+data.cars[i].car_name+'</option>';
	  }
      $('#select-car').html(html);
    }

	});  
  };
  
});

$('#search-select-manufacturer').on('click', function() {
  var manf_id = $(this).val();  
  if(manf_id != 0) 
  {
	jQuery.ajax({
    type: "POST",
    data: {manf_id: manf_id},
    url: "Home/selectCarByManufacturer/" + manf_id,
    dataType: 'json',
    success: function(data){
	  var html = '';
	  for(var i = 0; i < data.cars.length; i++) 
	  {
			html += '<option value="' + data.cars[i].car_id + '">'+data.cars[i].car_name+'</option>';
	  }
      $('#search-select-car').html(html);
    }

	});  
  };
  
});

//search page search filter

$('#search-filter').submit(function(event) {
	var base_path = 'http://localhost/projects/final-project/index.php/'
	event.preventDefault();
	var data = $("#search-filter").serialize();
	jQuery.ajax({
		type: "GET",
		data: {data: data},
		url: base_path + "Search/filterSearchBar?" + data,
		dataType: 'json',
		success: function(data){
			console.log(data);
			loadSearchContent(data);
		}
	}); 
		
	history.pushState({urlPath:'/filterSearchBar?' + data },"",'http://localhost/projects/final-project/index.php/Search/filterSearchBar?' + data);
});

function loadSearchContent(data) {
var base_path = 'http://localhost/projects/final-project/'
var html = '';
for(var i = 0; i < data.items.length; i++) {
	html += '<div class="item listing-items">';
		html += '<div class="row">';
			html += '<div class="col-md-3">';
				html += '<div class="items-image thumbnail">';
					html += '<a href="">';
						html += '<img src="' + base_path + data.items[i].image + '" class="img-responsive">';
					html += '</a>';
				html += '</div>';
				html += '<div class="items-thumb">';
					html += '<ul>';
						for(var k = 0; k <= 2; k++) {
							html += '<li><a href=""><img src="' + base_path + data.items[i].image + '" class="img-responsive"></a></li>';
						}
					html += '</ul>';
				html += '</div>';
			html += '</div>';
			html += '<div class="caption">';
				html += '<div class="col-md-6">';
					html += '<div class="item-detail">';
						html += '<h3>' + data.items[i].car_name + data.items[i].car_model + '</h3>';
						html += '<p>' + data.items[i].car_description + '</p>';
						html += '<p><strong>Brand: </strong>' + data.items[i].manf_name + '</p>';
						html += '<p><i class="fa fa-map-marker"></i><span class="location">' + data.items[i].city_name + ', ' + data.items[i].provinces_name + '(Pakistan)' + '</p>';
					html += '</div>';
				html += '</div>';
				html += '<div class="col-md-3">';
					html += '<div class="item-price-site">';
						html += '<h3>' + data.items[i].price_per_day + '</h3>';
						html += '<b><i class="fa fa-phone"></i> ' + '+92 - 123456789' + '</b>'
						html += '<a href="' + base_path + 'index.php' + '/detail/index/' + data.items[i].rent_id + '" class="btn btn-grey btn-block">View</a>'
						html += '<a href="' + base_path + 'index.php' + '/detail/index/' + data.items[i].rent_id + '" class="btn btn-orange btn-block">Book now</a>'
					html += '</div>';
				html += '</div>';
			html += '</div>';
		html += '</div>';
	html += '</div>';
}
$('#items').html(html);
}

$('#list').click(function(event){event.preventDefault();$('#items .item').addClass('list-group-item');});
$('#grid').click(function(event){event.preventDefault();$('#items .item').removeClass('list-group-item');$('#items .item').addClass('grid-group-item');});


// Toggle Header / Nav  
//-------------------------------------------------------------

$(document).on("scroll",function(){
  if($(document).scrollTop()>39){
    $("header").addClass("header-bottom-color");
    $(".hide-on-scroll").addClass("hidden");
  }
  else{
    $("header").removeClass("header-bottom-color");
    $(".hide-on-scroll").removeClass("hidden");
  }
});



// Vehicles Tabs / Slider  
//-------------------------------------------------------------

$(".vehicle-data").hide();
var activeVehicleData = $(".vehicle-nav .active a").attr("href");
$(activeVehicleData).show(); 

$(".vehicle-nav li").on("click", function(){

  $(".vehicle-nav .active").removeClass("active");
  $(this).addClass('active');

  $(activeVehicleData).fadeOut( "slow", function() {
    activeVehicleData = $(".vehicle-nav .active a").attr("href");
    $(activeVehicleData).fadeIn("slow", function() {});
  });

  return false;
});



// Vehicles Responsive Nav  
//-------------------------------------------------------------

$("<div />").appendTo("#vehicle-nav-container").addClass("styled-select-vehicle-data");
$("<select />").appendTo(".styled-select-vehicle-data").addClass("vehicle-data-select");
$("#vehicle-nav-container a").each(function() {
  var el = $(this);
  $("<option />", {
    "value"   : el.attr("href"),
    "text"    : el.text()
  }).appendTo("#vehicle-nav-container select");
});

$(".vehicle-data-select").change(function(){
  $(activeVehicleData).fadeOut( "slow", function() {
    activeVehicleData = $(".vehicle-data-select").val();
    $(activeVehicleData).fadeIn("slow", function() {});
  });

  return false;
});



// Initialize Datepicker
//-------------------------------------------------------------------------------
$('.datepicker').datepicker().on('changeDate', function(){
  $(this).datepicker('hide');
});



// Toggle Drop-Off Location
//-------------------------------------------------------------------------------
$(".input-group.drop-off").hide();
$(".different-drop-off").on("click", function(){
	$(".input-group.drop-off").toggle();
  $(".autocomplete-suggestions").css("width", $('.pick-up .autocomplete-location').outerWidth());
  return false;
});



// Scroll to Top Button
//-------------------------------------------------------------------------------

$(window).scroll(function(){
  if ($(this).scrollTop() > 100) {
    $('.scrollup').removeClass("animated fadeOutRight");
    $('.scrollup').fadeIn().addClass("animated fadeInRight");
  } else {
    $('.scrollup').removeClass("animated fadeInRight");
    $('.scrollup').fadeOut().addClass("animated fadeOutRight");
  }
});

$('.scrollup, .navbar-brand').click(function(){
  $("html, body").animate({ scrollTop: 0 }, 'slow', function(){
    $("nav li a").removeClass('active');
  });
  return false;
});



// Location Map Function
//-------------------------------------------------------------------------------

function loadMap(addressData){

  var path = document.URL;
      path = path.substring(0, path.lastIndexOf("/") + 1)

  var locationContent = "<h2>"+companyName+"</h2>"
  + "<p>"+addressData+"</p>";

  $('#locations .map').gmap3({
    map: {
      options: {
        maxZoom: 15,
        scrollwheel: false,
      }  
    },
    infowindow:{
     address: addressData,
     options:{
       content: locationContent
     }
   },
   marker:{
    address: addressData,
    options: {
      icon: new google.maps.MarkerImage(
        path+"img/mapmarker.png",
        new google.maps.Size(59, 58, "px", "px"), 
        new google.maps.Point(0, 0),    //sets the origin point of the icon
        new google.maps.Point(29, 34)   //sets the anchor point for the icon
        )
    }
  }
},
"autofit" );
}

loadMap(locations[0].value);

$("#location-map-select").append('<option value="'+locations[0].value+'">Please select a location</option>');  
$.each(locations, function( index, value ) {
  var option = '<option value="'+value.value+'">'+value.value+'</option>';
  $("#location-map-select").append(option);
});

$('#location-map-select').on('change', function() {
  $('#locations .map').gmap3('destroy');
  loadMap(this.value);
});



// Scroll To Animation
//-------------------------------------------------------------------------------

var scrollTo = $(".scroll-to");

scrollTo.click( function(event) {
  $('.modal').modal('hide');
  var position = $(document).scrollTop();
  var scrollOffset = 110;

  if(position < 39)
  {
    scrollOffset = 260;
  }

  var marker = $(this).attr('href');
  $('html, body').animate({ scrollTop: $(marker).offset().top - scrollOffset}, 'slow');

  return false;
});



// setup autocomplete - pulling from locations-autocomplete.js
//-------------------------------------------------------------------------------

$('.autocomplete-location').autocomplete({
  lookup: locations
});



// Newsletter Form
//-------------------------------------------------------------------------------

$( "#newsletter-form" ).submit(function() {

  $('#newsletter-form-msg').addClass('hidden');
  $('#newsletter-form-msg').removeClass('alert-success');
  $('#newsletter-form-msg').removeClass('alert-danger');

  $('#newsletter-form input[type=submit]').attr('disabled', 'disabled');

  $.ajax({
    type: "POST",
    url: "php/newsletter.php",
    data: $("#newsletter-form").serialize(),
    dataType: "json",
    success: function(data) {

      if('success' == data.result)
      {
        $('#newsletter-form-msg').css('visibility','visible').hide().fadeIn().removeClass('hidden').addClass('alert-success');
        $('#newsletter-form-msg').html(data.msg[0]);
        $('#newsletter-form input[type=submit]').removeAttr('disabled');
        $('#newsletter-form')[0].reset();
      }

      if('error' == data.result)
      {
        $('#newsletter-form-msg').css('visibility','visible').hide().fadeIn().removeClass('hidden').addClass('alert-danger');
        $('#newsletter-form-msg').html(data.msg[0]);
        $('#newsletter-form input[type=submit]').removeAttr('disabled');
      }

    }
  });

  return false;
});



// Contact Form
//-------------------------------------------------------------------------------

$( "#contact-form" ).submit(function() {

  $('#contact-form-msg').addClass('hidden');
  $('#contact-form-msg').removeClass('alert-success');
  $('#contact-form-msg').removeClass('alert-danger');

  $('#contact-form input[type=submit]').attr('disabled', 'disabled');

  $.ajax({
    type: "POST",
    url: "php/contact.php",
    data: $("#contact-form").serialize(),
    dataType: "json",
    success: function(data) {

      if('success' == data.result)
      {
        $('#contact-form-msg').css('visibility','visible').hide().fadeIn().removeClass('hidden').addClass('alert-success');
        $('#contact-form-msg').html(data.msg[0]);
        $('#contact-form input[type=submit]').removeAttr('disabled');
        $('#contact-form')[0].reset();
      }

      if('error' == data.result)
      {
        $('#contact-form-msg').css('visibility','visible').hide().fadeIn().removeClass('hidden').addClass('alert-danger');
        $('#contact-form-msg').html(data.msg[0]);
        $('#contact-form input[type=submit]').removeAttr('disabled');
      }

    }
  });

  return false;
});



// Car Select Form
//-------------------------------------------------------------------------------

/*$( "#car-select-form" ).submit(function() {

  var selectedCar = $("#car-select").find(":selected").text();
  var selectedCarVal = $("#car-select").find(":selected").val();
  var selectedCarImage = $("#car-select").val();
  var pickupLocation = $("#pick-up-location").val();
  var dropoffLocation = $("#drop-off-location").val();
  var pickUpDate = $("#pick-up-date").val();
  var pickUpTime = $("#pick-up-time").val();
  var dropOffDate = $("#drop-off-date").val();
  var dropOffTime = $("#drop-off-time").val();

  var error = 0;

  if(validateNotEmpty(selectedCarVal)) { error = 1; }
  if(validateNotEmpty(pickupLocation)) { error = 1; }
  if(validateNotEmpty(pickUpDate)) { error = 1; }
  if(validateNotEmpty(dropOffDate)) { error = 1; }

  if(0 == error)
  {

    $("#selected-car-ph").html(selectedCar);
    $("#selected-car").val(selectedCar);
    $("#selected-vehicle-image").attr('src', selectedCarImage);

    $("#pickup-location-ph").html(pickupLocation);
    $("#pickup-location").val(pickupLocation);
    
    if("" == dropoffLocation)
    {
      $("#dropoff-location-ph").html(pickupLocation);
      $("#dropoff-location").val(pickupLocation);
    }
    else
    {
      $("#dropoff-location-ph").html(dropoffLocation);
      $("#dropoff-location").val(dropoffLocation);
    }
    
    $("#pick-up-date-ph").html(pickUpDate);
    $("#pick-up-time-ph").html(pickUpTime);
    $("#pick-up").val(pickUpDate+' at '+pickUpTime);

    $("#drop-off-date-ph").html(dropOffDate);
    $("#drop-off-time-ph").html(dropOffTime);
    $("#drop-off").val(dropOffDate+' at '+dropOffTime);

    $('#checkoutModal').modal();
  }
  else
  {
    $('#car-select-form-msg').css('visibility','visible').hide().fadeIn().removeClass('hidden').delay(2000).fadeOut();
  }

  return false;
});

*/

// Check Out Form
//-------------------------------------------------------------------------------

$( "#checkout-form" ).submit(function() {

  $('#checkout-form-msg').addClass('hidden');
  $('#checkout-form-msg').removeClass('alert-success');
  $('#checkout-form-msg').removeClass('alert-danger');

  $('#checkout-form input[type=submit]').attr('disabled', 'disabled');

  $.ajax({
    type: "POST",
    url: "php/inquiry.php",
    data: $("#checkout-form").serialize(),
    dataType: "json",
    success: function(data) {

      if('success' == data.result)
      {
        $('#checkout-form-msg').css('visibility','visible').hide().fadeIn().removeClass('hidden').addClass('alert-success');
        $('#checkout-form-msg').html(data.msg[0]);
        $('#checkout-form input[type=submit]').removeAttr('disabled');

        setTimeout(function(){
          $('.modal').modal('hide');
          $('#checkout-form-msg').addClass('hidden');
          $('#checkout-form-msg').removeClass('alert-success');

          $('#checkout-form')[0].reset();
          $('#car-select-form')[0].reset();
        }, 5000);

      }

      if('error' == data.result)
      {
        $('#checkout-form-msg').css('visibility','visible').hide().fadeIn().removeClass('hidden').addClass('alert-danger');
        $('#checkout-form-msg').html(data.msg[0]);
        $('#checkout-form input[type=submit]').removeAttr('disabled');
      }

    }
  });

return false;
});



// Not Empty Validator Function
//-------------------------------------------------------------------------------

function validateNotEmpty(data){
  if (data == ''){
    return true;
  }else{
    return false;
  }
}
