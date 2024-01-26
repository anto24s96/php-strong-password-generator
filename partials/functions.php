<?php 
    /* CREO FUNZIONE PER GENERARE LA PASSWORD */
    function passwordGen($passLength){
        /* CREO UNA VARIABILE CONTENENTE TUTTI I CARATTERI CHE VERRANNO GENERATI */
        $allCar = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-_+<>[]{}';
        
        /* INIZIALIZZO UNA VARIABILE CHE CONTERRA' LA PASSWORD GENERATA */
        $pass = '';
        
        /* CREO UN CICLO PER OTTENERE UN CARATTERE RANDOMICO */
        for ($i=0; $i < $passLength; $i++) { 
            $pass .= $allCar[rand(0, strlen($allCar) - 1)];
        }

        return $pass;
    };    
?>