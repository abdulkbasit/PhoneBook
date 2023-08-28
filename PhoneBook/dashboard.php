<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

    <div class="top-nav" id="dashboard">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <p><i class='bx bxs-envelope'></i>FIT123@gamil.com</p>
                    <p><i class='bx bxs-phone-call'></i> 03043256434</p>
                </div>
                <div class="col-auto social-icons">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-pinterest'></i></a>
                </div>
            </div>
        </div>
    </div>
    

    <!-- BOTTOM NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="">Phone Book</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#dashboard">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add_user.php">Add New</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="viewprofile.php">View</a></li>
                            <li><a class="dropdown-item" href="changepassword.php">Change password</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout.php">logout</a></li>
                        </ul>
                    <li class="nav-item">
                        <a class="nav-link" href="view_user.php">View all</a>
                    </li>
                </ul>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="btn btn-primary ms-lg-3">Contact</a>
            </div>
        </div>
    </nav>


    <!-- slider -->

    <div class="owl-carousel owl-theme hero-slider">
        <div class="slide slide1">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <h6 class="text-white text-uppercase">design Driven for professional</h6>
                        <h1 class="display-3 my-4">Phone Book</h1>
                        <a href="#" class="btn btn-primary">Get Started</a>
                        <a href="#" class="btn btn-outline-light ms-3">Our work</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        <h6 class="text-white text-uppercase">We craft digital experiances</h6>
                        <h1 class="display-3 my-4">Saves your contacts</h1>
                        <a href="#" class="btn btn-primary">Get Started</a>
                        <a href="#" class="btn btn-outline-light ms-3">Our work</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ABOUT -->
    <section id="services"  class="text-center">
        <div class="container">
        <div class="row">
                <div class="col-12">
                        <h1>Services</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="parag" class="info-box">
                            <h5>Phone</h5>
                            <p>
                                directly call phone numbers
                                read phone status and identity
                                Device ID & call information
                                read phone status and identity
                                run at startup
                                modify system settings
                                read sync settings
                                install shortcuts
                                control vibration
                                full network access
                                toggle sync on and off
                                use accounts on the device
                                control Near Field Communication
                                prevent device from sleeping
                                read sync statistics
                                receive data from Internet
                                view configured accounts
                                read Google service configuration
                            </p>
                    </div>
                </div>
                <div class="col">
                    <div class="parag" class="info-box">
                            <h5>Contacts</h5>
                            <p>
                                read your contacts
                                find accounts on the device
                                modify your contacts
                                Identity
                                modify your own contact card
                                find accounts on the device
                                add or remove accounts
                                read your own contact card
                                Photos/Media/Files
                                read the contents of your USB storage
                                Storage
                                read the contents of your USB storage
                                Phone
                                directly call phone numbers
                                read phone status and identity
                                Device ID & call information
                                read phone status and identity
                                Contacts
                                read your contacts
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="container-fluid">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-sm-12 bg-cover"
                                style="background-image: url(img/photo3.avif); min-height:300px;">
                                <div>

                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form class="p-lg-5 col-12 row g-3">
                                    <div>
                                        <h1>Contact Us</h1>
                                        <p>Fill this form to contact us and we will get back to you as soon as possible
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label text-black">First name</label>
                                        <input type="text" class="form-control" placeholder="Enter first name"
                                            id="userName" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label text-black">Last name</label>
                                        <input type="text" class="form-control" placeholder="Enter last name"
                                            id="userName" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="userName" class="form-label text-black">Email address</label>
                                        <input type="email" class="form-control" placeholder="Enter your Email"
                                            id="userName" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="exampleInputEmail1" class="form-label text-black">Enter
                                            Message</label>
                                        <textarea name="" placeholder="Message" class="form-control"
                                            rows="4"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-brand">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand">Phone Book</h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from</p>
                        <div class="col-auto social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                            <a href="#"><i class='bx bxl-pinterest'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p class="mb-0">Copyright@FIT. All rights Reserved</p>
        </div>
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>


</body>

</html>