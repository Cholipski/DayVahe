<?php
if(isset($_POST["id"])) {
    require_once("../../../config.php");
    $stmt = $db->prepare("SELECT * FROM `pracownik` WHERE id=:id");
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
                     <td width="30%"><label>Imię</label></td>  
                     <td width="70%">' . $row["imie"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Nazwisko</label></td>  
                     <td width="70%">' . $row["nazwisko"] . '</td>  
                </tr>    
                <tr>  
                     <td width="30%"><label>Email</label></td>  
                     <td width="70%">' . $row["email"] . '</td>  
                </tr>  
                ';
    }
    $output .= "</table></div>";
    echo $output;
}