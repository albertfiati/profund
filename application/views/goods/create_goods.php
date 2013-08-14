<div id="background">
    <div id="main_bg">
        <div class="row-fluid bg">
            <div class="span12 main_content_bg">
                <div class="row dashboard">
                    <div class="span4 user_summary">
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
                    <div class="span8" id="user_menu">
                        
                        <div id="program_status">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="">Fill in Goods Contract Information</a>
                                </li>
                            </ul>
                        </div>
                        
   
                      <?php echo validation_errors(); ?>
                      <?php echo form_open('create_goods') ?>
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
                                        <b>Date of letter of award</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='date_of_letter_of_award' placeholder="">
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Delivery date</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='delivery_date' placeholder="">
                                    </td>

                                </tr>
                     
                                
                                <tr>
                                    <td>
                                        <b>Payment terms</b>
                                        <span> </span>
                                    </td>
                                    <td>
                                        <input type='text' name='payment_terms' placeholder="">
                                    </td>

                                </tr>
                            
                              
                            </tbody>
                        </table>
                         <button class="btn btn-success" style="margin-left: 320px; margin-bottom: 20px; width:230px;">Submit&nbsp;<i class="icon-arrow-right icon-white"></i></button>
                                            
                        <div id="req_footer">
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    </div>
</div>-->
