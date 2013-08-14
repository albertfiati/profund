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
                                    <div class="alert alert-success">Component Created successfully</div>
                                </div>
                                
                            </div>
                        </div>
                 
                     <table id="req_form">
                            <tbody>
                                
                                <tr>
                                    <td>
                                        <b>Title of Component</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $component_title; ?></b>
                                        <span> *</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <b>Implementing agency</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $implementing_agency; ?></b>
                                        <span> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Component code</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $component_code; ?></b>
                                        <span> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Program code</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $program_code; ?></b>
                                        <span> *</span>
                                    </td>

                                </tr>
                                  
                                <tr>
                                    <td>
                                        <b>Estimated amount</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $component_amount; ?></b>
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
                                            <a class="btn btn-success"  href="create_sub_component" style="margin-left: 10px;">
                                                <i class="icon-white icon-search"></i>Create Sub-component&nbsp;
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

