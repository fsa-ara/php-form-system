<div class="container pt-5">
    <div class="d-flex justify-content-between align-items-center pt-5">
        <h2 class="m-0">Users dashboard</h2>
        <a href="/form" class="btn btn-primary">+ Add user</a>
    </div>
    <?php if (!empty($data)): ?>
        <!-- MOBILE -->
        <div class="d-block d-sm-none mt-3 mb-5">
            <?php foreach ($data as $user): ?>
                <div class="card mb-3 shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">
                                    <?= $user["firstname"] ?> <?= $user["lastname"] ?>
                                </h5>
                                <span class="badge bg-secondary lh-base">#<?= $user["id"] ?></span>
                            </div>
                            <p class="mb-1">
                                <?= $user["email"] ?>
                            </p>
                            <small class="text-muted d-block mb-5">
                                <?= $user["created_at"] ?>
                            </small>
                            <div class="d-grid gap-2">
                                <a href="/edit?id=<?= $user["id"] ?>" class="btn btn-warning btn-sm">
                                    Edit
                                </a>
                                <form method="POST" action="/delete">
                                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                    <button class="btn btn-danger btn-sm w-100" type="submit" onclick="return confirm('Delete this user?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- DESK -->
        <div class="d-none d-sm-block mt-3 mb-5">
            <div class="table-responsive">
                <table class="table table-striped table-hover mb-0 align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Created</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $user): ?>
                            <tr>
                                <td><?= $user['id'] ?></td>
                                <td><?= $user['firstname'] ?></td>
                                <td><?= $user['lastname'] ?></td>
                                <td><code><?= $user['email'] ?></code></td>
                                <td class="text-nowrap"><?= $user['created_at'] ?></td>
                                <td class="text-nowrap text-end">
                                    <a href="/edit?id=<?= $user['id'] ?>" class="btn btn-sm btn-warning">
                                        Edit
                                    </a>
                                    <form method="POST" action="/delete" class="d-inline">
                                        <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                        <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Delete this user?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif; ?>
</div>