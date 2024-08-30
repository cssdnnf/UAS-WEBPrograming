<?php if ($level == "admin") { ?>
    <div class="container-fluid">
        <!-- MENU -->
        <div class="container mt-4">
            <h2>Menu List</h2>
            <div class="d-flex justify-content-end">
                <a href="<?php echo site_url('admin/menu_add'); ?>" class="btn btn-primary mb-3"><i class="bi bi-pencil"></i> Tambah Menu Baru</a>
            </div>
            <br>
            <table class="table table-striped table-responsive-lg">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($menus)) {
                            foreach ($menus as $menu) { ?>
                                <tr>
                                    <td><?php echo $menu['id']; ?></td>
                                    <td><?php echo $menu['judul']; ?></td>
                                    <td><?php echo $menu['deskripsi']; ?></td>
                                    <td>Rp <?php echo $menu['harga']; ?>,00</td>
                                    <td><img src="<?php echo base_url('assets/images/menu/' . $menu['gambar']); ?>" style="max-width: 100px;"></td>
                                    <td><?php echo $menu['category']; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('admin/menu_edit/' . $menu['id']); ?>" class="btn btn-primary btn-sm me-2"><i class="bi bi-pencil"></i> Edit</a>
                                        <a href="<?php echo site_url('admin/menu_delete/' . $menu['id']); ?>" class="btn btn-danger btn-sm me-2" onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?');"><i class="bi bi-trash"></i> Delete</a>
                                        <a href="<?php echo site_url('/#tabs-content'); ?>" class="btn btn-info btn-sm"><i class="bi bi-eye"></i> View</a>
                                    </td>
                                </tr>
                            <?php } 
                        } else {
                            echo "No menu items found.";
                        } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var tambahMenuButton = document.getElementById('tambahMenu');
            tambahMenuButton.addEventListener('click', function(e) {
                e.preventDefault();
                $('#tambahMenuModal').modal('show'); 
            });
        });
    </script>

<?php } else { ?>
    <h1>Ini adalah tampilan user</h1>
<?php } ?>
