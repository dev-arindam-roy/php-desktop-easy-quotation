<?php require_once('core.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Creative Syntax Solutions | Instant Quotation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/bootstrap3/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/select2/select2.min.css">
  <link rel="stylesheet" href="assets/bs_multi_select/bootstrap-multiselect.css">
  <link rel="stylesheet" type="text/css" href="assets/jquery_ui/jquery-ui.css">
  <link rel="stylesheet" href="assets/arindam_style.css">
  <style type="text/css">
    @media only screen and (max-width: 600px) {
        
        .respBtn { width: 100%; margin-top: 10px;}
        .centerItem { text-align: center; }
    }
    table th { vertical-align: middle; }
  </style>
  <script src="assets/jquery.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="margin-top: 5px;">
   <div class="row">
   	<div class="col-md-3 centerItem logo">
   		<img src="images/creative-syntax.png" style="width: 80%">
   	</div>
   	<div class="col-md-9 centerItem">
   		<h1><strong>Instant Quotation Creator - Just <span style="color: #169687;">Download</span> It..</strong></h1>
   		<p>We create your dream within your budget. Just set your requirement and get our AI Driven Quotaion. Just Try It.</p>
   	</div>
   </div>
   <div class="row">
   	<div class="col-md-12"><hr/></div>
   </div>
   <div class="row" id="FormBox" style="background-color: #f5f4f4; border-radius: 4px;">
    <div class="col-md-12" style="text-align: center;">
       <h3 style="color: #169687;"><strong>Select Your Project Requirements</strong></h3>
     </div>
   	<div class="col-md-2 col-sm-12 col-xs-12"></div>
   	<div class="col-md-8 col-sm-12 col-xs-12" id="Qform" style="padding: 10px; border-radius: 5px;">
      <form name="Qfrmx" id="Qfrmx" action="process.php" method="POST">
   		 <?php require_once('choose_panel.php'); ?>
       <div class="form-group">
         <input type="submit" class="btn btn-primary btn-lg" value="Get Your Quotation" style="width: 100%;">
       </div>
      </form>
   	</div>
   	<div class="col-md-2 col-sm-12 col-xs-12"></div>
   </div>
   <div class="row" id="QuotBox" style="display: none;">
     <div id="printBox">
      <div class="col-md-12 col-sm-12 col-xs-12" id="tabHolder"></div>
     </div>
     <div class="col-md-12 col-sm-12 col-xs-12">
       <input type="button" id="backFrm" class="btn btn-primary respBtn" value="Back">
       <input type="button" id="dwnPDF" class="btn btn-success respBtn" value="Download As PDF" onclick="printdiv1('printBox');">
       <a href="" class="btn btn-danger respBtn">Cancel & Create New</a>
     </div>
   </div>
</div>
<div style="margin-bottom: 100px;"></div>
<div style="text-align: center; color: #ccc; padding: 30px;">copyright & all rights reserved - Creative Syntax Solutions | Innovative & Effective</div>
<script type="text/javascript" src="assets/select2/select2.full.js"></script>
<script type="text/javascript" src="assets/bs_multi_select/bootstrap-multiselect.js"></script>
<script type="text/javascript" src="assets/jquery_ui/jquery-ui.js"></script>
<script type="text/javascript" src="assets/jquery_validator/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/jquery_validator/additional-methods.min.js"></script>
<script type="text/javascript" src="assets/jquery.blockUI.js"></script>
<script type="text/javascript" src="assets/arindam_script.js"></script>
</body>
</html>
