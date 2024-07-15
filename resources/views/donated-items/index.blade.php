<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donated Items</title>
</head>
<body>
    <div class="container">
        <h1>Donated Items</h1>
        <div class="grid">
            @foreach($donatedItems as $item)
                <div class="grid-item">
                    <img src="{{ asset('storage/' . $item->image_path) }}" alt="Item Image">
                    <p>{{ $item->donation_date->format('Y/m/d') }}</p>
                    <p>{{ $item->location }}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>