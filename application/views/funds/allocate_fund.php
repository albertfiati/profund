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
                    <li class="active">Fund Information</li>
                    <li>Add Component</li>
                    <li>Add Sub-component</li>
                </ul>
            </div>
            
            <?php echo form_open('allocate_fund') ?>                
                <div class="form-padding">
                    <table id="req_form">
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    Fields marked with the <span>*</span> symbol are required
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Component Code</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <b><?php echo $this->session->userdata['component_code'] ?> </b>
                                </td>
                            </tr>                            
                            <tr>
                                <td>
                                    <b>Fund donor</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <select name='fund_donor'>
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
                                    <input type='text' name='fund_years' placeholder="2015" value="<?php print(set_value("fund_years")); ?>">
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
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='fund_amount' placeholder='E.g. 1,500,000.00' value="<?php print(set_value("fund_amount")); ?>">
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
                                    <button class="btn btn-success" id="submit_button">Submit&nbsp;<i class="icon-arrow-right icon-white"></i></button>
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