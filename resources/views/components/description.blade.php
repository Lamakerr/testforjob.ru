<div class="small text-muted d-flex justify-content-between border-bottom ">
  {{$slot}}
  @isset($right)
  <div>
      {{ $right }}
  </div>
  @endisset
</div>