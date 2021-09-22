# calcHashMD5
Biblioteca para calcular Hash MD5 de conteúdos de arquivos XML.

# EXEMPLO
```php
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
