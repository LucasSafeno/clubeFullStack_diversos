<?php


$passwor_hash = password_hash('123', PASSWORD_DEFAULT);

$verified = password_verify('123', $passwor_hash);


if ($verified) {
    if (
        password_needs_rehash($passwor_hash, PASSWORD_DEFAULT, [
            'cost' => 13,
        ])
    ) {

        echo 'Need rehash';
    } else {
        echo 'Not need rehash';
    }
}



?>