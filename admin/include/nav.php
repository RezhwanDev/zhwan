<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Admin Panel</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">


        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Rezhwan Sidiq <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="./catagoires.php"><i class="fa fa-fw fa-dashboard"></i> Home </a>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#posts_deopdown">
                <i class="fa fa-fw fa-arrows-v"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="posts_deopdown" class="collapse">
                    <li>
                        <a href="./sience.php">View  all sience Post</a>
                    </li>
                    <li>
                        <a href="./sience.php?source=add_post">Add Post</a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo">
                <i class="fa fa-fw fa-arrows-v"></i> History <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="#">View All history</a>
                    </li>
                    <li>
                        <a href="#">Add history post</a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Profile</a>
            </li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
