<?php
// class Mere{
//   public static function lancerTest(){
//     static::quiEstCe();
//   }
//
//   public static function quiEstCe(){
//     echo 'je suis la mere';
//   }
// }
//
// class Enfant extends Mere{
//   public static function quiEstCe(){
//     echo 'je suis enfant';
//   }
// }
// Enfant::lancerTest();
// // $test = new Enfant;
// // $test->lancerTest();

class A
{
  public static function test()
  {
    self::appelerQuiEstCe();
  }
  public static function appelerQuiEstCe()
  {
    static::quiEstCe();
  }

  public static function quiEstCe()
  {
    echo 'A';
  }
}

class B extends A
{

  public static function quiEstCe()
  {
    echo 'B';
  }
}

class C extends B
{
  public static function quiEstCe()
  {
    echo 'C';
  }
}

C::test(); ?>
