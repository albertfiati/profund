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
                    <li class="active">Program Information</li>
                    <li class="active">Add Component</li>
                    <li>Add Sub-component</li>
                </ul>
            </div>

            <?php echo form_open('create_component') ?>
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
                                    <b>Program Code</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <b><?php echo $this->session->userdata['program_code']; ?></b><br />
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <b>Title of Component</b>
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='component_title' placeholder="Component Title" value="<?php print(set_value("component_title")); ?>">
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
                                    <span> *</span>                                    
                                </td>
                                <td>
                                    <select name='implementing_agency'>
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
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='component_code' placeholder="Component Code" value="<?php print(set_value("component_code")); ?>">
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
                                    <span> *</span>
                                </td>
                                <td>
                                    <input type='text' name='component_amount' placeholder='E.g. 3,000,000.00' value="<?php print(set_value("component_amount")); ?>">
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