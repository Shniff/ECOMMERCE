<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MyShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registration.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">Cart</a>
                    </li>

                     <!-- Dropdown for Signed-in User -->
<<<<<<< HEAD
                     <!-- User only show up if naka set yung $_SESSION -->
                      <?php if (isset($_SESSION["fullname"])){?>

                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION["fullname"];?> <!-- Replace with dynamic username -->
=======
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            JohnDoe <!-- Replace with dynamic username -->
>>>>>>> c20eb77e262bf4550b589ab7df30bd050ab112cd
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="dashboard.html">Dashboard</a></li>
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout.html">Logout</a></li>
<<<<<<< HEAD
                            
                        </ul>
                    </li>

                    <?php } ?>
=======
                        </ul>
                    </li>
>>>>>>> c20eb77e262bf4550b589ab7df30bd050ab112cd
                    
                </ul>
            </div>
        </div>
    </nav>