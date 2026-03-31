@extends('adminpnlx.layouts.layout')
@section('content')
<div class="subheader py-3 subheader-solid">
	<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb bg-transparent mb-0">
				<li class="breadcrumb-item">
					<a href="{{ Route('Admin.Dashboard') }}">Dashboard</a>
				</li>
				<li class="breadcrumb-item active">
					{{$sectionName}}
				</li>
			</ol>
		</nav>
		<div class="d-flex align-items-center">
				<a href="{{ route( $modelName .'.create') }}" class="btn btn-primary">
					Add {{$sectionName}}
				</a>
		</div>
	</div>
</div>

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="d-flex flex-column-fluid">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="card card-custom gutter-b example example-compact">
						<div class="card-body">
							<form id="category_form" action="" method="get" class="mb-5" enctype="multipart/form-data">
								@csrf()
								<div class="row">
									<div class="col-lg-3 col-md-6 col-sm-12">
										<label class="col-form-label">Name </label>
										<select class="form-control" name="payment_mode" id="payment_mode">
											<option value="">All</option>
											<option value="Cash">Cash</option>
											<option value="UPI">UPI</option>
											<option value="Card">Card</option>
											<option value="Bank">Bank</option>
										</select>
									</div>

									<div class="col-lg-3 col-md-6 col-sm-12">
										<label class="col-form-label"> Start Date </label>
										<input type="date" name="start_date" id="start_date" class="form-control"
											value="{{ now()->format('Y-m-01') }}" required>
									</div>
									<div class="col-lg-3 col-md-6 col-sm-12">
										<label class="col-form-label"> End Date </label>
										<input type="date" name="end_date" id="end_date" class="form-control"
											value="{{ now()->format('Y-m-d') }}" required>
									</div>

									<div class="col-lg-3 col-md-6 col-sm-12">
										<button type="submit" class="btn btn-primary mr-2 mt-11">Search</button>
										<button type="reset" class="btn btn-secondary mr-2 mt-11">Reset</button>
									</div>
								</div>
							</form>
							<table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
								<thead>
									<tr class="fw-semibold fs-6 text-muted">
										<th>ID</th>
										<th>Parent Name</th>
										<th>Name</th>
										<th>Url</th>
										<th>Created</th>
										<th>Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>ID</th>
										<th>Parent Name</th>
										<th>Name</th>
										<th>Url</th>
										<th>Created</th>
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var kt_datatable_zero_configuration;
	$(document).ready(function () {
		 kt_datatable_zero_configuration = $('#kt_datatable_zero_configuration').DataTable({
			processing: true,
			serverSide: true,
			ordering: true,
			searching: true,
			order: [[0, "desc"]],
			columnDefs: [
				{ orderable: false, targets: -1 }
			],
			lengthMenu: [ [10, 25, 50, 100, 1000, -1], [10, 25, 50, 100, 1000, "All"] ],
			pageLength: 10,
			lengthChange: true,
			dom: 'Blfrtip',
			ajax: {
				url: "{{ route($modelName .'.resultData') }}",
				cache: false,
				data: function (d) {
					d.name = $('#name').val();
					d.start_date = $('#start_date').val();
					d.end_date = $('#end_date').val();
				}
			},
			columns: [
				{ data: 'id', name: 'id' },
				{ data: 'parent_id', name: 'parent_id' },
				{ data: 'name', name: 'name' },
				{ data: 'route', name: 'route' },
				{ data: 'created_at', name: 'created_at' },
				{ data: 'action', name: 'action' },
			]
		});
		// 🔥 Prevent form refresh
		$('#category_form').on('submit', function (e) {
			e.preventDefault();
			kt_datatable_zero_configuration.ajax.reload();
		});

		$('#category_form').on('reset', function () {
			setTimeout(function () {
				kt_datatable_zero_configuration.ajax.reload();
			}, 200);
		});
	});
</script>

@endsection