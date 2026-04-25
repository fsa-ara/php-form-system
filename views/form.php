<?php if (!empty($_SESSION["success"])): ?>
    <div class="row justify-content-center position-absolute end-0 start-0 z-1">
        <div id="form-alert" class="alert alert-success row justify-content-center col-sm-auto m-0 fade show">
            Form submitted successfully! Redirecting...
        </div>
    </div>
    <?php unset($_SESSION["success"]); ?>
<?php endif; ?>

<div class="container py-5 vh-100">
    <div class="row h-100 justify-content-center pt-5">
        <div class="col-sm-auto">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-5">
                        <?= isset($data["sanitized"]["id"]) ? "Edit user" : "Contact form" ?>
                    </h2>
                    <form action="/form" method="POST">
                        <input type="hidden" name="id" value="<?= $data["sanitized"]["id"] ?? '' ?>">
                        <div class="form-floating mb-3">
                            <input id="firstname" class="form-control <?= isset($data["errors"]["firstname"]) ? "is-invalid" : "" ?>" type="text" name="firstname" placeholder="Firstname" value="<?= $data["sanitized"]["firstname"] ?? "" ?>" required>
                            <label for="firstname">Firstname</label>
                            <?php if (isset($data["errors"]["firstname"])): ?>
                                <p class="text-danger"><?= $data["errors"]["firstname"] ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="lastname" class="form-control <?= isset($data["errors"]["lastname"]) ? "is-invalid" : "" ?>" type="text" name="lastname" placeholder="lastname" value="<?= $data["sanitized"]["lastname"] ?? "" ?>" required>
                            <label for="lastname">Lastname</label>
                            <?php if (isset($data["errors"]["lastname"])): ?>
                                <p class="text-danger"><?= $data["errors"]["lastname"] ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="form-floating">
                            <input id="email" class="form-control <?= isset($data["errors"]["email"]) ? "is-invalid" : "" ?>" type="email" name="email" placeholder="email@example.com" value="<?= $data["sanitized"]["email"] ?? "" ?>" required>
                            <label for="email">Email</label>
                            <?php if (isset($data["errors"]["email"])): ?>
                                <p class="text-danger"><?= $data["errors"]["email"] ?></p>
                            <?php endif; ?>
                        </div>
                        <button class="btn btn-primary mt-5 w-100" type="submit">
                            <?= isset($data["sanitized"]["id"]) ? "Update" : "Submit" ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const alertElement = document.getElementById("form-alert");

    setTimeout(() => {
        if (alertElement) {
            const bsAlert = new bootstrap.Alert(alertElement);

            bsAlert.close();
        }
    }, 2000);

    setTimeout(() => {
        if (alertElement) {
            window.location.href = "/";
        }
    }, 4000);
</script>