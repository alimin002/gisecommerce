<?php
/* Candralab Ecommerce v2.0
 * http://www.candra.web.id/
 * Candra adi putra <candraadiputra@gmail.com>
 * last edit: 15 okt 2013
 */
?>
<!--class awal class="nav nav-list"-->
    <ul  class="nav nav-list" style="top: 0px;">
        <li class="active">
            <a href="index.php">
                <i class="icon-dashboard" id="age" title="We ask for your age only for statistical purposes."></i>
                <span>Dashboard</span>
            </a>
			
        </li>
		<li class="hsub">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-credit-card"></i>
							<span class="menu-text"> Pembelian </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hsub">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Master
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="index.php?mod=supplier&pg=supplier_view">
											<i class="menu-icon fa fa-caret-right"></i>
											Supplier
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="index.php?mod=kategori&pg=kategori_view">
											<i class="menu-icon fa fa-caret-right"></i>
											Kategori Produk
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							<li class="hsub">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Transaksi
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="index.php?mod=Pembelian_Produk&pg=Pembelian_Prodak_view">
											<i class="menu-icon fa fa-leaf"></i>
											Pembelian Produk
										</a>

										<b class="arrow"></b>
									</li>
										<li class="">
										<a href="index.php?mod=retur_pembelian&pg=returpembelian_view">
											<i class="menu-icon fa fa-leaf"></i>
											Retur Pembelian
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="hsub">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa fa-money"></i>
							<span class="menu-text"> Penjualan</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hsub">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Master
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="top-menu.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Pelanggan
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							<li class="hsub">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Transaksi
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="index.php?mod=penjualan_produk&pg=penjualanproduk_view">
											<i class="menu-icon fa fa-leaf"></i>
											Penjualan Produk
										</a>

										<b class="arrow"></b>
									</li>
										<li class="">
										<a href="index.php?mod=returpenjualan&pg=returpenjualan_view">
											<i class="menu-icon fa fa-leaf"></i>
											Retur Penjualan
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
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
				 <li>
                    <a href="index.php?mod=banner&pg=banner_view">
                        <i class="icon-double-angle-right"></i> Banner
                    </a>
                </li>
				<li>
                    <a href="index.php?mod=banner&pg=banner_view">
                        <i class="icon-double-angle-right"></i> Trafic pengunjung
                    </a>
                </li>
					


            </ul>
			<!---
			<ul class="submenu">
                <li>
                    <a href="index.php?mod=banner&pg=banner_view">
                        <i class="icon-double-angle-right"></i> Banner
                    </a>
                </li>




            </ul>
			--->
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
				

            </ul>
        </li>
		
		
       <li class="hsub">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-usd"></i>
							<span class="menu-text"> Accounting </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hsub">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Master
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="top-menu.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Nama Usaha
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="top-menu.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Informasi Pajak
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="top-menu.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Perkiraan
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="top-menu.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Periode
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							<li class="hsub">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									Setup
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="top-menu.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Saldo Awal
										</a>

										<b class="arrow"></b>
									</li>
									
								</ul>
							</li>
							<li class="hsub">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Transaksi
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="top-menu.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Jurnal Umum
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="mobile-menu-1.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Jurnal Penyesuaian
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							<li class="hsub">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Laporan
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="top-menu.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Jurnal
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="mobile-menu-1.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Buku Besar
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="mobile-menu-1.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Neraca Saldo
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="mobile-menu-1.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Neraca Lajur 
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="mobile-menu-1.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Neraca Laba Rugi
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="mobile-menu-1.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Periode Equitas
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="mobile-menu-1.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Laporan Keuangan
										</a>

										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="mobile-menu-1.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Kategori Produk
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
							<li class="hsub">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Proses
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="top-menu.html">
											<i class="menu-icon fa fa-caret-right"></i>
											Posting Periode
										</a>

										<b class="arrow"></b>
									</li>
									
								</ul>
							</li>
							<li class="hsub">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Tools
									<b class="arrow fa fa-angle-down"></b>
								</a>

								
							</li>
							<li class="hsub">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Manual
									<b class="arrow fa fa-angle-down"></b>
								</a>
							</li>
							
						</ul>
					</li>
					<li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-list"></i>
                <span>Grafik 1</span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="index.php?mod=kategori&pg=kategori_view">
                        <i class="icon-double-angle-right"></i> Grafik Penjualan
                    </a>
                </li>
                <li>
                    <a href="index.php?mod=produk&pg=produk_view">
                        <i class="icon-double-angle-right"></i> Grafik Pembelian
                    </a>
                </li>
               
            </ul>
        </li>
		<li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-list"></i>
                <span>Grafik 2</span>

                <b class="arrow icon-angle-down"></b>
            </a>
			<ul class="submenu">
                <li>
                    <a href="index.php?mod=kategori&pg=kategori_view">
                        <i class="icon-double-angle-right"></i> Grafik Pendapatan
                    </a>
                </li>
                <li>
                    <a href="index.php?mod=produk&pg=produk_view">
                        <i class="icon-double-angle-right"></i> Grafik Hutang
                    </a>
                </li>
				<li>
                    <a href="index.php?mod=produk&pg=produk_view">
                        <i class="icon-double-angle-right"></i> Grafik Saham
                    </a>
                </li>
				<li>
                    <a href="index.php?mod=produk&pg=produk_view">
                        <i class="icon-double-angle-right"></i> Grafik Modal
                    </a>
                </li>
               
            </ul>
		</li>
		
					
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-cog"></i>
                <span> Setting</span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
				<?php 
				if($_SESSION["username"]=='admin'){
				
				
				?>
                <li>
                    <a href="index.php?mod=pengelola&pg=pengelola_view">
                        <i class="icon-double-angle-right"></i> Pengelola
                    </a>
                </li>
				<?php } ?>
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
	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>

   