<div class="container">
    <div class="row dashboard">
        <div class="span3 user_summary">
            
        </div>
        <div class="span8 pull-right" id="user_menu" style="margin-left: 200px;">

           

            <div class="steps">
                <ul id="progressbar">
                    <li class="active">Validate contract code</li>
                    <li class="active">Fill in Payment instruction to bank</li>
              
                </ul>
            </div>

			<?php echo form_open('validate_cont_pay_inst_bank'); ?>
				<div><input name="contract_code"></div>
				<div><input type="submit" value="Create payment request for this contract"></div>
			</form>

			</div>
		</div>
</div>
