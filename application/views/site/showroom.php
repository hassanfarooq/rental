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
		<div class="items">
			<?php if($showroom) { ?>
				<?php foreach($showroom as $row) { ?>
					<div class="cover">
						<img src="<?php echo base_url('slide1.png'); ?>" class="img-responsive">
					</div>
					<div class="row btn-yellow">
						<div class="col-md-3">
							<div class="showroom-img">
								<img src="<?php echo base_url() . $row['showroom_image']; ?>" class="img-responsive">
							</div>
						</div>
						<div class="col-md-9">
							<div class="row">
								<div class="col-md-8">
									<h3 style="margin:6px 0px 0px 0px"><?php echo $row['showroom_name']; ?></h3>
								</div>
								<div class="col-md-4">
									<h4>No of car(s): </h4>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-9">
							<p class="showroom-info"><strong>Owner Name: </strong><?php echo $row['owner_name']; ?></p>
							<p><strong>Showroom Description: </strong><?php echo $row['description']; ?></p>
							<p><strong>Location: </strong><?php echo $row['address']; ?></p>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
</div>
  </div>
</section>
