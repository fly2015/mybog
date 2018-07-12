<?php 
  class DBAccessor{
      public static function DBconnection(){
      $con = mysqli_connect("localhost","root","","myblog");
      $con->set_charset("utf8");
      // Check connection
      if (mysqli_connect_errno())
        {
          return mysqli_connect_error();
        }

      return $con;  
    }

    public static function closeConnect($con){
      mysqli_close($con);
    }
  }
