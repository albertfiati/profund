<div class="container">
    <div class="row dashboard">
        <div class="span3 thumbnail user_summary">
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
                        <td><span>Component total amount</span></td>
                    </tr>
                    
                    <tr>
                        <td>
                           <?php echo $this->session->userdata['component_amount']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><span>Implementing Agency</span></td>
                    </tr>
                    
                    <tr>
                        <td>
                           <?php echo $this->session->userdata['implementing_agency']; ?>
                        </td>
                    </tr>                    
                </tbody>
            </table>
        </div>
        <div class="span8 pull-right" id="user_menu">
            
            <div class="steps">
                <ul id="progressbar">
                    <li class="active">Create Program</li>
                    <li class="active">Add Component</li>
                    <li class="active">Allocate Fund</li>
                </ul>
            </div>
            
            <?php echo form_open('allocate_fund') ?>                
                <div class="form-padding">
                    <div class="alert alert-info my-alert">
                        <i class="icon-info"></i>
                        Fields marked with the <span class="asterik">*</span> symbol are required
                    </div>
                    <table id="req_form">
                        <tbody>
                            <tr>
                                <td>
                                    <b>Component Code</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <b><?php echo $this->session->userdata['component_code'] ?> </b>
                                </td>
                            </tr>                            
                            <tr>
                                <td>
                                    <b>Fund donor</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <select name='fund_donor' ng-model="fund_donor">
                                        <option value=''><?php (set_value("fund_donor")!="")?print(set_value("fund_donor")):print("--Select Donor--");?></option>
                                        <option value='IDA'>IDA</option>
                                        <option value='GOV'>GOV</option>
                                        <option value='DANIDA'>DANIDA</option>
                                        <option value='IMF'>IMF</option>
                                    </select>
                                </td>
                                <td class="span3">
                                    <div class="error-msg">
                                        <?php print(form_error("fund_donor")); ?>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <b>Fund Year</b>
                                    <span> * </span>
                                </td>
                                <td>
                                    <input type='text' ng-model="fund_year" name='fund_years' placeholder="2015" value="<?php print(set_value("fund_years")); ?>">
                                </td>
                                <td class="span3">
                                    <div class="error-msg">
                                        <?php print(form_error("fund_years")); ?>
                                    </div>
                                </td>
                            </tr>                           
                            <tr>
                                <td>
                                    <b>Fund Amount</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <input type='text' ng-model="fund_amount" name='fund_amount' placeholder='E.g. 1,500,000.00' value="<?php print(set_value("fund_amount")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("fund_amount")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>
                                <td>
                                    
                                </td>
                                <td>
                                    <a href="#myModal" role="button" class="btn btn-success input-block-level" data-toggle="modal">
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
                                            <b>Component Code</b>
                                        </td>
                                        <td>
                                            <b><?php echo $this->session->userdata['component_code'] ?> </b>
                                        </td>
                                    </tr>                            
                                    <tr>
                                        <td>
                                            <b>Fund donor</b>
                                        </td>
                                        <td>
                                            {{fund_donor}}                                                
                                        </td>
                                    </tr>                                    
                                    <tr>
                                        <td>
                                            <b>Fund Year</b>
                                        </td>
                                        <td>
                                            {{fund_year}}
                                        </td>
                                    </tr>                           
                                    <tr>
                                        <td>
                                            <b>Fund Amount</b>
                                        </td>
                                        <td>
                                            {{fund_amount}}
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