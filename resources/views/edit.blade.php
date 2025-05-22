<form action="/update/{{$note->id}}" method="post">
    @csrf
    @method("PUT")
    <input type="text" name="title" placeholder="title" value="{{ $note->title }}">
    <input type="text" name="content" placeholder="content" value="{{ $note->content }}">
    <input type="submit" value="Update">
</form>