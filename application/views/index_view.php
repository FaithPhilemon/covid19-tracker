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
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                <div class="tile">
                    <div class="wrapper">
                        <div class="header">
                          <img src="<?=base_url('assets/img/c19.png') ?>" height="40" width="50" alt="Image 1">
                          <h1>COVID-19 Global Stats</h1>
                        </div>
                    </div>
                    
                    <?php
                        // print_r($covid_countries);
                    ?>

                    <div class="dates">
                        <div class="start">
                            <strong>START DATE</strong> 12:30 DEC, 2019
                            <span></span>
                        </div>
                        <div class="ends">
                            <strong>CURRENT DATE</strong> <?=date('M, Y') ?>
                        </div>
                    </div>

                    

                        <?php 
                         foreach($covid_countries as $country){
                            echo '
                            <div class="stats row text-uppercase">
                                <div class="col-md-2">
                                    <img src="https://www.countryflags.io/'.$country["CountryCode"].'/flat/64.png">
                                    <strong>'.$country["Country"].'</strong> 
                                </div>
        
                                <div class="col-md-2">
                                    <strong>New Confirmed </strong> '.$country["NewConfirmed"].'
                                </div>
        
                                <div class="col-md-2">
                                    <strong>Total Confirmed</strong> '.$country["TotalConfirmed"].'
                                </div>
        
                                <div class="col-md-2">
                                    <strong>NewDeaths</strong> '. $country["NewDeaths"] .'
                                </div>
        
                                <div class="col-md-2">
                                    <strong>Total Deaths</strong> '.$country["TotalDeaths"].'
                                </div>

                                <div class="col-md-2">
                                    <strong>Total Recovered</strong> '.$country["TotalRecovered"].'
                                </div>

                            </div>
                            ';
                         }
                        
                        ?>

                   

                    <div class="footer">
                        <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/events-as-they-happen" class="Cbtn Cbtn-primary btn-sm">More Details</a>
                        <!-- <a href="#" class="Cbtn Cbtn-danger">Delete</a> -->
                    </div>

                </div> 

                  

                

                 <!-- <p class="text-justify">
                    Coronavirus disease (COVID-19) is an infectious disease caused by a new virus.
                    The disease causes respiratory illness (like the flu) with symptoms such as a 
                    cough, fever, and in more severe cases, difficulty breathing. You can protect yourself
                     by washing your hands frequently, avoiding touching your face, and avoiding close 
                     contact (1 meter or 3 feet) with people who are unwell.
                </p> -->
 
                        
            </div>

        </div>

        <hr>
        
    </div>


</body>
</html>