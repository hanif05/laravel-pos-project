<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="/home">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									
									<li class="nav-parent">
										<a>
											<i class="fa fa-database" aria-hidden="true"></i>
											<span>Master</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="{{ route('kategori.index') }}" class="fa fa-reorder">
													<span>Data Kategori Produk  </span>
														
												</a>
											</li>
											<li>
												<a href="{{ route('produk.index') }}" class="fa fa-tags">
													Data Produk
													 	
												</a>
											</li>
											

										</ul>
									</li>
									<li class="nav-active">
										<a href="{{ route('transaksi') }}">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>
											<span>Transaksi</span>
										</a>
									</li>
									<li class="nav-active">
										<a href="#">
											<i class="fa fa-credit-card" aria-hidden="true"></i>
											<span>Refund</span>
										</a>
									</li>
								</ul>
							</nav>
				
							<hr class="separator" />
				
							
				
							<hr class="separator" />
				
							
						</div>
				
					</div>
				
				</aside>