<div class="content-wrapper">
    <section class="content-header">
		<div class="row">
			<div class="col-md-10">
				<h1 style="margin-top:0px;">Car</h1>
			</div>
			<div class="col-md-2">
				
			</div>
		</div>
    </section>

    <section class="content">        
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-list"></i> Edit Car</h3>
					</div>
                    <div class="panel-body">
						<form action="<?php echo site_url('customer/car/updateCar');?> " method="post" enctype="multipart/form-data" id="form-product">
						<?php foreach($car as $row) { ?>
<<<<<<< HEAD
						<input type="hidden" value="<?php echo $row['rent_id']; ?> " name="rent_id">
							<div class="form-group">
								<label class="control-label">Select Showroom</label>
								<select name="showroom_id" class="form-control">
=======
							<div class="form-group">
								<label class="control-label">Select Showroom</label>
								<select name="showroom" class="form-control">
>>>>>>> 9d53248b280aca2cf02dc9a371c2732fc77812f0
										<option value="<?php echo $row['showroom_id']; ?>"><?php echo $row['showroom_name']; ?></option>
								</select>
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-model">Select Manufacturer</label>
<<<<<<< HEAD
								<select class="form-control" name="manufacturer_id" id="select-manufacturer">
=======
								<select class="form-control" name="manufacturer" id="select-manufacturer">
>>>>>>> 9d53248b280aca2cf02dc9a371c2732fc77812f0
									<!--<option value="0">Select Manufacturer</option>
									<?php //foreach($manufacturers as $row) { ?>-->
										<option value="<?php echo $row['manf_id']; ?>"><?php echo $row['manf_name']; ?></option>
									<!--<?php //} ?>								-->
								</select>
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-model">Select Car</label>
<<<<<<< HEAD
								<select class="form-control" name="car_id" id="select-car">
=======
								<select class="form-control" name="car" id="select-car">
>>>>>>> 9d53248b280aca2cf02dc9a371c2732fc77812f0
									<option value="<?php echo $row['car_id']; ?>"><?php echo $row['car_name']; ?></option>
								</select>
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-model">Select Model</label>
<<<<<<< HEAD
								<select class="form-control" name="car_model">
=======
								<select class="form-control" name="model">
>>>>>>> 9d53248b280aca2cf02dc9a371c2732fc77812f0
										<option value="<?php echo $row['car_model']; ?>"><?php echo $row['car_model']; ?></option>								
								</select>
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-model">Select Fuel</label>
								<select class="form-control" name="fuel">
									<option value="<?php echo $row['fuel']; ?>"><?php echo $row['fuel']; ?></option>
								</select>
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-model">Rent Per Day</label>
<<<<<<< HEAD
								<input type="text" name="price_per_day" value="<?php echo $row['price_per_day']; ?>" placeholder="Rent per day" id="input-location" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
=======
								<input type="text" name="rent_per_day" value="<?php echo $row['price_per_day']; ?>" placeholder="Rent per day" id="input-location" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
>>>>>>> 9d53248b280aca2cf02dc9a371c2732fc77812f0
							</div>
						
							<div class="form-group">
								<label class="control-label" for="input-model">Description</label>
<<<<<<< HEAD
								<input type="text" name="car_description" value="<?php echo $row['car_description']; ?>" placeholder="Description" id="input-location" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
=======
								<input type="text" name="description" value="<?php echo $row['car_description']; ?>" placeholder="Description" id="input-location" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
>>>>>>> 9d53248b280aca2cf02dc9a371c2732fc77812f0
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-model">Color</label>
								<input type="text" name="color" value="<?php echo $row['color']; ?>" placeholder="White, Black, silver..." id="input-location" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-model">Door</label>
								<select class="form-control" name="door">
									<option value="<?php echo $row['door']; ?>"><?php echo $row['door']; ?></option>
									<option value="2">2</option>
									<option value="4">4</option>
								</select>
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-model">Availability</label>
								<select class="form-control" name="availability">
									<option value="0">"<?php if (isset($row['availability']) && !empty($row['availability'])){ if($row['availability']==1) {echo 'availabile' ; } } ?>"</option>
								</select>
							</div>
							
							
							<div class="form-group">
								<label class="control-label" for="input-model">Available Date From</label>
								
<<<<<<< HEAD
								<input type="date" name="available_date_from" value="<?php echo date('mm/dd/yyyy',strtotime($row['available_date_from'])); ?>" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
=======
								<input type="date" name="availabile_date_from" value="<?php echo date('mm/dd/yyyy',strtotime($row['available_date_from'])); ?>" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
>>>>>>> 9d53248b280aca2cf02dc9a371c2732fc77812f0
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-model">Available Date To</label>
<<<<<<< HEAD
								<input type="date" name="available_date_to" value="<?php echo date('mm/dd/yyyy',strtotime($row['available_date_from'])); ?>" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
=======
								<input type="date" name="availabile_date_to" value="<?php echo date('mm/dd/yyyy',strtotime($row['available_date_from'])); ?>" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
>>>>>>> 9d53248b280aca2cf02dc9a371c2732fc77812f0
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-status">Status</label>
								<select name="status" id="status" class="form-control">
									<option value="1">Enable</option>
									<option value="0">Disable</option>
								</select>
							</div>
							<div class="form-group">
								<label class="control-label" for="input-status">Car Image</label>
								<input type="file" name="car_image">
							</div>
							<?php } ?>
							<input type="submit" value="save" class="pull-right btn btn-primary">
						</form>
					</div>
                </div>
            </div>
        </div>
    </section>
</div>