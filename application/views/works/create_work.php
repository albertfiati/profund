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
            
            <div id="program_status">
                <ul class="nav nav-pills">
                    <li class="active">
                        <a href="">Fill in Contract Information</a>
                    </li>
                    <li class="active">
                        <a href="">Fill in Contract Financing Information</a>
                    </li>
                    <li class="active" style="background-color:red ;">
                        <a href="">Fill in works Information</a>
                    </li>
                </ul>
            </div>
            <?php echo form_open('create_work') ?>
                <div class="form-padding">
                    <table id="req_form">
                        <tbody>
                            <tr>
                                <td colspan="3">
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
                                    <b>Date of tender opening</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='date_of_tender_opening' placeholder="" value="<?php print(set_value("date_of_tender_opening")); ?>">
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
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='date_of_contract_award' placeholder="" value="<?php print(set_value("date_of_contract_award")); ?>">
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
                                    <input type='text' name='date_of_signing_agreement' placeholder="" value="<?php print(set_value("date_of_signing_agreement")); ?>">
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
                                    <input type='text' name='date_of_commencement' placeholder="" value="<?php print(set_value("date_of_commencement")); ?>">
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
                                    <input type='text' name='date_of_contract_completion' placeholder="" value="<?php print(set_value("date_of_contract_completion")); ?>">
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
                                    <input type='text' name='date_of_defects_liability' placeholder="" value="<?php print(set_value("date_of_defects_liability")); ?>">
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
                                    <button class="btn btn-success" id="submit_button">Submit&nbsp;<i class="icon-arrow-right icon-white"></i></button>
                                </td>
                            </tr> 
                        </tbody>
                    </table>
                </div>    
            </form>
        </div>
    </div>
</div>