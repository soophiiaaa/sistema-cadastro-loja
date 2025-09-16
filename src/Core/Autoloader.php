<?php

spl_autoload_register(
    function (string $className)
    {
        $fullPath = str_replace('Lacerda\\Commercial', 'src', $className);
        $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $fullPath);
        $filePath .= '.php';

        if (file_exists($filePath)) {
            require_once $filePath;
        }
    });
