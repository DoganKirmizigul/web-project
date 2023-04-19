<?php include '_header.php' ?>
    <style>
        .col-9 .col-3 > .card:hover{
            scale: 1.05;
            transition: 300ms;
        }
        .col-9 .col-3 > .card:not(:hover){
            transition: 300ms;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card"> <!-- nav -->
                    <div class="card-body">
                        <div class="list-group">
                            <a href="home.php" class="btn btn-light list-group-item list-group-item-action active"
                               role="button">Houses</a>
                            <a href="index.php" class="btn btn-light list-group-item list-group-item-action text-danger"
                               role="button">Log out</a>
                        </div>
                    </div>
                </div> <!-- nav end-->
            </div>
            <div class="col-9">
                <div class="card"> <!-- main -->
                    <div class="card-body">
                        <h1>Houses</h1>
                        <div class="row mb-3">
                            <div class="col-3">
                                <div class="card">
                                    <a href="rooms.php" class="text-decoration-none text-black">
                                        <div class="card-body">
                                            <h4>Chloe Price</h4>
                                            <p>Arcadia Bay, Oregon<br>
                                                <i class="fa-solid fa-warning text-danger"></i> <span
                                                    class="text-decoration-underline">2 issues</span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <a href="#" class="text-decoration-none text-black">
                                        <div class="card-body">
                                            <h4>Max Caulfield</h4>
                                            <p>Belltown, Seattle<br>
                                                <i class="fa-solid fa-warning text-success"></i> <span
                                                    class="">0 issues</span></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <a href="#" class="text-decoration-none text-black">
                                        <div class="card-body">
                                            <h4>Rachel Amber</h4>
                                            <p>Beverly Hills, Los Angeles<br>
                                                <i class="fa-solid fa-warning text-success"></i> <span
                                                    class="">0 issues</span></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <a href="#" class="text-decoration-none text-black">
                                        <div class="card-body">
                                            <h4>Mark Jefferson</h4>
                                            <p>Portland, Oregon<br>
                                                <i class="fa-solid fa-warning text-success"></i> <span
                                                    class="">0 issues</span></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- main end -->
            </div>
        </div>
    </div>

<?php include '_footer.php' ?>