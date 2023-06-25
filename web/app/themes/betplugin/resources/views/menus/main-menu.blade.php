<nav @class([ "h-screen w-full bg-white-bottom" , ])>
	<div @class(["h-10 bg-dark-blue shadow-lg text-black flex items-center justify-between pointer"])>

		<button id="closeMenu" @class([ "h-10 px-4 flex items-center text-sm text-white font-bold uppercase hover:transition-colors hover:bg-none hover:bg-dark-blue-hover" , ])>
			<span>Stäng</span>
			<i @class(["fa-solid fa-xmark text-light-blue ml-2"])></i>
		</button>

	</div>
	<ul @class([ "border border-light-gray w-full overflow-hidden" , ])>
		@each('menus.main-menu-li', $do_menu, 'project')
	</ul>
</nav>