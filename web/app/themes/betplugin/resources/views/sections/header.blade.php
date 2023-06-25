<header id="site-header" class="font-sans">
	@include('partials.header.main-menu')
	<div class="bg-dark-blue flex items-center justify-between h-10 w-full fixed top-0 text-white shadow-md">
		<div class="flex h-full flex-1">
			<button id="menuBar" class="md:px-6 hover:bg-hover-black px-5">
				<i class="fa-solid fa-bars text-light-blue w-[12.5px] h-[16px]"></i>
			</button>
			<a href="/logga-in" class="uppercase md:flex items-center hover:bg-hover-black px-6 text-sm font-bold hidden">
				<span>Logga in</span>
				<i class="fa-solid fa-right-to-bracket text-light-blue ml-2"></i>
			</a>
		</div>
		<div class="h-full flex items-center flex-1 text-center flex-1">
			@include('partials.header.main-logo')
		</div>
		<div class="flex justify-end flex-1 h-full">
			<button id="openSideChat" class="uppercase flex items-center h-full hover:bg-hover-black md:px-6 text-sm font-bold px-5">
				<span class="px-2">Chat</span>
				<i class="fa-solid fa-comment text-light-blue"></i>
			</button>
		</div>
	</div>
	@include('partials.header.side-chat')
	@include('partials.header.product-menu')
	<div class="bg-light-blue text-dark-blue text-center py-3 text-xs font-bold">
		<div class="max-w-screen-xl mx-auto">
			<h1>
				Liverättning &amp; Spelförslag
			</h1>
		</div>
	</div>
	<div class="bg-white shadow-md py-[5px] px-[11px] text-[11px] leading-[1.3] text-gray">
		<div class="max-w-screen-xl mx-auto">
			*Innehåller reklamlänk | 18+ år | Spela ansvarsfullt | stodlinjen.se | spelpaus.se | När du väljer att klicka på en utgående länk på vår sida, kan vi komma att erhålla en provision, dock utan någon kostnad från din sida.
			<a href="/villkor" class="underline" style="color: gray;">Läs hela meddelandet här</a>.
		</div>
	</div>
</header>