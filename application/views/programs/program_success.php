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
<!--                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href=""><i class="icon-plus-sign"></i>New Program</a>
                            </li>
                            <li>
                                <a href=""><i class="icon-list-alt"></i>Program History</a>
                            </li>
                        </ul>-->
                        <div id="program_status">
                            <div class="row">
                                <div class="alert_msg">
                                    <div class="alert alert-success">Program Created successfully</div>
                                </div>
                                
                            </div>
                        </div>
                 
                     <table id="req_form">
                            <tbody>
                                
                                <tr>
                                    <td>
                                        <b>Title of Program</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $program_title; ?></b>
                                        <span class="asterik"> *</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>Program Code</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $program_code; ?></b>
                                        <span class="asterik"> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Commencement Date</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $start_date; ?></b>
                                        <span class="asterik"> *</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>End Date</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $end_date; ?></b>
                                        <span class="asterik"> *</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>Currency</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $program_currency; ?></b>
                                        <span class="asterik"> *</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>Program Amount</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $program_amount; ?></b>
                                        <span class="asterik"> *</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>Objective of Program</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $program_objective; ?></b>
                                        <span class="asterik"> *</span>
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
                                            <a class="btn btn-success"  href="create_component" style="margin-left: 10px;">
                                                <i class="icon-white icon-search"></i>Create component&nbsp;
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

