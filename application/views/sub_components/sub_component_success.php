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
                        </table>
                    </div>
                    <div class="span8" id="user_menu">

                        <div id="program_status">
                            <ul class="nav nav-pills">
                                <li class="active" style="background-color: green;">
                                    <a href="">Sub-component created successfully</a>
                                </li>
                            </ul>
                        </div>
                 
                     <table id="req_form">
                            <tbody>
                                
                                <tr>
                                    <td>
                                        <b>Sub-component title</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $sub_component_title; ?></b>
                                        <span class="asterik"> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Component code</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $component_code; ?></b>
                                        <span class="asterik"> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Sub-component code</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $sub_component_code; ?></b>
                                        <span class="asterik"> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Sub-component description</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $sub_component_description; ?></b>
                                        <span class="asterik"> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Donor cost</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $donor_cost; ?></b>
                                        <span class="asterik"> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Local cost</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $local_cost; ?></b>
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
                                            <a class="btn btn-success"  href="view_program" style="margin-left: 10px;">
                                                <i class="icon-white icon-search"></i>View New Program Created&nbsp;
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

