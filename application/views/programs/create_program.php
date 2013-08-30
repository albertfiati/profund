<div class="container">
    <div class="row dashboard">
        <div class="span3 user_summary thumbnail">
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
        <div class="span8 pull-right" id="user_menu">

            <div class="steps">
                <ul id="progressbar">
                    <li class="active">Program Information</li>
                    <li>Add Component</li>
                    <li>Add Sub-component</li>
                </ul>
            </div>
            

        <?php //echo validation_errors(); ?>
            <?php echo form_open('create_program') ?>

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
                                <b>Title of Program</b>
                                <span> *</span>
                            </td>
                            <td>
                                <input type='text' name='program_title' placeholder="Program Title" value="<?php print(set_value("program_title")); ?>">                                
                            </td>
                            <td class="span3" >
                                <div class="error-msg">
                                    <?php print(form_error("program_title")); ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Program Code</b>
                                <span> *</span>
                            </td>
                            <td>
                                <input type='text' name='program_code' placeholder="Program Code" value="<?php print(set_value("program_code")); ?>">
                            </td>
                            <td class="span3" >
                                <div class="error-msg">
                                    <?php print(form_error("program_code")); ?>
                                </div>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <b>Commencement Date</b>
                                <span> *</span>
                            </td>
                            <td>
                                <input type='text' name='start_date' id="program_start_date" value="<?php print(set_value("program_start_date")); ?>">
                            </td>
                            <td class="span3" >
                                <div class="error-msg">
                                    <?php print(form_error("start_date")); ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>End Date</b>
                                <span> *</span>
                            </td>
                            <td>
                                <input type='text' name='end_date' id="program_end_date" value="<?php print(set_value("program_end_date")); ?>">
                            </td>
                            <td class="span3" >
                                <div class="error-msg">
                                    <?php print(form_error("end_date")); ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Currency</b>
                                <span> *</span>
                            </td>
                            <td>
                                <select name='program_currency' value="<?php print(set_value("program_currency")); ?>">
                                    <option value=''>--Select Currency--</option>
                                    <option value='1'>US Dollars</option>
                                    <option value='2'>GH Cedi</option>
                                </select>
                            </td>
                            <td class="span3" >
                                <div class="error-msg">
                                    <?php print(form_error("program_currency")); ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Program Amount</b>
                                <span> *</span>
                            </td>
                            <td>
                                <input type='text' name='program_amount' placeholder='E.g. 6,000,000.00' value="<?php print(set_value("program_amount")); ?>">
                            </td>
                            <td class="span3" >
                                <div class="error-msg">
                                    <?php print(form_error("program_amount")); ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Objective of Program</b>
                                <span> *</span>
                            </td>
                            <td>
                                <textarea name='program_objective' placeholder="Objective of Program" ><?php print(set_value("program_objective")); ?></textarea>
                            </td>
                            <td class="span3" >
                                <div class="error-msg">
                                    <?php print(form_error("program_objective")); ?>
                                </div>
                            </td>
                        </tr>                        
                        <tr>
                            <td>
                                
                            </td>
                            <td>
                                <!-- <button class="btn btn-success" id="submit_create_button">Submit&nbsp;<i class="icon-arrow-right icon-white"></i></button> -->
                                <a href="#myModal" role="button" id="submit_create_button" class="btn btn-success span2" data-toggle="modal" onclick="">Next <i class="icon-arrow-right icon-white"></i></a>
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
                    <table id="req_form">
                        <tbody>                            
                            <tr>
                                <td>
                                    <b>Title of Program</b>
                                </td>
                                <td>
                                   <span id="program-title"></span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <b>Program Code</b>
                                </td>
                                <td>
                                    <span id="program-code"></span>
                                </td>

                            </tr>
                            
                            <tr>
                                <td>
                                    <b>Commencement Date</b>
                                </td>
                                <td>
                                    <span id="start-date"></span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <b>End Date</b>
                                </td>
                                <td>
                                    <span id="end-"></span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <b>Currency</b>
                                </td>
                                <td>
                                   <span id="currency"></span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <b>Program Amount</b>
                                </td>
                                <td>
                                    <span id="amount"></span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <b>Objective of Program</b>
                                </td>
                                <td>
                                    <span id="objective"></span>
                                </td>

                            </tr>
                        </tbody>
                    </table>
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