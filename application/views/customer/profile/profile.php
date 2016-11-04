 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
			
				<?php if(isset($user_data[0]['image'])) { ?>
					<img class="profile-user-img img-responsive img-circle" src="<?php echo base_url() . $user_data[0]['image']; ?>" alt="User profile picture">
				<?php } else { ?>
					<img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('uploads/profile-default.jpg'); ?>" alt="User profile picture">
				<?php } ?>

              <h3 class="profile-username text-center"><?php echo ucwords(get_logindata('name')); ?></h3>

              <p class="text-muted text-center"><?php echo ucwords(get_logindata('role_name')); ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>My Showrooms</b> <a class="pull-right"><?php echo $showroom_count; ?></a>
                </li>
                <li class="list-group-item">
                  <b>No of Cars</b> <a class="pull-right"><?php echo $cars_count; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Booked Cars</b> <a class="pull-right">0</a>
                </li>
                <li class="list-group-item">
                  <b>Unbooked Cars</b> <a class="pull-right">0</a>
                </li>
              </ul>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Basic Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Contact Information</strong>

              <p class="text-muted">CNIC: <?php echo $user_data[0]['CNIC']; ?><br/>Phone: <?php echo $user_data[0]['contact_no']; ?></p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                <p class="text-muted">
					<?php echo $user_data[0]['address']; ?>, <?php echo $user_data[0]['postal_code']; ?><br/><?php echo $user_data[0]['provinces_name']; ?>, <?php echo $user_data[0]['city_name']; ?>
				</p>
              <hr>
              <strong><i class="fa fa-file-text-o margin-r-5"></i> About Me</strong>
              <p><?php echo $user_data[0]['about']; ?></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-8">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#personal_details" data-toggle="tab">Personal Details</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="personal_details">
                <form action="<?php echo site_url('customer/profile/profileInfo'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
				  <div class="form-group">
                    <label for="CNIC" class="col-sm-2 control-label">CNIC</label>
                    <div class="col-sm-10">
                      <input type="text" name="cnic" value="" class="form-control" id="CNIC" placeholder="CNIC">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="contactno" class="col-sm-2 control-label">Contact No</label>
                    <div class="col-sm-10">
                      <input type="text" name="contact" class="form-control" id="contactno" placeholder="Contact no">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Province" class="col-sm-2 control-label">Province</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="select-province" name="province">
						<option value="0">Select Province</option>
						<?php foreach($provinces as $row) { ?>
							<option value="<?php echo $row['provinces_id']; ?>"><?php echo $row['provinces_name']; ?></option>
						<?php } ?>
					  </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="City" class="col-sm-2 control-label">City</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="select-city" name="city"></select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="DOB" class="col-sm-2 control-label">Date Of Birth</label>
                    <div class="col-sm-10">
                      <input type="date" name="dob" class="form-control" id="DOB" placeholder="Date Of Birth">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">Address</label>

                    <div class="col-sm-10">
                      <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="Postalcode" class="col-sm-2 control-label">Postal Code</label>

                    <div class="col-sm-10">
                      <input type="text" name="postal" class="form-control" id="Postalcode" placeholder="Postal Code">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="about" class="col-sm-2 control-label">About</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="about" id="about" placeholder="Address"></textarea>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="status">
						<option value="1">Enable</option>
						<option value="0">Disable</option>
					  </select>
                    </div>
                  </div>
				  
                  <div class="form-group">
                    <label for="image" class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-10">
						<label class="control-label" for="input-status">Showroom Image</label>
						<input type="file" name="image">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger pull-right">Save</button>
                    </div>
                  </div>
                </div>
                </form>

              </div>

              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
   </div>