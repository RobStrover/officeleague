    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">OfficeLeague</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php if (!empty($_SESSION['user']['authenticated'])) { ?>
                    <li><a href="#" id="add-new-league-button">Add New League</a></li>
                    <?php } ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if (!empty($_SESSION['user']['authenticated'])) { ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Logged in as <?= $_SESSION['user']['user_username'] ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" id="logout-button">Logout</a></li>
                        </ul>
                    </li>
                    <?php } else { ?>
                        <li><a href="<?= '//'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'?login' ?>" id="sign-in-sign-up-button">Sign in / Sign up</a></li>
                    <?php } ?>


                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>