            <!-- Menu Pilihan -->
            <section id="Menu" class="wide-70 menu-section division">
                <div class="container">

                    <!-- TABS NAVIGATION -->
                    <div id="tabs-nav">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <ul class="tabs-1 ico-55 red-tabs clearfix">

                                    <!-- TAB-1 LINK -->
                                    <li class="tab-link current" data-tab="tab-1">
                                        <h5 class="h5-sm">Burgers</h5>
                                    </li>

                                    <!-- TAB-2 LINK -->
                                    <li class="tab-link" data-tab="tab-2">
                                        <h5 class="h5-sm">Fries & Sides</h5>
                                    </li>

                                    <!-- TAB-3 LINK -->
                                    <li class="tab-link" data-tab="tab-3">
                                        <h5 class="h5-sm">Drinks</h5>
                                    </li>

                                    <!-- TAB-4 LINK -->
                                    <li class="tab-link" data-tab="tab-4">
                                        <h5 class="h5-sm">Desserts</h5>
                                    </li>

                                </ul>
                            </div>
                        </div>  
                    </div>

                    <!-- TABS CONTENT -->
                    <div id="tabs-content">

                        <!-- TAB-1 CONTENT -->
                        <div id="tab-1" class="tab-content current">
                            <div class="row">
                                <?php foreach ($menu as $item): ?>
                                    <?php if ($item['category'] == 'burgers'): //var_dump($item['id']); ?>
                                        <!-- MENU ITEM -->
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="menu-7-item">
                                                <!-- IMAGE -->
                                                <div class="menu-7-img rel">
                                                    <img class="img-fluid" src="<?php echo base_url('assets/images/menu/' . $item['gambar']); ?>" alt="menu-image" />
                                                    <div class="menu-7-price bg-coffee">
                                                        <h5 class="h5-xs yellow-color">Rp. <?php echo number_format($item['harga'], 3, '.', '.'); ?>,00</h5>
                                                    </div>
                                                </div>
                                                <!-- TEXT -->
                                                <div class="menu-7-txt rel">
                                                    <h5 class="h5-sm"><?php echo htmlspecialchars($item['judul']); ?></h5>
                                                    <p class="grey-color"><?php echo htmlspecialchars($item['deskripsi']); ?></p>
                                                    
                                                    <?php if ($level == "user"): ?>
                                                        <form action="<?php echo site_url('admin/add_order'); ?>" method="post" style="display: inline;">
                                                            <input type="hidden" name="menu_id" value="<?php echo $item['id']; ?>">
                                                            <button type="submit" name="add_to_cart" class="btn btn-sm btn-tra-grey yellow-hover">
                                                                <span class="flaticon-shopping-bag"></span> Add to Cart
                                                            </button>
                                                        </form>
                                                    <?php else: ?>
                                                        <a href="#AddCart" class="btn btn-sm btn-tra-grey yellow-hover" onclick="return confirm('Anda harus login terlebih dahulu sebagai user!');">
                                                            <span class="flaticon-shopping-bag"></span> Add to Cart
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>  
                        </div>
                        <!-- END TAB-1 CONTENT -->


                        <!-- TAB-2 CONTENT -->
                        <div id="tab-2" class="tab-content">
                            <div class="row">
                                <?php foreach ($menu as $item): ?>
                                    <?php if ($item['category'] == 'sides'): ?>
                                        <!-- MENU ITEM -->
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="menu-7-item">
                                                <!-- IMAGE -->
                                                <div class="menu-7-img rel">
                                                    <img class="img-fluid" src="<?php echo base_url('assets/images/menu/' . $item['gambar']); ?>" alt="menu-image" />
                                                    <div class="menu-7-price bg-coffee">
                                                        <h5 class="h5-xs yellow-color">Rp. <?php echo number_format($item['harga'], 3, '.', '.'); ?>,00</h5>
                                                    </div>
                                                </div>
                                                <!-- TEXT -->
                                                <div class="menu-7-txt rel">
                                                    <h5 class="h5-sm"><?php echo htmlspecialchars($item['judul']); ?></h5>
                                                    <p class="grey-color"><?php echo htmlspecialchars($item['deskripsi']); ?></p>

                                                    <?php if ($level == "user"): ?>
                                                        <form action="<?php echo site_url('admin/add_order'); ?>" method="post" style="display: inline;">
                                                            <input type="hidden" name="menu_id" value="<?php echo $item['id']; ?>">
                                                            <button type="submit" name="add_to_cart" class="btn btn-sm btn-tra-grey yellow-hover">
                                                                <span class="flaticon-shopping-bag"></span> Add to Cart
                                                            </button>
                                                        </form>
                                                    <?php else: ?>
                                                        <a href="#AddCart" class="btn btn-sm btn-tra-grey yellow-hover" onclick="return confirm('Anda harus login terlebih dahulu sebagai user!');">
                                                            <span class="flaticon-shopping-bag"></span> Add to Cart
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>  
                        </div>
                        <!-- END TAB-2 CONTENT -->

                        <!-- TAB-3 CONTENT -->
                        <div id="tab-3" class="tab-content">
                            <div class="row">
                                <?php foreach ($menu as $item): ?>
                                    <?php if ($item['category'] == 'drinks'): ?>
                                        <!-- MENU ITEM -->
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="menu-7-item">
                                                <!-- IMAGE -->
                                                <div class="menu-7-img rel">
                                                    <img class="img-fluid" src="<?php echo base_url('assets/images/menu/' . $item['gambar']); ?>" alt="menu-image" />
                                                    <div class="menu-7-price bg-coffee">
                                                        <h5 class="h5-xs yellow-color">Rp. <?php echo number_format($item['harga'], 3, '.', '.'); ?>,00</h5>
                                                    </div>
                                                </div>
                                                <!-- TEXT -->
                                                <div class="menu-7-txt rel">
                                                    <h5 class="h5-sm"><?php echo htmlspecialchars($item['judul']); ?></h5>
                                                    <p class="grey-color"><?php echo htmlspecialchars($item['deskripsi']); ?></p>
                                                    
                                                    <?php if ($level == "user"): ?>
                                                        <form action="<?php echo site_url('admin/add_order'); ?>" method="post" style="display: inline;">
                                                            <input type="hidden" name="menu_id" value="<?php echo $item['id']; ?>">
                                                            <button type="submit" name="add_to_cart" class="btn btn-sm btn-tra-grey yellow-hover">
                                                                <span class="flaticon-shopping-bag"></span> Add to Cart
                                                            </button>
                                                        </form>
                                                    <?php else: ?>
                                                        <a href="#AddCart" class="btn btn-sm btn-tra-grey yellow-hover" onclick="return confirm('Anda harus login terlebih dahulu sebagai user!');">
                                                            <span class="flaticon-shopping-bag"></span> Add to Cart
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>  
                        </div>
                        <!-- END TAB-3 CONTENT -->

                        <!-- TAB-4 CONTENT -->
                        <div id="tab-4" class="tab-content">
                            <div class="row">
                                <?php foreach ($menu as $item): ?>
                                    <?php if ($item['category'] == 'desserts'): ?>
                                        <!-- MENU ITEM -->
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="menu-7-item">
                                                <!-- IMAGE -->
                                                <div class="menu-7-img rel">
                                                    <img class="img-fluid" src="<?php echo base_url('assets/images/menu/' . $item['gambar']); ?>" alt="menu-image" />
                                                    <div class="menu-7-price bg-coffee">
                                                        <h5 class="h5-xs yellow-color">Rp. <?php echo number_format($item['harga'], 3, '.', '.'); ?>,00</h5>
                                                    </div>
                                                </div>
                                                <!-- TEXT -->
                                                <div class="menu-7-txt rel">
                                                    <h5 class="h5-sm"><?php echo htmlspecialchars($item['judul']); ?></h5>
                                                    <p class="grey-color"><?php echo htmlspecialchars($item['deskripsi']); ?></p>
                                                    
                                                    <?php if ($level == "user"): ?>
                                                        <form action="<?php echo site_url('admin/add_order'); ?>" method="post" style="display: inline;">
                                                            <input type="hidden" name="menu_id" value="<?php echo $item['id']; ?>">
                                                            <button type="submit" name="add_to_cart" class="btn btn-sm btn-tra-grey yellow-hover">
                                                                <span class="flaticon-shopping-bag"></span> Add to Cart
                                                            </button>
                                                        </form>
                                                    <?php else: ?>
                                                        <a href="#AddCart" class="btn btn-sm btn-tra-grey yellow-hover" onclick="return confirm('Anda harus login terlebih dahulu sebagai user!');">
                                                            <span class="flaticon-shopping-bag"></span> Add to Cart
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>  
                        </div>
                        <!-- END TAB-4 CONTENT -->

                    </div> <!-- END TABS CONTENT -->
                </div> <!-- End container -->
            </section>
