<!-- Edit Menu View -->
<?php if (isset($menu)) { ?>
    <div class="container mt-5">
        <h2 class="modal-title" id="editModalLabel">Edit Menu</h2>
        <?php echo form_open_multipart('admin/menu_edit/' . $menu['id']); ?>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo htmlspecialchars($menu['judul']); ?>">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?php echo htmlspecialchars($menu['deskripsi']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga:</label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $menu['harga']; ?>">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar: </label>
                <br><br><img src="<?php echo base_url('assets/images/menu/' . $menu['gambar']); ?>" style="max-width: 100px;">
                <br><br>
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category: </label>
                <select class="form-select" id="category" name="category">
                    <option <?php if ($menu['category'] == 'burgers') echo 'selected'; ?> value="burgers">Burgers</option>
                    <option <?php if ($menu['category'] == 'sides') echo 'selected'; ?> value="sides">Fries & Sides</option>
                    <option <?php if ($menu['category'] == 'drinks') echo 'selected'; ?> value="drinks">Drinks</option>
                    <option <?php if ($menu['category'] == 'desserts') echo 'selected'; ?> value="desserts">Desserts</option>
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="<?php echo site_url('admin/menu');?>" class="btn btn-secondary">Batal</a>
            </div>
        <?php echo form_close(); ?>
    </div>
<?php } ?>
