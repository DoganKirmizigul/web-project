<?php include '_header.php' ?>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card"> <!-- nav -->
                    <div class="card-body">
                        <div class="list-group">
                            <a href="rooms.php" class="btn btn-light list-group-item list-group-item-action"
                               role="button">Rooms</a>
                            <a href="devices.php" class="btn btn-light list-group-item list-group-item-action active"
                               role="button">Devices</a>
                            <a href="contact.php" class="btn btn-light list-group-item list-group-item-action"
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
                        <h1>Devices</h1>
                        <div class="row mb-3">
                            <div>
                                <a href="#" class="btn btn-primary active"><i class="fa-solid fa-plus"></i> Add device</a>
                                <a href="#" class="btn btn-danger active"><i class="fa-solid fa-minus"></i> Remove device</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Lights</h4>
                                        <ul class="list-group">
                                            <li class="list-group-item">Living Room</li>
                                            <li class="list-group-item">Bedroom</li>
                                            <li class="list-group-item">Bathroom</li>
                                            <li class="list-group-item">Studio</li>
                                            <li class="list-group-item">Playroom</li>
                                            <li class="list-group-item">Kitchen</li>
                                            <li class="list-group-item">Balcony</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>ACs</h4>
                                        <ul class="list-group">
                                            <li class="list-group-item">Living Room</li>
                                            <li class="list-group-item">Bedroom</li>
                                            <li class="list-group-item">Studio</li>
                                            <li class="list-group-item">Playroom</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>TVs</h4>
                                        <ul class="list-group">
                                            <li class="list-group-item">Living Room</li>
                                            <li class="list-group-item">Bedroom</li>
                                            <li class="list-group-item">Playroom</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Windows</h4>
                                        <ul class="list-group">
                                            <li class="list-group-item">Balcony</li>
                                            <li class="list-group-item">Bedroom</li>
                                            <li class="list-group-item">Playroom</li>
                                            <li class="list-group-item">Studio</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- main end -->
            </div>
        </div>
    </div>

<?php include '_footer.php' ?>