<div class="container">
    <div class="row dashboard">
        <div class="span3 user_summary">
            
        </div>
        <div class="span8 pull-right" id="user_menu" style="margin-left: 200px;">

            <div id="program_status">
                <ul class="nav nav-pills">
                    <li class="active">
                        <a href="">Payment certificate for civil works</a>
                    </li>
                </ul>
            </div>

            <?php echo form_open('create_payment_certificate') ?>
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
                                    <b>Sub-component code</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <b><?php echo $this->session->userdata['sub_component_code']; ?></b>             
                                </td>
                                </tr>                            
                            <tr>
                                <td>
                                    <b>Date Received</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='date_received' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_received")); ?>
                                    </div>
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
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("stage")); ?>
                                    </div>
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
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("asset_account")); ?>
                                    </div>
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
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("certificate_number")); ?>
                                    </div>
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
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("contract_number")); ?>
                                    </div>
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
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("contractor")); ?>
                                    </div>
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
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("agency")); ?>
                                    </div>
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
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("location")); ?>
                                    </div>
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
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("transaction_currency")); ?>
                                    </div>
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
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("agency")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>                     
                                <td>
                                    <b>Rate to USD</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='rate_to_usd' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("rate_to_usd")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>                     
                                <td>
                                    <b>Reference to Works Completed (as defined in the contract)</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='reference_to_works_conpleted' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("reference_to_works_conpleted")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>                     
                                <td>
                                    <b>Gross value of work done (In Txn CCY)</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='gross_value_of_work_done' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("gross_value_of_work_done")); ?>
                                    </div>
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
                                    <input type='text' name='fluctuation_in_amount_payable' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("fluctuation_in_amount_payable")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>
                     
                                <td>
                                    <b>=/- Liquidation damages</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='liquidaion_damages' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("liquidaion_damages")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>                     
                                <td>
                                    <b>Deduction for mobilisation advance</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='deduction_for_mobilisation_advance' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("deduction_for_mobilisation_advance")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>                     
                                <td>
                                    <b>Retention</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='retention' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("retention")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>                     
                                <td>
                                    <b>Withholding tax</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='withholding_tax' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("withholding_tax")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>                     
                                <td>
                                    <b>Asroc dues</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='asroc_dues' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("asroc_dues")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>                     
                                <td>
                                    <b>Other deductions</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='other_deductions' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("other_deductions")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>                     
                                <td>
                                    <b>Net amount payable</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='net_amount_payable' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("net_amount_payable")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>                     
                                <td>
                                    <b>Amount payable by donors</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='amount_payable_to_donors' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("amount_payable_to_donors")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>                     
                                <td>
                                    <b>Amount payable by local sources</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='amount_payable_to_local_sources' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("amount_payable_to_local_sources")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>                     
                                <td>
                                    <b>Make payment directly to: </b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='make_direct_payment_to' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("make_direct_payment_to")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>                     
                                <td>
                                    <b>Payment method</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='payment_method' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("payment_method")); ?>
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