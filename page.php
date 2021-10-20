add header to ajax request to resolve token mismatch and token not found issue in laravel while using ajax

<script type="text/javascript">
	$.ajax({
        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	});
</script>
