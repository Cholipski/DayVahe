<?php
if(isset($_POST["id"])) {
    require_once("../../../config.php");
    $stmt = $db->prepare("SELECT * FROM `wynajem` WHERE id=:id");
    $stmt->execute(array(':id' => $_POST['id']));
    $klient = "";
    $pojazd = "";
    $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $output .= '  
                <tr>  
                     <td width="30%"><label>Id_wynajmu</label></td>  
                     <td width="70%">' . $row["id"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Data rozpoczęcia</label></td>  
                     <td width="70%">' . $row["data_rozpoczecia"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Data zakonczenia</label></td>  
                     <td width="70%">' . $row["data_zakonczenia"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Koszt</label></td>  
                     <td width="70%">' . $row["koszt"] . '</td>  
                </tr>  
                ';
        $klient = $row['klient'];
        $pojazd = $row['pojazd'];

    }

    $stmt2 = $db->prepare("SELECT * FROM `klient` WHERE id=:id");
    $stmt2->execute(array(':id' => $klient));
    while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
        $output .= '  
                <tr>  
                     <td width="30%"><label>Imię</label></td>  
                     <td width="70%">' . $row2["imie"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Nazwisko</label></td>  
                     <td width="70%">' . $row2["nazwisko"] . '</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Pesel</label></td>  
                     <td width="70%">' . $row2["pesel"] . '</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Email</label></td>  
                     <td width="70%">' . $row2["email"] . '</td>  
                </tr>
                ';
    }
    $stmt3 = $db->prepare("SELECT * FROM `pojazd` WHERE id=:id");
    $stmt3->execute(array(':id' => $pojazd));
    while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
        $output .= '  
                <tr>  
                     <td width="30%"><label>Marka</label></td>  
                     <td width="70%">' . $row3["marka"] . '</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Model</label></td>  
                     <td width="70%">' . $row3["model"] . '</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Numer Rejestracyjny</label></td>  
                     <td width="70%">' . $row3["numer_rejestracyjny"] . '</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Rok produkcji</label></td>  
                     <td width="70%">' . $row3["rok_produkcji"] . '</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>VIN</label></td>  
                     <td width="70%">' . $row3["vin"] . '</td>  
                </tr> 
                ';
    }


    $output .= "</table></div>";
    echo $output;
}