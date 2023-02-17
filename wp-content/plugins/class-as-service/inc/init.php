<?php
/**
 *  @package ClassAsService
 */

 namespace Inc;

class Init{
    //storing classes in an array 
    public static function get_services(){
        return [
            Pages\Admin::class,
            Base\SettingsLink::class,
            Base\Enqueue::class
        ];
    }

    // looping through the classes and initializing if register method exists
    public static function register_services(){
        foreach(self::get_services() as $class){
            $service = self::instantiate($class);
            if (method_exists($service, 'register')){
                $service->register();
            }
        }
    }
    //instantiating the classes
    private static function instantiate($class){
        $service = new $class();
        return $service;
    }
}