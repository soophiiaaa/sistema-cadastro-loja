<?php

spl_autoload_register(
    function (string $className)
    {
        $baseDir = __DIR__ . '/../';
        $fullPath = str_replace('Lacerda\\Commercial', $baseDir, $className);
        $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $fullPath);
        $filePath .= '.php';

        if (file_exists($filePath)) {
            require_once $filePath;
        }
    });
