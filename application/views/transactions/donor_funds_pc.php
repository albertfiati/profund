<div class="container">
    <div class="row dashboard">
        

        <div class="span3 thumbnail user_summary">
            <table>
                 <tbody>
                    <tr>
                        <td>
                            <span>User Name</span>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $username; ?> <hr/></td>
                    </tr>
                    <tr>
                        <td>
                            <span>Program Title</span>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $this->session->userdata['program_title']; ?><hr/></td>
                    </tr>
                 
                    
                    <tr>
                        <td>
                            <span>Component Title</span>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $this->session->userdata['component_title']; ?><hr/></td>
                    </tr>
                    <tr>
                        <td><span>Component Code</span></td>
                    </tr>
                    <tr>
                        <td>
                           <?php echo $this->session->userdata['component_code']; ?><hr/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><span>Sub-component Code</span></td>
                    </tr>
                    <tr>
                        <td>
                           <?php echo $this->session->userdata['sub_component_code']; ?><hr/>
                        </td>
                    </tr>

                    <tr>
                        <td><span>Contract Title</span></td>
                    </tr>
                    <tr>
                        <td>
                           <?php echo $this->session->userdata['contract_title']; ?><hr/>
                        </td>
                    </tr>

                    <tr>
                        <td><span>Activity type</span></td>
                    </tr>
                    <tr>
                        <td>
                           <?php echo $this->session->userdata['activity_type']; ?><hr/>
                        </td>
                    </tr>

                     <tr>
                        <td><span>Contractor Code</span></td>
                    </tr>
                    <tr>
                        <td>
                           <?php echo $this->session->userdata['contractor_code']; ?>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="span8 pull-right" id="user_menu" style="margin-left: 200px;">

           <div class="steps">
                <ul id="progressbar">
                    <li>Validate contract code</li>
                    <li>Fill in Payment Certificate details</li>
                    <li class="active">Choose donor amounts</li>
                </ul>
            </div>

            <?php echo form_open('create_funders') ?>
                <div class="form-padding">
                    <table id="req_form">
                        <tbody>
                            <tr>
                                <td colspan="3">
                                    Fields marked with the <span>*</span> symbol are required
                                </td>
                            
                            </tr> 

                            <?php foreach ($funders as $funders_comp): ?>
                                    <tr>
                                        <td><b><?php echo $funders_comp['fund_donor']; ?></b></td>
                                         <td>
                                        <input type='text' name='amount_payable_to_donors' placeholder="">
                                        </td>
                                        <td class="span3" >
                                            <div class="error-msg">
                                                <?php print(form_error("amount_payable_to_donors")); ?>
                                            </div>
                                        </td>   
                                      
                                    </tr>
                            <?php endforeach ?>
                 
                                                      
                            <tr>
                                <td>

                                </td>
                                <td>
                                    <button class="btn btn-success" id="submit_button">Create donor funds&nbsp;<i class="icon-arrow-right icon-white"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>