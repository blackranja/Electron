<?php
#This is the initail setup for the projects components to be used as a web application containing
#all objects to work with the particle, This objects will be created using php.
require_once "robotic1.php";
require_once "robotic2.php";
require_once "robotic3.php";
require_once "robotic4.php";
require_once "robotic5.php";
###############
######################################################################################################
$robot1=new RanjaRobot1();
$robot2=new RanjaRobot2();
$robot3=new RanjaRobot3();
$robot4=new RanjaRobot4();
$robot1->robotHeader1("RANJA ROBOTICS","frontEnd/bootstrap/css/bootstrap.min.css","frontEnd/bootstrap/js/bootstrap.min.js");
$robot1->robotNav1();
$robot2->robotSlide1();
$robot2->robotSlide2();
$robot2->robotSlide3();
$robot2->robotSlide4();
$robot3->robotBody1();
$robot3->robotBody2();
$robot3->robotBody3();
$robot3->robotBody4();

