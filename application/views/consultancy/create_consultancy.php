<div class="container">
    <div class="row dashboard">
        <div class="span3 user_summary thumbnail">
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
                    <li class="active">Add Consultancy</li>
                </ul>
            </div>

            <?php echo form_open('create_consultancy') ?>
                <div class="form-padding">
                    <table id="req_form">
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    Fields marked with the <span>*</span> symbol are required
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Contract code</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <b><?php echo $this->session->userdata('contract_code'); ?></b>
                                </td>

                            </tr>                            
                            <tr>
                                <td>
                                    <b>Date of agreement</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' ng-model="date_of_agreement" name='date_of_agreement' class="datepicker" placeholder="" id="program_start_date" value="<?php print(set_value("date_of_agreement")); ?>">
                                </td>
                            </tr>                            
                            <tr>
                                <td>
                                    <b>Date of commencement</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' ng-model="date_of_commencement" name='date_of_commencement' placeholder="" class="datepicker" id="program_end_date" value="<?php print(set_value("date_of_commencement")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_of_commencement")); ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Date of completion</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' ng-model="date_of_completion" class="datepicker" name='date_of_completion' placeholder="" id="program_start_date" value="<?php print(set_value("date_of_completion")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_of_completion")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>
                                <td>
                                    <b>Payment terms</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' ng-model="payment_terms" name='payment_terms' placeholder="" id="program_start_date" value="<?php print(set_value("payment_terms")); ?>">
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
                                    <a href="#myModal" role="button" id="submit_create_button" class="btn btn-success" data-toggle="modal">Next <i class="icon-arrow-right icon-white"></i></a>
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
                                            <b>Date of agreement</b>
                                        </td>
                                        <td>
                                            {{date_of_agreement}}
                                        </td>
                                    </tr>                            
                                    <tr>
                                        <td>
                                            <b>Date of commencement</b>
                                        </td>
                                        <td>
                                            {{date_of_commencement}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Date of completion</b>
                                        </td>
                                        <td>
                                            {{date_of_completion}}
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