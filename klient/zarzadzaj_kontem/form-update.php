<?php
require_once("../config.php");
if(!isset($_SESSION['id'])){
    header("location: ../zarzadzaj_kontem.php?error=1");
}
else{
    $stmt = $db->prepare("SELECT * FROM klient WHERE id=:id");
    $stmt->execute(array(':id' => $_SESSION['id']));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

}
?>

<div class="container-fluid m-0 p-0">
    <div class="add-car-form-container p-4">
        <div class="card w-50 mt-2">
            <div class="card-body">
                <div class="text-center text-danger">
                    <?php
                    if($_GET['error'] == 1){
                        echo("Wypełnij wszystkie pola!");
                    }
                    ?>
                </div>
                <h3 class="card-title text-center font-weight-bold">Dane konta</h3>
                <div class="card-text">
                    <form action="zarzadzaj_kontem/klientU.php" method="post">
                        <div class="form-group">
                            <label for="fid">Id:</label>
                            <input type="text" id="fid" name="id" readonly <? echo("value=".$row['id']) ?> class="form-control form-control-sm text-muted" placeholder="id">
                        </div>
                        <div class="form-group">
                            <label for="flogin">Login: </label>
                            <input type="text" id="flogin" name="login" <? echo("value=".$row['login']) ?> class="form-control form-control-sm text-muted" placeholder="Login">
                        </div>
                        <div class="form-group">
                            <label for="femail">Email: </label>
                            <input type="text" id="femail"  name="email" <? echo("value=".$row['email']) ?> class="form-control form-control-sm text-muted" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="fhaslo">Hasło: </label>
                            <input type="text" id="fhaslo" name="haslo"  <? echo("value=".$row['haslo']) ?> class="form-control form-control-sm text-muted" placeholder="Hasło">
                        </div>
                        <div class="form-group">
                            <label for="fimie">Imie: </label>
                            <input type="text" id="fimie" name="imie"  <? echo("value=".$row['imie']) ?> class="form-control form-control-sm text-muted" placeholder="Imie">
                        </div>
                        <div class="form-group">
                            <label for="fnazwisko">Nazwisko: </label>
                            <input type="text" id="fnazwisko" name="nazwisko" <? echo("value=".$row['nazwisko']) ?> class="form-control form-control-sm text-muted" placeholder="Nazwisko">
                        </div>
                        <div class="form-group">
                            <label for="fpesel">PESEL: </label>
                            <input type="text" id="fpesel" name="pesel" <? echo("value="."'".$row['pesel']."'") ?> class="form-control form-control-sm text-muted">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Modyfikuj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


