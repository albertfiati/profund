<div class="container">
    <div class="row dashboard">
        <div class="span3 thumbnail user_summary">
            <table>
                <tbody>
                    <tr>
                        <td>
                            <span>Staff Position</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                    </tr>
                    <tr>
                        <td><span>Department</span></td>
                    </tr>
                    <tr>
                        <td>
                            Marketing
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="span8 pull-right" id="user_menu">
            
            <div class="steps">
                <ul id="progressbar">
                    <li class="active">Add Sub-component</li>
                    <li class="active">Add Contract</li>
                    <li class="active">Add Training</li>
                </ul>
            </div>

            <?php echo form_open('create_training') ?>
                <div class="form-padding">
                    <div class="alert alert-info my-alert">
                        <i class="icon-info"></i>
                        Fields marked with the <span class="asterik">*</span> symbol are required
                    </div>
                    <table id="req_form">
                        <tbody>                            
                            <tr>
                                <td>
                                    <b>Contract code</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <b><?php echo $this->session->userdata('contract_code'); ?></b>
                                </td>
                            </tr>                            
                            <tr>
                                <td>
                                    <b>Date of letter of award</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <input type='text' ng-model="date_of_letter_of_award" name='date_of_letter_of_award' placeholder="" value="<?php print(set_value("date_of_letter_of_award")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_of_letter_of_award")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>
                                <td>
                                    <b>Delivery date</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <input type='text' ng-model="delivery_date" name='delivery_date' placeholder="" value="<?php print(set_value("delivery_date")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("delivery_date")); ?>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <b>Training duration</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <input type='text' ng-model="trainig_duration" name='training_duration' placeholder="" value="<?php print(set_value("training_duration")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("training_duration")); ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Payment terms</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' ng-model="payment_terms" name='payment_terms' placeholder="" value="<?php print(set_value("payment_terms")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("payment_terms")); ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>                                    
                                </td>
                                <td>
                                    <a href="#myModal" role="button" class="btn btn-success input-block-level" data-toggle="modal">
                                        Next 
                                        <i class="m-icon-swapright m-icon-white my-icon pull-right"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 id="myModalLabel">Confirm Information Provided</h3>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-info">
                                <i class="icon-info"></i> Please Verify the data provided below
                            </div>
                            <table id="req_form" class="table table-condensed table-bordered">
                                <tbody>                           
                                    <tr>
                                        <td class="span3">
                                            <b>Contract code</b>
                                        </td>
                                        <td>
                                            <b><?php echo $this->session->userdata('contract_code'); ?></b>
                                        </td>
                                    </tr>                            
                                    <tr>
                                        <td>
                                            <b>Date of letter of award</b>
                                        </td>
                                        <td>
                                            {{date_of_letter_of_award}}
                                        </td>
                                    </tr>                            
                                    <tr>
                                        <td>
                                            <b>Delivery date</b>
                                        </td>
                                        <td>
                                            {{delivery_date}}
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            <b>Training duration</b>
                                        </td>
                                        <td>
                                            {{trainig_duration}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Payment terms</b>
                                        </td>
                                        <td>
                                            {{payment_terms}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>   
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>  