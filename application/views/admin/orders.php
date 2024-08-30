<?php if ($level == "user") { ?>
    <div class="container-fluid">
        <div class="container mt-4">
            <h2>Orders List</h2>
            <br>
            <table class="table table-striped table-responsive-lg">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Gambar</th>
                        <th>Nama Pesanan</th>
                        <th>Harga</th>
                        <th>Total Pesanan</th>
                        <th>Total Harga</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $grand_total = 0;
                    
                    foreach ($orders as $order) { 
                        $grand_total += $order['t_harga'];
                    ?>
                        <tr>
                            <td><?php echo $order['id']; ?></td>
                            <td><img src="<?php echo base_url('assets/images/menu/' . $order['gambar']); ?>" style="max-width: 100px;"></td>
                            <td><?php echo $order['judul']; ?></td>
                            <td><?php echo number_format($order['harga'], 3, '.', '.'); ?></td>
                            <td><?php echo number_format($order['t_barang']); ?></td>
                            <td><?php echo number_format($order['t_harga'], 3, '.', '.'); ?></td>
                            <td>
                                <form action="<?php echo site_url('admin/update_order'); ?>" method="post" style="display: inline;">
                                    <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>">
                                    <input type="hidden" name="action" value="decrease">
                                    <button type="submit" class="btn btn-warning btn-sm me-2">
                                        <i class="bi bi-minus"></i> Kurang
                                    </button>
                                </form>
                                <form action="<?php echo site_url('admin/update_order'); ?>" method="post" style="display: inline;">
                                    <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>">
                                    <input type="hidden" name="action" value="increase">
                                    <button type="submit" class="btn btn-primary btn-sm me-2">
                                        <i class="bi bi-plus"></i> Tambah
                                    </button>
                                </form>
                                <form action="<?php echo site_url('admin/delete_order'); ?>" method="post" style="display: inline;">
                                    <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>">
                                    <button type="submit" class="btn btn-danger btn-sm me-2" onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?');">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" class="text-end"><strong>Total Semua Harga: Rp</strong></td>
                        <td><strong><?php echo number_format($grand_total, 3, '.', '.'); ?></strong></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
<?php } else if ($level == "admin") { ?>
    <h1>404 ERROR!</h1>
<?php } ?>
