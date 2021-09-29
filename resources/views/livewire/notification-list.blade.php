<div wire:poll.visible>
    @forelse($notifications as $notification)
    
    <a href="{{ URL::to($notification->data['type'].'/'.$notification->data['route_id'])}}">
        <div class="btn btn-outline-primary container action" data-id="{{ $notification->id }}" role="alert">
            <h6 class="text-black h6">{{ $notification->data["title"] }}</h6>
            <p>{{ $notification->data["body"] }}</p>
            <p>{{ $notification->created_at->diffForHumans() }}</p>
        </div>
    </a>
    @empty
        <p class="d-flex justify-content-center pt-4"> There are no new notifications  </p>
    @endforelse
</div>
