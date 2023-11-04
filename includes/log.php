<?php 

if (isset($_POST['sub-button'])){
    $errors = array();
    $user = mysqli_escape_string($connect, $_POST['user']);
    $password = mysqli_escape_string($connect, $_POST['password']);

    if (empty($user) or empty($password)){
        $errors[] = "<li>Campo usuário e/ou senha vazio</li>";
    }
    else {
        $sql = "SELECT user FROM login WHERE user = '$user'";
        $result = mysqli_query($connect,$sql);
        
        if (mysqli_num_rows($result) >=1){
            $password = md5($password);
            $sql = "SELECT * FROM login WHERE user ='$user' AND password ='$password'";
            $result = mysqli_query($connect,$sql);

            if (mysqli_num_rows($result) == 1){
                $data = mysqli_fetch_array($result);
                $_SESSION['logged-in'] = true;
                $_SESSION['id_user'] = $data['id'];
                header('location: index.php');
            } else {
                $errors[] = "<li>Usuário e senha não conferem</li>";
            }
            
        }
        else {
            $errors[] = "Usuário inexistente";
        }
        
    } 
   


}

?>