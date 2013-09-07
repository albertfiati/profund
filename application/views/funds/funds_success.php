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
                            </tbody>
                        </table>
                    </div>
                    <div class="span8" id="user_menu">
                        
                        <div id="program_status">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="">Fund allocated successfully</a>
                                </li>
                            </ul>
                        </div>
                        
                        <table class='table table-bordered table-striped' id="programme_table3">
            <thead>
                <tr>

                    <th>Donor</th>
                    <th>Year(years)</th>
                    <th>Amount</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($component_funds as $component_f): ?>
 
                <tr>
                    <td><?php echo $component_f['fund_donor']; ?></td>
                    <td><?php echo $component_f['fund_years']; ?></td>
                    <td><?php echo $component_f['fund_amount'] ?></td>                
                    <!--<td><a href="/PROFUND/index.php/sub_components/show/<?php echo $sub_component_item['sub_component_code']  ?>">View</a> | <a href='#'>Edit</a> | <a href="components/delete/<?php  ?>">Delete</a></td>-->
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a class="btn btn-danger" data-toggle="modal" href="component_summary" style="margin-left: 30px;">
                                                <i class="icon-white icon-search"></i>&nbsp;Edit
                                            </a>
                                            <a class="btn btn-success"  href="/PROFUND/index.php/funds/allocate" style="margin-left: 10px;">
                                                <i class="icon-white icon-search"></i>Allocate another fund&nbsp;
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class='row-fluid'>
    <div class='span12'>

</div>-->
