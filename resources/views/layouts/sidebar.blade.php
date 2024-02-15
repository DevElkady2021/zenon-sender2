
<nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
	<ul class="app-menu list-unstyled accordion" id="menu-accordion">
		<li class="nav-item">
			<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
			<a class="nav-link active" href="{{ route('home') }}">
				<span class="nav-icon">
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door"
						fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
						<path fill-rule="evenodd"
							d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
					</svg>
				</span>
				<span class="nav-link-text">الصفحةالرئيسية</span>
			</a><!--//nav-link-->
		</li><!--//nav-item-->

		<li class="nav-item has-submenu">
			<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
			<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
				data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1">
				<span class="nav-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
						class="bi bi-box" viewBox="0 0 16 16">
						<path
							d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z" />
					</svg>
				</span>
				<span class="nav-link-text">الشحنات</span>
				<span class="submenu-arrow">
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
						fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
					</svg>
				</span><!--//submenu-arrow-->
			</a><!--//nav-link-->
			<div id="submenu-1" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
				<ul class="submenu-list list-unstyled">
					<li class="submenu-item"><a class="submenu-link" href="{{ route('add') }}">شحنه جديدة</a></li>
					<li class="submenu-item"><a class="submenu-link" href="{{ route('tracking') }}">تتبع شحنة</a>
					</li>
					<li class="submenu-item"><a class="submenu-link" href="{{ route('search') }}">البحث
							والاستعلام</a></li>
					
				</ul>
			</div>
		</li><!--//nav-item-->
		<li class="nav-item has-submenu">
			<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
			<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
				data-bs-target="#submenu-2" aria-expanded="false" aria-controls="submenu-2">
				<span class="nav-icon">
					<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
						class="bi bi-truck" viewBox="0 0 16 16">
						<path
							d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2" />
					</svg>
				</span>
				<span class="nav-link-text">طلبات الالتقاط</span>
				<span class="submenu-arrow">
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
						fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
					</svg>
				</span><!--//submenu-arrow-->
			</a><!--//nav-link-->
			<div id="submenu-2" class="collapse submenu submenu-2" data-bs-parent="#menu-accordion">
				<ul class="submenu-list list-unstyled">
					<li class="submenu-item"><a class="submenu-link" href="{{ route('addOrder') }}">طلب جديد</a></li>
					<li class="submenu-item"><a class="submenu-link" href="{{ route('orders') }}">البحث
							والاستعلام</a></li>

				</ul>
			</div>
		</li><!--//nav-item-->



		<li class="nav-item">
			<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
			<a class="nav-link" href="{{ route('balance') }}">
				<span class="nav-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
						class="bi bi-cash-coin" viewBox="0 0 16 16">
						<path fill-rule="evenodd"
							d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0" />
						<path
							d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z" />
						<path
							d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z" />
						<path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567" />
					</svg>
				</span>
				<span class="nav-link-text">كشف حساب</span>
			</a><!--//nav-link-->
		</li><!--//nav-item-->

		<li class="nav-item">
			<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
			<a class="nav-link" href="help.html">
				<span class="nav-icon">
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-circle"
						fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
						<path
							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
					</svg>
				</span>
				<span class="nav-link-text">Help</span>
			</a><!--//nav-link-->
		</li><!--//nav-item-->
	</ul><!--//app-menu-->
</nav><!--//app-nav-->
<div class="app-sidepanel-footer">
	<nav class="app-nav app-nav-footer">
		<ul class="app-menu footer-menu list-unstyled">
			<li class="nav-item">
				<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
				<a class="nav-link" href="{{ route('setting') }}">
					<span class="nav-icon">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear"
							fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd"
								d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z" />
							<path fill-rule="evenodd"
								d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z" />
						</svg>
					</span>
					<span class="nav-link-text">Settings</span>
				</a><!--//nav-link-->
			</li><!--//nav-item-->


		</ul><!--//footer-menu-->
	</nav>
</div><!--//app-sidepanel-footer-->