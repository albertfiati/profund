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
                         
                            <h2>Report - Contractor's ledger</h2>

                            <?php



                            foreach ($selected_contracts as $contract){

                            $total_certificate_amount = 0;
                            $total_net_certificate_amount = 0;
                            $total_donor_amount = 0;
                            $total_local_amout = 0;
                            $total_donor_payment = 0;
                            $total_local_payment = 0;

                            echo "<table class=\"table\">       
                            <thead>
                                <tr>
                                    
                                    <th class=\"align-center span2\">Cert date</th>
                                    <th class=\"align-center span3\">Cert number</th>
                                    <th class=\"align-center span2\">Cert amount</th> 
                                    <th class=\"align-center span2\">Location</th>                    
                                    <th class=\"align-center actions\">Net amount</th> 
                                    <th class=\"align-center actions\">Donor amount</th>    
                                      
                                    <th class=\"align-center actions\">Local amount</th> 
                                    <th class=\"align-center actions\">Applic number</th> 
                                    <th class=\"align-center actions\">Applic date</th>  
                                    <th class=\"align-center actions\">Donor payment</th>    
                                    <th class=\"align-center actions\">Local payment</th>                   
                                </tr>
                            </thead>
                            <tbody>";

                                echo '<h4>Contract: '.$contract['contract_title'];
                                echo '<b>&nbsp&nbsp&nbspContract sum: '.$contract['amount'];
                                echo '<b>&nbsp&nbsp&nbspContract code: '.$contract['contract_code'];
                                echo '<b>&nbsp&nbsp&nbspActivity type: '.$contract['activity_type']. '<br/>';
                                //echo $contract['contractor']. '<br/> ====================';


                                foreach ($certs as $contract_cert){

                                    foreach ($all_applications as $application){
                                        if($application['certificate_number'] == $contract_cert['certificate_number']){
                                            $application_for_cert = $application;
                                        }
                                    }


                                    if($contract['contract_code'] == $contract_cert['contract_code'])
                                      {
                                        $contractor = $contract_cert['contractor'];
                                        echo '<tr>';

                                        echo '<td>'.$contract_cert['date_received']. '</td>';
                                        echo '<td>'.$contract_cert['certificate_number']. '</td>';
                                        echo '<td>'.$contract_cert['gross_value_of_work_done']. '</td>';
                                        
                                        echo '<td>'.$contract_cert['location']. '</td>';
                                        echo '<td>'.$contract_cert['net_amount_payable']. '</td>';
                                        echo '<td>'.$contract_cert['amount_payable_by_donors']. '</td>';
                                        echo '<td>'.$contract_cert['amount_payable_by_local_sources']. '</td>';
                                        echo '<td>'.$application_for_cert['application_number']. '</td>'; 
                                        echo '<td>'.$application_for_cert['date_of_memo']. '</td>';                                     
                                        echo '<td>'.$application_for_cert['amount_payable_by_donor']. '</td>';
                                        echo '<td>'.$application_for_cert['amount_payable_by_local_sources']. '</td>';
                                      

                                        $total_certificate_amount = $total_certificate_amount + $contract_cert['gross_value_of_work_done'];
                                        $total_net_certificate_amount = $total_net_certificate_amount + $contract_cert['net_amount_payable'];
                                        $total_donor_amount = $total_donor_amount + $contract_cert['amount_payable_by_donors'];
                                        $total_local_amout = $total_local_amout + $contract_cert['amount_payable_by_local_sources'];
                                        $total_donor_payment = $total_donor_payment + $application_for_cert['amount_payable_by_donor'];
                                        $total_local_payment = $total_local_payment + $application_for_cert['amount_payable_by_local_sources'];

                                      }  

                                }

                                echo '</tr>';

                               

                                echo '<tr>';

                                echo '<td><b>'."total". '</b></td>';


                                        echo '<td><b>'.'</b></td>';
                                        echo '<td><b>'.$total_certificate_amount. '</b></td>';
                                        
                                        echo '<td><b>'. '</b></td>';
                                        echo '<td><b>'.$total_net_certificate_amount. '</b></td>';
                                        echo '<td><b>'.$total_donor_amount. '</b></td>';
                                        echo '<td><b>'.$total_local_amout. '</b></td>';
                                        echo '<td><b>'. '</b></td>'; 
                                        echo '<td><b>'.'</b></td>';                                     
                                        echo '<td><b>'.$total_donor_payment. '</b></td>';
                                        echo '<td><b>'.$total_local_payment. '</b></td>';

                                echo '</tr>';
                                echo '</b>';
                                echo '</b>';
                                echo '</b>';
                                echo '</b>';


                            }


                             
                        ?>
                        </tbody>
                       </table>
                    </div>
                </div> 
            </div>      
        </div>
    </div>
</div>