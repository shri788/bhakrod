<!DOCTYPE html>
<html lang="en">
<head runat="server">
    <meta charset="utf-8" />
    <title>
        SRO ONLINE
    </title>
 
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container" >
        <div class="row">
        <div class="col-lg-12" style="padding-top:5px;padding-left:5px;padding-bottom:5px;padding-right:5px;background-color:skyblue;">
        <a href="#"><button class="btn btn-primary">32 WG HOME</button></a>
        <a href="#"><button class="btn btn-primary">HOME</button></a>
        <span style="padding-left:20%;font-size:20px;color:red;"><b><i> 32 WG SRO ONLINE SYSTEM</i> </b></span>
        <a href="index.php"><button class="float float-right btn btn-primary">UPLOAD SRO</button></a>
        </div>
        </div>
    <div class="row">
        <div class="col-lg-4" style="border:1px solid black;overflow:scroll;height:550px;padding-left:0px;padding-right:0px;">

            <?php
                        
                        // get current directory path
                        $dirpath = "SRO2020";
                        // set file pattern
                        $dirpath .= "\*.*";
                        // copy filenames to array
                        $exclude = array("index.php"); 
                        $files = array();
                        $files = glob($dirpath);
                        
                        // sort files by last modified date
                        usort($files, function($x, $y) {
                        return filemtime($x) < filemtime($y);
                        });
                        
                        foreach($files as $item){
                        echo " 
                                <table style='width:100%;'>
                                <tr> 
                                <th style='padding-left:5px;padding-right:5px;font-color:red;'>
                                        <a href='$item' target='pdfopen'><button style='width:100%;text-align:left;' class='btn btn-info'> ".$item."</button></a><br>
                                </th>
                                </tr>
                                </table>
                                ";
                        }
            ?> 

        </div>
            <div class="col-lg-8" style="border:1px solid black;padding-left:0px;padding-right:0px;">
                <iframe name="pdfopen" style="width:100%;height:100%;"  src="uploads/book.pdf">

                </iframe>
            </div>
            
    </div>
    </div>
</body>
</html>