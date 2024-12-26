<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd21c2787b1318423c66021204358f835
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        'ac41265bed84c38c071380c43dd7fc7c' => __DIR__ . '/../..' . '/src/Controller.php',
        '293b13cfd3c17bedbce9c577c667a395' => __DIR__ . '/../..' . '/src/View.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Staticnur\\Hangman\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Staticnur\\Hangman\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd21c2787b1318423c66021204358f835::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd21c2787b1318423c66021204358f835::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd21c2787b1318423c66021204358f835::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd21c2787b1318423c66021204358f835::$classMap;

        }, null, ClassLoader::class);
    }
}