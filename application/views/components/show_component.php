<div class="container">
    <div class='row-fluid'>
        <div>
            <div>
                <div class="summary">
                    <div class="title-code-container">
                        <h3 class="solid-background title-code">
                            <?php echo $component_details['component_title']; ?> ... 
                            <small>
                                <span class="code"><?php echo $component_details['component_code']; ?></span>  
                            </small>     
                        </h3>   
                    </div>
                    <div class="row-fluid">
                        <div class="general-padding">
                            <div class="span6">
                                <span class="caption-label">Implementing Agency: </span> 
                                <?php echo $component_details['implementing_agency'];
                                      $this->session->set_userdata('implementing_agency', $component_details['implementing_agency']);
                                ?>
                            </div>
                            <div class="span6">
                                <span class="caption-label">Component Amount: </span> 
                                <?php echo $component_details['component_amount'];
                                    $this->session->set_userdata('component_amount', $component_details['component_amount']);//                  
                                ?>
                            </div>
                        </div>
                    </div> 
                </div>                 
            </div>
           
            <div class="content">
                <?php 
                    $this->session->set_userdata('component_title', $component_details['component_title']);
                    $this->session->set_userdata('component_code', $component_details['component_code']); 
                ?>
                
                <?php
                    if ($component_funds != null){ 
                ?>

                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#compfunds">Component Funds</a></li>
                    <li><a href="#subcomp">Program Sub-components</a></li>                
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="compfunds">
                        <table class='table table-bordered table-striped' id="programme_table3">
                            <thead>
                                <tr>
                                    <th>Donor</th>
                                    <th class="align-center span2">Year(years)</th>
                                    <th class="align-center span2">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($component_funds as $component_f): ?>
                                    <tr>
                                        <td><?php echo $component_f['fund_donor']; ?></td>
                                        <td><?php echo $component_f['fund_years']; ?></td>
                                        <td class="amount"><?php echo $component_f['fund_amount'] ?></td>                
                                    </tr>
                                <?php endforeach ?> 
                            </tbody>
                        </table>
                        <?php } ?>

                        <div>
                            <ul class="nav nav-pills">
                                <li class="active pull-right">
                                    <a href="<?php echo base_url();?>index.php/funds/allocate/<?php echo 'new';  ?>" style="margin-left: 40px;">Allocate fund</a> 
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane" id="subcomp">
                        <table class='table table-bordered table-striped' id="programme_table3">
                            <thead>
                                <tr>
                                    <th >Sub-component Title</th>
                                    <th class="align-center span3">Sub-component Code</th>
                                    <th class="align-center span3">Sub-component Amount</th>
                                    <th class="align-center actions">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($component_sub_components as $sub_component_item): ?> 
                                    <tr>
                                        <td><?php echo $sub_component_item['sub_component_title']; ?></td>
                                        <td><?php echo $sub_component_item['sub_component_code']; ?></td>
                                        <td class="amount"><?php                     
                                             echo   $total_amount = $sub_component_item['donor_cost'] + $sub_component_item['local_cost']; 
                                        ?></td> 
                                        <td>
                                            <div class="pagination action-buttons"> 
                                                <ul>
                                                    <li title="View Component"><a href="<?php echo base_url();?>index.php/sub_components/show/<?php echo $sub_component_item['sub_component_code']  ?>"><b class="icon-zoom-in" ></b></a></li>
                                                    <li title="Edit Component"><a href='#'><b class="icon-edit"></b></a></li>
                                                    <li title="Delete Component"><a href="components/delete/<?php  ?>"><b class="icon-trash"></b></a></li>
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
                                    <a href="<?php echo base_url();?>index.php/sub_components/create/<?php echo 'new';  ?>" style="margin-left: 40px;">
                                        Create a new sub-component
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