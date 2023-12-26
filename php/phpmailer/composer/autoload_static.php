<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf45655bb8a323fe3769712ca7923b1a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf45655bb8a323fe3769712ca7923b1a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf45655bb8a323fe3769712ca7923b1a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaf45655bb8a323fe3769712ca7923b1a::$classMap;

        }, null, ClassLoader::class);
    }
}
