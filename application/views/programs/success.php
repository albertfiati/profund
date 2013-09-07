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
<!--                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href=""><i class="icon-plus-sign"></i>New Program</a>
                            </li>
                            <li>
                                <a href=""><i class="icon-list-alt"></i>Program History</a>
                            </li>
                        </ul>-->
                        <div id="program_status">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="">Fill Program Information</a>
                                </li>
                            </ul>
                        </div>
                        
   
                      <?php echo validation_errors(); ?>
                      <?php echo form_open('create_program') ?>
                        <table id="req_form">
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        Fields marked with the <span class="asterik">*</span> symbol are required
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Title of Program</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='program_title' placeholder="Program Title">
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>Program Code</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='program_code' placeholder="Program Code">
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Commencement Date</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='start_date'>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>End Date</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='end_date'>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>Currency</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <select name='program_currency'>
                                            <option value=''>--Select Currency--</option>
                                            <option value='1'>US Dollars</option>
                                            <option value='2'>GH Cedi</option>
                                        </select>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>Program Amount</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='program_amount' placeholder='E.g. 6,000,000.00'>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>Objective of Program</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <textarea name='program_objective' placeholder="Objective of Program" ></textarea>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                        
                        <div id="req_footer">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a class="btn btn-danger" data-toggle="modal" href="program_summary" style="margin-left: 30px;">
                                                <i class="icon-white icon-search"></i>&nbsp;Preview
                                            </a>
                                            <button class="btn btn-success">Next&nbsp;<i class="m-icon-swapright m-icon-white my-icon pull-right"></i></button>
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
