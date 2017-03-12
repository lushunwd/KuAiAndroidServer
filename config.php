<?php
session_start();
error_reporting(0);
@mysql_connect ( "localhost", "root", "root" ) or die ( "Database connection failed!" );
@mysql_select_db ( "kuaiandroid" ) or die ( "Database open failed!" );
mysql_query("set names 'utf8'");
