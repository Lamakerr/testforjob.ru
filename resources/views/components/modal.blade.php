@php
    $post=$attributes->get('post');
@endphp
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Удалить
  </button>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Подтвердите действие</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         Вы уверены что хотите удалить пост?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Нет</button>
          <a href="{{route('user.posts.delete', $post->id)}}">
            <button class=" btn btn-danger">
               Да
            </button>
        </a>
        </div>
      </div>
    </div>
  </div>