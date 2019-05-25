<?php
 function create($file){
     $host = "localhost";
     $user = "root";
     $pass = "";
     $con = mysqli_connect($host, $user, $pass);
     if (!$con) {
         die('Could not conect: ' . mysqli_error($con));
     }
     $db = "hackathon";
     $connect_db = mysqli_select_db($con, $db);

     $data = file_get_contents("$file");

    $ary = json_decode($data, true);

    $column_name = array() ;
    $column_value = array() ;

    foreach ($ary as  $value) {
        foreach ($value as $key=>$vale) {

//          echo "column name is =>".$key;
//           echo "<br><br>";
//           echo "Value is  =>".$vale;
//          echo "<br><br>";

               array_push($column_name, $key);
               array_push($column_value, $vale);


        }



    }


     $query="Create Table hivaidspersonanddead
    (ID int(30) PRIMARY KEY NOT NULL AUTO_INCREMENT,
     
      $column_name[0] varchar (225),
      $column_name[1] varchar (225),
      $column_name[2] varchar (225),
      $column_name[3] varchar (225),
      $column_name[4] varchar (225),
      $column_name[5] varchar (225),
      $column_name[6] varchar (225),
      $column_name[7] varchar (225),
      $column_name[8] varchar (225),
      $column_name[9] varchar (225),
      $column_name[10] varchar (225),
      $column_name[11] varchar (225),
      $column_name[12] varchar (225),
      $column_name[13] varchar (225),
      $column_name[14] varchar (225),
      $column_name[15] varchar (225),
      $column_name[16] varchar (225),
      $column_name[17] varchar (225),
      $column_name[18] varchar (225),
      $column_name[19] varchar (225),
      $column_name[20] varchar (225)
      
      )";
     $result = mysqli_query($con,$query);
     if(!$result)
         echo mysqli_error($con) . "<br />";


     $sql = "INSERT INTO hivaidspersonanddead(ID,`$column_name[0]`,`$column_name[1]`,`$column_name[2]`,`$column_name[3]`,`$column_name[4]`,`$column_name[5]`,`$column_name[6]`,`$column_name[7]`,`$column_name[8]`,`$column_name[9]`,`$column_name[10]`,`$column_name[11]`,`$column_name[12]`,`$column_name[13]`,`$column_name[14]`,`$column_name[15]`,`$column_name[16]`,`$column_name[17]`,`$column_name[18]`,`$column_name[19]`,`$column_name[20]`) 
VALUES ('',`$column_value[0]`,`$column_value[1]`,`$column_value[2]`,`$column_value[3]`,`$column_value[4]`,`$column_value[5]`,`$column_value[6]`,`$column_value[7]`,`$column_value[8]`,`$column_value[9]`,`$column_value[10]`,`$column_value[11]`,`$column_value[12]`,`$column_value[13]`,`$column_value[14]`,`$column_value[15]`,`$column_value[16]`,`$column_value[17]`,`$column_value[18]`,`$column_value[19]`,`$column_value[20]`)
";

     $result=mysqli_query($con,$sql);
if($result){
    echo "successful";
}else{
    echo mysqli_error($con) . "<br />";
}


//
////healthcarepersonal table
//
//
//     $query="Create Table healthcarepersonal
//    (ID int(30) PRIMARY KEY NOT NULL AUTO_INCREMENT,
//
//      $column_name[0] varchar (225),
//      $column_name[1] varchar (225),
//      $column_name[2] varchar (225),
//      $column_name[3] varchar (225),
//      $column_name[4] varchar (225),
//      $column_name[5] varchar (225),
//      $column_name[6] varchar (225),
//      $column_name[7] varchar (225),
//      $column_name[8] varchar (225),
//      $column_name[9] varchar (225),
//      $column_name[10] varchar (225),
//      $column_name[11] varchar (225),
//      $column_name[12] varchar (225)
//
//
//      )";
//     $result = mysqli_query($con,$query);
//     if(!$result)
//         echo mysqli_error($con) . "<br />";
//
//
//     $sql = "INSERT INTO healthcarepersonal(ID,`$column_name[0]`,`$column_name[1]`,`$column_name[2]`,`$column_name[3]`,`$column_name[4]`,`$column_name[5]`,`$column_name[6]`,`$column_name[7]`,`$column_name[8]`,`$column_name[9]`,`$column_name[10]`,`$column_name[11]`,`$column_name[12]`)
//VALUES ('',`$column_value[0]`,`$column_value[1]`,`$column_value[2]`,`$column_value[3]`,`$column_value[4]`,`$column_value[5]`,`$column_value[6]`,`$column_value[7]`,`$column_value[8]`,`$column_value[9]`,`$column_value[10]`,`$column_value[11]`,`$column_value[12]`)
//";
//
//     $result=mysqli_query($con,$sql);
//     if($result){
//         echo "successful";
//     }else{
//         echo mysqli_error($con) . "<br />";
//     }
//
//
//     mysqli_close($con);
//
//
//
//}
//
//
//
//
////hearingdisability table
//
//
//
//$query="Create Table hearingdisability
//    (ID int(30) PRIMARY KEY NOT NULL AUTO_INCREMENT,
//
//      $column_name[0] varchar (225),
//      $column_name[1] varchar (225),
//      $column_name[2] varchar (225),
//      $column_name[3] varchar (225),
//      $column_name[4] varchar (225),
//      $column_name[5] varchar (225),
//      $column_name[6] varchar (225),
//      $column_name[7] varchar (225),
//      $column_name[8] varchar (225),
//      $column_name[9] varchar (225),
//      $column_name[10] varchar (225),
//      $column_name[11] varchar (225),
//      $column_name[12] varchar (225),
//      $column_name[13] varchar (225),
//      $column_name[14] varchar (225),
//      $column_name[15] varchar (225),
//      $column_name[16] varchar (225),
//      $column_name[17] varchar (225),
//      $column_name[18] varchar (225),
//      $column_name[19] varchar (225),
//      $column_name[20] varchar (225)
//
//      )";
//$result = mysqli_query($con,$query);
//if(!$result)
//    echo mysqli_error($con) . "<br />";
//
//
//$sql = "INSERT INTO 'hearingdisability'(ID,`$column_name[0]`,`$column_name[1]`,`$column_name[2]`,`$column_name[3]`,`$column_name[4]`,`$column_name[5]`,`$column_name[6]`,`$column_name[7]`,`$column_name[8]`,`$column_name[9]`,`$column_name[10]`,`$column_name[11]`,`$column_name[12]`,`$column_name[13]`,`$column_name[14]`,`$column_name[15]`,`$column_name[16]`,`$column_name[17]`,`$column_name[18]`,`$column_name[19]`,`$column_name[20]`)
//VALUES ('',`$column_value[0]`,`$column_value[1]`,`$column_value[2]`,`$column_value[3]`,`$column_value[4]`,`$column_value[5]`,`$column_value[6]`,`$column_value[7]`,`$column_value[8]`,`$column_value[9]`,`$column_value[10]`,`$column_value[11]`,`$column_value[12]`,`$column_value[13]`,`$column_value[14]`,`$column_value[15]`,`$column_value[16]`,`$column_value[17]`,`$column_value[18]`,`$column_value[19]`,`$column_value[20]`)
//";
//
//$result=mysqli_query($con,$sql);
//if($result){
//    echo "successful";
//}else{
//    echo mysqli_error($con) . "<br />";
//}
//
////end copy
//
//
//
//
////start copy
//
//
//$query="Create Table martial
//    (ID int(30) PRIMARY KEY NOT NULL AUTO_INCREMENT,
//
//      $column_name[0] varchar (225),
//      $column_name[1] varchar (225),
//      $column_name[2] varchar (225),
//      $column_name[3] varchar (225),
//      $column_name[4] varchar (225),
//      $column_name[5] varchar (225),
//      $column_name[6] varchar (225),
//      $column_name[7] varchar (225),
//      $column_name[8] varchar (225),
//      $column_name[9] varchar (225),
//      $column_name[10] varchar (225),
//      $column_name[11] varchar (225),
//      $column_name[12] varchar (225),
//      $column_name[13] varchar (225),
//      $column_name[14] varchar (225),
//      $column_name[15] varchar (225),
//      $column_name[16] varchar (225),
//      $column_name[17] varchar (225),
//      $column_name[18] varchar (225),
//      $column_name[19] varchar (225),
//      $column_name[20] varchar (225)
//
//      )";
//$result = mysqli_query($con,$query);
//if(!$result)
//    echo mysqli_error($con) . "<br />";
//
//
//$sql = "INSERT INTO martial(ID,`$column_name[0]`,`$column_name[1]`,`$column_name[2]`,`$column_name[3]`,`$column_name[4]`,`$column_name[5]`,`$column_name[6]`,`$column_name[7]`,`$column_name[8]`,`$column_name[9]`,`$column_name[10]`,`$column_name[11]`,`$column_name[12]`,`$column_name[13]`,`$column_name[14]`,`$column_name[15]`,`$column_name[16]`,`$column_name[17]`,`$column_name[18]`,`$column_name[19]`,`$column_name[20]`)
//VALUES ('',`$column_value[0]`,`$column_value[1]`,`$column_value[2]`,`$column_value[3]`,`$column_value[4]`,`$column_value[5]`,`$column_value[6]`,`$column_value[7]`,`$column_value[8]`,`$column_value[9]`,`$column_value[10]`,`$column_value[11]`,`$column_value[12]`,`$column_value[13]`,`$column_value[14]`,`$column_value[15]`,`$column_value[16]`,`$column_value[17]`,`$column_value[18]`,`$column_value[19]`,`$column_value[20]`)
//";
//
//$result=mysqli_query($con,$sql);
//if($result){
//    echo "successful";
//}else{
//    echo mysqli_error($con) . "<br />";
//}
////end copy
//
//
//
//
////start copy
//
//
//
//$query="Create Table martial
//    (ID int(30) PRIMARY KEY NOT NULL AUTO_INCREMENT,
//
//      $column_name[0] varchar (225),
//      $column_name[1] varchar (225),
//      $column_name[2] varchar (225),
//      $column_name[3] varchar (225),
//      $column_name[4] varchar (225),
//      $column_name[5] varchar (225),
//      $column_name[6] varchar (225),
//      $column_name[7] varchar (225),
//      $column_name[8] varchar (225),
//      $column_name[9] varchar (225),
//      $column_name[10] varchar (225),
//      $column_name[11] varchar (225),
//      $column_name[12] varchar (225),
//      $column_name[13] varchar (225),
//      $column_name[14] varchar (225),
//      $column_name[15] varchar (225),
//      $column_name[16] varchar (225),
//      $column_name[17] varchar (225),
//      $column_name[18] varchar (225),
//      $column_name[19] varchar (225),
//      $column_name[20] varchar (225)
//
//      )";
//$result = mysqli_query($con,$query);
//if(!$result)
//    echo mysqli_error($con) . "<br />";
//
//
//$sql = "INSERT INTO martial(ID,`$column_name[0]`,`$column_name[1]`,`$column_name[2]`,`$column_name[3]`,`$column_name[4]`,`$column_name[5]`,`$column_name[6]`,`$column_name[7]`,`$column_name[8]`,`$column_name[9]`,`$column_name[10]`,`$column_name[11]`,`$column_name[12]`,`$column_name[13]`,`$column_name[14]`,`$column_name[15]`,`$column_name[16]`,`$column_name[17]`,`$column_name[18]`,`$column_name[19]`,`$column_name[20]`)
//VALUES ('',`$column_value[0]`,`$column_value[1]`,`$column_value[2]`,`$column_value[3]`,`$column_value[4]`,`$column_value[5]`,`$column_value[6]`,`$column_value[7]`,`$column_value[8]`,`$column_value[9]`,`$column_value[10]`,`$column_value[11]`,`$column_value[12]`,`$column_value[13]`,`$column_value[14]`,`$column_value[15]`,`$column_value[16]`,`$column_value[17]`,`$column_value[18]`,`$column_value[19]`,`$column_value[20]`)
//";
//
//$result=mysqli_query($con,$sql);
//if($result){
//    echo "successful";
//}else{
//    echo mysqli_error($con) . "<br />";
//}
//
////end copy
//
//
//
//
////staring copy
//
//
//$query="Create Table martial
//    (ID int(30) PRIMARY KEY NOT NULL AUTO_INCREMENT,
//
//      $column_name[0] varchar (225),
//      $column_name[1] varchar (225),
//      $column_name[2] varchar (225),
//      $column_name[3] varchar (225),
//      $column_name[4] varchar (225),
//      $column_name[5] varchar (225),
//      $column_name[6] varchar (225),
//      $column_name[7] varchar (225),
//      $column_name[8] varchar (225),
//      $column_name[9] varchar (225),
//      $column_name[10] varchar (225),
//      $column_name[11] varchar (225),
//      $column_name[12] varchar (225),
//      $column_name[13] varchar (225),
//      $column_name[14] varchar (225),
//      $column_name[15] varchar (225),
//      $column_name[16] varchar (225),
//      $column_name[17] varchar (225),
//      $column_name[18] varchar (225),
//      $column_name[19] varchar (225),
//      $column_name[20] varchar (225)
//
//      )";
//$result = mysqli_query($con,$query);
//if(!$result)
//    echo mysqli_error($con) . "<br />";
//
//
//$sql = "INSERT INTO martial(ID,`$column_name[0]`,`$column_name[1]`,`$column_name[2]`,`$column_name[3]`,`$column_name[4]`,`$column_name[5]`,`$column_name[6]`,`$column_name[7]`,`$column_name[8]`,`$column_name[9]`,`$column_name[10]`,`$column_name[11]`,`$column_name[12]`,`$column_name[13]`,`$column_name[14]`,`$column_name[15]`,`$column_name[16]`,`$column_name[17]`,`$column_name[18]`,`$column_name[19]`,`$column_name[20]`)
//VALUES ('',`$column_value[0]`,`$column_value[1]`,`$column_value[2]`,`$column_value[3]`,`$column_value[4]`,`$column_value[5]`,`$column_value[6]`,`$column_value[7]`,`$column_value[8]`,`$column_value[9]`,`$column_value[10]`,`$column_value[11]`,`$column_value[12]`,`$column_value[13]`,`$column_value[14]`,`$column_value[15]`,`$column_value[16]`,`$column_value[17]`,`$column_value[18]`,`$column_value[19]`,`$column_value[20]`)
//";
//
//$result=mysqli_query($con,$sql);
//if($result){
//    echo "successful";
//}else{
//    echo mysqli_error($con) . "<br />";
//}
//
//
////end copy
//
//
//
//
////starting copy
//
//
//$query="Create Table martial
//    (ID int(30) PRIMARY KEY NOT NULL AUTO_INCREMENT,
//
//      $column_name[0] varchar (225),
//      $column_name[1] varchar (225),
//      $column_name[2] varchar (225),
//      $column_name[3] varchar (225),
//      $column_name[4] varchar (225),
//      $column_name[5] varchar (225),
//      $column_name[6] varchar (225),
//      $column_name[7] varchar (225),
//      $column_name[8] varchar (225),
//      $column_name[9] varchar (225),
//      $column_name[10] varchar (225),
//      $column_name[11] varchar (225),
//      $column_name[12] varchar (225),
//      $column_name[13] varchar (225),
//      $column_name[14] varchar (225),
//      $column_name[15] varchar (225),
//      $column_name[16] varchar (225),
//      $column_name[17] varchar (225),
//      $column_name[18] varchar (225),
//      $column_name[19] varchar (225),
//      $column_name[20] varchar (225)
//
//      )";
//$result = mysqli_query($con,$query);
//if(!$result)
//    echo mysqli_error($con) . "<br />";
//
//
//$sql = "INSERT INTO martial(ID,`$column_name[0]`,`$column_name[1]`,`$column_name[2]`,`$column_name[3]`,`$column_name[4]`,`$column_name[5]`,`$column_name[6]`,`$column_name[7]`,`$column_name[8]`,`$column_name[9]`,`$column_name[10]`,`$column_name[11]`,`$column_name[12]`,`$column_name[13]`,`$column_name[14]`,`$column_name[15]`,`$column_name[16]`,`$column_name[17]`,`$column_name[18]`,`$column_name[19]`,`$column_name[20]`)
//VALUES ('',`$column_value[0]`,`$column_value[1]`,`$column_value[2]`,`$column_value[3]`,`$column_value[4]`,`$column_value[5]`,`$column_value[6]`,`$column_value[7]`,`$column_value[8]`,`$column_value[9]`,`$column_value[10]`,`$column_value[11]`,`$column_value[12]`,`$column_value[13]`,`$column_value[14]`,`$column_value[15]`,`$column_value[16]`,`$column_value[17]`,`$column_value[18]`,`$column_value[19]`,`$column_value[20]`)
//";
//
//$result=mysqli_query($con,$sql);
//if($result){
//    echo "successful";
//}else{
//    echo mysqli_error($con) . "<br />";
//}
//
//
////end copy
//
//
////start copy
//
//
//$query="Create Table martial
//    (ID int(30) PRIMARY KEY NOT NULL AUTO_INCREMENT,
//
//      $column_name[0] varchar (225),
//      $column_name[1] varchar (225),
//      $column_name[2] varchar (225),
//      $column_name[3] varchar (225),
//      $column_name[4] varchar (225),
//      $column_name[5] varchar (225),
//      $column_name[6] varchar (225),
//      $column_name[7] varchar (225),
//      $column_name[8] varchar (225),
//      $column_name[9] varchar (225),
//      $column_name[10] varchar (225),
//      $column_name[11] varchar (225),
//      $column_name[12] varchar (225),
//      $column_name[13] varchar (225),
//      $column_name[14] varchar (225),
//      $column_name[15] varchar (225),
//      $column_name[16] varchar (225),
//      $column_name[17] varchar (225),
//      $column_name[18] varchar (225),
//      $column_name[19] varchar (225),
//      $column_name[20] varchar (225)
//
//      )";
//$result = mysqli_query($con,$query);
//if(!$result)
//    echo mysqli_error($con) . "<br />";
//
//
//$sql = "INSERT INTO martial(ID,`$column_name[0]`,`$column_name[1]`,`$column_name[2]`,`$column_name[3]`,`$column_name[4]`,`$column_name[5]`,`$column_name[6]`,`$column_name[7]`,`$column_name[8]`,`$column_name[9]`,`$column_name[10]`,`$column_name[11]`,`$column_name[12]`,`$column_name[13]`,`$column_name[14]`,`$column_name[15]`,`$column_name[16]`,`$column_name[17]`,`$column_name[18]`,`$column_name[19]`,`$column_name[20]`)
//VALUES ('',`$column_value[0]`,`$column_value[1]`,`$column_value[2]`,`$column_value[3]`,`$column_value[4]`,`$column_value[5]`,`$column_value[6]`,`$column_value[7]`,`$column_value[8]`,`$column_value[9]`,`$column_value[10]`,`$column_value[11]`,`$column_value[12]`,`$column_value[13]`,`$column_value[14]`,`$column_value[15]`,`$column_value[16]`,`$column_value[17]`,`$column_value[18]`,`$column_value[19]`,`$column_value[20]`)
//";
//
//$result=mysqli_query($con,$sql);
//if($result){
//    echo "successful";
//}else{
//    echo mysqli_error($con) . "<br />";
//}
//
////end copy
//
//


//echo "This is drink water";
//create("drinkingwater.json")."<br>";

//echo "This is nom drink water";
//create("nondrinkwater.json")."<br>";


//create("healthcarepersonal.json")."<br>";


//create("healthcarepersonal.json")."<br>";



create("hivaidspersonanddead.json")."<br>";



