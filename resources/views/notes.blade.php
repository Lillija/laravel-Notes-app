<div>
    <h1>Notes</h1>
    <p>take it</p>
   
    @foreach ($notes as $note)
    <ul>
        <li>{{ $note->title }}</li>
        <li>{{ $note->content }}</li>
    </ul>
    @endforeach
    <button>
    <a href="notes/create"> create new</button>
</div>