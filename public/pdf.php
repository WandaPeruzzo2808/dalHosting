<? php
requiere  ' ../vendor/autoload.php ' ;
requiere  ' ../config/database.php ' ;
ob_start ();
$ productos  =  App \ Entities \ Product :: get ();
incluir  " ../resources/views/lists.php " ;
$ dompdf  =  nuevo  Dompdf \ Dompdf ();
$ dompdf -> loadHtml ( ob_get_clean ());
$ dompdf -> render ();
$ dompdf -> stream ();