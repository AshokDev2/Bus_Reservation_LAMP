<!-- File: resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Laravel</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $message }}</p>
    @if($user)
        <p>Welcome, {{ $user->name }}!</p>
    @else
        <p>Welcome, Guest!</p>
    @endif
    <ul>
        @foreach($items as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</body>
</html>