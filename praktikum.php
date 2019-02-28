<?php
    mysql_connect("localhost","root","") or die("koneksi ke mysql gagal");
    mysql_select_db("session") or die("selek database gagal");

    $namaid = addslashes($namaid);


    $cheklogin = mysql_query("SELECT us_id FROM user WHERE (us_nama = '$namaid') AND (us_password = '$passwd')") or die(mysql_error());

   if (!mysql_num_rows($cheklogin))
   {  print "Anda tidak terdaftar, silakan register dulu";
   }
   else
   {   session_start();

       // set user id
       if ($row = mysql_fetch_array($cheklogin) or die(""))
       { $userid = $row[us_id];
       }

       $status = "1";  // set status login = 1
       header("location:index.php"); // ke halaman index
   }
   ?>