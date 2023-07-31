<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.includes.header")
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <style>
    	.toast-info {
			background-color: green;
			}
			#toast-container > .toast-success {
			         opacity: 1 !important;
			}
			#toast-container > .toast-error {
			    opacity: 1 !important;
			}
			.web{
			    padding: 12.6px 16px;
			}
    </style>
</head>
<body>
@yield('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script>
	@if(session('success'))
        toastr.success("{{ session('success') }}");
    @elseif(session('error'))
        toastr.error("{{ session('error') }}");
    @endif
</script>
</body>

</html>

