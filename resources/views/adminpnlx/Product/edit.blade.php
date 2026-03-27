@extends('adminpnlx.layouts.layout')
@section('content')
	<div class="subheader py-3 subheader-solid">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb bg-transparent mb-0">
					<li class="breadcrumb-item">
						<a href="{{ Route('Admin.Dashboard') }}">Dashboard</a>
					</li>

					<li class="breadcrumb-item">
						<a href="{{ Route('Category.index') }}">Category</a>
					</li>
					<li class="breadcrumb-item active">
						Add Category
					</li>
				</ol>
			</nav>
			<div class="d-flex align-items-center">

			</div>
		</div>
	</div>

	<!--begin::Content-->
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
		<!--begin::Entry-->
		<div class="d-flex flex-column-fluid">
			<!--begin::Container-->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<form action="{{ Route('Category.store') }}" method="post" enctype="multipart/form-data">
							@csrf()
							<div class="card card-custom gutter-b example example-compact">
								<!-- <div class="card-header">
										<h3 class="card-title"> Category Information</h3>
										<div class="card-toolbar">
											<div class="example-tools justify-content-center">
											</div>
										</div>
									</div> -->

								<div class="card-body">
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="name"> Category Name <span class="text-danger">*</span>
												</label>
												<input type="text" name="name"
													class="form-control @error('name') is-invalid @enderror"
													placeholder="Category Name" value="{{ old('name') }}">
												@error('name')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="status">Description </label>
												<textarea name="description"
													class="form-control @error('description') is-invalid @enderror"
													placeholder="Category Description" value="{{ old('description') }}"
													rows="3"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer text-center">
									<button type="submit" class="btn btn-primary mr-2">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection