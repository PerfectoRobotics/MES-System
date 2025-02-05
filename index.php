<?php include_once('header.php') ?>
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="row">
						<div class="col-12 col-lg-3">
							<div class="card radius-15">
								<div class="card-body text-center">
									 <div class="widgets-icons mx-auto bg-light-primary text-primary rounded-circle"><i class='fa fa-calculator'></i>
									</div>
									<h4 class="mb-0 font-weight-bold mt-3">574</h4>
									<p class="mb-0">Total Count</p>
								</div>
							</div>
						</div> 
						<div class="col-12 col-lg-3">
							<div class="card radius-15">
								<div class="card-body text-center">
									<div class="widgets-icons mx-auto bg-light-primary text-primary rounded-circle"><i class='fa fa-calculator'></i>
									</div>
									<h4 class="mb-0 font-weight-bold mt-3">574</h4>
									<p class="mb-0">Work In Progress</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="card radius-15">
								<div class="card-body text-center">
										<div class="widgets-icons mx-auto bg-light-primary text-primary rounded-circle"><i class='fa fa-calculator'></i>
									</div>
									<h4 class="mb-0 font-weight-bold mt-3">984</h4>
									<p class="mb-0">Produced Done</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="card radius-15">
								<div class="card-body text-center">
									<div class="widgets-icons mx-auto bg-light-primary text-primary rounded-circle"><i class='fa fa-calculator'></i>
									</div>
									<h4 class="mb-0 font-weight-bold mt-3">12</h4>
									<p class="mb-0">Rejected or Quarantine </p>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
					<div class="row">
						
						<div class="col-12 col-lg-4 d-flex">
							<div class="card radius-15 w-100">
								<div class="card-body">
									<div class="d-lg-flex align-items-center">
										<div>
											<h5 class="mb-4">Production Part Destribution</h5>
										</div>
									</div>
									<div id="chart5"></div>
								</div>
								<ul class="list-group list-group-flush mb-0">
									<li class="list-group-item border-top d-flex justify-content-between align-items-center bg-transparent"> Part 1<span class="badge bg-danger rounded-pill">25%</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Part 2 <span class="badge bg-primary rounded-pill">65%</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Part 3<span class="badge bg-warning rounded-pill text-dark">10%</span>
									</li>

								</ul>
							</div>
						</div>
						<div class="col-12 col-lg-8 d-flex">
							<div class="card radius-15 w-100">
								<div class="card-header border-bottom-0">
									<div class="d-flex align-items-center">
										<div>
											<h5 class="mb-lg-0">Batch Quantity  vs. Actual produced </h5>
										</div>
										<div class="ms-auto mb-2 mb-lg-0">
											<div class="btn-group-round">
												<div class="btn-group">
													<button type="button" class="btn btn-white">This Month</button>
													<button type="button" class="btn btn-white dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="javaScript:;"> Day</a>
														<a class="dropdown-item" href="javaScript:;"> Week</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div id="chart4"></div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
					<div class="row">
						<div class="col-12 col-lg-12 col-xl-3 d-flex">
							<div class="card radius-15 w-100">
								<div class="card-body">
									<div class="d-lg-flex align-items-center">
										<div>
											<h5 class="mb-0">Availability</h5>
										</div>
									</div>
									<hr>
								<center>	<div id="availabilityChart" style="right: 126px;position: relative;width: 454px;height: auto; overflow: hidden;"></div></center>
								</div>
								 
							</div>
						</div>
						<div class="col-12 col-lg-12 col-xl-3 d-flex">
							<div class="card radius-15 w-100">
								<div class="card-body">
									<div class="d-lg-flex align-items-center  ">
										<div>
											<h5 class="mb-0">Performance</h5>
										</div>
									 
									</div>
									<hr/>
									<div class=" ">
										<div id="performanceChart" style="right: 126px;position: relative;width: 454px;height: auto; overflow: hidden;"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-12 col-xl-3 d-flex">
							<div class="card radius-15 w-100">
								<div class="card-body">
									<div class="d-lg-flex align-items-center mb-4">
										<div>
											<h5 class="mb-0">Quality</h5>
										</div>
										 
									</div>
									<hr/>
									<div class=" ">
										<div id="qualityChart" style="right: 126px;position: relative;width: 454px;height: auto; overflow: hidden;"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-12 col-xl-3 d-flex">
							<div class="card radius-15 w-100">
								<div class="card-body">
									<div class="d-lg-flex align-items-center mb-4">
										<div>
											<h5 class="mb-0">OEE</h5>
										</div>
										 
									</div>
									<hr/>
									<div class=" ">
										<div id="oeeChart" style="right: 126px;position: relative;width: 454px;height: auto; overflow: hidden;"></div>

									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
					 
  
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
	<?php include_once('footer.php') ?>