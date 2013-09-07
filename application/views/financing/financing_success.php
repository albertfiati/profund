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
                                        <b>Contract code</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $contract_code; ?></b>
                                        <span class="asterik"> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Facility</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $facility; ?></b>
                                        <span class="asterik"> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Currency</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $currency; ?></b>
                                        <span class="asterik"> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Rate to USD</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $rate_to_usd; ?></b>
                                        <span class="asterik"> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Value date</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $value_date; ?></b>
                                        <span class="asterik"> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Donors reference</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $donors_ref; ?></b>
                                        <span class="asterik"> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>External commit</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $ext_commit; ?></b>
                                        <span class="asterik"> *</span>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Local commit</b>
                                        <span class="asterik"> *</span>
                                    </td>
                                    <td>
                                        <b><?php echo $local_commit; ?></b>
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
                                            <a class="btn btn-success"  href="<?php echo '/PROFUND/index.php/'.$this->session->userdata('href1'). '/create'; ?>" style="margin-left: 10px;">
                                                <i class="icon-white icon-search"></i>Add <?php echo $this->session->userdata('href1') ?> contract details&nbsp;
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

