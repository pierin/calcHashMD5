<?php

/**
 * Concatena todos valores do Array
 *
 * @param $arrayData Array com os dados
 * @return string Valores concatenados
 */
function concatArrayValues($arrayData)
{
    $result = '';

    if (is_array($arrayData)) {
        foreach ($arrayData as $value) {
            if (is_array($value)) {
                $result .= concatArrayValues($value);
            } else {
                $result .= $value;
            }
        }
    } else {
        $result .= $arrayData;
    }
    return $result;
}


/**
 * Calcula Hash MD5 dos valores do Array
 *
 * @param $array Array com os dados
 * @return string Hash MD5 dos dados
 */
function calcMD5($array)
{

    if (isset($array['hash'])) {
        unset($array['hash']);
    }
    return md5(concatArrayValues($array));
}


# EXEMPLO
$xml = array(
    "firstName" => "Leandro",
    "lastName" => "Pierin",
    "contact" => array(
        "email" => "leandro@pierin.com",
        "phone" => "55 99999 9999",
    )
);
$xml['hash'] = calcMD5($xml);

print_r($xml);

# SAIDA
/*
Array
(
    [firstName] => Leandro
    [lastName] => Pierin
    [contact] => Array
        (
            [email] => leandro@pierin.com
            [phone] => 55 99999 9999
        )

    [hash] => e7bce18d6faf970c7d2e9e13a81fb3ab
)
*/
