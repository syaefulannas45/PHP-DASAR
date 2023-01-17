<?php

//di PHP ada null coalescing operator menggunakan tanda ??

$data = [];
$action = $data["action"] ?? "nothing";
echo $action;