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
                    <li class="active">Fill in Payment request details</li>
               
                </ul>
            </div>



            <?php echo form_open('create_payment_request') ?>

        
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
                                    <b>Invoice date</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='invoice_date' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_received")); ?>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td> 
                                    <b>Contract code</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='contract_code' placeholder="160001">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("stage")); ?>
                                    </div>
                                </td>
                            </tr> 

                             <tr>
                                <td> 
                                    <b>Program code</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='program_code' placeholder="160001">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("stage")); ?>
                                    </div>
                                </td>
                            </tr>  

                            <tr>                            
                                <td>
                                    <b>Purchase order number</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='purchase_order_number' placeholder="160001">
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
                                    <b>Fund donor</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='fund_donor' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("certificate_number")); ?>
                                    </div>
                                </td>
                            </tr>  

                            <tr>
                                <td>
                                    <b>Fund donor type</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='fund_donor_type' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("certificate_number")); ?>
                                    </div>
                                </td>
                            </tr> 



                            <tr>
                                <td>
                                    <b>Contractor ccount</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='contractor_account' placeholder="Pull the contractor's info">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("certificate_number")); ?>
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
                                    <b>Agency</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='agency' placeholder="">
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
                                    <b>Invoice total amount</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='invoice_total_amount' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("invoice_total_amount")); ?>
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
                                    <b>Fluctuation in amount payable</b>
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
                                    <b>Other deduction</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='other_deductions' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("withholding_tax")); ?>
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
                                    <b>Amount payable by local sourcess</b>
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
                                    <b>Payment instruction and terms</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='payment_instruction_and_terms' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("net_amount_payable")); ?>
                                    </div>
                                </td>
                            </tr> 

                            <tr>                     
                                <td>
                                    <b>Amount payable by local sourcess</b>
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
                                    <hr/>
                                    <b>Less</b>
                                    <span> *</span>
                                </td>
                            </tr>

               
                            <tr>                     
                                <td>
                                    <b>Payment instruction and terms</b>
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



                            <tr>                     
                                <td>
                                    <b>Contractor code</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='contractor_code' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("net_amount_payable")); ?>
                                    </div>
                                </td>
                            </tr> 

                            <tr>                     
                                <td>
                                    <b>Debit account</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='debit_account' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("net_amount_payable")); ?>
                                    </div>
                                </td>
                            </tr> 

                            <tr>                     
                                <td>
                                    <b>Debit account</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='credit_account' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("credit_account")); ?>
                                    </div>
                                </td>
                            </tr> 


                            <tr>
                                <td>

                                </td>
                                <td>
                                    <!-- <button class="btn btn-success" id="submit_button">&nbsp;<i class="icon-arrow-right icon-white"></i></button> -->
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
                                    <b>Amount payable by donors</b>
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
                                    <b>Amount payable by local sourcess</b>
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