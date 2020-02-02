<?php 
class master{
    function connection(){
        $connection = mysqli_connect('localhost','root','','teste');
        if(!$connection){
            return mysqli_error($connection);
        }else{
            return $connection;
        }
        mysqli_close($connection);
    }
    function insert($sql){
        $connection = $this->connection();
        $insert = mysqli_query($connection,$sql);
        if(!$insert){
            return false;
        }else{
            return true;
        }
        mysqli_close($connection);
    }
    function selectall(){
        $sql = 'select nome,username from usuarios;';
        $connection = $this->connection();
        $query = mysqli_query($connection,$sql);
        while($result = mysqli_fetch_array($query)){
            echo 'Your name is '.$result['nome'].' and your user is '.$result['username'].'</br>';
        }
        mysqli_close($connection);
    }
    function selectone($sql){
        $connection = $this->connection();
        $query = mysqli_query($connection,$sql);
        if($result = mysqli_fetch_array($query)){
            echo 'Your name is '.$result['nome'].' and your user is '.$result['username'].'</br>';
        }else{
            echo 'Error';
        }
        mysqli_close($connection);
    }
    function update($sql){
        $connection = $this->connection();
        $query = mysqli_query($connection,$sql);
        if(!$query){
            return false;
        }else{
            return true;
        }
        mysqli_close($connection);
    }
    function delete(){
        $connection = $this->connection();
        $query = mysqli_query($connection,"delete from usuarios where username='wawa67' and senha='142'");
        if(!$query){
            return false;
        }else{
            return true;
        }
        mysqli_close($connection);
    }
}