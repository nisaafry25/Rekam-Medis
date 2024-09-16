<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rekam Medis | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom styles -->
  <style>
    body {
      background: url('https://i.pinimg.com/originals/2e/ec/25/2eec251156b2624b3082f56d9c2bb648.jpg') center center fixed;
      background-size:cover;
      background-repeat: no-repeat;
  
    }

    .login-box {
      margin: 17% auto 5%; 
      max-width: 400px;
    }

    .login-logo a {
      color: #28a745; 
      font-size: 28px;
      font-weight: bold;
    }

    .login-card-body {
      background: rgba(255, 255, 255, 0.8); 
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .social-auth-links .btn {
      margin-top: 20px;
    }

    .login-box-msg {
      color: #28a745; 
      font-size: 18px;
      font-weight: bold;
    }

    .btn-primary {
      background-color: #218838; 
      border-color: #218838;
    }

    .btn-primary:hover {
      background-color: #1e7e34; 
      border-color: #1c7430; 
    }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo text-center">
      <a href="#" style="display: block;"><b>Rumah Sakit Indonesia</b></a>
    </div>

    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Masuk untuk mengakses rekam medis</p>

        <form action="{{ route('postlogin') }}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Kata Sandi">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Ingat Saya
                </label>
              </div>
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Masuk</button>
            </div>
          </div>
        </form>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js
