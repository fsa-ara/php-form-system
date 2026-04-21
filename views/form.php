<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-5">Contact form</h2>
                    <form action="/public/index.php" method="POST">
                        <div class="form-floating mb-3">
                            <input id="firstname" class="form-control" type="text" name="firstname" placeholder="Firstname" required>
                            <label for="firstname">Firstname</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="lastname" class="form-control" type="text" name="lastname" placeholder="lastname" required>
                            <label for="lastname">Lastname</label>
                        </div>
                        <div class="form-floating">
                            <input id="email" class="form-control" type="email" name="email" placeholder="email@example.com" required>
                            <label for="email">Email</label>
                        </div>
                        <button class="btn btn-primary mt-5 w-100" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>