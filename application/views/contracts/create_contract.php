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
                                    <td><?php echo $this->session->userdata['program_title']; ?></td>
                                </tr>
                                <tr>
                                    <td><span>Program Code</span></td>
                                </tr>
                                <tr>
                                    <td>
                                       <?php echo $this->session->userdata['program_code']; ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <span>Component Title</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo $this->session->userdata['component_title']; ?></td>
                                </tr>
                                <tr>
                                    <td><span>Component Code</span></td>
                                </tr>
                                <tr>
                                    <td>
                                       <?php echo $this->session->userdata['component_code']; ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td><span>Sub-component Code</span></td>
                                </tr>
                                <tr>
                                    <td>
                                       <?php echo $this->session->userdata['sub_component_code']; ?>
                                    </td>
                                </tr>
                                
                               
                            </tbody>
                        </table>
                    </div>
                    <div class="span8" id="user_menu">

                        <div id="program_status">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="">Fill Contract Information</a>
                                </li>
                            </ul>
                        </div>


                        <?php echo validation_errors(); ?>
                        <?php echo form_open('create_contract') ?>
                        <table id="req_form">
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        Fields marked with the <span>*</span> symbol are required
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Sub-component code</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $this->session->userdata['sub_component_code']; ?></b>             </td>

                                    </tr>
                                <tr>
                                    <td>
                                        <b>Contract code</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='contract_code' placeholder="Contract Code">
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <b>Contract title</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='contract_title' placeholder="Contract title">
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Activity type</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <select name='activity_type'>
                                            <option value=''>--Select activity type--</option>
                                            <option value='works'>Works</option>
                                            <option value='goods'>Goods</option>
                                            <option value='consultancy'>Consultancy</option>
                                            <option value='operating_expenses'>Operating expenses</option>
                                            <option value='training'>Training</option>
                                        </select>
                                    </td>

                                </tr>
                       


                                




                                <tr>
                                    <td>
                                        <b>Procurement type</b>
                                        <span> </span>
                                    </td>
                                    <td>
                                        <input type='text' name='proc_type' placeholder="">
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <b>Status</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <select name='status'>
                                            <option value=''>--Select activity type--</option>
                                            <option value='active'>Active</option>
                                            <option value='not_active'>Not Active</option>
                                            <option value='suspension'>Suspension</option>
                                         
                                        </select>
                                    </td>

                                </tr>


                                <tr>
                                    <td>
                                        <b>Date of no objection</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='date_of_no_objection' placeholder='' id="date_of_no_objection">
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
