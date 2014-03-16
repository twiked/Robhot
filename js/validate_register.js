<script type="text/javascript">
	$(document).ready(function () {
	    $("#register").validate({
		rules: {
			name: {
				lettersonly: true
			},
			surname: {
				lettersonly: true
			}
		}
	    });
	});
</script>
