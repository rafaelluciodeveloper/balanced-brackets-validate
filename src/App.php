<?php

declare(strict_types=1);

namespace App;

class App
{
  public static function upServer(): void
  {
    echo 'Servidor Php Rodando!';
  }

  public static function isBalancedBrackets($expression) {
    $stack = array();
    foreach(str_split($expression) as $c){
        if($c=='(')
            array_push($stack,')');
        else if($c=='{')
            array_push($stack,'}');
        else if($c=='[')
           array_push($stack,']');
        else if(empty($stack)||array_pop($stack) != $c )
           return false;
    }
           return (empty($stack));
  }
}