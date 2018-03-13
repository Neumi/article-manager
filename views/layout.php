<!DOCTYPE html>
<html>
<title>Article Manager</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html, body, h1, h2, h3, h4, h5 {
        font-family: "Open Sans", sans-serif
    }
</style>
<body class="w3-theme-l5">


<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
        <a href="?controller=articles&action=index" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"
           title="home"><i class="fa fa-archive w3-margin-right"></i>Article Manager</a>
        <a href="?controller=articles&action=add"
           class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="add article"><i
                    class="fa fa-plus"></i></a>
    </div>
</div>


<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">

    <?php require_once('routes.php'); ?>
</div>

<footer class="w3-container purple w3-padding-16">

</footer>

<body>
<html>

