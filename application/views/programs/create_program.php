<div class="container">
    <div class="row dashboard">
        <div class="span3 user_summary thumbnail">
            <table class="table table-condensed table-bordered">
                <tbody>
                    <tr>
                        <td class="span1">Staff Position</td>
                        <td>Accountant</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Accountant</td>
                    </tr>
                    <tr>
                        <td>Department</td>
                        <td>Accountant</td>
                    </tr>
                    <tr>
                        <td>Marketing</td>
                        <td>Accountant</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="span8 pull-right" id="user_menu">

            <div class="steps">
                <ul id="progressbar">
                    <li class="active">Create Program</li>
                    <li>Add Component</li>
                    <li>Add Sub-component</li>
                </ul>
            </div>
            

        <?php //echo validation_errors(); ?>
            <?php echo form_open('create_program') ?>

            <div class="form-padding">
                <table id="req_form">
                    <div class="alert alert-info my-alert">
                        <i class="icon-info"></i>
                        Fields marked with the <span class="asterik">*</span> symbol are required
                    </div>
                    <tbody>
                        <tr>
                            <td>
                                <b>Title of Program</b>
                                <span class="asterik"> *</span>
                            </td>
                            <td>
                                <input type='text' ng-model="program_title" name='program_title' placeholder="Program Title" value="<?php print(set_value("program_title")); ?>">                                
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
                                <span class="asterik"> *</span>
                            </td>
                            <td>
                                <input type='text' ng-model="program_code" name='program_code' placeholder="Program Code" value="<?php print(set_value("program_code")); ?>">
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
                                <span class="asterik"> *</span>
                            </td>
                            <td>
                                <input type='text' ng-model="start_date" name='start_date' class='datepicker' value="<?php print(set_value("program_start_date")); ?>">
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
                                <span class="asterik"> *</span>
                            </td>
                            <td>
                                <input type='text' ng-model="end_date" name='end_date' class="datepicker" value="<?php print(set_value("program_end_date")); ?>">
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
                                <span class="asterik"> *</span>
                            </td>
                            <td>
                                <select ng-model="program_currency" name='program_currency' value="<?php print(set_value("program_currency")); ?>">
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
                                <span class="asterik"> *</span>
                            </td>
                            <td>
                                <input ng-model="program_amount" type='text' name='program_amount' placeholder='E.g. 6,000,000.00' value="<?php print(set_value("program_amount")); ?>">
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
                                <span class="asterik"> *</span>
                            </td>
                            <td>
                                <textarea ng-model="program_objective" name='program_objective' placeholder="Objective of Program" ><?php print(set_value("program_objective")); ?></textarea>
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
                                <a href="#myModal" role="button" class="btn btn-success input-block-level" data-toggle="modal" style="margin-top:10px;">
                                    Next 
                                    <i class="m-icon-swapright m-icon-white my-icon pull-right"></i>
                                </a>
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
                    <div class="alert alert-info">
                        <i class="icon-info"></i> Please Verify the data provided below
                    </div>
                    <table id="req_form" class="table table-condensed table-bordered">
                        <tbody>                            
                            <tr>
                                <td class="span3">
                                    <b>Title of Program</b>
                                </td>
                                <td>
                                   <span>{{program_title}}</span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <b>Program Code</b>
                                </td>
                                <td>
                                    <span>{{program_code}}</span>
                                </td>

                            </tr>
                            
                            <tr>
                                <td>
                                    <b>Commencement Date</b>
                                </td>
                                <td>
                                    <span>{{start_date}}</span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <b>End Date</b>
                                </td>
                                <td>
                                    <span>{{end_date}}</span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <b>Currency</b>
                                </td>
                                <td>
                                   <span>{{program_currency}}</span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <b>Program Amount</b>
                                </td>
                                <td>
                                    <span>{{program_amount}}</span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <b>Objective of Program</b>
                                </td>
                                <td>
                                    <span>{{program_objective}}</span>
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