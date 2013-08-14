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
                                        Fields marked with the <span>*</span> symbol are required
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Title of Program</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='program_title' placeholder="Program Title">
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>Program Code</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='program_code' placeholder="Program Code">
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Commencement Date</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='start_date' id="program_start_date">
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>End Date</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='end_date' id="program_end_date">
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>Currency</b>
                                        <span> *</span>
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
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='program_amount' placeholder='E.g. 6,000,000.00'>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>Objective of Program</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <textarea name='program_objective' placeholder="Objective of Program" ></textarea>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        <button class="btn btn-success" id="submit_create_button">Submit&nbsp;<i class="icon-arrow-right icon-white"></i></button>
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
                                            <a class="btn btn-danger" data-toggle="modal" href="program_summary" style="margin-left: 30px;">
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


