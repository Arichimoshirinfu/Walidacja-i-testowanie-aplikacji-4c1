<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz rejestracyjny</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
#  Weryfikacja błędów
    $roksz_error = false;
    $imie_error = false;
    $nazwisko_error = false;
    $data_error = false;
    $pesel_error = false;
    $email_error = false;
    $klasa_error = false;
    $zgoda_error = false;
    $wybor_error = false;

    $roksz_error2 = false;
    $imie_error2 = false;
    $nazwisko_error2 = false;
    $data_error2 = false;
    $pesel_error2 = false;
    $email_error2 = false;
    $klasa_error2 = false;
    $zgoda_error2 = false;
    $wybor_error2 = false;

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(empty($_POST['rszkol'])){
        $roksz_error = '<span class="red">Podaj rok szkolny</span>';
        $roksz_error2 = true;
    }
    if(empty($_POST['imie'])){
        $imie_error = '<span class="red">Podaj imię</span>';
        $imie_error2 = true;
    }
    if(empty($_POST['nazwisko'])){
        $nazwisko_error = '<span class="red">Podaj nazwisko</span>';
        $nazwisko_error2 = true;
    }
    if(empty($_POST['dataur'])){
        $data_error = '<span class="red">Podaj datę</span>';
        $data_error2 = true;
    }
    if(empty($_POST['pesel']) || strlen($_POST['pesel']) != 11){
        $pesel_error = '<span class="red">Podaj PESEL</span>';
        $pesel_error2 = true;
    }
    if(empty($_POST['email'])){
        $email_error = '<span class="red">Podaj email</span>';
        $email_error2 = true;
    }
    if(empty($_POST['klasa'])){
        $klasa_error = '<span class="red">Wybierz klasę</span>';
        $klasa_error2 = true;
    }
    if(isset($_POST['zgoda']) && empty($_POST['zgoda'])){}
    else{
        $zgoda_error = '<span class="red">Zaznacz zgodę';
        $zgoda_error2 = true;
    }
    if((isset($_POST['wybor-matura[]']) && count($_POST["wybor-matura[]"]) > 5 )|| !isset($_POST['wybor-matura[]'])){
        $wybor_error = '<span class="red">Wybierz przedioty maturalne</span>';
        $wybor_error2 = true;
    }
}

?>

<div class="fcolor">
<form method="post">

<label for="rszkol"><span class="red"><sup>*</sup></span>Rok szkolny:</label>
<input class="<?= $roksz_error2 == true ? "red2" : '' ?>" type="text" name="rszkol" id="rszkol"><br>
<?= $roksz_error ?>

<hr>

<label for="imie"><span class="red"><sup>*</sup></span>Imię:</label>
<input class="<?= $imie_error2 == true ? "red2" : '' ?>" type="text" name="imie" id="imie"><br>
<?= $imie_error ?>

<hr>

<label for="nazwisko"><span class="red"><sup>*</sup></span>Nazwisko:</label>
<input class="<?= $nazwisko_error2 == true ? "red2" : '' ?>" type="text" name="nazwisko" id="nazwisko"><br>
<?= $nazwisko_error ?>

<hr>

<label for="dataur"><span class="red"><sup>*</sup></span>Data urodzenia:</label>
<input class="<?= $data_error2 == true ? "red2" : '' ?>" type="date" name="dataur" id="dataur"><br>
<?= $data_error ?>

<hr>

<label for="pesel"><span class="red"><sup>*</sup></span>PESEL:</label>
<input class="<?= $pesel_error2 == true ? "red2" : '' ?>" type="text" name="pesel" maxlength="11" id="pesel"><br>
<?= $pesel_error ?>

<hr>

<label for="email"><span class="red"><sup>*</sup></span>Adres email:</label>
<input class="<?= $email_error2 == true ? "red2" : '' ?>" type="text" name="email" id="email"><br>
<?= $email_error ?>

<hr>

Trudności w uczeniu:<br>
<table>

<tr>
<td><input type="checkbox" name="trudnosciwucz" id="trudnosciwucz" value="dysleksja"></td>
<td><label for="dysleksja">Dysleksja</label></td>
</tr>

<tr>
<td><input type="checkbox" name="trudnosciwucz" id="dysgrafia" value="dysgrafia"></td>
<td><label for="dysgrafia">Dysgrafia</label></td>
</tr>

<tr>
<td><input type="checkbox" name="trudnosciwucz" id="dysortografia" value="dysortografia"></td>
<td><label for="dysortografia">Dysortografia</label></td>
</tr>

<tr>
<td><input type="checkbox" name="trudnosciwucz" id="dyskalkulia"></td>
<td><label for="dyskalkulia" value="dyskalkulia">Dyskalkulia</label></td>
</tr>

</table>


<hr>

<span class="red"><sup>*</sup></span>Klasa:<br>
<div class="<?= $klasa_error2 == true ? "red2" : '' ?>">
<input type="radio" name="klasa" id="a" value="a">
<label for="a">A</label><br>

