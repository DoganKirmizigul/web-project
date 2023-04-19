<?php include '_header.php' ?>

    <div class="container d-flex justify-content-center">
        <div class="row align-items-center bg-light" style="width: 1000px;border: 2px solid mediumpurple; border-radius: 10px;">
            <div class="col" style="padding: 0">
                <img class="img-fluid" src="img/form-cover.jpg" style="object-fit: cover; border-bottom-left-radius: 10px; border-top-left-radius: 10px;" alt="Home">
            </div>
            <div class="col d-flex flex-column align-items-center">
                <h1 class="text-center">Register</h1>
                <form style="width: 80%">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name Surname</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                    <a class="mt-2 d-block link-offset-2-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                       href="index.php">
                        Login
                    </a>
                </form>
            </div>
        </div>
    </div>

<?php include '_footer.php' ?>