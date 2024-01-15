<?php 

// - -Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

// $numeri=[2,4,6,3,5,7,8];
// $sommaPari = 0;
// $conteggioPari = 0;

// foreach ($numeri as $numero){
        //                 if ($numero % 2 == 0) {
                //                                 $sommaPari += $numero;
                
                //                                 $conteggioPari++;
                
                //                         }
                //                 }
                
                //                 if ($conteggioPari > 0) {
                        //                                 $mediaPari = $sommaPari / $conteggioPari;
                        //                                 echo "La media dei numeri pari è: " . $mediaPari;
                        //                             } else {
                                //                                         echo "Non ci sono numeri pari nell'array.";
                                //                                     }
                                
                                
                                
                                
                                // - -Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere
                                // - `$users = [ ['name' => 'Pippo', 'surname' => 'Pluto', 'gender' => 'M'], ];`
                                //         $users = [ 
                                        //         ['name' => 'Pippo', 'surname' => 'Pluto', 'gender' => 'M'], 
                                        //         ['name' => 'Paperina', 'surname' => 'Papera', 'gender' => 'F']
                                        // ];
                                        // foreach($users as $user){
                                                //         if ($user["gender"] == "M") {
                                                        //                 var_dump("Buongiorno Sig. $user[name] $user[surname]");
                                                        //         }else{
                                                                //                 var_dump("Buongiorno Sig.ra $user[name] $user[surname]");
                                                                //         }
                                                                // }
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                // - -Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".
                                                                
                                                         for ($i=1; $i <=100 ; $i++) { 
                                                                if ($i % 3 == 0 && $i % 5 == 0 ) {
                                                                        echo "HACKADEMY \n";
                                                                }elseif ($i % 3 == 0) {
                                                                       echo "PHP \n";
                                                                }elseif ($i % 5 == 0){
                                                                        echo "JAVASCRIPT \n";
                                                                }else{
                                                                        echo "$i \n";
                                                                }
                                                         }