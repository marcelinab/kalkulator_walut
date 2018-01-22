<?php

function get_rate($currency, $date){
    $url = 'http://api.nbp.pl/api/exchangerates/rates/c/'.$currency.'/'.$date.'/?format=json';
    $data = json_decode(file_get_contents($url), true);
    return $data["rates"][0];
}