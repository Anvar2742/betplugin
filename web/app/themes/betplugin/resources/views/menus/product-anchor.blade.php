@if($project->ID === 37)
<a href="{{ $project->url }}" @class(["flex items-center justify-center w-full md:h-15 h-12", (get_the_ID()==$project->object_id) ? "bg-light-blue" : "",])>
    @php($product_logo = get_field("header_product_logo", $project))
    <img src="{{$product_logo['url']}}" alt="{{$product_logo['alt']}}" class="block max-h-[2.2rem] min-h-[1.2rem] w-auto h-product-menu">
    <span class="hidden">{!! $project->title !!}</span>
</a>
@else
<a href="{{ $project->url }}" @class(["flex items-center md:justify-center w-full md:h-15 hover:transition-colors hover:bg-none hover:bg-dark-blue-hover md:pl-0 pl-3 justify-start h-12 flex" , (get_the_ID()==$project->object_id) ? "bg-cad-blue" : "bg-product-menu",])>
    @php($product_logo = get_field("header_product_logo", $project))
    <img src="{{asset('images/svs_product_mark.svg')}}" alt="svenskaspel logo" class="mr-[0.2rem] block h-product-menu max-h-[2.2rem] min-h-[1.2rem] w-auto md:block hidden">
    <img src="{{$product_logo['url']}}" alt="{{$product_logo['alt']}}" class="w-auto md:max-h-[2.2rem] md:min-h-[1.2rem] md:h-product-menu md:opacity-100 h-3/5 max-h-full object-cover object-left-bottom opacity-50">
    <span class="hidden capitalize">{!! $project->title !!}</span>
</a>
@endif