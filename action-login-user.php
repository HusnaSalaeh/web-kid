<?php 
session_start();
        if(isset($_POST['email'])){
				//connection
                  include("condb.php");
				//รับค่า user & m_password
                  $email = $_POST['email'];
                  $password = md5($_POST['password']);
				//query 
                  $sql="SELECT * FROM tbl_user 
                  WHERE  email='".$email."' 
                  AND  password='".$password."' ";

                  // echo $sql;

                  // exit;

                  $result = mysqli_query($condb,$sql);



                  // echo mysqli_num_rows($result);

                  // exit;
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["user_id"] = $row["user_id"];
                      //$_SESSION["m_name"] = $row["m_name"];
                      $_SESSION["user_level"] = $row["user_level"];

                      if($_SESSION["user_level"]=="admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        //echo 'R U ADMIN';

                        Header("Location: admin/");

                      }

                      if($_SESSION["user_level"]=="user"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
                        //echo 'R U MEMBER';

                        //insert login log
                 $ref_user_id = $_SESSION["user_id"];  
                 
                 // echo 'ref_m_id = '.$ref_m_id;
                 // exit;     

                $sql2 = "INSERT INTO tbl_login_user
                (
                ref_user_id
                )
                VALUES
                (
                $ref_user_id
                )
                ";

          $result2 = mysqli_query($condb, $sql2) or die ("Error in query: $sql " . mysqli_error());

          // echo $sql2;

          // exit; 
                       Header("Location: user/");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" email หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: index.php"); //user & m_password incorrect back to login again

        }
?>