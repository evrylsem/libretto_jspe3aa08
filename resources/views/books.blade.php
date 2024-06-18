<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td><h2>Title</h2></td>
                <td><h2>Author</h2></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{$book->title}}</td>
                    <!-- <td>{{$book->author->id}}</td> -->
                    <td>{{$book->author->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>