<div class="card-body">
  <div class="d-flex justify-content-between">
  <div>
    {{$slot}} 
    </div> 
    <div>
    @isset($right)
  {{ $right}}
  @endisset
  </div>
</div>
