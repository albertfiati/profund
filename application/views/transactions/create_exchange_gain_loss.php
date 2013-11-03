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


            <?php echo form_open('exchange_gain_or_loss') ?>
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
                                    <b>Effective date</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='effective_date' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_received")); ?>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <b>Transaction type</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='transaction_type' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_received")); ?>
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
                                        <?php print(form_error("date_received")); ?>
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
                                    <b>Amount gained</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='amount_gained' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("invoice_total_amount")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            

                            <tr>                     
                                <td>
                                    <b>Programme ID</b>
                                    <span> *</span>
                                </td>
                              
                                <td>
                                    <input type='text' name='programme_id' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_received")); ?>
                                    </div>
                                </td>
                            </tr> 

                            <tr>
                                <td>
                                    <b>Programme component</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='component_code' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_received")); ?>
                                    </div>
                                </td>
                                
                            </tr> 

                            <tr>
                                <td>
                                    <b>Donor account name</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='donor_account_name' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_received")); ?>
                                    </div>
                                </td>
                               
                            </tr> 

     
                            <tr>                     
                                <td>
                                    <b>Gain/Loss account</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='gain_loss_account' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("transaction_currency")); ?>
                                    </div>
                                </td>
                            </tr>                            
                                                      
                                                     
                            
                           
                            <tr>                     
                                <td>
                                    <b>Remarks</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='remarks' placeholder="">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("withholding_tax")); ?>
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