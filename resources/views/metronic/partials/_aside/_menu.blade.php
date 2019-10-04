
<!-- begin:: Aside Menu -->
<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
	<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
			<ul class="kt-menu__nav ">
			<li class="kt-menu__item  {{ (request()->routeIs('home-dashboard') ) ? 'kt-menu__item--active' : '' }} " aria-haspopup="true"><a href="{{route('home-dashboard')}}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-architecture-and-city"></i><span class="kt-menu__link-text">Dashboard</span></a></li>
					<li class="kt-menu__section ">
						<h4 class="kt-menu__section-text">Gestion des articles</h4>
						<i class="kt-menu__section-icon flaticon-more-v2"></i>
					</li>
					<li class=" {{ (request()->routeIs('article.index') ) ? 'kt-menu__item--active' : '' }}{{ (request()->routeIs('article.create') ) ? 'kt-menu__item--active' : '' }}  kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:; " class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-folder-1"></i><span class="kt-menu__link-text">Articles</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
						<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
							<ul class="kt-menu__subnav">
								<li class="kt-menu__item {{ (request()->routeIs('article.index') ) ? 'kt-menu__item--active' : '' }} {{ (request()->routeIs('article.create') ) ? 'kt-menu__item--active' : '' }}  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Articles</span></span>
								</li>
								<li class="kt-menu__item {{ (request()->routeIs('article.create') ) ? 'kt-menu__item--active' : '' }} kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('article.create')}}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Ajouter</span></a>
									
								</li>
								<li class="kt-menu__item  {{ (request()->routeIs('article.index') ) ? 'kt-menu__item--active' : '' }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('article.index')}}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Tous les articles</span></a>
									
								</li>
								
								
							</ul>
						</div>
					</li>










				<li class="kt-menu__item {{ (request()->routeIs('category.create') ) ? 'kt-menu__item--active' : '' }} " aria-haspopup="true"><a href="{{route('category.create')}}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-expand"></i><span class="kt-menu__link-text">Catégories</span></a></li>

				<li class="kt-menu__item {{ (request()->routeIs('tag.create') ) ? 'kt-menu__item--active' : '' }} " aria-haspopup="true"><a href="{{route('tag.create')}}" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-hashtag"></i><span class="kt-menu__link-text">Tags</span></a></li>








				<li class="kt-menu__item  " aria-haspopup="true"><a href="/metronic/preview/demo12/builder.html" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-expand"></i><span class="kt-menu__link-text">Builder</span></a></li>
					<li class="kt-menu__section ">
						<h4 class="kt-menu__section-text">CRUD</h4>
						<i class="kt-menu__section-icon flaticon-more-v2"></i>
					</li>

					<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-graph-1"></i><span class="kt-menu__link-text">Charts</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
						<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
							<ul class="kt-menu__subnav">
								<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Charts</span></span>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">amCharts</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item " aria-haspopup="true"><a href="/metronic/preview/demo12/components/charts/amcharts/charts.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">amCharts Charts</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="/metronic/preview/demo12/components/charts/amcharts/stock-charts.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">amCharts Stock Charts</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="/metronic/preview/demo12/components/charts/amcharts/maps.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">amCharts Maps</span></a></li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item " aria-haspopup="true"><a href="/metronic/preview/demo12/components/charts/flotcharts.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Flot Charts</span></a></li>
								<li class="kt-menu__item " aria-haspopup="true"><a href="/metronic/preview/demo12/components/charts/google-charts.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Google Charts</span></a></li>
								<li class="kt-menu__item " aria-haspopup="true"><a href="/metronic/preview/demo12/components/charts/morris-charts.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Morris Charts</span></a></li>
							</ul>
						</div>
					</li>
					<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-location"></i><span class="kt-menu__link-text">Maps</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
						<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
							<ul class="kt-menu__subnav">
								<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Maps</span></span>
								</li>
								<li class="kt-menu__item " aria-haspopup="true"><a href="/metronic/preview/demo12/components/maps/google-maps.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Google Maps</span></a></li>
								<li class="kt-menu__item " aria-haspopup="true"><a href="/metronic/preview/demo12/components/maps/jqvmap.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">JQVMap</span></a></li>
							</ul>
						</div>
					</li>
					<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-telegram-logo"></i><span class="kt-menu__link-text">Utils</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
						<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
							<ul class="kt-menu__subnav">
								<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Utils</span></span>
								</li>
								<li class="kt-menu__item " aria-haspopup="true"><a href="/metronic/preview/demo12/components/utils/session-timeout.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Session Timeout</span></a></li>
								<li class="kt-menu__item " aria-haspopup="true"><a href="/metronic/preview/demo12/components/utils/idle-timer.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Idle Timer</span></a></li>
							</ul>
						</div>
					</li>
				</ul>
	</div>
</div>

<!-- end:: Aside Menu -->