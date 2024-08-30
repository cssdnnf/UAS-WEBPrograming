<div class="container mt-5">
    <h2>Tambah User Baru</h2>
    <form action="<?= site_url('admin/users_add') ?>" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" class="form-control" id="username" name="username" value="">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" name="password" value="">
        </div>
        <div class="mb-3">
            <label for="level" class="form-label">Level: </label>
            <select class="form-select" id="level" name="level">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Tambah User</button>
            <a href="<?= site_url('user') ?>" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
