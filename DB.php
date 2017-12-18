<?php
// we can the function from any file 3adi 

function  open_connection(){
    $servername = "localhost";
    $username = "root";
    $dbname = "Store";


    // Create connection
    $conn = new mysqli($servername, $username);
    $conn->select_db($dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
function get_query_result($sql)
{
    $conn = open_connection();
    $result = null;
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        null;
    }
}

function insert_product($productName,$productPrice,$productDescription,$productImagePath,$prouductCat){
  $conn = open_connection();
  
  $sql="INSERT INTO Produduct INSERT INTO `Produduct` (`productName`, `productPrice`, `productDescription`
                                                            , `productImagePath`, `productID`
                                                            , `numberOfVists`, `prouductCat`) 
                                                            VALUES
                                                            ('".$productName."', '".$productPrice."',
                                                            '".$productDescription."', '".$productImagePath."', 
                                                            NULL, '0', '".$prouductCat."')";

  $result = $conn->query($sql);
 
 if($result){
   echo "Done";
 }else{
   echo "Item Allready Exist";
 }
 $conn->close();
}

insert_product("Z",2.5,"TestFromweb","/sss","s","w");
/*
$sql = "SELECT * FROM Produduct";
$result = get_query_result($sql);

if ($result != null) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["productID"] . " - Name: " . $row["productName"] . "<br>";
    }
} else {
    echo "0 results";
}

echo "Connected successfully";*/
?>
