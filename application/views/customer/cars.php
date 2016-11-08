<div class="content-wrapper">
    <section class="content-header">
		<div class="row">
			<div class="col-md-10">
				<h1 style="margin-top:0px;">My Cars</h1>
			</div>
			<div class="col-md-2">
				<a href="<?php echo site_url('customer/car/addCar');?> " class="btn btn-primary"><i class="fa fa-plus"></i></a>
				<button class="btn btn-danger"><i class="fa fa-remove"></i></button>
			</div>
		</div>
    </section>

    <section class="content">        
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-list"></i> Car List</h3>
					</div>
                    <div class="panel-body">
						<div class="well">
						  <div class="row">
							<div class="col-sm-4">
							  <div class="form-group">
								<label class="control-label" for="input-name">Car Name</label>
								<input type="text" name="filter_name" value="" placeholder="Car Name" id="input-name" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
							  </div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label" for="input-model">Showroom</label>
									<select name="filter_showroom" id="input-status" class="form-control">
									<option value="*">Select Showroom</option>
									<?php 
										if($showroom_list > 0) {
											foreach($showroom_list as $row) { ?>
												<option value="<?php echo $row['showroom_id']; ?>"><?php echo $row['showroom_name']; ?></option>
											<?php }
										} else { ?>
											<option>No Showroom</option>
										<?php }
									?>
								</select>
							  </div>
							</div>
							<div class="col-sm-4">
							  <div class="form-group">
								<label class="control-label" for="input-status">Manufacturer</label>
								<select name="filter_manufacturer" id="input-status" class="form-control">
									<option value="*">Select Manufacturer</option>
									<option value="1">Enabled</option>
									<option value="0">Disabled</option>
								</select>
							  </div>
							</div>
							
						  </div>
						  <div class="row">
							<div class="col-sm-4">
							  <div class="form-group">
								<label class="control-label" for="input-status">Status</label>
								<select name="filter_status" id="input-status" class="form-control">
									<option value="*">Select Status</option>
									<option value="1">Enabled</option>
									<option value="0">Disabled</option>
								</select>
							  </div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label" for="input-model">Model</label>
									<select name="filter_model" id="input-status" class="form-control">
									<option value="*">Select Model</option>
									<?php
										if($model > 0) {
											foreach($model as $row) { ?>
												<option value="<?php echo $row['model']; ?>"><?php echo $row['model']; ?></option>
											<?php }
										} 
									?>
								</select>
							  </div>
							</div>
							<div class="col-md-4">
								<button type="button" id="button-filter" class="btn btn-primary pull-right"><i class="fa fa-search"></i> Filter</button>
							</div>
						  </div>
						</div>
						
						<form action="http://demo.opencart.com/admin/index.php?route=catalog/product/delete&amp;token=df780afe7632bbbfb65f058280860c36" method="post" enctype="multipart/form-data" id="form-product">
							<div class="table-responsive">
								<table class="table table-bordered table-hover showroom_table">
									<thead>
										<tr>
											<td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
											<td class="text-center">Image</td>
											<td class="text-left"><a href="" class="asc">Car Name</a></td>
											<td class="text-left"><a href="$">Manufacturer</a></td>
											<td class="text-left"><a href="#">Model</a></td>
											<td class="text-left"><a href="#">Availability</a></td>
											<td class="text-left"><a href="#">Status</a></td>
											<td class="text-right">Action</td>
										</tr>
									</thead>
									<tbody>
									<?php 
										if($cars > 0) {
										foreach($cars as $row) { ?>
											<tr>
												<td class="text-center"><input type="checkbox" name="selected[]" value="46"></td>
												<td class="text-center"><img src="<?php echo base_url() . $row['car_image']; ?>" alt="<?php echo $row['car_name']; ?>" class="img-thumbnail" width="90"></td>
												<td class="text-left"><?php echo $row['car_name']; ?></td>
												<td class="text-left"><?php echo $row['manf_name']; ?></td>
												<td class="text-left"><?php echo $row['car_model']; ?></td>
												<td class="text-left"><?php echo date("d-m-y", strtotime($row['available_date_from'])) . ' - ' . date("d-m-y", strtotime($row['available_date_to'])); ?></td>
												<td class="text-left"><?php echo $row['status']; ?></td>
												<td class="text-right"><a href="<?php echo site_url('customer/car/edit/').$row['rent_id']; ?>" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
											</tr>
										<?php } } else { ?>
											<tr class="text-center"><td colspan="7">No car added</td></tr>
										<?php } ?>
										
								</tbody>
								</table>
							</div>
						</form>
						<div class="row">
							<div class="col-sm-6 text-left"></div>
							<div class="col-sm-6 text-right">Showing 1 to 19 of 19 (1 Pages)</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
</div>