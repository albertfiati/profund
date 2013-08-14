<div id="background">
    <div id="main_bg">
        <div class="row-fluid bg">
            <div class="span12 main_content_bg">
                <div class="row dashboard">
<!--                    <div class="span4 user_summary">
                        
                    </div>-->
                    <div class="span8" id="user_menu" style="margin-left: 200px;">

                        <div id="program_status">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="">Payment certificate for civil works</a>
                                </li>
                            </ul>
                        </div>


                        <?php echo validation_errors(); ?>
                        <?php echo form_open('create_payment_certificate') ?>
                        <table id="req_form">
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        Fields marked with the <span>*</span> symbol are required
                                    </td>
                                </tr>
<!--                                <tr>
                                    <td>
                                        <b>Sub-component code</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $this->session->userdata['sub_component_code']; ?></b>             </td>

                                    </tr>-->
                                
                                <tr>
                                
                                
                                    <td>
                                        <b>Date Received</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='date_received' placeholder="">
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>Stage</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <select name='stage'>
                                            <option value=''>--Select stage--</option>
                                            <option value='final'>Final</option>
                                            <option value='interim'>Interim</option>
                                            
                                        </select>
                                    </td>

                                </tr>
                                
                                <tr>
                                
                                
                                    <td>
                                        <b>Asset account (civil works)</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='asset_account' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                                
                                
                                    <td>
                                        <b>Certificate number</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='certificate_number' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                                
                                
                                    <td>
                                        <b>Contract number</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='contract_number' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                                
                                
                                    <td>
                                        <b>Contractor</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='contractor' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                         
                                    <td>
                                        <b>Agency</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='agency' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                                
                                
                                    <td>
                                        <b>Location</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <select name='location'>
                                            <option value=''>--Select stage--</option>
                                            <option value='greater_accra'>Greater Accra</option>
                                            <option value='ashanti'>Ashanti</option>
                                            <option value='central'>Central</option>
                                            <option value='eastern'>Eastern</option>
                                            <option value='volta'>Volta</option>
                                            <option value='western'>Western</option>
                                            <option value='brong_ahafo'>Brong Ahafo</option>
                                            <option value='northern'>Northern</option>
                                            <option value='upper_east'>Upper East</option>
                                            <option value='upper_west'>Upper West</option>
                                        </select>
                                    </td>

                                </tr>
                                
                                <tr>
                         
                                    <td>
                                        <b>Transaction currency</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='transaction_currency' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                         
                                    <td>
                                        <b>Rate to Cedi</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='agency' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                         
                                    <td>
                                        <b>Rate to USD</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='agency' placeholder="">
                                    </td>

                                </tr>
                                
<!--                                <tr>
                         
                                    <td>
                                        <b>Reference to Works Completed (as defined in the contract)</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='agency' placeholder="">
                                    </td>

                                </tr>-->
                                
                                <tr>
                         
                                    <td>
                                        <b>Gross value of work done (In Txn CCY)</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='agency' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                         
                                    <td>
                                        <hr/>
                                        <b>Less</b>
                                        <span> *</span>
                                    </td>
                                    

                                </tr>
                                <tr>
                         
                                    <td>
                                        <b>+/- Fluctuation in amount payable</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='agency' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                         
                                    <td>
                                        <b>=/- Liquidation damages</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='agency' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                         
                                    <td>
                                        <b>Deduction for mobilisation advance</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='agency' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                         
                                    <td>
                                        <b>Retention</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='agency' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                         
                                    <td>
                                        <b>Withholding tax</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='agency' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                         
                                    <td>
                                        <b>Asroc dues</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='agency' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                         
                                    <td>
                                        <b>Other deductions</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='agency' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                         
                                    <td>
                                        <b>Net amount payable</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='agency' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                         
                                    <td>
                                        <b>Amount payable by donors</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='agency' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                         
                                    <td>
                                        <b>Amount payable by local sources</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='agency' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                         
                                    <td>
                                        <b>Make payment directly to: </b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='agency' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                         
                                    <td>
                                        <b>Payment method</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='agency' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>

                                    </td>
                                    <td>
                                        <button class="btn btn-success" id="submit_button">Create Payment Certificate&nbsp;<i class="icon-arrow-right icon-white"></i></button>
                                    </td>

                                </tr>

                            </tbody>
                        </table>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class='row-fluid'>
    <div class='span12'>
<?php echo form_open('programs/create', array('class' => 'form-horizontal')); ?>
        <div class='row-fluid'>
            <div class='span12 form_elements_holder'>
                <div class='span6 offset3'>
                    <div class="control-group">
                        <label class="control-label" for ="program_title">Program Title</label>
                        <div class="controls">
                            <input type='text' name='program_title' placeholder="Program Title">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='row-fluid'>
            <div class='span12 form_elements_holder'>
                <div class='span6 offset3 first_form'>
                    <div class="control-group">
                        <label class="control-label" for ="program_code">Program Code</label>
                        <div class="controls">
                            <input type='text' name='program_code' placeholder="Programme Code">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class='row-fluid'>
            <div class='span12 form_elements_holder'>
                <div class='span6 offset3'>
                    <div class="control-group">
                        <label class="control-label" for ="program">Program</label>
                        <div class="controls">
                            <input type='text' name='program' placeholder="Program">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='row-fluid'>
            <div class='span12 form_elements_holder'>
                <div class='span6 offset3 first_form'>
                    <div class="control-group">
                        <label class="control-label" for ="start_date">Commencement Date</label>
                        <div class="controls">
                            <input type='text' name='start_date'>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class='row-fluid'>
            <div class='span12 form_elements_holder'>
                <div class='span6 offset3'>
                    <div class="control-group">
                        <label class="control-label" for ="currency">Currency</label>
                        <div class="controls">
                            <select name='currency'>
                                <option value=''>--Select Currency--</option>
                                <option value='1'>US Dollars</option>
                                <option value='2'>GH Cedi</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='row-fluid'>
            <div class='span12 form_elements_holder'>
                <div class='span6 offset3'>
                    <div class="control-group">
                        <label class="control-label" for ="program_amount">Program Amount</label>
                        <div class="controls">
                            <input type='text' name='program_amount' placeholder='E.g. 6,000,000.00'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='row-fluid'>
            <div class='span12 form_elements_holder'>
                <div class='span6 offset3 first_form'>
                    <div class="control-group">
                        <div class="controls">
                            <button class='m-btn blue form_button'>Create Program</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
<?php echo form_close(); ?>
    </div>
</div>-->
