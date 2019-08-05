<?php
    /**
     * Autoloader loads our class files recursively
     *
     * @package Autoloader
     * @author  Carl Andren <cjandren@gmail.com>
     */
     
class Autoloader
{
    protected static $fileExt = '.php';
    protected static $pathTop = __DIR__;
    protected static $fileIterator = null;
         
    public static function loader($className)
    {
        $directory = new RecursiveDirectoryIterator(static::$pathTop, RecursiveDirectoryIterator::SKIP_DOTS);
             
        if (is_null(static::$fileIterator)) {
            static::$fileIterator = new RecursiveIteratorIterator($directory, RecursiveIteratorIterator::LEAVES_ONLY);
        }
             
        $filename = $className . static::$fileExt;
             
        foreach (static::$fileIterator as $file) {
            if (strtolower($file->getFilename()) === strtolower($filename)) {
                if ($file->isReadable()) {
                         
                    include_once $file->getPathname();
                         
                }
                break;
            }
        }
    }
         
    public static function setFileExt($fileExt)
    {
        static::$fileExt = $fileExt;
    }
         
    public function setPath($path)
    {
        static::$pathTop = $path;
    }
    
}
    
    Autoloader::setFileExt('.php');
    spl_autoload_register('Autoloader::loader');
    