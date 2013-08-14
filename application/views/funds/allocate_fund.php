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
                                <tr>
                                    <td><span>Component total amount</span></td>
                                </tr>
                                
                                <tr>
                                    <td>
                                       <?php echo $this->session->userdata['component_amount']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span>Implementing Agency</span></td>
                                </tr>
                                
                                <tr>
                                    <td>
                                       <?php echo $this->session->userdata['implementing_agency']; ?>
                                    </td>
                                </tr>
                                
<!--                                <tr>
                                    <td><span>Allocated Fund</span></td>
                                </tr>
                                
                                <tr>
                                    <td>
                                       <?php echo $this->session->userdata['component_amount'] - $this->session->userdata['unallocatedr']; ?>
                                    </td>
                                </tr>-->
                                
                                
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="span8" id="user_menu">
                        
                        <div id="program_status">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="">Fill Fund Information</a>
                                </li>
                            </ul>
                        </div>
                        
   
                      <?php echo validation_errors(); ?>
                      <?php echo form_open('allocate_fund') ?>
                        <table id="req_form">
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        Fields marked with the <span>*</span> symbol are required
                                    </td>
                                </tr>
                                
<!--                                <tr>
                                    <td>
                                        <b>Fund code</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='fund_code' placeholder="Fund code">
                                    </td>

                                </tr>-->
                                <tr>
                                    <td>
                                        <b>Component Code</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <!--<input type='text' name='component_code' placeholder="Component Code">-->
                                        <b><?php echo $this->session->userdata['component_code'] ?> </b>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Fund donor</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <select name='fund_donor'>
                                            <option value=''>--Select Donor--</option>
                                            <option value='IDA'>IDA</option>
                                            <option value='GOV'>GOV</option>
                                            <option value='DANIDA'>DANIDA</option>
                                            <option value='IMF'>IMF</option>
                                        </select>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Fund Year</b>
                                        <span> * </span>
                                    </td>
                                    <td>
                                        <input type='text' name='fund_years' placeholder="2015">
                                        <p></p>
                                    </td>

                                </tr>
                                
<!--                                <tr>
                                    <td>
                                        <b>End year</b>
                                        <span> </span>
                                    </td>
                                    <td>
                                        <input type='text' name='fund_year' placeholder="2013">
                                    </td>

                                </tr>-->
                               
                                <tr>
                                    <td>
                                        <b>Fund Amount</b>
                                        <span> *</span>
                                    </td>
                                    <td>
                                        <input type='text' name='fund_amount' placeholder='E.g. 1,500,000.00'>
                                    </td>

                                </tr>
                                
                                <tr>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        <button class="btn btn-success" id="submit_button">Submit&nbsp;<i class="icon-arrow-right icon-white"></i></button>
                                    </td>

                                </tr>
       
                            </tbody>
                        </table>
                        
<!--                        <button class="btn btn-success" style="margin-left: 320px; margin-bottom: 20px; width:230px;">Submit&nbsp;<i class="icon-arrow-right icon-white"></i></button>
                         
                        
                        <div id="req_footer">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a class="btn btn-danger" data-toggle="modal" href="component_summary" style="margin-left: 30px;">
                                                <i class="icon-white icon-search"></i>&nbsp;Preview
                                            </a>
                                            <button class="btn btn-success">Allocate Fund&nbsp;<i class="icon-arrow-right icon-white"></i></button>
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class='row-fluid'>
    <div class='span12'>

    </div>
</div>-->
