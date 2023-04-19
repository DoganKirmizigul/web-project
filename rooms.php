<?php include '_header.php' ?>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card"> <!-- nav -->
                    <div class="card-body">
                        <div class="list-group">
                            <a href="home.php" class="btn btn-light list-group-item list-group-item-action active"
                               role="button">Rooms</a>
                            <a href="devices.php" class="btn btn-light list-group-item list-group-item-action"
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
                        <h1>Rooms</h1>
                        <div class="row mb-3">
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Living Room</h4>
                                        <p><i class="fs-4 text-danger fa-solid fa-temperature-quarter"></i><span
                                                class="fs-5"> 24.5°C</span></p>
                                        <p><i class="fs-4 text-warning fa-solid fa-lightbulb"></i><span
                                                class="fs-5"> On</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Bedroom</h4>
                                        <p><i class="fs-4 text-danger fa-solid fa-temperature-quarter"></i><span
                                                class="fs-5"> 26.5°C</span></p>
                                        <p><i class="fs-4 text-warning fa-regular fa-lightbulb"></i><span class="fs-5"> Off</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Bathroom</h4>
                                        <p><i class="fs-4 text-danger fa-solid fa-temperature-quarter"></i><span
                                                class="fs-5"> 22°C</span></p>
                                        <p><i class="fs-4 text-warning fa-regular fa-lightbulb"></i><span class="fs-5"> Off</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Studio</h4>
                                        <p><i class="fs-4 text-danger fa-solid fa-temperature-quarter"></i><span
                                                class="fs-5"> 24°C</span></p>
                                        <p><i class="fs-4 text-warning fa-regular fa-lightbulb"></i><span class="fs-5"> Off</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Playroom</h4>
                                        <p><i class="fs-4 text-danger fa-solid fa-temperature-quarter"></i><span
                                                class="fs-5"> 24.5°C</span></p>
                                        <p><i class="fs-4 text-warning fa-solid fa-lightbulb"></i><span
                                                class="fs-5"> On</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Kitchen</h4>
                                        <p><i class="fs-4 text-danger fa-solid fa-temperature-quarter"></i><span
                                                class="fs-5"> 28°C</span></p>
                                        <p><i class="fs-4 text-warning fa-solid fa-lightbulb"></i><span
                                                class="fs-5"> On</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Balcony</h4>
                                        <p><i class="fs-4 text-danger fa-solid fa-temperature-quarter"></i><span
                                                class="fs-5"> 18°C</span></p>
                                        <p><i class="fs-4 text-warning fa-regular fa-lightbulb"></i><span class="fs-5"> Off</span>
                                        </p>
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