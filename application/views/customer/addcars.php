<div class="content-wrapper">
    <section class="content-header">
		<div class="row">
			<div class="col-md-10">
				<h1 style="margin-top:0px;">cars</h1>
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
						<h3 class="panel-title"><i class="fa fa-list"></i> Add Car</h3>
					</div>
                    <div class="panel-body">
						<form action="<?php echo site_url('customer/car/saveCar');?> " method="post" enctype="multipart/form-data" id="form-product">
							<div class="form-group">
								<label class="control-label">Select Showroom</label>
								<select name="showroom" class="form-control">
									<?php foreach($showroom_list as $row) { ?>
										<option value="<?php echo $row['showroom_id']; ?>"><?php echo $row['showroom_name']; ?></option>
									<?php } ?>								
								</select>
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-model">Select Manufacturer</label>
								<select class="form-control" name="manufacturer" id="select-manufacturer">
									<option value="0">Select Manufacturer</option>
									<?php foreach($manufacturers as $row) { ?>
										<option value="<?php echo $row['manf_id']; ?>"><?php echo $row['manf_name']; ?></option>
									<?php } ?>								
								</select>
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-model">Select Car</label>
								<select class="form-control" name="car" id="select-car">
									
								</select>
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-model">Select Model</label>
								<select class="form-control" name="model">
									<option value="0">Select Model</option>
									<?php foreach($models as $row) { ?>
										<option value="<?php echo $row['model']; ?>"><?php echo $row['model']; ?></option>
									<?php } ?>								
								</select>
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-model">Select Fuel</label>
								<select class="form-control" name="fuel">
									<option value="0">Select Fuel</option>
									<option value="CNG">CNG</option>
									<option value="Petrol">Petrol</option>
									<option value="Diesel">Diesel</option>
								</select>
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-model">Rent Per Day</label>
								<input type="text" name="rent_per_day" value="" placeholder="Rent per day" id="input-location" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
							</div>
						
							<div class="form-group">
								<label class="control-label" for="input-model">Description</label>
								<input type="text" name="description" value="" placeholder="Description" id="input-location" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-model">Color</label>
								<input type="text" name="color" value="" placeholder="White, Black, silver..." id="input-location" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-model">Door</label>
								<select class="form-control" name="door">
									<option value="0">Select Door</option>
									<option value="2">2</option>
									<option value="4">4</option>
								</select>
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-model">Availability</label>
								<select class="form-control" name="availability">
									<option value="0">Availability</option>
									<option value="1">Available</option>
									<option value="0">Not Available</option>
								</select>
							</div>
							
							
							<div class="form-group">
								<label class="control-label" for="input-model">Available Date From</label>
								<input type="date" name="availabile_date_from" value="" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-model">Available Date To</label>
								<input type="date" name="availabile_date_to" value="" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
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
							<input type="submit" value="save" class="pull-right btn btn-primary">
						</form>
					</div>
                </div>
            </div>
        </div>
    </section>
</div>