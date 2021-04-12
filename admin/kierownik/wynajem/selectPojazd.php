<?php
if(isset($_POST["id"])) {
    require_once("../../../config.php");
    $stmt = $db->prepare("SELECT * FROM `pojazd` WHERE id=:id");
    $stmt->execute(array(':id' => $_POST['id']));
    $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $output .= '  
                <tr>  
                     <td width="30%"><label>Id</label></td>  
                     <td width="70%">' . $row["id"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Marka</label></td>  
                     <td width="70%">' . $row["marka"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Model</label></td>  
                     <td width="70%">' . $row["model"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Numer rejestracyjny</label></td>  
                     <td width="70%">' . $row["numer_rejestracyjny"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Pojemność</label></td>  
                     <td width="70%">' . $row["pojemnosc"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Rok produkcji</label></td>  
                     <td width="70%">' . $row["rok_produkcji"] . '</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>VIN</label></td>  
                     <td width="70%">' . $row["vin"] . '</td>  
                </tr> 
                ';
    }
    $output .= "</table></div>";
    echo $output;
}