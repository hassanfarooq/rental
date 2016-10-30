<section id="search">
  <div class="container">
<div class="row">
    <div class="col-md-3 search-sidebar">
		<form id="search-filter" name="search-filter" method="get">
			<div class="advanced-search">
			<i class="fa fa-search"></i> <p>advanced <span>Search</span></p>
			</div>
			<div class="search-fields">			
				<div class="form-group">
				  <select name="province-select" id="search-select-province" class="form-control">
				  <option>Select Province</option>
					<?php if($provinces) { ?>
						<?php foreach($provinces as $row) { ?>
							<option value="<?php echo $row['provinces_id']; ?>"><?php echo $row['provinces_name']; ?></option>
						<?php } ?>
					<?php } ?>
				  </select>
				</div>
				<div class="form-group">
				  <select name="city-select" id="search-select-city" class="form-control">
					<option>Select City</option>
				  </select>
				</div>
				<div class="form-group">
				  <select name="manufacturer-select" id="search-select-manufacturer" class="form-control">
					<?php if($manufacturer) { ?>
						<?php foreach($manufacturer as $row) { ?>
							<option>Select Manufacturer</option>	
							<option value="<?php echo $row['manf_id']; ?>"><?php echo $row['manf_name']; ?></option>
						<?php } ?>
					<?php } ?>
				  </select>
				</div>
				<div class="form-group">
				<select name="car-select" id="search-select-car" class="form-control">
					<option>Select Car</option>	
				  </select>
				</div>
				<?php if($model) { ?>
					<div class="form-group">
					  <select name="model-select" class="form-control">
						<option>Select Model</option>
							<?php foreach($model as $row) { ?>
								<option value="<?php echo $row['model']; ?>"><?php echo $row['model']; ?></option>
							<?php } ?>
						</select>
					</div>
				<?php } ?>
				
				<?php if($color) { ?>
					<div class="checkbox">
						<label>Color</label><br/>
						<?php foreach($color as $row) { ?>
						<label><input type="checkbox" name="color[]" value="<?php echo $row['color']; ?>"><?php echo $row['color']; ?></label><br/>
						<?php } ?>
					</div>
				<?php } ?>
				
				<?php if($door) { ?>
					<div class="checkbox">
						<label>Door</label><br/>
						<?php foreach($door as $row) { ?>
						<label><input type="checkbox" name="door[]" value="<?php echo $row['door']; ?>"><?php echo $row['door']; ?></label><br/>
						<?php } ?>
					</div>
				<?php } ?>
					
				<div class="form-group">
				  <label>Availability</label>
				  <div class="date">
					<div class="input-group">
					  <span class="input-group-addon pixelfix">
						<span class="glyphicon glyphicon-calendar"></span> to</span>
					  <input type="text" name="pick-up-date" id="pick-up-date" class="form-control datepicker" placeholder="mm/dd/yyyy">
					</div>
				  </div>
				</div>
				<div class="form-group">
					<div class="time">
						<div class="styled-select-time">
							<label>Pick Up Time</label>
							<select name="pick-up-time" id="pick-up-time" class="form-control">
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
				</div>
				<div class="form-group">
				  <div class="date">
					<div class="input-group">
					  <span class="input-group-addon pixelfix">
						<span class="glyphicon glyphicon-calendar"></span> from</span>
					  <input type="text" name="drop-off-date" id="drop-off-date" class="form-control datepicker" placeholder="mm/dd/yyyy">
					</div>
				  </div>
				</div>
				<div class="form-group">
					<div class="time">
						<div class="styled-select-time">
							<label>Drop off Time</label>
							<select name="drop-off-time" id="pick-up-time" class="form-control">
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
				</div>
				<div class="search-filter">
					<input id="filter" name="submit" type="submit" value="Seach" class="btn btn-yellow btn-block">
				</div>
			</div>
		</form>
	</div>
    <div class="col-md-9">
      <div class="listing-result">
        <div class="row">
          <div class="col-md-9 list-grid-icon">            
			<strong>Display</strong>
			<div class="btn-group">
				<a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list"></span>List</a> 
				<a href="#" id="grid" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th"></span>Grid</a>
			</div>
          </div>
          <div class="col-md-3">
            <select class="form-control">
              <option>Newly Listed</option>
              <option>Lower Price First</option>
              <option>Higher Price First</option>
            </select>  
          </div>
		</div>
	</div>
	
	<div id="items">
	<?php if($items > 0) {
		foreach($items as $row) { ?>
			<div class="item listing-items">
			  <div class="row">
				<div class="col-md-3">
				  <div class="items-image thumbnail">
					<a href="#"><img src="<?php echo base_url() . $row['car_image']; ?>" class="img-responsive" /></a>
				  </div>
				  <div class="items-thumb">
					<ul>
					  <li class="active">
						<a href="#"><img src="<?php echo base_url() . $row['car_image']; ?>" class="img-responsive" /></a>
					  </li>
					  <li>
						<a href="#"><img src="<?php echo base_url() . $row['car_image']; ?>" class="img-responsive" /></a>
					  </li>
					  <li>
						<a href="#"><img src="<?php echo base_url() . $row['car_image']; ?>" class="img-responsive" /></a>
					  </li>
					</ul>
				  </div>
				</div>
				<div class="caption">
					<div class="col-md-6">
						<div class="item-detail">
							<h3><?php echo $row['car_name'] . ' ' . $row['car_model']; ?></h3>
							<p><?php echo $row['car_description']; ?></p>
							<p><strong>Brand: </strong><?php echo $row['manf_name']; ?></p>
							<p><i class="fa fa-map-marker"></i><span class="location"> <?php echo $row['city_name'] . ', ' . $row['provinces_name']; ?> (Pakistan)</span></p>
						</div>
					</div>
					<div class="col-md-3">
					  <div class="item-price-site">
						<h3><?php echo $row['price_per_day']; ?> PKR</h3>
						<b><i class="fa fa-phone"></i> +92 - 123456789</b>
						<a href="<?php echo site_url('detail/index/') . $row['rent_id']; ?>" class="btn btn-grey btn-block">View</a>
						<a href="#" class="btn btn-orange btn-block">Book now</a>
					  </div>
					</div>
				</div>
			  </div>
			</div>
	<?php } } else { ?>
			<h2>No Car Found</h2>
		<?php } ?>	
	</div>
  </div>
</div>
  </div>
</section>
