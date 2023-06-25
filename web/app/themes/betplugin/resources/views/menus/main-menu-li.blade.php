@if (!$project->wpse_children)
  <li @class(["flex items-center h-10 font-bold uppercase text-sm"])>
    @include('menus.menu-anchor', ['has_children' => false])
  </li>
@endif

@if ($project->wpse_children)
  <li @class(["flex items-center h-10 font-bold uppercase text-sm"])>
    @include('menus.menu-anchor', ['has_children' => true])

    <ul @class(["sub-menu text-base z-10 bg-white rounded-sm top-0 right-full min-w-[200px] pl-2 hidden lg:shadow-lg lg:shadow-slate-700 lg:absolute lg:pl-0 lg:block"])>
      @foreach($project->wpse_children as $project)
        @include('menus.main-menu-li', (array)$project)
      @endforeach
    </ul>
  </li>
@endif
