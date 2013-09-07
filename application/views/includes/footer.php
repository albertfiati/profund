	</div>
	<div class="footer">
		<p>Ghana Highway Authority &copy; 2013</p>
	</div>
	<!--
	To change this template, choose Tools | Templates
	and open the template in the editor.
	-->
	<!--END MAIN BODY BG-->

	<script type="text/javascript" src="<?php echo base_url("public/js/jquery-1.9.1.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('public/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('public/media/js/jquery.dataTables.min.js') ?>" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url('public/js/header.js') ?>" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url('public/js/jquery-ui-1.10.3.custom.min.js') ?>" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url('public/js/form.js') ?>" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url('public/js/bootstrap-datepicker.js') ?>" type="text/javascript" charset="utf-8"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#myTab a').click(function (e) {
				  e.preventDefault();
				  $(this).tab('show');
			})
			$(".use-tooltip").tooltip();

			$('#myModal').modal({show:false});

			$(".datepicker").datepicker({
				autoclose:true,
				format: "dd-MM-yyyy",
			});
		});
	</script>
</body>
</html>
