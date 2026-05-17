<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz rejestracyjny</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 

if($_SERVER["REQUEST_METHOD"] === "POST")
    if(empty($_POST['rszkol'])){
        $roksz_error = 'Podaj rok szkolny';
    }
    if(empty($_POST['imie'])){
        $imie_error = 'Podaj imię';
    }
    if(empty($_POST['nazwisko'])){
        $nazwisko_error = 'Podaj nazwisko';
    }
    if(empty($_POST['dataur'])){
        $data_error = 'Podaj datę';
    }
    if(empty($_POST['pesel'])){
        $pesel_error = 'Podaj PESEL';
    }
    if(empty($_POST['email'])){
        $email_error = 'Podaj email';
    }
    if(empty($_POST['klasa'])){
        $klasa_error = 'Wybierz klasę';
    }
    if(isset($_POST['zgoda']) && empty($_POST['zgoda'])){
        $zgoda_error = 'Zaznacz zgodę';
    }


?>


<div class="fcolor">
<form method="post">

<label for="rszkol"><span class="red"><sup>(wymagane)</sup></span>Rok szkolny:</label>
<input type="text" name="rszkol" id="rszkol"><br>

<hr>

<label for="imie"><span class="red"><sup>(wymagane)</sup></span>Imię:</label>
<input type="text" name="imie" id="imie"><br>

<hr>

<label for="nazwisko"><span class="red"><sup>(wymagane)</sup></span>Nazwisko:</label>
<input type="text" name="nazwisko" id="nazwisko"><br>

<hr>

<label for="dataur"><span class="red"><sup>(wymagane)</sup></span>Data urodzenia:</label>
<input type="date" name="dataur" id="dataur"><br>

<hr>

<label for="pesel"><span class="red"><sup>(wymagane)</sup></span>PESEL:</label>
<input type="text" name="pesel" maxlength="11" id="pesel"><br>

<hr>

<label for="email"><span class="red"><sup>(wymagane)</sup></span>Adres email:</label>
<input type="text" name="email" id="email"><br>

<hr>

Trudności w uczeniu:<br>
<input type="checkbox" name="trudnosciwucz" id="trudnosciwucz" value="dysleksja">
<label for="dysleksja">Dysleksja</label><br>

<input type="checkbox" name="trudnosciwucz" id="dysgrafia" value="dysgrafia">
<label for="dysgrafia">Dysgrafia</label><br>

<input type="checkbox" name="trudnosciwucz" id="dysortografia" value="dysortografia">
<label for="dysortografia">Dysortografia</label><br>

<input type="checkbox" name="trudnosciwucz" id="dyskalkulia">
<label for="dyskalkulia" value="dyskalkulia">Dyskalkulia</label><br>

<hr>

<span class="red"><sup>(wymagane)</sup></span>Klasa:<br>
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

<hr>

<span class="red"><sup>(wymagane)</sup></span>Wybór przedmiotów maturalnych: (max 5 przedmiotów) <br>

<input type="checkbox" name="wybor-matura" id="biologia" value="biologia">
<label for="biologia">Biologia</label><br>

<input type="checkbox" name="wybor-matura" id="chemia" value="chemia">
<label for="chemia">Chemia</label><br>

<input type="checkbox" name="wybor-matura" id="filozofia" value="filozofia">
<label for="filozofia">Filozofia</label><br>

<input type="checkbox" name="wybor-matura" id="fizyka" value="fizyka">
<label for="fizyka">Fizyka</label><br>

<input type="checkbox" name="wybor-matura" id="geografia" value="geografia">
<label for="geografia">Geografia</label><br>

<input type="checkbox" name="wybor-matura" id="historia" value="historia">
<label for="historia">Historia</label><br>

<input type="checkbox" name="wybor-matura" id="historia-muzyki" value="historia-muzyki">
<label for="historia-muzyki">Historia muzyki</label><br>

<input type="checkbox" name="wybor-matura" id="historia-sztuki" value="historia-sztuki">
<label for="historia-sztuki">Historia sztuki</label><br>

<input type="checkbox" name="wybor-matura" id="informatyka" value="informatyka">
<label for="informatyka">Informatyka</label><br>

<input type="checkbox" name="wybor-matura" id="język-łaciński-i-kultura-antyczna" value="język-łaciński-i-kultura-antyczna">
<label for="język-łaciński-i-kultura-antyczna">Język łaciński i kultura antyczna</label><br>

<input type="checkbox" name="wybor-matura" id="język-mniejszości-etnicznej" value="język-mniejszości-etnicznej">
<label for="język-mniejszości-etnicznej">Język mniejszości etnicznej</label><br>

<input type="checkbox" name="wybor-matura" id="język mniejszości narodowej" value="język mniejszości narodowej">
<label for="język mniejszości narodowej">Język mniejszości narodowej</label><br>

<input type="checkbox" name="wybor-matura" id="język-polski" value="język-polski">
<label for="język-polski">Język polski</label><br>

<input type="checkbox" name="wybor-matura" id="język-regionalny" value="język-regionalny">
<label for="język-regionalny">Język regionalny</label><br>

<input type="checkbox" name="wybor-matura" id="matematyka" value="matematyka">
<label for="matematyka">Matematyka</label><br>

<input type="checkbox" name="wybor-matura" id="wiedza-o-społeczeństwie-(WOS)" value="wiedza-o-społeczeństwie-(WOS)">
<label for="wiedza-o-społeczeństwie-(WOS)">Wiedza o społeczeństwie (WOS)</label><br>

<hr>

<label for="uwagi">Uwagi:</label><br>
<textarea name="uwagi" id="uwagi" cols="35" rows="4"></textarea><br>

<hr>

<input type="checkbox" name="zgoda" id="zgoda"><label for="zgoda"><span class="red"><sup>(wymagane)</sup></span>Wyrażam zgodę na przetwarzanie moich danych osobowych</label><br>

<hr>

<button type="reset">Wyczyść dane</button><br>

<button type="submit">Wyślij</button>

<pre><?php print_r($_POST) ?></pre>

</form>
</div>
</body>
</html>