<div @class(['p-4'])>
    @php
    $fields = [
    'title' => [
    'type' => 'text',
    'label' => 'Title',
    'name' => 'title',
    'class' => 'form-control',
    'place' => 'Enter the title of the blog post',
    ],
    'content' => [
    'type' => 'textarea',
    'label' => 'Content',
    'name' => 'content',
    'class' => 'form-control',
    'place' => 'Write the content of the blog post here',
    ]

    ];
    @endphp

    <form action="" @class(['w3-card-2 w3-padding-16'])>
        <div class="card">
            <div class="card-header text-center text-dark">
                <h2>Create a new blog post</h2>
            </div>
            <div class="card-body">
                @foreach ($fields as $key => $field)
                @if ($field['type'] === 'textarea')
                <div class="form-group">
                    <textarea name="{{ $key }}" id="{{ $key }}" rows="7" wire:model='{{ $key }}'
                        class="{{ $field['class'] }}" placeholder="{{ $field['place'] }}">
                </textarea>
                </div>
                @else
                <div class="form-group">
                    <input type="{{ $field['type'] }}" wire:model='{{ $key }}' placeholder="{{ $field['place'] }}"
                        class="{{ $field['class'] }}">
                </div>
                @endif
                @endforeach
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Create Post
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>