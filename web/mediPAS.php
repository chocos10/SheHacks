<?php
 $drug = "";$brand ="";
if(isset($_GET['medicine'])){
   if($_GET['medicine'])
   {
    $urlContent = file_get_contents("https://api.fda.gov/drug/event.json?api_key=4vd0R1524xQ5exO7m2oWdAd2iZzm2U4L1JmvA38i&search=".$_GET['medicine']);
    $drugArray=json_decode($urlContent,true);
   //print_r($drugArray);

      $ak = $drugArray['results'][0]['patient']['drug'][0]['openfda']['generic_name'];
          $drug="The drug's generic name is ";
        foreach ($ak as $character) {
	        $drug= "$drug"."$character".","  ;
        }
      $pk = $drugArray['results'][0]['patient']['drug'][0]['openfda']['brand_name'];
      $brand="The drug can be obtained from these brands: ";
    foreach ($pk as $character) {
      $brand= "$brand"."$character".","  ;
    }

   }
}
// else {
//   echo "none";
// }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <!-- Required meta tags always come first -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta http-equiv="x-ua-compatible" content="ie=edge">

     <title>Search the medicine you want to know about?</title>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

     <style type="text/css">

     html {
         background: url(background.jpeg) no-repeat center center fixed;
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         }

         body {

             background: none;

         }

         .container {

             text-align: center;
             margin-top: 100px;
             width: 450px;

         }

         input {

             margin: 20px 0;

         }

         #weather {

             margin-top:15px;

         }

     </style>

 </head>
 <body>
 <div class="container">
   <div class="container">
 <form>
<fieldset class="form-group">
<label for="medicine">Enter the name of a Medicine.</label>
<input type="text" class="form-control" name="medicine" id="medicine" placeholder="Eg. Paracetamol" value = "<?php  ?>">
</fieldset>

<button type="submit" class="btn btn-primary">Submit</button>
</form>

     <div id="drug"><?php
      if(isset($drug)){
         if ($drug) {
             echo '<div class="alert alert-success" role="alert">
'.$drug.'
</div>';
}
}
if(isset($brand)){
   if ($brand) {
       echo '<div class="alert alert-success" role="alert">
'.$brand.'
</div>';
}
}/* else if ($error) {

             echo '<div class="alert alert-danger" role="alert">
'.$error.'
</div>';

}*/

         ?></div>
 </div>

<!-- jQuery first, then Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
</body>
 </html>
