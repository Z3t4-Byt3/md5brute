#!/usr/bin/php -q
<?php
#21232f297a57a5a743894a0e4a801fc3
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
	$ok = str_replace("\r", "", $line);
	$ok = str_replace("\n", "", $line);
        $encrypt = md5($ok);
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
