<div class="container">
    <div class='row-fluid'>
        <div>
            <div class="summary">
                <div class="title-code-container">
                    <h3 class="solid-background title-code">
                        <?php echo $program_details['program_title']; ?> ... 
                        <small>
                            <span class="code"><?php echo $program_details['program_code']; ?></span>
                        </small>     
                    </h3>   
                </div>
                <div class="row-fluid">
                    <div class="general-padding">
                        <div class="span4">
                            <span class="caption-label">Program Amount:</span> <?php echo $program_details['program_amount'] ?>
                        </div>
                        <div class="span4">
                            <span class="caption-label">Start Date:</span> <?php echo $program_details['start_date'] ?>
                        </div>
                        <div class="span4">
                            <span class="caption-label">End Date:</span> <?php echo $program_details['end_date'] ?>
                        </div>
                    </div>
                </div> 
            </div>
            
            <div class="content">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#program-contents">Program Components</a></li>                   
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="program-contents">
                        <table class='table table-bordered table-striped' id="programme_table3">            
                            <thead>
                                <tr>
                                    <th>Program Title</th>
                                    <th class="align-center span2">Component Code</th>
                                    <th class="align-center span3">Implementing Agency</th>
                                    <th class="align-center span2">Program Amount</th>                    
                                    <th class="align-center actions">Actions</th>                        
                                </tr>
                            </thead>
                            <tbody>
                               <?php foreach ($program_components as $programs_comp): ?>
                                    <tr>
                                        <td><?php echo $programs_comp['component_title']; ?></td>
                                        <td><?php echo $programs_comp['component_code']; ?></td>
                                        <td><?php echo $programs_comp['implementing_agency'] ?></td>                
                                        <td class="amount"><?php echo $programs_comp['component_amount'] ?></td> 
                                        <td>
                                            <div class="pagination action-buttons">  
                                                <ul>  
                                                    <li title="View Program"><a href="<?php echo base_url();?>index.php/components/show/<?php echo $programs_comp['component_code']  ?>"><b class="icon-zoom-in" ></b></a> </li>  
                                                    <li title="Edit Program"><a href='#'><b class="icon-edit"></b></a> </li>  
                                                    <li title="Delete Program"><a href="components/delete/<?php  ?>"><b class="icon-trash"></b></a></li>                                
                                                </ul>  
                                            </div>
                                        </td>
                                    </tr>
                               <?php endforeach ?>
                            </tbody>
                        </table>

                        <?php $this->session->set_userdata('program_title', $program_details['program_title']);
                              $this->session->set_userdata('program_code',$program_details['program_code']);
                              $this->session->set_userdata('program_amount',$program_details['program_amount']); 
                        ?>

                        <div>
                            <ul class="nav nav-pills">
                                <li class="active pull-right">
                                    <a href="<?php echo base_url();?>index.php/components/create/<?php echo 'new';  ?>" style="margin-left: 40px;">
                                        Create a new component
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