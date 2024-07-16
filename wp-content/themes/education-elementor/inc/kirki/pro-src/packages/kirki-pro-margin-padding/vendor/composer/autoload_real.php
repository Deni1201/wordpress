<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdcc6b1a8cec7267c7e011f71f11c7c7e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitdcc6b1a8cec7267c7e011f71f11c7c7e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdcc6b1a8cec7267c7e011f71f11c7c7e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdcc6b1a8cec7267c7e011f71f11c7c7e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
