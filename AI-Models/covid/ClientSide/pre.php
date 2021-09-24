<?php

require_once('ml.php');
if(isset($_POST['predict']))
{
  $extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
  $dst_fname  = getcwd() . '/covid-images/' . time() . uniqid(rand()) . '.' . $extension;
  $dst_fname = str_replace('\\' , '/' , $dst_fname);
  move_uploaded_file($_FILES["img"]["tmp_name"] , $dst_fname);
  $result  = classify_image($dst_fname);

}
else{
  header("location:index.php");
  exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Covid-19 Detection With X-RAY</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="static/bootstrap-5.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom styles for this template -->
    <link href="static/bootstrap-5.1.1-dist/css/form_upload.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form  class="form-upload">
      <img class="mb-4" src="images/Medicine-cuate.svg" alt="">
      <h1 class="h3 mb-3 font-weight-normal">X-Ray Result</h1>
      <br>
      <h1><?php echo $result['Prediction is:'] ?><h1>
        <a herf="index.php">
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="back" style="margin-top:20px;width: 100%;">Back</button>
      </a>
    </form>
  </body>
</html>
