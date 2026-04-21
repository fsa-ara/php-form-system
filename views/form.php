<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-auto">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-5">Contact form</h2>
                    <form action="/" method="POST">
                        <div class="form-floating mb-3">
                            <input id="firstname" class="form-control <?= isset($data['errors']['firstname']) ? 'is-invalid' : '' ?>" type="text" name="firstname" placeholder="Firstname" value="<?= $data['sanitized']['firstname'] ?>" required>
                            <label for="firstname">Firstname</label>
                            <?php if (isset($data["errors"]["firstname"])): ?>
                                <p class="text-danger"><?= $data["errors"]["firstname"] ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="lastname" class="form-control <?= isset($data['errors']['lastname']) ? 'is-invalid' : '' ?>" type="text" name="lastname" placeholder="lastname" value="<?= $data['sanitized']['lastname'] ?>" required>
                            <label for="lastname">Lastname</label>
                            <?php if (isset($data["errors"]["lastname"])): ?>
                                <p class="text-danger"><?= $data["errors"]["lastname"] ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="form-floating">
                            <input id="email" class="form-control <?= isset($data['errors']['email']) ? 'is-invalid' : '' ?>" type="email" name="email" placeholder="email@example.com" value="<?= $data['sanitized']['email'] ?>" required>
                            <label for="email">Email</label>
                            <?php if (isset($data["errors"]["email"])): ?>
                                <p class="text-danger"><?= $data["errors"]["email"] ?></p>
                            <?php endif; ?>
                        </div>
                        <button class="btn btn-primary mt-5 w-100" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>