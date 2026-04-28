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
    if($_SERVER['REQUEST_METHOD'] === 'POST')
        if(empty($_POST["rszkol"]) || strpos($_POST['rszkol'], '/') == FALSE){
            $error = TRUE;
            $error_rszkol = "error"
        }
        if(empty($_POST['imie'])){
            $error = TRUE;
            $error_imie = 'error';
        }
    ?>

<form method="post">

<label for="rszkol">Rok szkolny:</label>    
<input type="text" name="rszkol" id="rszkol"><br>



<label for="imie">Imię:</label>
<input type="text" name="imie" id="imie"><br>



<label for="nazwisko">Nazwisko:</label>
<input type="text" name="nazwisko" id="nazwisko"><br>



<label for="dataur">Data urodzenia:</label>
<input type="date" name="dataur" id="dataur"><br>



<label for="pesel">PESEL:</label>
<input type="text" name="pesel" id="pesel"><br>



<label for="email">Adres email:</label>
<input type="text" name="email" id="email"><br>



Trudności w uczeniu:<br>
<input type="checkbox" name="trudnosciwucz" id="trudnosciwucz" value="dysleksja">
<label for="dysleksja">Dysleksja</label><br>

<input type="checkbox" name="trudnosciwucz" id="dysgrafia" value="dysgrafia">
<label for="dysgrafia">Dysgrafia</label><br>

<input type="checkbox" name="trudnosciwucz" id="dysortografia" value="dysortografia">
<label for="dysortografia">Dysortografia</label><br>

<input type="checkbox" name="trudnosciwucz" id="dyskalkulia">
<label for="dyskalkulia" value="dyskalkulia">Dyskalkulia</label><br>



Klasa:<br>
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



Wybór przedmiotów maturalnych:<br>

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



<label for="uwagi">Uwagi:</label><br>
<textarea name="uwagi" id="uwagi" cols="15" rows="5"></textarea><br>



<input type="checkbox" name="zgoda" id="zgoda"><label for="zgoda">Wyrażam zgodę na przetwarzanie moich danych osobowych</label><br>



<button type="reset">Wyczyść dane</button><br>

<button type="submit">Wyślij</button>


</form>
<pre><?php print_r($_POST) ?></pre>

</body>
</html>