<input type="radio" name="klasa" id="b">
<label for="b">B</label><br>

<input type="radio" name="klasa" id="c" value="c">
<label for="c">C</label><br>

<input type="radio" name="klasa" id="d" value="d">
<label for="d">D</label><br>

<input type="radio" name="klasa" id="f" value="f">
<label for="f">F</label><br>

<input type="radio" name="klasa" id="p" value="p">
<label for="p">P</label><br>

<input type="radio" name="klasa" id="r" value="r">
<label for="r">R</label><br>
</div><br>
<?= $klasa_error ?>

<hr>

<span class="red"><sup>*</sup></span>Wybór przedmiotów maturalnych: (max 5 przedmiotów) <br>
<div class="<?= $wybor_error2 == true ? "red2" : '' ?>">
<table>

<tr>
<td><input type="checkbox" name="wybor-matura[]" id="biologia" value="biologia"></td>
<td><label for="biologia">Biologia</label></td>
</tr>

<tr>
<td><input type="checkbox" name="wybor-matura[]" id="chemia" value="chemia"></td>
<td><label for="chemia">Chemia</label></td>
</tr>

<tr>
<td><input type="checkbox" name="wybor-matura[]" id="filozofia" value="filozofia"></td>
<td><label for="filozofia">Filozofia</label></td>
</tr>

<tr>
<td><input type="checkbox" name="wybor-matura[]" id="fizyka" value="fizyka"></td>
<td><label for="fizyka">Fizyka</label></td>
</tr>

<tr>
<td><input type="checkbox" name="wybor-matura[]" id="geografia" value="geografia"></td>
<td><label for="geografia">Geografia</label></td>
</tr>

<tr>
<td><input type="checkbox" name="wybor-matura[]" id="historia" value="historia"></td>
<td><label for="historia">Historia</label></td>
</tr>

<tr>
<td><input type="checkbox" name="wybor-matura[]" id="historia-muzyki" value="historia-muzyki"></td>
<td><label for="historia-muzyki">Historia muzyki</label></td>
</tr>

<tr>
<td><input type="checkbox" name="wybor-matura[]" id="historia-sztuki" value="historia-sztuki"></td>
<td><label for="historia-sztuki">Historia sztuki</label></td>
</tr>

<tr>
<td><input type="checkbox" name="wybor-matura[]" id="informatyka" value="informatyka"></td>
<td><label for="informatyka">Informatyka</label></td>
</tr>

<tr>
<td><input type="checkbox" name="wybor-matura[]" id="język-łaciński-i-kultura-antyczna" value="język-łaciński-i-kultura-antyczna"></td>
<td><label for="język-łaciński-i-kultura-antyczna">Język łaciński i kultura antyczna</label></td>
</tr>

<tr>
<td><input type="checkbox" name="wybor-matura[]" id="język-mniejszości-etnicznej" value="język-mniejszości-etnicznej"></td>
<td><label for="język-mniejszości-etnicznej">Język mniejszości etnicznej</label></td>
</tr>

<tr>
<td><input type="checkbox" name="wybor-matura[]" id="język mniejszości narodowej" value="język mniejszości narodowej"></td>
<td><label for="język mniejszości narodowej">Język mniejszości narodowej</label></td>
</tr>

<tr>
<td><input type="checkbox" name="wybor-matura[]" id="język-polski" value="język-polski"></td>
<td><label for="język-polski">Język polski</label></td>
</tr>

<tr>
<td><input type="checkbox" name="wybor-matura[]" id="język-regionalny" value="język-regionalny"></td>
<td><label for="język-regionalny">Język regionalny</label></td>
</tr>

<tr>
<td><input type="checkbox" name="wybor-matura[]" id="matematyka" value="matematyka"></td>
<td><label for="matematyka">Matematyka</label></td>
</tr>

<tr>
<td><input type="checkbox" name="wybor-matura[]" id="wiedza-o-społeczeństwie-(WOS)" value="wiedza-o-społeczeństwie-(WOS)"></td>
<td><label for="wiedza-o-społeczeństwie-(WOS)">Wiedza o społeczeństwie (WOS)</label></td>
</tr>


</table>
</div><br>
<?= $wybor_error ?>

<hr>

<label for="uwagi">Uwagi:</label><br>
<textarea name="uwagi" id="uwagi" cols="35" rows="4"></textarea><br>

<hr>

<div class="<?= $zgoda_error2 == true ? "red2" : '' ?>">
<label for="zgoda"><span class="red"><sup>*</sup></span>Wyrażam zgodę na przetwarzanie moich danych osobowych </label><input type="checkbox" name="zgoda" id="zgoda"><br>
</div><br>
<?= $zgoda_error ?>

<hr>

<button type="reset">Wyczyść dane</button><br>

<button type="submit">Wyślij</button>



</form>
</div>

</body>
</html>