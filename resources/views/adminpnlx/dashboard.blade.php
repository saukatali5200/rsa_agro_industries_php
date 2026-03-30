@extends('adminpnlx.layouts.layout')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="d-flex flex-column-fluid">
		<div class="container-fluid">
			<div class="company-change-btn">
				<div class="row">
					<div class="col-md-12">
						<div class="new-bottom-dashbord-box">
							<div class="row">
								<div class="col-md-4">
									<a href="{{ url('admin/fetchTaskData/all') }}" target="_blank">
										<div class="bg-light-info box first-box">
											<span class="svg-icon svg-icon-3x svg-icon-info d-block my-2">

												<img src="" class="max-h-50px" alt="tasks" />
												<span class="totl_number text-info">123</span>
											</span>
											<p class="font-weight-bold font-size-h6 mt-2">
												Total Task(s)
											</p>
										</div>
									</a>
								</div>

								<div class="col-md-4">
									<a href="gfdgfdg" target="_blank">
										<div class="bg-light-info box first-box">
											<span class="svg-icon svg-icon-3x svg-icon-info d-block my-2">
												<img src="{{url('public/admin/image/tasks.png')}}" class="max-h-50px"
													alt="tasks" />
												<span class="totl_number text-info">77</span>
											</span>
											<p class="font-weight-bold font-size-h6 mt-2">
												Tasks Waiting for Approval
											</p>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!--end::Dashboard-->

			<!-- modal code start -->
			<div id="swithcompanymodal" class="modal cust_pop-design">
				<div class="modal-content">
					<div class="modal-header">
						<span class="close close-cash-expense-code">&times;</span>
						<h2>Switch Outlet</h2>
					</div>

					<form id="companyForm" method="POST" action="">
						<div class="form-group">
							<label for="companySelect">Select Outlet</label>
							<select name="company_id" id="companySelect" class="form-control">

							</select>
						</div>
						<div class="form-group text-center">
							<button type="button" class="btn btn-primary btn-sm"
								onclick="submitCompany()">Submit</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

@endsection
