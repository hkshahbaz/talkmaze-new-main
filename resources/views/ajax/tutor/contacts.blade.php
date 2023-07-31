@foreach($converstaions as $item)
<li class="contact" data-convo_id="{{ $item->id }}">
    <div class="wrap">
        <img src="{{ asset($item->user->profile->image) }}" alt="" />
        <div class="meta">
            <p class="name">{{ $item->user->name }}</p>
        </div>
    </div>
</li>
@endforeach
