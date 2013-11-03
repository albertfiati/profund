<div class="container">
    <div class="row dashboard">
        

       

        <div class="span8 pull-right" id="user_menu" style="margin-left: 200px;">

           <div class="steps">
                <ul id="progressbar">
                <li >Validate report form</li>
                <li class="active">View report</li>
                    
               
                </ul>
            </div>

            <?php echo form_open('create_sector_funds_per_agency') ?>
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
                                    <b>Program code</b>
                                    <span> *</span>
                                </td>
                                 <td>
                                    <select name='program_code'>
                                        <option value='P012009'>--Select location--</option>
                                        <option value='P012009'>Greater Accra</option>
                                        <option value='ashanti'>Ashanti</option>
                                        <option value='central'>Central</option>
                                        <option value='eastern'>Eastern</option>
                                        <option value='volta'>Volta</option>
                                        <option value='western'>Western</option>
                                        <option value='brong_ahafo'>Brong Ahafo</option>
                                        <option value='northern'>Northern</option>
                                        <option value='upper_east'>Upper East</option>
                                        <option value='upper_west'>Upper West</option>
                                    </select>
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_received")); ?>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <b>Year</b>
                                    <span> *</span>
                                </td>
                                 <td>
                                    <select name='year'>
                                        <option value='2014'>--Select location--</option>
                                        <option value='greater_accra'>Greater Accra</option>
                                        <option value='ashanti'>Ashanti</option>
                                        <option value='central'>Central</option>
                                        <option value='eastern'>Eastern</option>
                                        <option value='volta'>Volta</option>
                                        <option value='western'>Western</option>
                                        <option value='brong_ahafo'>Brong Ahafo</option>
                                        <option value='northern'>Northern</option>
                                        <option value='upper_east'>Upper East</option>
                                        <option value='upper_west'>Upper West</option>
                                    </select>
                                </td>
                                <td class="span3" >
                                    <div class="error-msg">
                                        <?php print(form_error("date_received")); ?>
                                    </div>
                                </td>
                            </tr>
 
                          

                                                        
                            <tr>
                                <td>

                                </td>
                                <td>
                                    <!-- <button class="btn btn-success" id="submit_button">&nbsp;<i class="icon-arrow-right icon-white"></i></button> -->
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
                    <div class="alert alert-info">
                        <i class="icon-info"></i> Please Verify the data provided below to view report
                    </div>
                    <table id="req_form" class="table table-condensed table-bordered">
                        <tbody>                            
                            <tr>
                                <td class="span3">
                                    <b>Agency</b>
                                </td>
                                <td>
                                   <span>echo $this->input->post('agency')</span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <b>Program Code</b>
                                </td>
                                <td>
                                    <span>{{program}}</span>
                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <b>Contract type</b>
                                </td>
                                <td>
                                    <span>{{contract_type}}</span>
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