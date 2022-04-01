<ul>
    @foreach($members as $member)
        <li>{{ $member->name }}</li>
        <li>{{ $member->category->division }}</li>
    @endforeach
</ul>