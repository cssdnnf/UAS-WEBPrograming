                <!-- Tambah MENU Modal -->
                 <div class="container mt-5">   
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title" id="tambahMenuModalLabel">Tambah Menu Baru</h2>
                            </div>
                            <div class="modal-body">
                                <?php echo form_open_multipart('admin/menu_add'); ?>
                                    <div class="mb-3">
                                        <label for="judul" class="form-label">Judul:</label>
                                        <input type="text" class="form-control" id="judul" name="judul">
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi" class="form-label">Deskripsi:</label>
                                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga" class="form-label">Harga:</label>
                                        <input type="number" class="form-control" id="harga" name="harga">
                                    </div>
                                    <div class="mb-3">
                                        <label for="gambar" class="form-label">Gambar: </label>
                                        <input type="file" class="form-control" id="gambar" name="gambar">
                                    </div>
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Category: </label>
                                        <select class="form-select" id="category" name="category">
                                            <option value="burgers">Burgers</option>
                                            <option value="sides">Fries & Sides</option>
                                            <option value="drinks">Drinks</option>
                                            <option value="desserts">Desserts</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary" name="add_menu">Tambah Menu</button>
                                        <a href="<?php echo site_url('admin/menu'); ?>" class="btn btn-secondary">Batal</a>
                                    </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                