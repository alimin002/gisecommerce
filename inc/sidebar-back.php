<?php
/* Candralab Ecommerce v2.0
 * http://www.candra.web.id/
 * Candra adi putra <candraadiputra@gmail.com>
 * last edit: 15 okt 2013
 */
?>

    <ul class="nav nav-list">
        <li class="active">
            <a href="index.php">
                <i class="icon-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>
		<li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-fa fa-credit-card"></i>
                <span>Pembelian</span>

                <b class="arrow icon-angle-down"></b>
            </a>
			
            <ul class="submenu">
				<li>
                    <a href="index.php?mod=invoice&pg=invoice_view">
                        <i class="icon-double-angle-right"></i> Supplier
                    </a>
                </li>
                <li>
                    <a href="index.php?mod=invoice&pg=invoice_view">
                        <i class="icon-double-angle-right"></i> Pembelian Produk
                    </a>
                </li>
				<li>
                    <a href="index.php?mod=invoice&pg=invoice_view">
                        <i class="icon-double-angle-right"></i>Retur Pembelian
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-list"></i>
                <span> Produk</span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="index.php?mod=kategori&pg=kategori_view">
                        <i class="icon-double-angle-right"></i> Kategori
                    </a>
                </li>
                <li>
                    <a href="index.php?mod=produk&pg=produk_view">
                        <i class="icon-double-angle-right"></i> List Produk
                    </a>
                </li>
                <li>
                    <a href="index.php?mod=stok&pg=stok_view">
                        <i class="icon-double-angle-right"></i> Stok barang
                    </a>
                </li>



            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-desktop"></i>
                <span> Content</span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="index.php?mod=berita&pg=berita_view">
                        <i class="icon-double-angle-right"></i> Berita / Promo
                    </a>
                </li>




            </ul>
        </li>


        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-user"></i>
                <span> Pelanggan</span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="index.php?mod=pelanggan&pg=pelanggan_view">
                        <i class="icon-double-angle-right"></i> Pelanggan
                    </a>
                </li>
                <li>
                    <a href="index.php?mod=pelanggan&pg=pelanggan_online">
                        <i class="icon-double-angle-right"></i> Pelanggan Online
                    </a>
                </li>




            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-pencil"></i>
                <span> Transaksi</span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="index.php?mod=invoice&pg=invoice_view">
                        <i class="icon-double-angle-right"></i> Transaksi
                    </a>
                </li>
				 <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-pencil"></i>
                <span> Pembelian</span>

                <b class="arrow icon-angle-down"></b>
            </a>

          
        

            <ul class="submenu">
                <li>
                    <a href="index.php?mod=invoice&pg=invoice_view">
                        <i class="icon-double-angle-right"></i> Supplier
                    </a>
                </li>

            </ul>
        </li>
		

        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-fa fa-usd"></i>
                <span> Akuntansi Jual Beli</span>

                <b class="arrow icon-angle-down"></b>
            </a>
            <div class="widget-main padding-8">
                <div id="tree2" class="tree tree-unselectable">
                    <div class="tree-folder" style="display:none;">
                        <div class="tree-folder-header"> <i class=" ace-icon ace-icon fa fa-folder"></i>
                            <div class="tree-folder-name"></div>
                        </div>
                        <div class="tree-folder-content"></div>
                        <div class="tree-loader" style="display: none;"></div>
                    </div>
                    <div class="tree-item" style="display:none;">
                        <div class="tree-item-name"></div>
                    </div>
                    <div class="tree-folder" style="display: block;">
                        <div class="tree-folder-header"> <i class="red ace-icon fa fa-folder-open"></i>
                            <div class="tree-folder-name">Master</div>
                        </div>
                        <div class="tree-folder-content">
                            <div class="tree-folder" style="display: block;">
                                <div class="tree-folder-header"> <i class="pink ace-icon fa fa-folder-open"></i>
                                    <div class="tree-folder-name">nama usaha</div>
                                </div>
                                <div class="tree-folder-content" style="display: block;">
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> wallpaper1.jpg</div>
                                    </div>
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> wallpaper2.jpg</div>
                                    </div>
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> wallpaper3.jpg</div>
                                    </div>
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> wallpaper4.jpg</div>
                                    </div>
                                </div>
                                <div class="tree-loader" style="display: none;">
                                    <div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>
                                </div>
                            </div>
                            <div class="tree-folder" style="display: block;">
                                <div class="tree-folder-header"> <i class="pink ace-icon fa fa-folder-open"></i>
                                    <div class="tree-folder-name">Camera</div>
                                </div>
                                <div class="tree-folder-content">
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> photo1.jpg</div>
                                    </div>
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> photo2.jpg</div>
                                    </div>
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> photo3.jpg</div>
                                    </div>
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> photo4.jpg</div>
                                    </div>
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> photo5.jpg</div>
                                    </div>
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> photo6.jpg</div>
                                    </div>
                                </div>
                                <div class="tree-loader" style="display: none;">
                                    <div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>
                                </div>
                            </div>
                            <div class="tree-folder" style="display: block;">
                                <div class="tree-folder-header">
                                    <i class="pink ace-icon fa fa-folder"></i>
                                    <div class="tree-folder-name">Camera</div>
                                </div>
                                <div class="tree-folder-content" style="display: none;">
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> photo1.jpg</div>
                                    </div>
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> photo2.jpg</div>
                                    </div>
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> photo3.jpg</div>
                                    </div>
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> photo4.jpg</div>
                                    </div>
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> photo5.jpg
                                        </div>
                                    </div>
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> photo6.jpg</div>
                                    </div>
                                </div>
                                <div class="tree-loader" style="display: none;">
                                    <div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>
                                </div>
                            </div>
                            <div class="tree-folder" style="display: block;">
                                <div class="tree-folder-header">
                                    <i class="pink ace-icon fa fa-folder"></i>
                                    <div class="tree-folder-name">Camera</div>
                                </div>
                                <div class="tree-folder-content" style="display: none;">
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> photo1.jpg</div>
                                    </div>
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> photo2.jpg</div>
                                    </div>
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> photo3.jpg</div>
                                    </div>
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> photo4.jpg</div>
                                    </div>
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> photo5.jpg
                                        </div>
                                    </div>
                                    <div class="tree-item" style="display: block;">
                                        <div class="tree-item-name"><i class=" ace-icon  fa fa-picture-o green"></i> photo6.jpg</div>
                                    </div>
                                </div>
                                <div class="tree-loader" style="display: none;">
                                    <div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="tree-loader" style="display: none;">
                            <div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>
                        </div>
                    </div>
                    <div class="tree-folder" style="display: block;">
                        <div class="tree-folder-header"> <i class="orange ace-icon fa fa-folder"></i>
                            <div class="tree-folder-name">Setup</div>
                        </div>
                        <div class="tree-folder-content" style="display: none;">
                            <div class="tree-item" style="display: block;">
                                <div class="tree-item-name"><i class=" ace-icon  fa fa-music blue"></i> saldo awal</div>
                            </div>

                        </div>
                        <div class="tree-loader" style="display: none;">
                            <div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>
                        </div>
                    </div>
                    <div class="tree-folder" style="display: block;">
                        <div class="tree-folder-header"> <i class="blue ace-icon fa fa-folder"></i>
                            <div class="tree-folder-name">Transaksi</div>
                        </div>
                        <div class="tree-folder-content" style="display: none;">
                            <div class="tree-item" style="display: block;">
                                <div class="tree-item-name"><i class=" ace-icon  fa fa-film blue"></i> movie1</div>
                            </div>
                            <div class="tree-item" style="display: block;">
                                <div class="tree-item-name"><i class=" ace-icon  fa fa-film blue"></i> movie2</div>
                            </div>
                            <div class="tree-item" style="display: block;">
                                <div class="tree-item-name"><i class=" ace-icon  fa fa-film blue"></i> movie3</div>
                            </div>
                            <div class="tree-item" style="display: block;">
                                <div class="tree-item-name"><i class=" ace-icon  fa fa-film blue"></i> movie4</div>
                            </div>
                            <div class="tree-item" style="display: block;">
                                <div class="tree-item-name"><i class=" ace-icon  fa fa-film blue"></i> movie5</div>
                            </div>
                        </div>
                        <div class="tree-loader" style="display: none;">
                            <div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>
                        </div>
                    </div>
                    <div class="tree-folder" style="display: block;">
                        <div class="tree-folder-header"> <i class="ace-icon ace-icon fa fa-folder green"></i>
                            <div class="tree-folder-name">Laporan</div>
                        </div>
                        <div class="tree-folder-content"></div>
                        <div class="tree-loader" style="display: none;">
                            <div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>
                        </div>
                    </div>
                    <div class="tree-folder" style="display: block;">
                        <div class="tree-folder-header"> <i class=" ace-icon ace-icon fa fa-folder"></i>
                            <div class="tree-folder-name">Prosses</div>
                        </div>
                        <div class="tree-folder-content"></div>
                        <div class="tree-loader" style="display: none;">
                            <div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>
                        </div>
                    </div>
                    <div class="tree-item" style="display: block;">
                        <div class="tree-item-name"><i class=" ace-icon  fa fa-file-text grey"></i>Tools</div>
                    </div>
                    <div class="tree-item" style="display: block;">
                        <div class="tree-item-name"><i class=" ace-icon  fa fa-book blue"></i> Manual</div>
                    </div>
                </div>
            </div>
        </li>

        <li>

        </li>
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-cog"></i>
                <span> Setting</span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="index.php?mod=pengelola&pg=pengelola_view">
                        <i class="icon-double-angle-right"></i> Pengelola
                    </a>
                </li>
                <li>
                    <a href="index.php?mod=login&pg=cp_form">
                        <i class="icon-double-angle-right"></i> Change Password
                    </a>
                </li>
                <li>
                    <a href="login/logout.php">
                        <i class="icon-double-angle-right"></i> Logout
                    </a>
                </li>



            </ul>
        </li>
    </ul>
    <!--/.nav-list-->

    <div id="sidebar-collapse">
        <i class="icon-double-angle-left"></i>
    </div>