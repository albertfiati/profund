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
                    <li class="active">Contract Information</li>
                    <li class="active">Funding Information</li>
                    <li class="active">Work Information</li>
                </ul>
            </div>
            
            <?php echo form_open('create_work') ?>
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
                                    <b>Date of tender opening</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <input type='text' ng-model="date_of_tender_opening" name='date_of_tender_opening' class="datepicker" placeholder="" value="<?php print(set_value("date_of_tender_opening")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_of_tender_opening")); ?>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <b>Date of contract award</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <input type='text' ng-name="date_of_contract_award" name='date_of_contract_award' class="datepicker" placeholder="" value="<?php print(set_value("date_of_contract_award")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_of_contract_award")); ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Date of signing agreement</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' ng-model="date_of_signing_agreement" name='date_of_signing_agreement' class="datepicker" placeholder="" value="<?php print(set_value("date_of_signing_agreement")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_of_signing_agreement")); ?>
                                    </div>
                                </td>
                            </tr>                    
                            <tr>
                                <td>
                                    <b>Date of commencement</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' ng-model="date_of_commencement" name='date_of_commencement' class="datepicker" placeholder="" value="<?php print(set_value("date_of_commencement")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_of_commencement")); ?>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <b>Contract completion date</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' ng-model="date_of_contract_completion" name='date_of_contract_completion' class="datepicker" placeholder="" value="<?php print(set_value("date_of_contract_completion")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_of_contract_completion")); ?>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <b>Defects liability completion date</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' ng-model="date_of_defects_liability" name='date_of_defects_liability' class="datepicker" placeholder="" value="<?php print(set_value("date_of_defects_liability")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_of_defects_liability")); ?>
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
                                            <b>Date of tender opening</b>
                                        </td>
                                        <td>
                                            {{date_of_tender_opening}}
                                        </td>
                                    </tr>                                    
                                    <tr>
                                        <td>
                                            <b>Date of contract award</b>
                                        </td>
                                        <td>
                                            {{date_of_contract_award}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Date of signing agreement</b>
                                            <span> </span>
                                        </td>
                                        <td>
                                            {{date_of_signing_agreement}}
                                        </td>
                                    </tr>                    
                                    <tr>
                                        <td>
                                            <b>Date of commencement</b>
                                            <span> </span>
                                        </td>
                                        <td>
                                            {{date_of_commencement}}
                                        </td>
                                    </tr>                                    
                                    <tr>
                                        <td>
                                            <b>Contract completion date</b>
                                        </td>
                                        <td>
                                            {{date_of_contract_completion}}
                                        </td>
                                    </tr>                                    
                                    <tr>
                                        <td>
                                            <b>Defects liability completion date</b>
                                        </td>
                                        <td>
                                            {{date_of_defects_liability}}
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