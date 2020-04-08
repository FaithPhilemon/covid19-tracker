<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Covid-19 Tracker</title>

	<link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet" id="bootstrap-css">
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css' />
</head>
<body>


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                    <div class="wrapper">
                        <div class="header">
                            <h1>COVID-19 Information</h1>
                        </div>
                    </div>
                </div> 

                <img src="<?=base_url('assets/img/c19.png') ?>" height="200" alt="Image 1">     

                

                 <p class="text-justify">
                    Coronavirus disease (COVID-19) is an infectious disease caused by a new virus.
                    The disease causes respiratory illness (like the flu) with symptoms such as a 
                    cough, fever, and in more severe cases, difficulty breathing. You can protect yourself
                     by washing your hands frequently, avoiding touching your face, and avoiding close 
                     contact (1 meter or 3 feet) with people who are unwell.
                </p>
 
                        
            </div>

            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <div class="tile">
                    <div class="wrapper">
                        <div class="header">
                            <h1>Global Stats</h1>
                        </div>
                    </div>

                    <div class="dates">
                        <div class="start">
                            <strong>START DATE</strong> 12:30 DEC, 2019
                            <span></span>
                        </div>
                        <div class="ends">
                            <strong>CURRENT DATE</strong> <?=date('M, Y') ?>
                        </div>
                    </div>

                    <div class="stats">

                        <div>
                            <strong>INVITED</strong> 3098
                        </div>

                        <div>
                            <strong>JOINED</strong> 562
                        </div>

                        <div>
                            <strong>DECLINED</strong> 182
                        </div>

                    </div>


                    <div class="footer">
                        <a href="#" class="Cbtn Cbtn-primary">View</a>
                        <a href="#" class="Cbtn Cbtn-danger">Delete</a>
                    </div>
                </div> 
            </div>
        </div>

        <hr>
        
    </div>


</body>
</html>