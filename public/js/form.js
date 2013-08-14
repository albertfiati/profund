/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $('#program_start_date').datepicker();
    $( "#program_start_date" ).datepicker( "option", "dateFormat", "yy-mm-dd");
    $('#program_end_date').datepicker();
    $( "#program_end_date" ).datepicker( "option", "dateFormat", "yy-mm-dd");
    $('#date_of_no_objection').datepicker();
    $( "#date_of_no_objection").datepicker( "option", "dateFormat", "yy-mm-dd");
    
    $('#programme_table').dataTable({
        "sPaginationType": "full_numbers"
    });
    
});

