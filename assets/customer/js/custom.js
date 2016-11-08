// select city by province

$('#select-province').on('click', function() {
  var province_id = $(this).val();  
  if(province_id != 0) 
  {
	jQuery.ajax({
    type: "POST",
    data: {province_id: province_id},
    url: "selectCitiesByProvinceId/" + province_id,
    dataType: 'json',
    success: function(data){
	console.log(data);
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


// select car by manufacturer
 
$('#select-manufacturer').on('click', function() {
  var manf_id = $(this).val();  
  if(manf_id != 0) 
  {
	jQuery.ajax({
    type: "POST",
    data: {manf_id: manf_id},
    url: "selectCarByManufacturer/" + manf_id,
    dataType: 'json',
    success: function(data){
	  console.log(data);
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

// showroom edit screen
$('#edit-showroom-select-province').on('click', function() {
  var province_id = $(this).val();  
  if(province_id != 0) 
  {
	jQuery.ajax({
    type: "POST",
    data: {province_id: province_id},
    url: "index.php/customer/editShowroom/selectCitiesByProvinceId/" + province_id,
    dataType: 'json',
    success: function(data){
	console.log(data);
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
