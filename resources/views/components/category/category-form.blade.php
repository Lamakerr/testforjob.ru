@props(['category'=>null])   
<x-form {{ $attributes }} >
    <x-form-item>
        <x-label class="required h4" title='Название статьи не должно создержать более 100 символов'>Название категории</x-label>
        <x-input name="title" value="{{ $category->title ?? ''}}" autofocus  class="form-control"/>
            <x-error name='title'/>
    </x-form-item>
    <x-form-item>
        <x-label class="h5 required" title="Аватарка вашей категории">Картинка категории</x-label>
        <x-input type="file" name="image" id="image" class="mt-1"/>
    </x-form-item>
    <x-form-item>
        <x-label class="required h5" title='Описание статьи не должно создержать более 100 символов'>Краткое описание</x-label>
        <x-input name="anonse" value="{{ $category->anonse ?? ''}}" autofocus  class="form-control"/>
            <x-error name='anonse'/>
    </x-form-item>
    <x-form-item>
        <x-label class="required h6">Содержание категории</x-label>
        <x-trix-editor name='content' value="{{ $category->content ?? ''}}"></x-trix-editor>
        <x-error name='content'/>
    </x-form-item>
    {{$slot}}
    <x-button type='submit'>
        Cохранить
    </x-button>
</x-form>