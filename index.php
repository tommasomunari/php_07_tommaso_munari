<?php



// $lunghezza = false;
// $numero = false;
// $maiuscola = false;
// $speciale = false;



// controllo lunghezza

function checklunghezza($pass){
    if(strlen($pass)>=8){
        return true;
    }
    echo "la password deve essere di minimo 8 caratteri \n";
    return false;
};

// $lunghezza = checklunghezza($password);



// controllo numero

function checknumero($pass){
    for ($i=0; $i < strlen($pass); $i++) { 
        if(is_numeric($pass[$i])){
            return true;
        }
    }
    echo "inserire almeno un numero \n";
    return false;
}


// $numero = checknumero($password);





// controllo maiuscola

function checkmaiuscola($pass){
    for ($i=0; $i < strlen($pass); $i++) { 
        if(ctype_upper($pass[$i])){
            return true;
        }
    }
    echo "inserire almeno una lettera maiuscola \n";
    return false;
}


// $maiuscola = checkmaiuscola($password);






// controllo carattere speciale

function checkspecial($pass){
    $caratteri = ['!', '?', '&', '$', '@'];

    for ($i=0; $i < strlen($pass); $i++) { 
        if(in_array($pass[$i], $caratteri)){
            return true;
        }
    }
    echo "inserire almeno un carattere speciale \n";
    return false;
}

// $speciale = checkspecial($password);




// funzione del risultato finale

function risultato($parola){
    $lunghezza = checklunghezza($parola);
    $numero = checknumero($parola);
    $maiuscola = checkmaiuscola($parola);
    $speciale = checkspecial($parola);  

    if($lunghezza && $numero && $maiuscola && $speciale ){
        echo "corretta \n";
    }

    return $lunghezza && $numero && $maiuscola && $speciale;
}



// ciclo do while

do {
    $password = readline("inserisci la password:    \n");
} while (!risultato($password));
