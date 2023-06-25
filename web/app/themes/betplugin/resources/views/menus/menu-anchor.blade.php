<a href="{{ $project->url }}" @class([ "border-b border-light-gray bg-white text-dark-blue flex items-center w-full h-full px-3 transition-colors hover:bg-light-gray hover:border-dark-blue" , (get_the_ID()==$project->object_id) ? "bg-oss_blue_light !text-white pointer-events-none" : "",])>
  @php($icon = get_field("prim_menu_icon", $project))
  <i class="{{$icon ? $icon : 'fa-solid fa-circle-chevron-right'}} text-dark-blue mr-1 text-sm"></i>
  <div class="flex items-center justify-between w-full">
    {!! $project->title !!}
    <i class="fa-solid fa-circle-chevron-right text-light-blue mr-1 text-sm"></i>
  </div>
</a>