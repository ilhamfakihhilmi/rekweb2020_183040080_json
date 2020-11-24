<?php

$mahasiswa = [
    [
        "nama"  => "Ilham fakih Hilmi",
        "nrp"   => "183040080",
        "email" => "ilhamfakih@gmail.com"
    ],
    [
        "nama"  => "Ilham Fakih Hilmi",
        "nrp"   => "183040080",
        "email" => "ilhamfakih@gmail.com"
    ]
];

$data = json_encode($mahasiswa);
echo $data;
