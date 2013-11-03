<div class="container">
    <div class="row dashboard">
        <div class="span3 user_summary">
            
        </div>
        <div class="span8 pull-right" id="user_menu" style="margin-left: 200px;">

           

            <div class="steps">
                <ul id="progressbar">
                    <li class="active">Validate payment certificate code</li>
                    <li>Fill in application for withdrawal details</li>
              
                </ul>
            </div>

			<?php echo form_open('validate_payment_certificate'); ?>
				<div><input name="contract_code"></div>
				<div><input type="submit" value="Create application for redrawal for this payment certificate"></div>
			</form>

			</div>
		</div>
</div>
 