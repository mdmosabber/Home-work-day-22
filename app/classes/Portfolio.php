<?php

namespace App\classes;
use App\classes\Database;

class Portfolio
{
        public function adminLoginCheck($data){
            $email = $data['email'];
            $password = md5( $data['password'] ) ;

            $sql = " SELECT * FROM `portfolioinfos` WHERE email ='$email' AND password = '$password' ";

            if(  mysqli_query(Database::dbConnection(),$sql) ){
                $queryResult = mysqli_query(Database::dbConnection(),$sql);

               $singleResult = mysqli_fetch_assoc($queryResult);

                if($singleResult){
                    header('Location: ../portfolio/index.php');
                }else{
                    $message= "Please insert valid email and password";
                    return $message;
                }

            }else{
                die("Query Problem".mysqli_error(Database::dbConnection()));
            }




        }
}