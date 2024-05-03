<h1>Create Manga</h1>

<form action="{{ route('mangas.store') }}" method="POST">
    @csrf

    <label for="name">Name:</label>
    <input type="text" name="name">

    <button type="submit">Create</button>
</form>
