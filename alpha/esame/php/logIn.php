<?php
 include ("config.php");
    //---------------------------------------------------------

   if(isset($_POST['email'])){

        $email = $_POST["email"];
        $pswd = hash('sha1', $_POST["password"]);


        $sql = "SELECT * FROM users";

        $results = $conn->query($sql);

        $exist = false;

        while($row = $results->fetch_assoc()){

            if($row["Email"] == $email){

                if($row["Password"] == $pswd){

                    $exist= true;
                    break;

                }
            }
            
        }

        if( $exist == true){

            echo("logged succesfully: ".$email);

        }else{

            echo("wrong email or password");

        }
    }

?>
