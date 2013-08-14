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
                            <div class="row">
                                <div class="alert_msg">
                                    <div class="alert alert-success">Contract Created successfully</div>
                                </div>
                                
                            </div>
                        </div>
                 
                     <table id="req_form">
                            <tbody>
                                
                                <tr>
                                    <td>
                                        <b>Contract title</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $contract_title; ?></b>
                                        <span> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Contract code</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $contract_code; ?></b>
                                        <span> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Sub-component code</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $sub_component_code; ?></b>
                                        <span> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Procurement type</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $proc_type; ?></b>
                                        <span> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Status</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $status; ?></b>
                                        <span> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Date of no objection</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $date_of_no_objection; ?></b>
                                        <span> *</span>
                                    </td>

                                </tr>
                                
                            </tbody>
                        </table>
                        
                        <div id="req_footer">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            
                                            <a class="btn btn-danger" data-toggle="modal" href="program_summary" style="margin-left: 30px;">
                                                <i class="icon-white icon-search"></i>&nbsp;Edit
                                            </a>
                                            <a class="btn btn-success"  href="<?php echo $href ?>" style="margin-left: 10px;">
                                                <i class="icon-white icon-search"></i><?php echo $href ?>&nbsp;
                                            </a>
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
             
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

