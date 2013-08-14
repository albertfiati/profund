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
                                        <span>Accountant's Name</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo $username; ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Program Title</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php 
//                                    
//                                        $program_session = $this->session->userdata['program_title'];
//                                    if ($program_session != ''){ echo $program_session; } 
                                    
                                   if ($this->session->userdata['program_title'])
                                       {
                                           echo $this->session->userdata['program_title'];
//                                           echo '<br/>program amount is '.$this->session->userdata['program_amount'];
//                                           echo '<br/> the allocated is'. $allocated;
                                       }
                                    ?>
                                        
                                        
                                    
                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td><span>Program Code</span></td>
                                </tr>
                                <tr>
                                    <td>
                                       <?php echo $this->session->userdata['program_code']; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="span8" id="user_menu">
<!--                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href=""><i class="icon-plus-sign"></i>New Component</a>
                            </li>
                            <li>
                                <a href=""><i class="icon-list-alt"></i>Component History</a>
                            </li>
                        </ul>-->
                        <div id="program_status">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="#">Fill Program Information</a>
                                </li>
                                <li class="active" style="background-color:red ;">
                                    <a href="#">Fill Component Information</a>
                                </li>
                            </ul>
                        </div>
                        
   
                      <?php echo validation_errors(); ?>
                      <?php echo form_open('create_component') ?>
                        <table id="req_form">
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        Fields marked with the <span>*</span> symbol are required
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Program Code</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $this->session->userdata['program_code']; ?></b><br />
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>Title of Component</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='component_title' placeholder="Component Title">
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>Implementing Agency</b>
                                        <span> *</span>
                                        
                                    </td>
                                    <td>
                                        <select name='implementing_agency'>
                                            <option value=''>--Select agency--</option>
                                            <option value='MRH'>MRH</option>
                                            <option value='GES'>GES</option>
                                            <option value='ECG'>ECG</option>
                                            <option value='GWC'>GWC</option>
                                        </select>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>Component Code</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='component_code' placeholder="Component Code">
                                    </td>

                                </tr>
                                
                               
                                <tr>
                                    <td>
                                        <b>Estimated Amount</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='component_amount' placeholder='E.g. 3,000,000.00'>
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

<!--                        <button class="btn btn-success" style="margin-left: 320px; margin-bottom: 20px; width:230px;">Submit&nbsp;<i class="icon-arrow-right icon-white"></i></button>
                         
                        
                        <div id="req_footer">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a class="btn btn-danger" data-toggle="modal" href="component_summary" style="margin-left: 30px;">
                                                <i class="icon-white icon-search"></i>&nbsp;Preview
                                            </a>
                                            <button class="btn btn-success">Submit&nbsp;<i class="icon-arrow-right icon-white"></i></button>
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>-->
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
