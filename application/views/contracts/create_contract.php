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
        <div class="span8 pull-right" id="user_menu">

            <div class="steps">
                <ul id="progressbar">
                    <li class="active">Create Contract</li>
                    <li>Allocate Fund</li>
                    <li>Add Contract Type</li>
                </ul>
            </div>

            <?php echo form_open('create_contract') ?>
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
                                    <b>Sub-component code</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <b><?php echo $this->session->userdata['sub_component_code']; ?></b> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Contract code</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' ng-model="contract_code" name='contract_code' placeholder="Contract Code" value="<?php print(set_value("contract_code")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("contract_code")); ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Contract title</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' ng-model="contract_title" name='contract_title' placeholder="Contract title" value="<?php print(set_value("contract_title")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("contract_title")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>
                                <td>
                                    <b>Activity type</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <select name='activity_type' ng-model="activity_type">
                                        <option value=''><?php (set_value("activity_type")!="")?print(set_value("activity_type")):print("--Select activity type--"); ?></option>
                                        <option value='works'>Works</option>
                                        <option value='goods'>Goods</option>
                                        <option value='consultancy'>Consultancy</option>
                                        <option value='operating_expenses'>Operating expenses</option>
                                        <option value='training'>Training</option>
                                    </select>
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("activity_type")); ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Procurement type</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' ng-model="proc_type" name='proc_type' placeholder="" value="<?php print(set_value("proc_type")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("proc_type")); ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Status</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <select name='status' ng-model="status">
                                        <option value=''><?php (set_value("status")!="")?print(set_value("status")):print("--Select Status--"); ?></option>
                                        <option value='active'>Active</option>
                                        <option value='not_active'>Not Active</option>
                                        <option value='suspension'>Suspension</option>                                     
                                    </select>
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("status")); ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Date of no objection</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' ng-model="date_of_no_objection" name='date_of_no_objection' placeholder='' id="date_of_no_objection" value="<?php print("date_of_no_objection"); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_of_no_objection")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>
                                <td>

                                </td>
                                <td>
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
                            <div class="alert alert-info">
                               <i class="icon-info"></i> Please Verify the data provided below
                            </div>
                            <table id="req_form" class="table table-condensed table-bordered">
                                    <tr>
                                        <td class="span3">
                                            <b>Sub-component code</b>
                                        </td>
                                        <td>
                                            <b><?php echo $this->session->userdata['sub_component_code']; ?></b> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Contract code</b>
                                        </td>
                                        <td>
                                            {{contract_code}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Contract title</b>
                                        </td>
                                        <td>
                                            {{contract_title}}
                                        </td>
                                    </tr>                            
                                    <tr>
                                        <td>
                                            <b>Activity type</b>
                                            <span> *</span>
                                        </td>
                                        <td>
                                            {{activity_type}}                                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Procurement type</b>
                                        </td>
                                        <td>
                                            {{proc_type}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Status</b>
                                        </td>
                                        <td>
                                            {{status}}                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Date of no objection</b>
                                        </td>
                                        <td>
                                            {{date_of_no_objection}}
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