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
                            <ul class="nav nav-pills">
                                <li class="active" style="background-color: green;">
                                    <a href="">Contract created successfully</a>
                                </li>
                            </ul>
                        </div>
                 
                     <table id="req_form">
                            <tbody>
                                
                                <tr>
                                    <td>
                                        <b>Consultancy title</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $consultancy_title; ?></b>
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
                                        <b>Date of agreement</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $date_of_agreement; ?></b>
                                        <span> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Date of commencement</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $date_of_commencement; ?></b>
                                        <span> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Date of signing agreement</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $date_of_agreement; ?></b>
                                        <span> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Date of commencement</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $date_of_commencement; ?></b>
                                        <span> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Date of completion</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $date_of_completion; ?></b>
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
                                            <a class="btn btn-success"  href="view_program" style="margin-left: 10px;">
                                                <i class="icon-white icon-search"></i>View Programs&nbsp;
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

