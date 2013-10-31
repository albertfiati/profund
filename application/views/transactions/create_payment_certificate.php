<div class="container">
    <div class="row dashboard">
        

        <div class="span3 thumbnail user_summary">
            <table>
                 <tbody>
                    <tr>
                        <td>
                            <span>User Name</span>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $username; ?> <hr/></td>
                    </tr>
                    <tr>
                        <td>
                            <span>Program Title</span>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $this->session->userdata['program_title']; ?><hr/></td>
                    </tr>
                 
                    
                    <tr>
                        <td>
                            <span>Component Title</span>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $this->session->userdata['component_title']; ?><hr/></td>
                    </tr>
                    <tr>
                        <td><span>Component Code</span></td>
                    </tr>
                    <tr>
                        <td>
                           <?php echo $this->session->userdata['component_code']; ?><hr/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><span>Sub-component Code</span></td>
                    </tr>
                    <tr>
                        <td>
                           <?php echo $this->session->userdata['sub_component_code']; ?><hr/>
                        </td>
                    </tr>

                    <tr>
                        <td><span>Contract Title</span></td>
                    </tr>
                    <tr>
                        <td>
                           <?php echo $this->session->userdata['contract_title']; ?><hr/>
                        </td>
                    </tr>

                    <tr>
                        <td><span>Activity type</span></td>
                    </tr>
                    <tr>
                        <td>
                           <?php echo $this->session->userdata['activity_type']; ?><hr/>
                        </td>
                    </tr>

                     <tr>
                        <td><span>Contractor Code</span></td>
                    </tr>
                    <tr>
                        <td>
                           <?php echo $this->session->userdata['contractor_code']; ?>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="span8 pull-right" id="user_menu" style="margin-left: 200px;">

           <div class="steps">
                <ul id="progressbar">
                    <li>Validate contract code</li>
                    <li class="active">Fill in Payment Certificate details</li>
               
                </ul>
            </div>

            <?php echo form_open('create_payment_certificate') ?>
                <div class="form-padding">
                    <div class="alert alert-info my-alert">
                        <i class="icon-info"></i>
                        Fields marked with the <span class="asterik">*</span> symbol are required
                    </div>
                    <table id="req_form">
                        <tbody>
                            <tr>

                                <td colspan="3">
                                    Fields marked with the <span>*</span> symbol are required
                                </td>
                            </tr>
                
                            

                                <td>
                                    <b>Sub-component code</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <b><?php echo $this->session->userdata['sub_component_code']; ?></b>             
                                </td>
                                </tr>                            

                                <td>
                                    <b>Date Received</b>
                                    <span class="asterik"> *</span>
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
                                    <span class="asterik"> *</span>
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
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <input type='text' name='asset_account' placeholder="160001">
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
                                    <span class="asterik"> *</span>
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
                                    <span class="asterik"> *</span>
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
                                    <span class="asterik"> *</span>
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
                                    <span class="asterik"> *</span>
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
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <select name='location'>
                                        <option value=''>--Select location--</option>
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
                                    <span class="asterik"> *</span>
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
                                    <span class="asterik"> *</span>
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
                                    <span class="asterik"> *</span>
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
                                    <span class="asterik"> *</span>
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
                                    <span class="asterik"> *</span>
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
                                    <span class="asterik"> *</span>
                                </td>
                            </tr>
                            <tr>                     
                                <td>
                                    <b>+/- Fluctuation in amount payable</b>
                                    <span class="asterik"> *</span>
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
                                    <span class="asterik"> *</span>
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
                                    <span class="asterik"> *</span>
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
                                    <span class="asterik"> *</span>
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
                                    <span class="asterik"> *</span>
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
                                    <span class="asterik"> *</span>
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
                                    <span class="asterik"> *</span>
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
                                    <span class="asterik"> *</span>
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
                            
                            <b>Net amount payable</b>
                            <?php foreach ($funders as $funders_comp): ?>
                                    <tr>
                                        <td><b><?php echo $funders_comp['fund_donor']; ?></b></td>
                                         <td>
                                        <input type='text' name='amount_payable_to_donors' placeholder="">
                                        </td>
                                        <td class="span3" >
                                            <div class="error-msg">
                                                <?php print(form_error("amount_payable_to_donors")); ?>
                                            </div>
                                        </td>   
                                      
                                    </tr>
                            <?php endforeach ?>

                            <tr>                     
                                <td>

                                    <b>Make payment directly to: </b>
                                    <span> *</span>

                                    <b>Amount payable by donors</b>
                                    <span class="asterik"> *</span>

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
                                    <select name='payment_method'>
                                        <option value=''>--Select Payment Method--</option>
                                        <option value='greater_accra'>Cash</option>
                                        <option value='ashanti'>Cheque</option>
        
                                    </select>
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("payment_method")); ?>
                                    </div>
                                </td>
                            </tr>                            
                 
                            </tbody>
                        </table>
                    </div>

                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                        <button class="btn btn-primary">Submit</button>
              </div>
                    
            </form>
        </div>
    </div>
</div>