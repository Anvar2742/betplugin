@isset($pagination)
  <nav class="pagination my-12">
    <ul class="flex justify-center">
      @foreach($pagination as $key => $page_link)
        <li @class([
        'grid',
        'items-center',
        'w-[48px]',
        'h-[48px]',
        'text-center',
        strpos($page_link, 'current') !== false ? 'active' : '',
])>{!! $page_link !!}</li>
      @endforeach
    </ul>
  </nav>
@endisset
