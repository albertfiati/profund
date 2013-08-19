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
                        <a href="">Fill in Training Contract Information</a>
                    </li>
                </ul>
            </div>

            <?php echo form_open('create_training') ?>
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
                                    <b>Date of letter of award</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='date_of_letter_of_award' placeholder="" value="<?php print(set_value("date_of_letter_of_award")); ?>">
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
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='delivery_date' placeholder="" value="<?php print(set_value("delivery_date")); ?>">
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
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='training_duration' placeholder="" value="<?php print(set_value("training_duration")); ?>">
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
                                    <input type='text' name='payment_terms' placeholder="" value="<?php print(set_value("payment_terms")); ?>">
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