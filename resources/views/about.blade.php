<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Portofolio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5"><span class="text-primary">ND</span>L.</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
                <a href="{{ url('/quality') }}" class="nav-item nav-link">Quality</a>
                <a href="{{ url('/skill') }}" class="nav-item nav-link">Skill</a>
                <a href="{{ url('/service') }}" class="nav-item nav-link">Service</a>
                <a href="{{ url('/portofolio') }}"class="nav-item nav-link">Portfolio</a>
                <a href="{{ url('/review') }}" class="nav-item nav-link">Review</a>
                <a href="{{ url('/blog') }}" class="nav-item nav-link">Blog</a>
                <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-outline-primary d-none d-lg-block">Hire Me</a>
        </div>
    </nav>
<a href="index.blade.php"></a>

    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
                <h1 class="position-absolute text-uppercase text-primary">About Me</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="img/pp3.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4">UI/UX Designer & Web Developer</h3>
                    <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum. Amet dolor stet lorem diam dolor justo et dolor dolor dolor</p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2"><h6>Name: <span class="text-secondary">Nadila Oktaviana Putri</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Birthday: <span class="text-secondary">15 Oktober 2007</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Degree: <span class="text-secondary">Master</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Experience: <span class="text-secondary">2 Years</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Phone: <span class="text-secondary">+6281585819152</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary">nadilaoktaviana855@gmail.com</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Address: <span class="text-secondary">Kp. Cikalang, 02/06, Des.Caringin, Kab.Bogor</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Freelance: <span class="text-secondary">Available</span></h6></div>
                    </div>
                    <a href="" class="btn btn-outline-primary mr-4">Hire Me</a>
                    <a href="" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>