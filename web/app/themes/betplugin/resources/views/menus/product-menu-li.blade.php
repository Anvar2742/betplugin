@if($project->ID === 37)
<li class="max-w-20 md:flex-auto flex-1">
    @include('menus.product-anchor')
</li>
@else
<li class="flex-auto text-center md:flex-auto flex-1">
    @include('menus.product-anchor')
</li>
@endif