<div class="container">
    <div class='row-fluid'>
        <div>
            <div class="summary">
                <div class="title-code-container">
                    <h3 class="solid-background title-code">
                        <?php echo $contract_details['contract_title']; ?> ...  
                        <small>
                            <span class="code"><?php echo $contract_details['contract_code']; ?></span> 
                        </small>     
                    </h3>   
                </div>
                <div class="row-fluid">
                    <div class="general-padding">
                        <div class="span4">
                            <span class="caption-label">Sub Component Code: </span> 
                            <?php echo $contract_details['sub_component_code']; ?>
                        </div>
                        <div class="span4">
                            <span class="caption-label">Activity Type: </span> 
                            <?php echo $contract_details['activity_type'] ?>
                        </div>
                        <div class="span4">
                            <span class="caption-label">Contract Status: </span> 
                            <?php echo $contract_details['status'] ?>
                        </div>
                    </div>
                </div> 
            </div> 

            <?php 
                $this->session->set_userdata('contract_title', $contract_details['contract_title']);
                $this->session->set_userdata('contract_code', $contract_details['contract_code']); 
            ?>
            
            <div class="content">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#workcontracts">Contract Details</a></li>               
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="workcontracts">
                        <table class='table table-bordered table-striped' id="programme_table3">
                            <thead>
                                <tr>
                                    <th>Date of tender opening</th>
                                    <th>Date of contract award</th>
                                    <th>Date of signing agreement</th>
                                    <th>Date of contract completion</th>
                                    <th>Date of defects liability</th>
                                    <th>Actions</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($contract_type_details as $contract_td): ?>                 
                                <tr>
                                    <td><?php echo $contract_td['contract_code']; ?></td>
                                    <td><?php echo $contract_td['date_of_tender_opening']; ?></td>
                                    <td><?php echo $contract_td['date_of_contract_award']; ?></td>
                                    <td><?php echo $contract_td['date_of_signing_agreement'] ?></td>                
                                    <td><?php echo $contract_td['date_of_contract_completion'] ?></td> 
                                    <td><?php echo $contract_td['date_of_defects_liability'] ?></td>
                                    <td>
                                        <div class="pagination action-buttons"> 
                                            <ul>
                                                <li title="View Contract"><a href="#"><b class="icon-zoom-in" ></b></a></li>
                                                <li title="Edit Contract"><a href='#'><b class="icon-edit"></b></a></li>
                                                <li title="Delete Contract"><a href="components/delete/<?php  ?>"><b class="icon-trash"></b></a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>