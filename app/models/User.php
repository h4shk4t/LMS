<?php

namespace Model;

class User{
    public static function register($username, $name, $eno, $hash){
        $db = DB::get_instance();
        $stmnt = $db->prepare("INSERT INTO USERS (USERNAME, NAME, ENO, HASH, ADMIN) VALUES (:username,:name,:eno,:hash,:admin)");
        //Data to be inserted
        $stmnt->execute(array(":username" => $username,":name" => $name,":eno" => $eno,":hash" => $hash,":admin" => 0));
        echo "Succesfully registered! Login <a href='/login'>here</a>";
    }
    public static function login($username,$hash){
        $db = DB::get_instance();
        $stmnt = $db->prepare("SELECT USERNAME,HASH FROM USERS WHERE USERNAME = (:username)");
        $stmnt->execute(array(":username"=>$username));
        $row = $stmnt->fetch();
        //var_dump($row["HASH"]);
        //echo "<br>";
        //var_dump($hash);
        if (password_verify($hash,$row["HASH"])){
            session_start();
            $_SESSION["Username"] = $username;
            $_SESSION["isLoggedIn"] = 1;
            $_SESSION["isAdmin"] = 0;
            //var_dump($_SESSION["Username"]);
            //var_dump($_SESSION["isLoggedIn"]);
            //var_dump($_SESSION["isAdmin"]);
            //die();  
            header('Location: /');
        }
        else{
            echo "Incorrect Password";
        }
    }
    public static function getUsersBID(){
        $db = DB::get_instance();
        $stmnt = $db->prepare("SELECT * FROM BOOKS WHERE BOOKID != NULL");
        $stmnt->execute();
        $rows = $stmnt->fetch();
        return $rows;
    }
}

?>