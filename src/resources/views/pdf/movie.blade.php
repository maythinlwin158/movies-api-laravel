<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie->title }} - PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .invoice-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #e4e4e4;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #e4e4e4;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .header img {
            max-width: 100px;
        }

        .body-content {
            margin-bottom: 20px;
        }

        .footer {
            border-top: 2px solid #e4e4e4;
            padding-top: 20px;
            text-align: center;
        }

        h1, h2 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            padding: 5px 0;
        }

    </style>
</head>
<body>

<div class="invoice-container">
    <div class="header">
        <h1>{{ $movie->title }}</h1>
        <img src="data:image/png;base64,{{ $base64_image }}" alt="{{ $movie->title }}">
    </div>

    <div class="body-content">
        <p><strong>Summary:</strong> {{ $movie->summary }}</p>
        <p><strong>IMDb Rating:</strong> {{ $movie->imdb_rating }}</p>

        <h4>Genre</h4>
        <p>{{ $movie->genre->name }}</p>

        <h4>Author</h4>
        <p>{{ $movie->author->name }}</p>

        <h4>Tags</h4>
        <ul>
            @foreach($movie->tags as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
        </ul>
    </div>

    <div class="footer">
        Thank you for downloading this movie.
    </div>
</div>

</body>
</html>
