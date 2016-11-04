<div class="content-wrapper">
    <section class="content-header">
		<div class="row">
			<div class="col-md-10">
				<h1 style="margin-top:0px;">My Showroom</h1>
			</div>
			<div class="col-md-2">
				<a href="<?php echo site_url('customer/showroom/addShowroom');?> " class="btn btn-primary"><i class="fa fa-plus"></i> Add Showroom</a>
			</div>
		</div>
    </section>

    <section class="content">        
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-list"></i> Showroom List</h3>
					</div>
                    <div class="panel-body">
						<div class="well">
						  <div class="row">
							<div class="col-sm-4">
							  <div class="form-group">
								<label class="control-label" for="input-name">Showroom Name</label>
								<input type="text" name="filter_name" value="" placeholder="Showroom Name" id="input-name" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
							  </div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label" for="input-model">Location</label>
									<input type="text" name="filter_location" value="" placeholder="Location" id="input-location" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
							  </div>
							</div>
							<div class="col-sm-4">
							  <div class="form-group">
								<label class="control-label" for="input-status">Status</label>
								<select name="filter_status" id="input-status" class="form-control">
									<option value="*"></option>
									<option value="1">Enabled</option>
									<option value="0">Disabled</option>
								</select>
							  </div>
							  <button type="button" id="button-filter" class="btn btn-primary pull-right"><i class="fa fa-search"></i> Filter</button>
							</div>
						  </div>
						</div>
						<form action="#" method="post" enctype="multipart/form-data" id="form-product">
							<div class="table-responsive">
								<table class="table table-bordered table-hover showroom_table">
									<thead>
										<tr>
											<td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
											<td class="text-center">Image</td>
											<td class="text-left"><a href="" class="asc">Showroom Name</a></td>
											<td class="text-left"><a href="$">Location</a></td>
											<td class="text-left"><a href="#">Address</a></td>
											<td class="text-left"><a href="#">Status</a></td>
											<td class="text-right">Action</td>
										</tr>
									</thead>
									<tbody>
									<?php 
										if($showroom > 0) {
										foreach($showroom as $row) { ?>
											<tr>
												<td class="text-center"><input type="checkbox" name="selected[]" value="46"></td>
												<td class="text-center"><img src="<?php echo base_url() . $row['showroom_image']; ?>" alt="<?php echo $row['showroom_name']; ?>" class="img-thumbnail" width="90"></td>
												<td class="text-left"><?php echo $row['showroom_name']; ?></td>
												<td class="text-left"><?php echo $row['city_name'].', '. $row['provinces_name']; ?></td>
												<td class="text-left"><?php echo $row['address']; ?></td>
												<td class="text-left">Enabled</td>
												<td class="text-right">
													<a href="<?php echo site_url('customer/showroom/edit/').$row['showroom_id']; ?>" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
													<a href="<?php echo site_url('customer/showroom/deleteShowroom/').$row['showroom_id']; ?>" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Edit"><i class="fa fa-remove"></i></a>
												</td>
											</tr>
										<?php } } else { ?>
											<tr class="text-center"><td colspan="7">No showroom added</td></tr>
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