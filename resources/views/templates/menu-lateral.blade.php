<nav id="slide-out" class="side-nav fixed col-md-2 grey lighten-5 nav-slide-bar">

	<ul class="collapsible collapsible-accordion custom-scrollbar ps ps--theme_default" style="margin-top: 30px;">
		@foreach($menus as $menu)
		<li>
			<a href="{{ route($menu->route) }}" class="collapsible-header waves-effect">
				<h4><i class="{{ $menu->icon }}"></i>
				{{ $menu->nome }}</h4>
			</a>
		</li>
		@endforeach()
	</ul>
	
</nav>