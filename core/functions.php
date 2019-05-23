<?php

function getall($query, $fetch_style)
{
    $var = $conn->prepare($query);
    $var->execute();
    $res = $var->fetch($fetch_style);
    return $res;
}