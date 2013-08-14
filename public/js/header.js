/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
    $('.trends_menu').hover(function() {
        $('.header_submenu_hide').attr('style', 'display:block;');
        $('.header_submenu').attr('style', 'display:inline-block;');
        $('.trends_menu').attr('style', 'background: #1C72AB;');
    }, function() {
        $('.header_submenu_hide').removeAttr('style');
        $('.header_submenu').removeAttr('style');
        $('.trends_menu').removeAttr('style');
    });

    $('.program_menu').hover(function() {
        $('#program_submenu_hide').attr('style', 'display:block;');
        $('#program_submenu').attr('style', 'display:inline-block;');
        $('.program_menu').attr('style', 'background: #1C72AB;');
    }, function() {
        $('#program_submenu_hide').removeAttr('style');
        $('#program_submenu').removeAttr('style');
        $('.program_menu').removeAttr('style');
    });

    $('.trans_menu').hover(function() {
        $('#trans_submenu_hide').attr('style', 'display:block;');
        $('#trans_submenu').attr('style', 'display:inline-block;');
        $('.trans_menu').attr('style', 'background: #1C72AB;');
    }, function() {
        $('#trans_submenu_hide').removeAttr('style');
        $('#trans_submenu').removeAttr('style');
        $('.trans_menu').removeAttr('style');
    });

    $('.admin_menu').hover(function() {
        $('#admin_submenu_hide').attr('style', 'display:block;');
        $('#admin_submenu').attr('style', 'display:inline-block;');
        $('.admin_menu').attr('style', 'background: #1C72AB;');
    }, function() {
        $('#admin_submenu_hide').removeAttr('style');
        $('#admin_submenu').removeAttr('style');
        $('.admin_menu').removeAttr('style');
    });

    $('.reports_menu').hover(function() {
        $('#reports_submenu_hide').attr('style', 'display:block;');
        $('#reports_submenu').attr('style', 'display:inline-block;');
        $('.reports_menu').attr('style', 'background: #1C72AB;');
    }, function() {
        $('#reports_submenu_hide').removeAttr('style');
        $('#reports_submenu').removeAttr('style');
        $('.reports_menu').removeAttr('style');
    });
    
    $('.funds_menu').hover(function() {
        $('#funds_submenu_hide').attr('style', 'display:block;');
        $('#funds_submenu').attr('style', 'display:inline-block;');
        $('.funds_menu').attr('style', 'background: #1C72AB;');
    }, function() {
        $('#funds_submenu_hide').removeAttr('style');
        $('#funds_submenu').removeAttr('style');
        $('.funds_menu').removeAttr('style');
    });
    
    $('.contracts_menu').hover(function() {
        $('#contracts_submenu_hide').attr('style', 'display:block;');
        $('#contracts_submenu').attr('style', 'display:inline-block;');
        $('.contracts_menu').attr('style', 'background: #1C72AB;');
    }, function() {
        $('#contracts_submenu_hide').removeAttr('style');
        $('#contracts_submenu').removeAttr('style');
        $('.contracts_menu').removeAttr('style');
    });
    
});