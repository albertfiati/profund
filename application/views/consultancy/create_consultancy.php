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
            
            <div id="program_status">
                <ul class="nav nav-pills">
                    <li class="active">
                        <a href="">Fill in consultancy Information</a>
                    </li>
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
                                    <input type='text' name='date_of_agreement' placeholder="" id="program_start_date" value="<?php print(set_value("date_of_agreement")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_of_agreement")); ?>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <b>Date of commencement</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='date_of_commencement' placeholder="" id="program_end_date" value="<?php print(set_value("date_of_commencement")); ?>">
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
                                    <input type='text' name='date_of_completion' placeholder="" id="program_start_date" value="<?php print(set_value("date_of_completion")); ?>">
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
                                    <input type='text' name='payment_terms' placeholder="" id="program_start_date" value="<?php print(set_value("payment_terms")); ?>">
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