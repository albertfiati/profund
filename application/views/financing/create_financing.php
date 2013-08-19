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
                    <li class="active" style="background-color:red ;">
                        <a href="">Fill in Contract Financing Information</a>
                    </li>
                </ul>
            </div>
            
            <?php echo form_open('create_financing') ?>
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
                                    <b>Facility</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='facility' placeholder="Credit" value="<?php print(set_value("facility")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("facility")); ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Currency</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' name='currency' placeholder="GHC" value="<?php print(set_value("currency")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("currency")); ?>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <b>Rate to USD</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' name='rate_to_usd' placeholder="2.0" value="<?php print(set_value("rate_to_usd")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("rate_to_usd")); ?>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <b>Value date</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' name='value_date' placeholder="" value="<?php print(set_value("value_date")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("value_date")); ?>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <b>Donors reference</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' name='donors_ref' placeholder="" value="<?php print(set_value("donors_ref")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("donors_ref")); ?>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <b>External commit</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' name='external_commit' placeholder="" value="<?php print(set_value("external_commit")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("external_commit")); ?>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <b>Local commit</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' name='local_commit' placeholder="" value="<?php print(set_value("local_commit")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("local_commit")); ?>
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