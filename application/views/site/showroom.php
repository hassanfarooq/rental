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
			<div class="entry-media">
				<div class="entry-slide">
					<div class="entry-carousel owl-carousel owl-carousel-inset owl-loaded owl-drag">
						<div class="owl-stage-outer">
							<div class="owl-stage" style="transform: translate3d(-1696px, 0px, 0px); transition: 0s; width: 2544px;">
								<div class="owl-item" style="width: 848px;">
									<div>
										<img src="./img/samples/posts/sidebar/1.jpg" alt="">
									</div>
								</div>
								<div class="owl-item" style="width: 848px;">
									<div>
										<img src="./img/samples/posts/sidebar/1.jpg" alt="">
									</div>
								</div>
								<div class="owl-item active" style="width: 848px;">
									<div>
										<img src="./img/samples/posts/sidebar/1.jpg" alt="">
                                    </div></div></div></div><div class="owl-nav"><div class="owl-prev">prev</div><div class="owl-next disabled">next</div></div><div class="owl-dots disabled"></div></div>
                                    </div>
                                </div>
		</div>
	</div>
</div>
  </div>
</section>
