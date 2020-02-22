<?php
try{
	echo "Przed błędem <br />";
	throw new Exception("Błąd");
	echo "ok";//Nie wykonuje się. Chyba, że zakomentuje się powyższą lijnikę, to się wykona.
}
catch(Exception $x){
	echo $x->getMessage();
}
?>
