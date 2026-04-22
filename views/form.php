<?php if (!empty($_SESSION['success'])): ?>
    <div class="row justify-content-center position-absolute end-0 start-0 z-1 mt-3">
        <div id="form-alert" class="alert alert-success row justify-content-center col-sm-auto m-0 fade show">
            Form submitted successfully!
        </div>
    </div>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>

<div class="container py-5 vh-100">
    <div class="row align-content-center justify-content-center h-100">
        <div class="col-sm-auto">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-5">Contact form</h2>
                    <form action="/" method="POST">
                        <div class="form-floating mb-3">
                            <input id="firstname" class="form-control <?= isset($data['errors']['firstname']) ? 'is-invalid' : '' ?>" type="text" name="firstname" placeholder="Firstname" value="<?= isset($data['sanitized']['firstname']) ?>" required>
                            <label for="firstname">Firstname</label>
                            <?php if (isset($data["errors"]["firstname"])): ?>
                                <p class="text-danger"><?= $data["errors"]["firstname"] ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="lastname" class="form-control <?= isset($data['errors']['lastname']) ? 'is-invalid' : '' ?>" type="text" name="lastname" placeholder="lastname" value="<?= isset($data['sanitized']['lastname']) ?>" required>
                            <label for="lastname">Lastname</label>
                            <?php if (isset($data["errors"]["lastname"])): ?>
                                <p class="text-danger"><?= $data["errors"]["lastname"] ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="form-floating">
                            <input id="email" class="form-control <?= isset($data['errors']['email']) ? 'is-invalid' : '' ?>" type="email" name="email" placeholder="email@example.com" value="<?= isset($data['sanitized']['email']) ?>" required>
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

<script>
    setTimeout(() => {
        const alertElement = document.getElementById('form-alert');

        if (alertElement) {
            const bsAlert = new bootstrap.Alert(alertElement);

            bsAlert.close();
        }
    }, 3000);
</script>