<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit46beb34df20db08a4e60a1084eec78a4
{
    public static $files = array (
        '091bb482e31030af96936a1127ccdf46' => __DIR__ . '/../..' . '/core/Functions/pa.php',
        '632f4deffadac08b8ceb28a5a5e426e1' => __DIR__ . '/../..' . '/core/Functions/pn.php',
        'ad1daf2aa123e565e53965b3bc86a542' => __DIR__ . '/../..' . '/core/Config.php',
        'f48a0310568b8971be5844279ca77b12' => __DIR__ . '/../..' . '/core/Model.php',
        '93da09a2cc7688dda67d8076b828bd92' => __DIR__ . '/../..' . '/core/Registr.php',
        'b650c1d675421a0e33cc39d60e6b50cd' => __DIR__ . '/../..' . '/core/Route.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Views\\' => 10,
            'App\\Models\\' => 11,
            'App\\Controllers\\' => 16,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Views\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit46beb34df20db08a4e60a1084eec78a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit46beb34df20db08a4e60a1084eec78a4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit46beb34df20db08a4e60a1084eec78a4::$classMap;

        }, null, ClassLoader::class);
    }
}
