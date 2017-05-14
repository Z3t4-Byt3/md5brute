#!/usr/bin/php -q
<?php
#456b7016a916a4b178dd72b947c152b7
/*
    * RizeSec e o bixo
    * Codado por Fyk1ll
    * Quebra de md5
*/
    banner();
    if(strtoupper(substr(PHP_OS, 0, 1)) == "W"){
        echo "Nao e permitido win user :) \n";
        exit;
    }
    error_reporting(0);
    set_time_limit(0);
    $hash = $argv[1];
    $wordlist = file($argv[2]);
    foreach($wordlist as $line){
        $encrypt = md5($line);
        if($quebrar == false) {
            if ($encrypt == $hash){
                echo "\033[35m========================================================\n";
                echo "\033[36m\t\tEncontrado Palavra: $line";
                echo "\033[35m========================================================\n";
                $quebrar = true;
                }else{
                echo "\033[31mNao funcionou: $line";
            }
        }
    }
    if(isset($argv[1]) && $argv[1] == "-h" or $argv[1] == ""){
        help();
        exit;
    }
    function banner(){
        echo "\033[37m       
            ######                   #####                
            #     # # ###### ###### #     # ######  ####  
            #     # #     #  #      #       #      #    # 
            ######  #    #   #####   #####  #####  #      
            #   #   #   #    #            # #      #      
            #    #  #  #     #      #     # #      #    # 
            #     # # ###### ######  #####  ######  #### 
                    \033[1;m\t\t\t\033[33mSomos: Fyk1ll && Joker && SNM\033[1;m\n";

    }
    function help(){
        echo "
        ./md5brute hash wordlist\n\n";
    }
?>