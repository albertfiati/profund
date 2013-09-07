<div class="container">
    <div class="row dashboard">
        <div class="span3 user_summary thumbnail">
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
                        <td>
                            <?php                         
                               if ($this->session->userdata['program_title']){
                                    echo $this->session->userdata['program_title'];
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
        <div class="span8 pull-right" id="user_menu">
            <div class="steps">
                <ul id="progressbar">
                    <li class="active">Create Program</li>
                    <li class="active">Add Component</li>
                    <li>Add Sub-component</li>
                </ul>
            </div>

            <?php echo form_open('create_component') ?>
                <div class="form-padding">
                    <div class="alert alert-info my-alert">
                        <i class="icon-info"></i>
                        Fields marked with the <span class="asterik">*</span> symbol are required
                    </div>
                    <table id="req_form">
                        <tbody>
                            <tr>
                                <td>
                                    <b>Program Code</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <b><?php echo $this->session->userdata['program_code']; ?></b><br />
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <b>Title of Component</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <input type='text' ng-model="component_title" name='component_title' placeholder="Component Title" value="<?php print(set_value("component_title")); ?>">
                                </td>
                                <td class="span3">
                                    <div class="error-msg">
                                        <?php print(form_error("component_title")); ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Implementing Agency</b>
                                    <span class="asterik"> *</span>                                    
                                </td>
                                <td>
                                    <select name='implementing_agency' ng-model="implementing_agency">
                                        <option value=''><?php (set_value("implementing_agency")!="")?print(set_value("implementing_agency")):print(set_value("--Select agency--"));?></option>
                                        <option value='MRH'>MRH</option>
                                        <option value='GES'>GES</option>
                                        <option value='ECG'>ECG</option>
                                        <option value='GWC'>GWC</option>
                                    </select>
                                </td>
                                <td class="span3">
                                    <div class="error-msg">
                                        <?php print(form_error("implementing_agency")); ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Component Code</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <input type='text' ng-model="component_code" name='component_code' placeholder="Component Code" value="<?php print(set_value("component_code")); ?>">
                                </td>
                                <td class="span3">
                                    <div class="error-msg">
                                        <?php print(form_error("component_code")); ?>
                                    </div>
                                </td>
                            </tr>                           
                            <tr>
                                <td>
                                    <b>Estimated Amount</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <input type='text' ng-model="component_amount" name='component_amount' placeholder='E.g. 3,000,000.00' value="<?php print(set_value("component_amount")); ?>">
                                </td>
                                <td class="span3">
                                    <div class="error-msg">
                                        <?php print(form_error("component_amount")); ?>
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
                                            <b>Program Code</b>
                                        </td>
                                        <td>
                                            <b><?php echo $this->session->userdata['program_code']; ?></b><br />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Title of Component</b>
                                        </td>
                                        <td>
                                            <span>{{component_title}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Implementing Agency</b>                             
                                        </td>
                                        <td>
                                            <span>{{implementing_agency}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Component Code</b>
                                        </td>
                                        <td>
                                            <span>{{component_code}}
                                        </td>
                                    </tr>                           
                                    <tr>
                                        <td>
                                            <b>Estimated Amount</b>
                                        </td>
                                        <td>
                                            <span id="amount">{{component_amount}}</span>
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