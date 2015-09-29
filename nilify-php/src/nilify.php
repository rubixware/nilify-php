<?php
namespace Rubixware;

trait Nilify {

  public function nilify($methods){
    self::nilify_methods($methods);
  }

  public function nilify_from($class_name){
    nilify_methods($clas_name.instance_methods);
  }

  public function nilify_methods($methods){
    foreach ($methods as $method) {
      $this->{$method} = self::mock($method);
    }
  }

  public function mock($method){
    return $method . ' is a mock method';
  }

}
