<!doctype html>
<html>
<head>
    <link href='<?php echo base_url();?>css/mybutton.css' rel='stylesheet' type='text/css'>
    <style>
        .container{
            position: fixed;
            top: 100px;
            left: 450px;
            text-align:center;
            background: #FFCBA4;
            color: blue;
            font-size: 30px;
            font-style: normal;
            padding-top:50px;
            width:500px;
            height:300px;
            margin: 20px 5px;
            z-index: 0;
            -moz-border-radius: 5px 5px 0 0;
            -webkit-border-radius: 5px;
            border-radius: 50px 50px 50px 0;
            border: 8px solid #cccccc;
        }
        body {
            background:url("<?php echo base_url();?>images/cap.jpg") no-repeat center center fixed #000;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: 100% 100%;
            opacity:0.9;
        }
        .myButton{
            position:absolute;
            left:40px;
            bottom:20px;
        }
        .team{
            position:absolute;
            left:310px;
            bottom:0px;
        }
    </style>
</head>
<body>
<div class="container">
<h1>Player Successfully Bought!</h1>
    <?php
        if($no_sold==120)
            echo "Every Team Filled";
        else
            echo '<a href="'.base_url().'index.php/Select" class="myButton">BACK</a>';
?>
<div class='team'><a href="<?php echo base_url();?>index.php/Teams" class='myButton'>Teams</a></div>
</div>
</body>
</html>