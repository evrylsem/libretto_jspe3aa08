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
                <td colspan="2"><h2>{{$books->title}}</h2></td>
            </tr>
            <tr>
                <td>Content</td>
                <td>Rating</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
                <tr>
                    <td>{{$review->content}}</td>
                    <td>{{$review->rating}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
