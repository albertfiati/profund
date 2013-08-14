<div class="container">
    <div class='row-fluid'>
        <div>
            <div class="summary">
                <div class="title-code-container">
                    <h3 class="solid-background title-code">
                        <?php echo $sub_component_details['sub_component_title']; ?> ...  
                        <small>
                            <span class="code"><?php echo $sub_component_details['component_code']; ?></span>  
                        </small>     
                    </h3>   
                </div>
                <div class="row-fluid">
                    <div class="general-padding">
                        <div class="span6">
                            <span class="caption-label">Donor Cost: </span> 
                            <?php echo $sub_component_details['donor_cost'] ?>
                        </div>
                        <div class="span6">
                            <span class="caption-label">Local Cost: </span> 
                            <?php echo $sub_component_details['local_cost'] ?>
                        </div>
                    </div>
                </div> 
            </div>             

            <?php 
                $this->session->set_userdata('sub_component_title', $sub_component_details['sub_component_title']);
                $this->session->set_userdata('sub_component_code', $sub_component_details['sub_component_code']); 
            ?>        
            
            <div class="content">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#contracts">Contracts</a></li>               
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="contracts">
                        <table class='table table-bordered table-striped' id="programme_table3">
                            <thead>
                                <tr>
                                    <th>Contract Title</th>
                                    <th class="align-center span3">Sub_component Code</th>
                                    <th class="align-center span2">Activity Type</th>
                                    <th class="align-center span2">Status</th>
                                    <th class="align-center actions">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($contract_list as $contract_item): ?>
                                <tr>
                                    <td><?php echo $contract_item['contract_title']; ?></td>
                                    <td><?php echo $contract_item['sub_component_code']; ?></td>
                                    <td><?php echo $contract_item['activity_type'] ?></td>                
                                    <td><?php echo $contract_item['status'] ?></td> 
                                    <td>
                                        <div class="pagination action-buttons"> 
                                            <ul>
                                                <li title="View Contract"><a href="<?php echo base_url();?>index.php/contracts/show/<?php echo $contract_item['contract_code']  ?>"><b class="icon-zoom-in" ></b></a></li>
                                                <li title="Edit Contract"><a href='#'><b class="icon-edit"></b></a></li>
                                                <li title="Delete Contract"><a href="components/delete/<?php  ?>"><b class="icon-trash"></b></a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>

                        <div>
                            <ul class="nav nav-pills">
                                <li class="active pull-right">
                                    <a href="<?php echo base_url();?>index.php/contracts/create/<?php echo 'new';   ?>" style="margin-left: 40px;">
                                        Create new contract
                                    </a> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>