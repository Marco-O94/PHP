<h1>
    Le Funzioni in PHP (Vedere il codice php)
</h1>
<?php
// Funzioni utilizzate in PHP

/* ========= INCLUDE() e REQUIRE() ========= 
* Include e Require permettono di includere file esterni.
* La differenza tra i due risiede nel comportamento in presenza di errori:
* - Include() genera un warning ma lo script continuerà la propria esecuzione;
* - Require() genera un errore e ne interrompe l'esecuzione.
*/

/* === iclude_once() e require_once() ===
* Se il codice del file è già stato incluso, non verrà incluso nuovamente */

/* ========= PERCORSI DI RICERCA ========= */
/* === include_path === 
* specifica un elenco di directory all'interno delle quali l'istruzione include cercherà i file.
* viene definito come un elenco di directory.
*/

/* === allow_url_fopen === 
* Permette se impostata ad on l'accesso ad oggetti tramite percorsi indicati tramite URL.
*/

/* ========= EMPTY() ========= 
* Ritorna un booleano in base al contenuto della variabile:
* Se la variabile è vuota ritorna un TRUE, altrimenti un FALSE */

?>
<h3>La funzione empty()</h3>
<?php
$var_test = 1;
$var_test2 = "";

if(empty($var_test) == true) {
    echo "La varibile var_test è vuota";
}elseif(empty($var_test2) == true) {
    echo "La variabile var_test2 è vuota";
}else{
    echo "<br> Una delle due variabili non è vuota";
}
?>
<h3>La funzione isset()</h3>
<?php
/* ========= ISSET() ========= 
* Permette di verificare l'esistenza di una o più variabili.
* Ritorna un booleano: TRUE se la variabile esiste, altrimenti FALSE.
*/


$var_esistente = "Ciao, esisto!";

if(isset($var_esistente)) {
echo $var_esistente;
}

if(isset($var_nonEsistente)) {
    echo $var_nonEsistente;
} else {
    echo "<br>La variabile var_nonEsistente non esiste";
}
?>
<h3>La funzione unset()</h3>
<?php
/* ========= unset() ========= 
* Permette di eliminare la componente di un array o una variabile.
*/

$s = array("a", "b", "c", "d");
print_r($s);
echo "<br>";
unset($s[2]);
print_r($s);
echo "<br>";
$a = "Variabile a";
unset($a);
// Se si prova a richiamare la variabile ritornerà errore.

?>
<h3>La funzione is_string()</h3>
<?php
/* ========= is_string() ========= 
* Ritorna una booleana: Se la variabile è una stringa allora TRUE, altrimenti FALSE.
*/
$st = "Ciao mondo!";
echo $st . "<br>";
if(is_string($st)) {
    echo "La variabile è una stringa";
}else{
    echo "La variabile non è una stringa";
}

?>
<h3>La funzione is_string()</h3>
<?php
/* ========= is_numeric() ========= 
* Ritorna una booleana: Se la variabile è di tipo numerico allora TRUE, altrimenti FALSE.
*/
$num = 5;
echo $num . "<br>";
if(is_numeric($num)) {
    echo "La variabile è un numero";
}else{
    echo "La variabile non è un numero";
}

/* ========= LE FUNZIONI PER GESTIONE STRINGHE ========= */
/* === trim() ===  (Pagina: 153) */



