<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AngularJS+PHP MySQL to Table</title>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script> <!-- jQuery to support Bootstrap 4 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular.min.js"></script> <!-- angularJS minified file from extern source --> 
    <script src="a-controllers.js"></script> <!-- import js file which contains AngularJS code and controller -->
    <!-- import Bootstrap 4 file which contains CSS code -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body ng-app="getdataApp" ng-controller="mainController"> <!-- init AngularJS app and controller -->
        <table class="table table-bordered table-responsive">
    <thead>
        <!-- iterate, using ng-repeat, through scope's variable which holds data from table. In this case iterate only once we want to get keys which holds
        names of columns of table from database. This is done by ,,limitTo:1,,. We get each row to variable item. -->
        <tr ng-repeat="item in msg | limitTo:1"> 
            <!-- iterate through each row and get key and value. Key holds name of column and value are data which belongs to this column in this row.
        We will use key due this is table header -->
            <th ng-repeat="(key, value) in item">{{key}}</th><!-- {{key}} will output column name.-->
        </tr>
    </thead>
    <tbody>
        <!-- iterate, using ng-repeat, through scope's variable which holds data from table. In this case iterate via all records. 
        Key holds name of column and value are data which belongs to this column in this row.-->
        <tr ng-repeat="item in msg">
            <td ng-repeat="(key, value) in item">{{value}}</td> <!-- {{value}} holds data which belongs to column -->
        </tr>
    </tbody>
</table>

 <!-- BOOTSTRAP 4-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
