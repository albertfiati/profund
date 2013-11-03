<div class="container">
    <div class='row-fluid'>
        <div>
            
            
            <div class="content">
                

                <div class="tab-content">
                    <div class="tab-pane active" id="program-contents">
                        
                 
<!--

                        <?php 

                            echo "sheege";
                           
                    
                            echo "<br/>-------------------------------";
                            echo "<br/>";echo "<br/>";
                            
                            echo "Payment Certss all list : <br/>";
                            var_dump($certss);
                            echo "<br/>";
                            echo "<br/>";
                            echo "<br/>";
                            echo "Payment Certs list : <br/>";

                            var_dump($certs);
                            echo "<br/>";
                            echo "<br/>";
                        
                            echo "Selected contracts : <br/>";
                            var_dump($selected_contracts);

                            echo "<br/>";
                            echo "<br/>";
                            echo "All applications : <br/>";
                            var_dump($all_applications);
                            echo "<br/>";
                            echo "<br/>";
                            echo "The loopholes<br/>";
                            echo "<br/>";
                            $application_for_cert = null;

                            echo "<br/>";
                            echo "<br/>";
                        
                            echo "Contract codes : <br/>";
                            var_dump($selected_contracts);

                            echo "<br/>";
                            echo "<br/>";

                            
                            ?>
