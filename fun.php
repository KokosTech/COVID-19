<?php 
    function print_num($ur , $n){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $ur,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);

        //Split the output into an array that we can loop through line by line
        $array = preg_split('/\n/',$response);
        //For each line in the output

        curl_close($curl);


        $int = (int) filter_var($array[$n], FILTER_SANITIZE_NUMBER_INT);
        echo $int = number_format($int, 0, '. ', ' ');
    }
?>