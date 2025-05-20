<html>
    <head>
        <title>Halaman Login Check Dong</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="status-bar">
            <div class="status-left">9:41</div>
        </div>
        <div class="login-container">
        <div>
            <img src="logochekdong.png" alt="logo">
        </div>
        <div class="mb-3">
            <form action="/action_page.php">
              <div class="mb-3">
                <label for="Username"></label>
                <input type="username" class="form-control" id="username" placeholder="Username" name="username">
              </div>
              <div class="mb-3">
                <label for="pwd"></label>
                <input type="password" class="form-control" id="pwd" placeholder="Password" name="pswd">
              </div>

              <p class="error-text">Wrong Password!</p>
              <div>
                <span class="rounded-lg">
                    <button type="submit">Login</button>
                </span>
            </div>
            <p>Forgot Password</p>
            <p><a href="#" class="link-teknisi">Login As Teknisi</a></p>

            </form>
            </div>
            <div class="bottom-text">
                <p>Don’t have an account yet? <a href="#" class="link-create">Create New</a>
            </div>
    </body>
</html>
