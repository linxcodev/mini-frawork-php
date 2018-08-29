<?php

// function untuk meload file otomatis
spl_autoload_register(function ($class) {
    include 'Core/' . $class . '.php';
});
