<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="EN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?></title>
        <link href="<?php echo base_url('public/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('public/css/module_page_new.css'); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('public/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css"/>
        <!--<link href="<?php // echo base_url('public/css/password_reset.css');                  ?>" rel="stylesheet" type="text/css"/>-->
        <link href="<?php echo base_url('public/css/new_header.css'); ?>" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url('public/media/jquery.dataTables_themeroller.css'); ?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url('public/bootstrap/css/font-awesome.min.css') ?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url('public/bootstrap/css/m-buttons.min.css') ?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url('public/bootstrap/css/m-forms.min.css') ?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url('public/bootstrap/css/m-icons.min.css') ?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url('public/bootstrap/css/m-normalize.min.css') ?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url('public/bootstrap/css/m-styles.min.css') ?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url('public/css/form_new.css') ?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url('public/css/jquery-ui-1.10.3.custom.min.css') ?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url('public/css/progress.css') ?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url('public/bootstrap/css/font-awesome.min.css') ?>" type="text/css"/>
        <style type="text/css" title="currentStyle">
            /*@import "../public/media/css/demo_page.css";*/
            @import "../public/media/css/demo_table.css";
            /*@import "../public/media/css/TableTools.css";*/
        </style>
    </head>
    <body>
        <div>
            <!-- <div class="header-top container">
                <a href="home"><img src="<?php echo base_url('public/img/logo_mrt.png'); ?>" style="margin-top: -20px;" title="Profund" alt="Profund"></a>
                <div class="clearer"></div>
            </div> -->
            
            <div class="navbar navbar-fixed">  
                <div class="navbar-inner" style="border-radius: 0px !important;">                       
                    <div class="nav-container">
                        <ul class="nav">  
                            <li class="dropdown">  
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programs <b class="caret"></b></a>  
                                <ul class="dropdown-menu">  
                                    <li><a href="<?php echo base_url();?>index.php/create_program">Create Program</a></li>  
                                    <li><a href="<?php echo base_url();?>index.php/view_program">View Program</a></li>  
                                </ul>  
                            </li>  
                            <li class="dropdown">  
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transactions <b class="caret"></b></a>  
                                <ul class="dropdown-menu">  
                                    <li><a href="<?php echo base_url();?>index.php/payment_certificate">Payment  certificate</a></li>
                                </ul>  
                            </li>  
                        </ul>

                        <ul class="nav pull-right"> 
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><b class="icon-user"></b> Welcome <?php echo $username; ?> </span> <b class="caret"></b></a>    
                                <ul class="dropdown-menu">                                      
                                    <li class="socials"><a href="#"><b class="icon-cog"></b> Change password</a></li>
                                    <li class="socials"><a href="<?php echo base_url();?>index.php/home/logout"><b class="icon-signout"></b> Logout</a></li> 
                                </ul>
                            </li> 
                        </ul>
                    </div>
                </div>  
            </div>
