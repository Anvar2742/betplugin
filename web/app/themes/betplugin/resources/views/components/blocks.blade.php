<div {{ $anchor ? "id='$anchor'" : '' }}
     @class([
        $classes,
        $moreclasses ?? ''
])>
  {!! $slot !!}
</div>
