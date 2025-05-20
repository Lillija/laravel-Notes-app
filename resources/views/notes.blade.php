<div>
    <h1>Sewerslide</h1>
    <p>take it</p>
    @foreach ($notes as $note)
    <ul>
        <li>{{ $note->title }}</li>
        <li>{{ $note->content }}</li>
    </ul>
    @endforeach
</div>