<html>
    <head>
        <title>Register</title>
        <x-tailwind/>
    </head>
    <body>
        <div class="flex">
            <div class="flex-none w-14"><br></div>
            <div class="grow items-center text-center">
                
                <form action="{{ route('user.create') }}">
                    <div>
                        <div class="text-xl font-bold">Register</div>
                        <input type="text" placeholder="Username" name="username" class="border-4 px-4 py-2 mt-3"> <br>
                        <input type="text" placeholder="Email" name="email" class="border-4 px-4 py-2 mt-3"> <br>
                        <input type="password" placeholder="Password" name="password" class="border-4 px-4 py-2 mt-3"> <br>
                        <input type="number" placeholder="Age" name="age" class="border-4 px-4 py-2 mt-3"> <br>
                        <button class="border-4 px-4 py-2 mt-3">Submit</button>
                    </div>
                </form>

                <button class="transition duration-100 hover:scale-110 hover:text-blue-500">
                    <a href="{{route('act14.login')}}">Already have an account?</a>
                </button>
            </div>
            <div class="flex-none w-14"><br></div>
        </div>
    </body>
</html>