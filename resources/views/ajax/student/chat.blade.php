@foreach($list->messages as $item)
<div class="msg {{ $item->user_id == $user->id ? 'right-msg' : 'left-msg'}} ">
    <div class="msg-img" style="background-image: url({{ asset($item->user->profile->image) }})"></div>

    <div class="msg-bubble">
        <div class="msg-info">
            <div class="msg-info-name">{{ $item->user->name }}</div>
            <div class="msg-info-time">{{ $item->created_at->diffForHumans() }}</div>
        </div>

        <div class="msg-text">
            {{ $item->message }}
        </div>
    </div>
</div>
@endforeach
