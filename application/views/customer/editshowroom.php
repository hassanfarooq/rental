<div class="content-wrapper">
    <section class="content-header">
		<div class="row">
			<div class="col-md-10">
				<h1 style="margin-top:0px;">Showroom</h1>
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
						<h3 class="panel-title"><i class="fa fa-list"></i> Edit Showroom</h3>
					</div>
                    <div class="panel-body">
						<form action="<?php echo site_url('customer/showroom/updateShowroom');?> " method="post" enctype="multipart/form-data" id="form-product">
							<input type="hidden" name="showroom_id" value="<?php echo $showroom[0]['showroom_id']; ?>"/>
							<div class="form-group">
								<label class="control-label">Showroom Name</label>
								<input type="text" name="showroom_name" value="<?php echo $showroom[0]['showroom_name']; ?>" placeholder="Showroom Name" class="form-control">
							</div>
							<div class="form-group">
								<label class="control-label">Showroom Owner Name</label>
								<input type="text" name="showroom_owner" value="<?php echo $showroom[0]['owner_name']; ?>" placeholder="Showroom Owner Name" class="form-control">
							</div>
						
							<div class="form-group">
								<label class="control-label">Description</label>
								<input type="text" name="description" value="<?php echo $showroom[0]['description']; ?>" placeholder="Description" class="form-control">
							</div>
						
							<div class="form-group">
								<label class="control-label">Address</label>
								<input type="text" name="address" value="<?php echo $showroom[0]['address']; ?>" placeholder="Address" class="form-control">
							</div>
							<div class="form-group">
								<label class="control-label">Province</label>
								<?php
									foreach($province as $row) {
										if($row['provinces_id'] == $showroom[0]['province']) { ?>
											<input type="hidden" name="province" value="<?php echo $row['provinces_id']; ?>">
											<input type="text" name="province" value="<?php echo $row['provinces_name']; ?>" class="form-control" disabled>
										<?php }
									}
								?>
							</div>							
							<div class="form-group">
								<label class="control-label">Province</label>
								<?php
									foreach($city as $row) {
										if($row['city_id'] == $showroom[0]['city']) { ?>
											<input type="hidden" name="city" value="<?php echo $row['city_id']; ?>">
											<input type="text" name="city" value="<?php echo $row['city_name']; ?>" class="form-control" disabled>
										<?php }
									}
								?>
							</div>
							<div class="form-group">
								<label class="control-label">Status</label>
								<select name="status" class="form-control" required>
									<option value="1">Select Enable</option>
									<option value="1">Enable</option>
									<option value="0">Disable</option>
								</select>
							</div>
							<table class="table table-responsive">
								<tr>
									<td width="250px">
										<div class="cover-image">
											<img width="250px" src="<?php echo base_url($showroom[0]['showroom_cover_image']); ?>" class="img-responsive"/>
										</div>
									</td>
									<td>
										<div class="form-group">
											<label class="control-label">Showroom Cover Image</label>
											<input type="file" name="showroom_cover_image">
											<small>Cover image size: 980px x 250px</small>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="cover-image">
											<img width="250px" src="<?php echo base_url($showroom[0]['showroom_image']); ?>" class="img-responsive"/>
										</div>
									</td>
									<td>
										<div class="form-group">
											<label class="control-label">Showroom Image</label>
											<input type="file" name="showroom_image">
										</div>
									</td>
								</tr>
							</table>
							<input type="submit" value="save" class="pull-right btn btn-primary">
						</form>
					</div>
                </div>
            </div>
        </div>
    </section>
</div>