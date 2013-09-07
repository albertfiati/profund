<div class="container">
    <div class="row dashboard">
        <div class="span3 thumbnail user_summary">
            <table>
                <tbody>
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
                    
                   
                </tbody>
                    
                </tbody>
            </table>
        </div>
        <div class="span8 pull-right" id="user_menu">

            <div class="steps">
                <ul id="progressbar">
                    <li class="active">Program Information</li>
                    <li class="active">Add Component</li>
                    <li class="active">Add Sub-component</li>
                </ul>
            </div>

            <?php echo form_open('create_sub_component') ?>
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
                                    <b><?php echo $this->session->userdata['component_code']; ?></b><br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Sub-component title</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <input type='text' ng-model="sub_component_title" name='sub_component_title' placeholder="Sub-component title" value="<?php print(set_value("sub_component_title")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("sub_component_title")); ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Sub-component code</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <input type='text' ng-model="sub_component_code" name='sub_component_code' placeholder="Sub-component code" value="<?php print(set_value("sub_component_code")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("sub_component_code")); ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Sub-component description</b>
                                    <span></span>
                                </td>
                                <td>
                                    <input type='text' ng-model="sub_component_description" name='sub_component_description' placeholder="Sub component description" value="<?php print(set_value("sub_component_description")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("sub_component_description")); ?>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <b>Donor cost component</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <input type='text' ng-model="donor_cost" name='donor_cost' placeholder='E.g. 1,500,000.00' value="<?php print(set_value("donor_cost")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("donor_cost")); ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Local cost component</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <input type='text' ng-model="local_cost" name='local_cost' placeholder='E.g. 1,500,000.00' value="<?php print(set_value("local_cost")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("local_cost")); ?>
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
                                        <b><?php echo $this->session->userdata['component_code']; ?></b><br />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Sub-component title</b>                                        
                                    </td>
                                    <td>
                                        {{sub_component_title}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Sub-component code</b>                                        
                                    </td>
                                    <td>
                                        {{sub_component_code}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Sub-component description</b>
                                        <span></span>
                                    </td>
                                    <td>
                                        {{sub_component_description}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Donor cost component</b>                                        
                                    </td>
                                    <td>
                                        {{donor_cost}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Local cost component</b>                                        
                                    </td>
                                    <td>
                                        {{local_cost}}
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