<?php

// class MaClasse
// {
//   private $attributs = [];
//   private $unAttributPrive;
//
//   public function __set($nom, $valeur)
//   {
//     $this->attributs[$nom] = $valeur;
//   }
//
//   public function __get($nom)
//   {
//     if (isset($this->attributs[$nom]))
//     {
//       return $this->attributs[$nom];
//     }
//   }
//
//   public function __isset($nom)
//   {
//     return isset($this->attributs[$nom]);
//   }
//   public function __unset($nom){
//     if (isset($this->attributs[$nom])){
//       unset($this->attributs[$nom]);
//     }
//   }
// }
// class MaClasse
// {
//   public function __call($nom, $arguments)
//   {
//     echo 'La méthode <strong>', $nom, '</strong> a été appelée alors qu\'elle n\'existe pas ! Ses arguments étaient les suivants : <strong>', implode($arguments, '</strong>, <strong>'), '</strong> <br>';
//   }
//
//   public static function __callStatic($nom, $arguments){
//     echo 'La méthode <strong>', $nom, '</strong> a été appelée dans un contexte statique alors qu\'elle n\'existe pas ! Ses arguments étaient les suivants : <strong>', implode ($arguments, '</strong>, <strong>'), '</strong><br />';
//   }
// }
 ?>