-->
                         
                            <h2>Report - Sector funds performance</h2>

                            <?php
                          //  var_dump($program);


                             echo "<table class=\"table\">       
                            <thead>
                                <tr>
                                    
                                    <th class=\"align-center span2\">Sector funds</th>
                                    <th class=\"align-center span3\">Prog fund to date</th>
                                    <th class=\"align-center span2\">Prog fund annual budget</th> 
                                    <th class=\"align-center span2\">Disbursement this period</th>                    
                                    <th class=\"align-center actions\">Disbursement to date</th> 
                                    <th class=\"align-center actions\">% </th>    
                                      
                                    <th class=\"align-center actions\">Outstanding committments</th> 
                                    <th class=\"align-center actions\">Uncommitted funds</th> 
                                             
                                </tr>
                            </thead>
                            <tbody>";

                                echo '<h4>Program: '.$program['program_title'];
                                echo '<b>&nbsp&nbsp&nbspProgram amount: '.$program['program_amount'];

                                $program_fund_to_date = 0;
                                $program_fund_to_date2 = 0;
                                $local_donors = Array();
                                $foreign_donors = Array();
                                $local_donors_objects = Array();
                                $foreign_donors_objects = Array();
                                $application_to_date2 = 0;
                                $annual_program_fund = 0;
                                $annual_program_fund2 = 0;
                                $application_this_period2 =0;

                                $outstanding_commitments2 =0;
                                $totalcerts2 =0;

                                foreach ($program_funds as $fun){

                                    if (!in_array($fun['fund_donor'], $local_donors)  ){

                                        if ($fun['donor_type'] == 'local'){
                                            array_push($local_donors, $fun['fund_donor']);
                                            
                                        }elseif (($fun['donor_type'] == 'foreign') && (!in_array($fun['fund_donor'], $foreign_donors ))) {
                                            array_push($foreign_donors, $fun['fund_donor']);
                                        }
                                    }
                                }

                                foreach ($program_funds as $fun){
                                    if ($fun['donor_type'] == 'local'){
                                       array_push($local_donors_objects, $fun);
                                   }

                                }

                                foreach ($program_funds as $fun2){
                                    if ($fun['donor_type'] == 'foreign'){
                                       array_push($foreign_donors_objects, $fun2);
                                   }

                                }

                                echo '<br/>';

                                $agencies2 = Array();

                                        foreach ($program_funds as $pf2){
                                            if ($pf2['donor_type'] == 'local'){
                                                if(!in_array($pf2['agency'], $agencies2)){
                                                    array_push($agencies2, $pf2['agency']);
                                                }
                                            }

                                        }





                                foreach ($local_donors as $donor){

                                    
                                    

                                    echo '<tr>';

                                       echo '<td><b>'.$donor. '</b></td>';

                                       echo '</tr>';


                                    foreach ($agencies2 as $agency2){
                                     
                                        echo '<tr>';
                                        echo '<td>'.$agency2. '</td>';

                                         
                                        

                                        foreach ($local_donors_objects as $fund){

                                             if ($fund['agency'] == $agency2){

                                                $program_fund_to_date = $program_fund_to_date + $fund['fund_amount'];
                                              }

                                           

                                            if (($fund['fund_years'] == 2014) && ($fund['agency'] == $agency2)){
                                               $annual_program_fund = $annual_program_fund + $fund['fund_amount'];

                                            }



                                        }

                                        

                                        echo '<td>'.$program_fund_to_date. '</td>';
                                        echo '<td>'.$annual_program_fund. '</td>';



                                        foreach ($applications as $apps2){

                                            if (($apps2['fund_donor'] == $donor) && ($apps2['agency'] == $agency2)){

                                                 $application_to_date2 = $application_to_date2 + $apps2['amount_payable_by_local_sources'];

                                                if (($apps2['date_of_memo'] == 2014) && ($apps2['agency'] == $agency2)){
                                                   $application_this_period2 = $application_this_period2 + $apps['amount_payable_by_donor'];
 
                                                }
                                                
                                              }
                                        }

                                            echo '<td>'.$application_this_period2. '</td>';
                                            echo '<td>'.$application_to_date2. '</td>';


                                       

                                        foreach ($certificates as $certs2){
                                                    if (($certs2['fund_donor_type'] == 'local') && ($certs2['agency'] == $agency2)) {
                                                        $totalcerts2 = $totalcerts2 + $certs2['amount_payable_by_donors'];

                                                    }     
                                                }

                                                $outstanding_commitments2 = $totalcerts2 - $application_to_date2;

                                            echo '<td>0%</td>';
                                            echo '<td>'.$outstanding_commitments2. '</td>';

                                            $Uncommitted_funds = $program_fund_to_date - $application_to_date2 + $outstanding_commitments2;

                                           echo '<td>'.$Uncommitted_funds. '</td>';

                                            echo '</tr>';

                                        }

                                }


                                    echo '<tr>';
                                        echo '<td>'. '</td>';
                                    echo '</tr>';
                                     echo '<tr>';

                                        echo '<td><b>Donor funds</b></td>';

                                        echo '</tr>';

                                        echo '<tr>';


                                        $agencies = Array();

                                        foreach ($program_funds as $pf){
                                            if ($pf['donor_type'] == 'foreign'){
                                                if(!in_array($pf['agency'], $agencies)){
                                                    array_push($agencies, $pf['agency']);
                                                }
                                            }

                                        }

                                        foreach($agencies as $agency){

                                           $totalcerts = 0;

                                            foreach ($foreign_donors_objects as $f){

                                                if (($f['donor_type'] == 'foreign') && ($f['agency'] == $agency)){

                                                    $program_fund_to_date2 = $program_fund_to_date2 + $f['fund_amount'];

                                                    if ( ($f['fund_years'] == 2014) && ($f['agency'] == $agency)){
                                                        $annual_program_fund2 = $annual_program_fund2 + $f['fund_amount'];

                                                    }

                                                 } 

                                                foreach ($certificates as $certs){
                                                    if (($certs['fund_donor_type'] == 'foreign') && ($certs['agency'] == $agency))  {
                                                        $totalcerts = $totalcerts + $certs['amount_payable_by_donors'];

                                                    }     
                                                }

                                                 

                                               
                                            }



                                             $application_to_date = 0;
                                             $application_this_period = 0;

                                            foreach ($applications as $apps){



                                            if (($apps['fund_donor_type'] == 'foreign') && ($apps['agency'] == $agency)){

                                                $application_to_date = $application_to_date + $apps['amount_payable_by_donor'];

                                                if (($apps['date_of_memo'] == 2014) && ($apps['agency'] == $agency)){
                                                   $application_this_period = $application_this_period + $apps['amount_payable_by_donor'];
 
                                                }
                                                
                                              }
                                            }



                                        echo '<td>'.$agency. '</td>';
                                        echo '<td>'.$program_fund_to_date2. '</td>';
                                        echo '<td>'.$annual_program_fund2. '</td>';
                                        echo '<td>'.$application_this_period. '</td>';
                                        echo '<td>'.$application_to_date. '</td>';
                                        echo '<td> 0% </td>';

                                        $outstanding_commitments = $totalcerts - $application_to_date;
                                        echo '<td>'.$outstanding_commitments. '</td>';

                                        $Uncommitted_funds2 = $program_fund_to_date2 - $application_to_date + $outstanding_commitments;

                                           echo '<td>'.$Uncommitted_funds2. '</td>';


                                    echo '</tr>';
                                }
                               




                             
                        ?>
                        </tbody>
                       </table>
                                
                       
                        </tbody>
                       </table>
                    </div>
                </div> 
            </div>      
        </div>
    </div>
</div>