<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!--END MAIN BODY BG-->

<script type="text/javascript" src="<?php echo base_url('public/js/jquery-1.9.1.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php // echo base_url('public/js/login_page.js');  ?>"></script>
<script src="<?php // echo base_url('public/js/languages/jquery.validationEngine-en.js')  ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php // echo base_url('public/js/jquery.validationEngine.js')  ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url('public/js/header.js') ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url('public/js/jquery-ui-1.10.3.custom.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url('public/js/form.js') ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url('public/media/js/jquery.dataTables.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<script>
	$(document).ready(function(){
		$('#myTab a').click(function (e) {
			  e.preventDefault();
			  $(this).tab('show');
		})
		$(".use-tooltip").tooltip();
	});
</script>
</body>
</html>
