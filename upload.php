<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>POR ONLINE</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data" >
        <a href="homepage.php"><button class="btn btn-primary" type="button">32 WG HOME</button></a>
        <a href="#"><button class="btn btn-primary" type="button">HOME</button></a>
        <span style="padding-left:8%;font-size:20px;color:red;"><b><i> 32 WG SRO ONLINE SYSTEM</i> </b></span>
        <a href="download.php"><button class="float float-right btn btn-primary" type="button">DOWNLOAD SRO</button></a><hr>
          <h3>Upload SRO File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save" class="btn btn-danger">UPLOAD</button>
          <span>
          <li> FILE NAME SHOULD BE IN CAPITAL LETTERS.</li>
          <li> STANDARD NOMENCLATURE SHOULD BE FOLLOWED LIKE :- <span style="color:red;">SRO 01-2020 OR AO 01-2020.</span> </li>
          <li> ONLY PDF FILE SHOULD BY UPLOADED.</li>
          <li> FILE SIZE SHOULD BE BELOW 10 MB. </li>
          </span>
        </form>
      </div>
    </div>
  </body>
</html>