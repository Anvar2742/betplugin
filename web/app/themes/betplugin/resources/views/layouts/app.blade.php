<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

  <div class="grid grid-cols-main-wrap gap-[2%] mt-10 max-w-7xl px-4 mx-auto">
    <main id="main" class="main">
      @yield('content')
    </main>

    @hasSection('sidebar')
    <aside class="sidebar w-96">
      @yield('sidebar')
    </aside>
    @endif
  </div>
</div>

@include('sections.footer')