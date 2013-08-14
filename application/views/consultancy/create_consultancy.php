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
                                    <a href="">Fill in consultancy Information</a>
                                </li>
                            </ul>
                        </div>
                        
   
                      <?php echo validation_errors(); ?>
                      <?php echo form_open('create_consultancy') ?>
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
                                        <input type='text' name='date_of_agreement' placeholder="" id="program_start_date">
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Date of commencement</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='date_of_commencement' placeholder="" id="program_end_date">
                                    </td>

                                </tr>
                                
                                
                               
                                
                                <tr>
                                    <td>
                                        <b>Date of completion</b>
                                        <span> </span>
                                    </td>
                                    <td>
                                        <input type='text' name='date_of_completion' placeholder="" id="program_start_date">
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Payment terms</b>
                                        <span> </span>
                                    </td>
                                    <td>
                                        <input type='text' name='payment_terms' placeholder="" id="program_start_date">
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
