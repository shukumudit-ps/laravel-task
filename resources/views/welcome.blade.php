<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>

<body>
    <form action="{{ route('blogPost') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
            @error('description')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="author">Author</label>
            <input type="text" name="author" id="author">
            @error('author')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Submit</button>
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif
    </form>
</body>

</html>
