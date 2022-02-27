<?php

spl_autoload_register(function ($class) {
    // Adapt this depending on your directory structure
    $parts = explode('\\', $class);
    include implode('/', $parts) . '.php';
});
