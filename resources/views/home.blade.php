<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <header>
        <nav>
            <ul style="list-style-type: none; display: flex;">
                <li style="margin-left: 0.5rem; cursor: pointer;">
                    <a style="text-decoration: none; color: black;" href="{{route('home')}}">Home</a>
                </li>
                <li style="margin-left: 0.5rem; cursor: pointer;">
                    <a style="text-decoration: none; color: black;" href="{{route('shop')}}">Shop</a>
                </li>
                <li style="margin-left: 0.5rem; cursor: pointer;">
                    <a style="text-decoration: none; color: black;" href="{{route('blog')}}">Blog</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Ciao a tutti questa è la Home, primo utilizzo laravel 9</h1>
    </main>
</body>

</html>