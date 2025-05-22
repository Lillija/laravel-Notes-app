<div>
    <h1>Notes</h1>
    <p>take it</p>

    @foreach ($notes as $note)
    <ul>
        <li>{{ $note->title }}</li>
        <li>{{ $note->content }}</li>
    </ul>
    <button><a href="/show/{{$note->id}}">view</a></button>
    <button><a href="/edit/{{$note->id}}">Edit note</a></button>

    <form action="/destroy/{{ $note->id }}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit">Delete</button>
    </form>

    @endforeach <br>

    <button><a href="notes/create"> create new</button>


</div>