<?php
class DB extends DBmysql {
   // Cambia 'localhost' por el host de Railway
   public $dbhost = 'junction.proxy.rlwy.net';
   
   // Cambia 'root' por el usuario proporcionado por Railway
   public $dbuser = 'root';
   
   // La contraseña proporcionada por Railway
   public $dbpassword = 'cMYbDYzMdjxwyOrySBNoUIKovxrPiCMg';
   
   // Cambia 'apidian' por el nombre de la base de datos en Railway
   public $dbdefault = 'railway';
   
   // Railway utiliza el puerto 14281, por lo que debes asegurarte de incluirlo correctamente
   public $dbport = 14281;
   
   // Mantén los demás valores según sea necesario
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
