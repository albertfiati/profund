<div class="container">
    <div>
    <!-- <h3>The list of programs </h3> -->
        <table class='table table-bordered table-striped' id="programme_table3">
            <thead class="solid-background">
                <tr>
                    <th>Program Title</th>
                    <th class="align-center span2">Program Code</th>
                    <th class="align-center">Program Amount</th>
                    <th class="align-center actions">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($programs as $programs_item): ?>
                    <tr>
                        <td><?php echo $programs_item['program_title'] ?></td>
                        <td><?php echo $programs_item['program_code'] ?></td>             
                        <td class="amount"><?php echo $programs_item['program_amount'] ?></td>                        
                        <td style="background-color:#fff !important;">
                            <div class="pagination action-buttons">  
                                <ul>
                                    <li title="View Program">
                                        <a href="<?php echo base_url();?>index.php/programs/show/<?php echo $programs_item['program_code'] ?>">
                                            <b class="icon-zoom-in" ></b>
                                        </a> 
                                    </li>  
                                    <li title="Edit Program">
                                        <a href='#'>
                                            <b class="icon-edit"></b>
                                        </a>
                                    </li>  
                                    <li title="Delete Program">
                                        <a href="programs/delete/<?php echo $programs_item['program_title'] ?>">
                                            <b class="icon-trash"></b>
                                        </a>
                                    </li>                                
                                </ul>  
                            </div>
                        </td>
                    </tr>                
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>