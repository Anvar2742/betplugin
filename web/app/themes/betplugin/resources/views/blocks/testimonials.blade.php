<x-blocks :anchor="$attributes['anchor']"
          :classes="$attributes['classes']"
          moreclasses="some more classes">
  <h1>Testimonial blade test</h1>
  @dump($attributes)
  <br>
  @dump($text)
  <br>
  @dump($details)
</x-blocks>
