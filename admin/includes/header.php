<style>
    @import url('https://fonts.googleapis.com/css?family=Gothic+A1|Kaushan+Script|Libre+Baskerville|Lobster');

    .banner {
        background-image: url('assets/img/logo.png');
        text-align: center;
        color: #fff;

        background-repeat: no-repeat;
        background-attachment: scroll;
        background-position: center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .banner-text {
        padding: 80px 0 50px 0;
    }

    .banner-heading {
        font-family: 'Lobster', cursive;
        font-size: 75px;
        font-weight: 700;
        line-height: 100px;
        margin-bottom: 30px;
        color: #fff;

    }

    .banner-sub-heading {
        font-family: 'Libre Baskerville', serif;
        font-size: 30px;
        font-weight: 300;
        line-height: 30px;
        margin-bottom: 50px;
        color: #fff;
    }

    /* mobile view */
    @media (max-width:500px) {
        .banner-text {
            padding: 150px 0 150px 0;
        }

        .banner-heading {
            font-size: 30px;
            line-height: 30px;
            margin-bottom: 20px;
        }

        .banner-sub-heading {
            font-size: 10px;
            font-weight: 200;
            line-height: 10px;
            margin-bottom: 40px;
        }

    }

    @media (max-width:768px) {
        .banner-text {
            padding: 150px 0 150px 0;
        }

        .banner-sub-heading {
            font-size: 23px;
            font-weight: 200;
            line-height: 23px;
            margin-bottom: 40px;
        }
    }

    #logout {
        margin-top: 8px;
        margin-right: 10px;
    }
</style>
<div class="banner">
    <div class="container">
        <div class="banner-text">
            <div class="banner-heading">
                Online Library Management System
            </div>
            <div class="banner-sub-heading">
                Administrative
            </div>
        </div>
    </div>
</div>

<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

</div>
<!-- LOGO HEADER END-->
<section class="menu-section">
    <div class="container">
        <?php if (isset($_SESSION['alogin'])) { ?> <a id="logout" href="logout.php" class="btn btn-danger pull-right">LOG ME OUT</a>
        <?php } ?>
        <div class="row ">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <?php
                        if (isset($_SESSION['alogin'])) {
                        ?>

                            <li><a href="dashboard.php" class="menu-top-active">DASHBOARD</a></li>

                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Categories <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add-category.php">Add Category</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-categories.php">Manage Categories</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Authors <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add-author.php">Add Author</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-authors.php">Manage Authors</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Books <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add-book.php">Add Book</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-books.php">Manage Books</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Issue Books <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="issue-book.php">Issue New Book</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-issued-books.php">Manage Issued Books</a></li>
                                </ul>
                            </li>
                            <li><a href="reg-students.php">Reg Students</a></li>

                            <li><a href="change-password.php">Change Password</a></li>
                        <?php
                        } else {
                        ?>
                            <section class="menu-section">
                                <div class="container">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="navbar-collapse collapse ">
                                                <ul id="menu-top" class="nav navbar-nav navbar-right">

                                                    <li><a href="../adminlogin.php">Admin Login</a></li>
                                                    <li><a href="../signup.php">User Signup</a></li>
                                                    <li><a href="index.php">User Login</a></li>


                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                        <?php
                        }
                        ?>


                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>