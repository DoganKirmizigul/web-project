<?php include '_header.php' ?>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card"> <!-- nav -->
                    <div class="card-body">
                        <div class="list-group">
                            <a href="rooms.php" class="btn btn-light list-group-item list-group-item-action"
                               role="button">Rooms</a>
                            <a href="devices.php" class="btn btn-light list-group-item list-group-item-action"
                               role="button">Devices</a>
                            <a href="contact.php" class="btn btn-light list-group-item list-group-item-action active"
                               role="button">Contact</a>
                            <a href="about.php" class="btn btn-light list-group-item list-group-item-action"
                               role="button">About</a>
                            <a href="index.php" class="btn btn-light list-group-item list-group-item-action text-danger"
                               role="button">Log out</a>
                        </div>
                    </div>
                </div> <!-- nav end-->
            </div>
            <div class="col-9">
                <div class="card"> <!-- main -->
                    <div class="card-body">
                        <h1>Contact</h1>
                        <div class="row">
                            <p><span class="fw-semibold">Consumer:</span> Chloe Price<br>
                                <span class="fw-semibold">Address:</span> Railroad Street, Arcadia Bay, Oregon
                            </p>
                            <div>
                                <a href="#" class="btn btn-primary">Call</a> <a href="#" class="btn btn-primary">Send E-mail</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- main end -->
            </div>
        </div>
    </div>

<?php include '_footer.php' ?>