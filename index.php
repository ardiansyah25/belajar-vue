<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials:true');
header("Access-Control-Allow-Methods:Get,POST,OPTIONS");

echo "Simulasi Kirim Data<hr>";
print_r($_POST);
print_r($_FILES['cover']);
