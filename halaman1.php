<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php
    session_start();
    if($_SESSION['is_logged_id'] != TRUE)
    {
        header("Location: loginform.php");
        exit();
    }
    ?>
    <div class="alert alert-primary" role="alert">
    Selamat Datang <?php echo $_SESSION['nama'] ?>
      </div>
      <h4>A Dream That I Must Achieve</h4>
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="Assets/Gambar/gambar2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="Assets/Gambar/KaharudinChandra.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="Assets/Gambar/gambar3.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ratione harum voluptas eaque autem excepturi vel inventore in nisi quod fuga rem fugit, nostrum dolorem numquam laudantium corporis optio earum eius! Nostrum error aperiam saepe est? Ducimus repellat deleniti, voluptatibus consequatur soluta architecto accusantium minima similique culpa iusto, necessitatibus quo at vero vitae vel temporibus aperiam eaque illum obcaecati ab ullam velit maxime aspernatur dolore! Praesentium, consequuntur incidunt, ipsa distinctio aliquid facere obcaecati et reprehenderit deleniti repellat aut dignissimos officia quaerat animi totam adipisci omnis illo quidem debitis labore aperiam odio, ex nesciunt velit. Eligendi, deserunt placeat! Accusantium, aliquam soluta.</p>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<a href="logout.php">Logout</a>
</body>
</html>
