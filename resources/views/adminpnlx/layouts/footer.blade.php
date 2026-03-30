<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
	<!--begin::Copyright-->
	<div class="text-dark order-2 order-md-1">
		<span class="text-muted font-weight-bold mr-2"><?php echo date('Y') ?> ©</span>
		<a href="#" target="_blank" class="text-dark-75 text-hover-primary"></a>
	</div>
</div>

<script>
	$(document).on("click", ".deleteItem", function () {
		let id = $(this).data("id");
		let url = $(this).data("url");
		Swal.fire({
			title: "Are you sure?",
			text: "This record will be deleted!",
			icon: "warning",
			showCancelButton: true,
			confirmButtonText: "Yes, delete it!",
			cancelButtonText: "Cancel"
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.ajax({
					url: url,
					type: "POST",
					data: { id: id },
					success: function (response) {
						console.log('response', response.message)

						Swal.fire({
							icon: "success",
							title: response.message,
							showConfirmButton: false,
							timer: 1500
						});

						kt_datatable_zero_configuration.ajax.reload();
					}
				});
			}
			else if (result.dismiss === Swal.DismissReason.cancel) {
				Swal.fire({
					icon: "error",
					title: "Cancelled",
					text: "Your data is safe 🙂",
					showConfirmButton: false,
					timer: 1000
				});
			}
		});
	});
</script>