<html>
    <head>
        <title>Home</title>
        <x-tailwind/>
    </head>
    <body>
        <x-nav-bar :you="$you" :uid="$uid"/>

        <div class="flex">
            <div class="grow w-14 m-2 p-4">
                <div class="flex rounded-3xl bg-gray-500 p-6">
                    <table class="grow border-collapse border-4 border-slate-900">
                        <thead>
                            <tr>
                                <th class="border-4 p-6 border-slate-900 w-8">Image</th>
                                <th class="border-4 p-6 border-slate-900">Name</th>
                                <th class="border-4 p-6 border-slate-900">Price <i>(₱)</i></th>
                                <th class="border-4 p-6 border-slate-900 w-40"></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($products as $product)
                            <tr>
                                <form action="{{ route('cart.create') }}">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="uid" value="{{ $uid }}">
                                    <td class="border-4 p-2 border-slate-900">
                                        <img src="{{ $product->image }}">
                                    </td>
                                    <td class="border-4 p-2 text-3xl font-bold border-slate-900 text-center">{{ $product->name }}</td>
                                    <td class="border-4 p-2 text-3xl font-semibold border-slate-900 text-center">
                                        @if ( $product->price == 0 )
                                            FREE
                                        @else
                                            ₱{{ $product->price }}
                                        @endif
                                    </td>
                                    <td class="border-4 p-6 border-slate-900">
                                        <button class="rounded-xl px-4 py-2 border-2 border-slate-100 bg-slate-400 transition duration-150 hover:bg-slate-200 hover:font-bold">Add to Cart</button>
                                    </td>
                                </form> 
                            </tr>
                            @endforeach
                            
                        </tbody>
                        <form action="{{ route('act14.addProduct') }}">
                        <caption class="caption-top">
                            <input type="hidden" name="uid" value="{{ $uid }}">
                            <input type="hidden" name="products" value="{{ $products }}">
                            <button class="border-x-4 border-t-4 border-slate-900 font-bold p-2 rounded-t-xl transition duration-150 hover:bg-slate-300">
                                Add more products here!
                            </button>
                        </caption>
                        </form>
                    </table>
                </div>
            </div>
            <div class="w-1/6">

                <div class="fixed bg-slate-500 p-6 rounded-3xl m-6">
                    <div class="float-right w-16 h-16">
                        @if ( $you->image == null )
                            <img src="https://t4.ftcdn.net/jpg/03/46/93/61/360_F_346936114_RaxE6OQogebgAWTalE1myseY1Hbb5qPM.jpg" class="rounded-xl">
                        @else
                            <img src="{{ $you->image }}">
                        @endif
                    </div>
                    <div class="px-6">
                        <div class="font-black text-xl">{{ $you->username }}</div>
                        <div class="float-right italic mx-6">Title</div>
                    </div>
                    <div class="float-left bg-white p-2 my-6 rounded-lg">
                        <p class="font-bold italic">About Me:</p>
                        <p class="line-clamp-6 text-sm"><x-sample.copypasta/></p>
                    </div>
                </div>

                <div class="float-right mt-60 mx-6">
                    <div class="bg-slate-500 p-6 rounded-3xl">

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>