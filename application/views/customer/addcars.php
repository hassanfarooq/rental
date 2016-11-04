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
						<form action="<?php echo site_url('customer/addshowroom/saveShowroom');?> " method="post" enctype="multipart/form-data" id="form-product">
						
							<div class="form-group">
								<label class="control-label" for="input-model">Select Car</label>
								<select class="form-control">
									<?php foreach($showroom_list as $row) { ?>
										<option value="<?php echo $row['showroom_id']; ?>"><?php echo $row['showroom_name']; ?></option>
									<?php } ?>								
								</select>
							</div>
							
							<div class="form-group">
								<label class="control-label" for="input-model">Select Showroom</label>
								<select class="form-control">
									<?php foreach($showroom_list as $row) { ?>
										<option value="<?php echo $row['showroom_id']; ?>"><?php echo $row['showroom_name']; ?></option>
									<?php } ?>								
								</select>
							</div>
						
							<div class="form-group">
								<label class="control-label" for="input-model">Showroom Owner Name</label>
								<input type="text" name="showroom_owner" value="" placeholder="Showroom Owner Name" id="input-location" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
						  </div>
						
							<div class="form-group">
								<label class="control-label" for="input-model">Description</label>
								<input type="text" name="description" value="" placeholder="Description" id="input-location" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
						  </div>
						
							<div class="form-group">
								<label class="control-label" for="input-model">Address</label>
								<input type="text" name="address" value="" placeholder="Address" id="input-location" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
						  </div>
							<div class="form-group">
								<label class="control-label" for="input-status">Select Province</label>
								<select name="province" id="select-province" class="form-control">
									<?php 
										foreach($province as $row) { ?>
											<option value="<?php echo $row['provinces_id']; ?>"><?php echo $row['provinces_name']; ?></option>
										<?php }
									?>
								</select>
							</div>							
							<div class="form-group">
								<label class="control-label" for="input-status">Select City</label>
								<select name="city" id="select-city" class="form-control">

								</select>
							</div>
							<div class="form-group">
								<label class="control-label" for="input-status">Status</label>
								<select name="status" id="status" class="form-control">
									<option value="1">Enable</option>
									<option value="0">Disable</option>
								</select>
							</div>
							<div class="form-group">
								<label class="control-label" for="input-status">Showroom Image</label>
								<input type="file" name="showroom_image">
							</div>
							<input type="submit" value="save" class="pull-right btn btn-primary">
						</form>
					</div>
                </div>
            </div>
        </div>
    </section>
</div>