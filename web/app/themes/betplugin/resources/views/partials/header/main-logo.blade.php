<a href="@php(home_url('/'))" class="block mx-auto">
    <div class="mx-auto">
        @php($custom_logo_id = get_theme_mod( 'custom_logo' ))
        @php($image = wp_get_attachment_image_src( $custom_logo_id , 'full' ))
        <img src="{{$image[0]}}" alt="svenskaspel logo" class="h-5">
    </div>
</a>