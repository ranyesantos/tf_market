<?php 
require_once 'action/db_connect.php';
include_once 'includes/header.php';
session_start();

if (!isset($_SESSION['logged-in'])){
    $_SESSION = 'Visitante';
} else {

$id = $_SESSION['id_user'];
$sql = "SELECT * FROM login WHERE id = '$id'";
$result = mysqli_query($connect, $sql);
$data = mysqli_fetch_array($result);
}
?>
<nav class="navbar navbar-light bg-light mr-3 navbar-expand-sm">
    <div class="container-fluid">
        <a class="navbar-brand fs-2 px-4" href="#">Teste</a>

        <div class="collapse navbar-collapse justify-content-end" id="nav-menu">
            <ul class="navbar-nav ">
                <?php 
                    if($_SESSION == 'Visitante'){
                ?>
                    <h1>Visitante</h1>
                    <li class="nav-item d-flex align-items-center">
                        <i class="bi bi-person" style="font-size: 34px"></i>
                        <a href="pages/Login.php" class="nav-link">Login</a>
                    </li>
                       
                <?php 
                }
                else{
                ?>  
                    <h1><?php echo $data['user']; ?></h1>
                    <li class="nav-item d-flex align-items-center">
                        <i class="bi bi-person" style="font-size: 34px"></i>
                        <a href="pages/Login.php" class="nav-link">Login</a>
                    </li>
                <?php 
                }
                ?>

            </ul>
        </div>
    </div>
</nav>


<div class="container-fluid mb-10 margin-top-0 p-0">
    <div class="row row-cols-1 g-3">
        <div class="card border-0 h-100">
            <div class="card-body p-0">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <a href="pages/">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="https://picsum.photos/1200/350?random=1" alt="" class="d-block w-100">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="https://picsum.photos/1200/350?random=2" alt="" class="d-block w-100">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="https://picsum.photos/1200/350?random=3" alt="" class="d-block w-100">
                        </div>
                    </div>
                </a>
                </div>
                <button class="carousel-control-prev" type="button"         data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>   
            </div>
        </div>
    </div>
</div>


<div class="container-sm d-flex flex-column mt-5 justify-content-center align-items-center mt-0 mb-5">
    
    <div class="text-center">
        <h2 class="mb-0">VOCÊ E SEU ESTILO SE ENCONTRAM AQUI</h2>
    </div>
    <div class="row row-cols-2 col-12">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-0">
            <div class="card border-0">
                <img src="https://picsum.photos/630/340?random=13" alt="" class="d-block w-100 rounded-3">
                <div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-0">
            <div class="card border-0">
                <img src="https://picsum.photos/630/340?random=18" alt="" class="d-block w-100 rounded-3">
                <div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 text-center">
        <h2 class="mb-0" >LANÇAMENTOS</h2>
    </div>
    <div class="row row-cols-4 mt-0 col-12">
        <div class="col-sm-6 col-md-6 col-lg-3 col-12 mt-5 px-3">
            <div class="card border-0.1">
                <img src="https://picsum.photos/400/550?random=13" alt="" class="d-block w-100">
                <div class="card-body align-center margin-0 p-1 ">
                    <p class="card-text text-left">Roupa masculina XXX verde</p>
                    <p></p>
                    <a href="#" class="stretched-link"></a>
                    <h5>R$237,38</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 col-12 mt-5 px-3">
            <div class="card border-0.1">
                <img src="https://picsum.photos/400/550?random=17" alt="" class="d-block w-100">
                <div class="card-body align-center margin-0 p-1 ">
                    <p class="card-text text-left">Roupa masculina XXX verde</p>
                    <p></p>
                    <a href="#" class="stretched-link"></a>
                    <h5>R$237,38</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 col-12 mt-5 px-3">
            <div class="card border-0.1">
                <img src="https://picsum.photos/400/550?random=91" alt="" class="d-block w-100">
                <div class="card-body align-center margin-0 p-1 ">
                    <p class="card-text text-left">Roupa masculina XXX verde</p>
                    <p></p>
                    <a href="#" class="stretched-link"></a>
                    <h5>R$237,38</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 col-12 mt-5 px-3">
            <div class="card border-0.1">
                <img src="https://picsum.photos/400/550?random=14" alt="" class="d-block w-100">
                <div class="card-body align-center margin-0 p-1 ">
                    <p class="card-text text-left">Roupa masculina XXX verde</p>
                    <p></p>
                    <a href="#" class="stretched-link"></a>
                    <h5>R$237,38</h5>
                </div>
            </div>
        </div>
    </div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php 
include_once 'includes/footer.php';
?>