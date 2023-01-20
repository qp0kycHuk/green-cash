<div>
    @foreach ($users as $user)
        <livewire:user.show.card key="{{ now() }}" :user="$user" />
    @endforeach
</div>
