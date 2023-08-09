<html>
    <head>
        <title>{{ $you->username }}'s Cart</title>
        <x-tailwind/>
    </head>
    <body>
        <x-nav-bar :you="$you" :uid="$uid"/>

        <div class="flex">
            Cart
        </div>
    </body>
</html>