<?php 
require_once '../action/db_connect.php';
include_once '../includes/header.php';

session_start();

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
            $password = ($password);
            $sql = "SELECT * FROM login WHERE user ='$user' AND password ='$password'";
            $result = mysqli_query($connect,$sql);

            if (mysqli_num_rows($result) == 1){
                $data = mysqli_fetch_array($result);
                $_SESSION['logged-in'] = true;
                $_SESSION['id_user'] = $data['id'];
                header('location: ../index.php');
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
    
    <div class="container mt-4">
    
        <div class="row justify-content-center">
                <div class="conteiner text-center">
                    <h1>Login</h1>
                </div>
            <div class="col-4">
                <form class="p-4 p-md-5 border rounded-3 bg-light" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">

                    <div class="form-floating mb-3" >
                        <input type="text" class="form-control"  placeholder="Usuário" name="user"></input>
                        <label for="floatingInput">Usuário</label>
                    </div>

                    <div class="form-floating mb-3" >
                        <input type="password" class="form-control"  placeholder="Senha" name="password"></input>
                        <label for="floatingInput">Senha</label>
                    </div>

                    <button class="btn btn-primary" name="sub-button" type="submit">Entrar</button>

                </form>
                <?php 
                    if(!empty($errors)) {
                        foreach($errors as $error){
                            echo $error;
                        }
                    }
                ?>
            </div>
        </div>
    </div>

<?php 
include_once '../includes/footer.php';
?>