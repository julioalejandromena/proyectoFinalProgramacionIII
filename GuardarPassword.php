<?php

if(isset($_POST["oldPsw"]) && isset($_POST["newPsw"]) && isset($_POST["confNewPsw"]))
{
    $passwordAlmacenado = trim( file_get_contents("password.txt") );

        if($passwordAlmacenado == $_POST["oldPsw"] && $_POST["newPsw"] == $_POST["confNewPsw"])
        {
            file_put_contents("password.txt", $_POST["newPsw"]);            
        }   
    
     header("location:index.php");

}
else
{
    echo "<h3>por que entro aqui</h3>";
}


?>