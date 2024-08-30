<div class="container mt-5">
    <h2>User List</h2>
    <div class="d-flex justify-content-end">
        <a href="<?= site_url('admin/users_add') ?>" class="btn btn-primary mb-3">Tambah User</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Level</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($users)): ?>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= htmlspecialchars($user['username']) ?></td>
                        <td><?= htmlspecialchars($user['level']) ?></td>
                        <td><?= htmlspecialchars($user['name']) ?></td>
                        <td>
                            <a href="<?= site_url('admin/users_edit/'.$user['id']) ?>" class="btn btn-primary btn-sm me-2"><i class="bi bi-pencil"></i> Edit</a>
                            <a href="<?= site_url('admin/users_delete/'.$user['id']) ?>" class="btn btn-danger btn-sm me-2" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?');"><i class="bi bi-trash"></i> Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="5">No users found</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
