<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="login">

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6 d-flex flex-column align-items-center justify-content-center">
              
              <h1 class="login-title">TRAINING MANAGEMENT</h1>
              <h4 class="login-subtitle">"Empower Success through Effective Training Management!"</h4>
              <div class="d-flex justify-content-center py-4">
              
                <a href="#" class="logo d-flex w-auto">
                  
                  <img class = "login" src="assets/img/login.jpg" alt="">
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="">

                <div class="">

                  <form class="row g-3 needs-validation" method="POST" action="{{ route('register') }}">
                  
                    <img class = "form-login" src="assets/img/mitrabaralogo.jpg" alt="">
                    <div class="col-10 form-input">
                      <input type="text" name="name" class="form-control" id="name" required placeholder="Your Name">
                      <div class="invalid-feedback">Please enter your name!</div>
                    </div>
                    <div class="col-10 form-input">
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="email" class="form-control" id="email" required placeholder=" Your Email">
                        <div class="invalid-feedback">Please enter your email.</div>
                      </div>
                    </div>
                    <div class="col-10 form-input">
                      <input type="text" name="username" class="form-control" id="username" required placeholder="Username">
                      <div class="invalid-feedback">Please enter your username!</div>
                    </div>

                    <div class="col-10 form-input">
                      <input type="password" name="password" class="form-control" id="password" required placeholder="Password">
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
{{-- 
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div> --}}
                    <div class="col-10 form-input">
                      <button class="btn btn-primary w-100 btn-sm form-a" type="submit">Register</a></button> 
                    <div class="col-10 form-input">
                      <p class="small mb-0">Already have an account?<a href="/"> Sign in</a></p>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>