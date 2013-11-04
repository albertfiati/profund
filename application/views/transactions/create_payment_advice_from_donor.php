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
                  
            

                </tbody>
            </table>
        </div>

        <div class="span8 pull-right" id="user_menu" style="margin-left: 200px;">


            <?php echo form_open('create_payment_advice_from_donor') ?>
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
                                    <b>Date Paid</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='date_paid' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_received")); ?>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <b>Pay instruction number</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='pay_instruction_number' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_received")); ?>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <b>Transaction Type</b>
                                    <span> *</span>
                                </td>
                                
                                 <td>
                                    <input type='text' name='transaction_type' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("location")); ?>
                                    </div>
                                </td>
                            </tr> 

                            <tr>
                                <td>
                                    <b>Application No</b>
                                    <span> *</span>
                                </td>
                                 <td>
                                    <input type='text' name='application_number' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("location")); ?>
                                    </div>
                                </td>
                            </tr> 

                            <tr>
                                <td>
                                    <b>Donor Account</b>
                                    <span> *</span>
                                </td>
                                 <td>
                                    <input type='text' name='donor_account' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("location")); ?>
                                    </div>
                                </td>
                            </tr> 

                            <tr>
                                <td>
                                    <b>Contractor Account</b>
                                    <span> *</span>
                                </td>
                                 <td>
                                    <input type='text' name='contractor_account' placeholder="">
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
                                    <input type='text' name='rate_to_cedi' placeholder="">
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
                                    <b>Amount Paid</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='amount_paid' placeholder="">
                                </td> 
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("invoice_total_amount")); ?>
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