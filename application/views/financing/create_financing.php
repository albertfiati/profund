<div class="container">
    <div class="row dashboard">
        <div class="span3 thumbnail user_summary">
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
                    <li class="active">Create Contract</li>
                    <li class="active">Create Financing</li>
                </ul>
            </div>
            
            <?php echo form_open('create_financing') ?>
                <div class="form-padding">
                    <div class="alert alert-info my-alert">
                        <i class="icon-info"></i>
                        Fields marked with the <span class="asterik">*</span> symbol are required
                    </div>
                    <table id="req_form">
                        <tbody>
                            <tr>
                                <td>
                                    <b>Contract code</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <b><?php echo $this->session->userdata('contract_code'); ?></b>
                                </td>

                            </tr>                            
                            <tr>
                                <td>
                                    <b>Facility</b>
                                    <span class="asterik"> *</span>
                                </td>
                                <td>
                                    <input type='text' ng-model="facility" name='facility' placeholder="Credit" value="<?php print(set_value("facility")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("facility")); ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Currency</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' ng-model="currency" name='currency' placeholder="GHC" value="<?php print(set_value("currency")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("currency")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>
                                <td>
                                    <b>Rate to USD</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' ng-model="rate_to_USD" name='rate_to_usd' placeholder="2.0" value="<?php print(set_value("rate_to_usd")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("rate_to_usd")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>
                                <td>
                                    <b>Value date</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' ng-model="value_date" name='value_date' placeholder="" value="<?php print(set_value("value_date")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("value_date")); ?>
                                    </div>
                                </td>
                            </tr>                            
                            <tr>
                                <td>
                                    <b>Donors reference</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' ng-model="donors_ref" name='donors_ref' placeholder="" value="<?php print(set_value("donors_ref")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("donors_ref")); ?>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <b>External commit</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' ng-model="external_commit" name='external_commit' placeholder="" value="<?php print(set_value("external_commit")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("external_commit")); ?>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <b>Local commit</b>
                                    <span> </span>
                                </td>
                                <td>
                                    <input type='text' ng-model="local_commit" name='local_commit' placeholder="" value="<?php print(set_value("local_commit")); ?>">
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("local_commit")); ?>
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
                                            <b>Contract code</b>
                                        </td>
                                        <td>
                                            <b><?php echo $this->session->userdata('contract_code'); ?></b>
                                        </td>
                                    </tr>                            
                                    <tr>
                                        <td>
                                            <b>Facility</b>
                                        </td>
                                        <td>
                                            {{facility}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Currency</b>
                                        </td>
                                        <td>
                                            {{currency}}
                                        </td>
                                    </tr>                            
                                    <tr>
                                        <td>
                                            <b>Rate to USD</b>
                                        </td>
                                        <td>
                                            {{rate_to_USD}}
                                        </td>
                                    </tr>                            
                                    <tr>
                                        <td>
                                            <b>Value date</b>
                                        </td>
                                        <td>
                                            {{value_date}}
                                        </td>
                                    </tr>                            
                                    <tr>
                                        <td>
                                            <b>Donors reference</b>
                                        </td>
                                        <td>
                                            {{donors_ref}}
                                        </td>
                                    </tr>                                    
                                    <tr>
                                        <td>
                                            <b>External commit</b>
                                        </td>
                                        <td>
                                            {{external_commit}}
                                        </td>
                                    </tr>                                    
                                    <tr>
                                        <td>
                                            <b>Local commit</b>
                                        </td>
                                        <td>
                                            {{local_commit}}
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