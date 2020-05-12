<?php
spl_autoload_register(function ($className) {

    $directorys = array(
        "class\\",
        "class\\Pokemons\\",
        );
    foreach($directorys as $directory){
        $file = __DIR__ . '\\' . $directory . $className . '.php';
        $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);

        if (file_exists($file)) {
            require $file;
            return;
        }
    }
});
