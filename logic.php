<?php

function errorName($name)
{
    if (empty($name)) {
        return "Name is required";
    }

    return "";
}
