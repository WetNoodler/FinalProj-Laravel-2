<html>
    <head>
        <title>Add Product</title>
        <x-tailwind/>
    </head>
    <body>
        <x-nav-bar :you="$you" :uid="$uid"/>
        <div class="flex">
            <div class="flex-none w-fit mt-6 m-auto p-6 rounded-xl bg-slate-200">
                Existing Products
                <table class="border-slate-900 border-4">
                    <thead>
                        <tr>
                            <th class="border-4 border-slate-900 p-4">Name</th>
                            <th class="border-4 border-slate-900 p-4">Price</th>
                            <th class="border-4 border-slate-900 p-4">Image</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($products as $product)
                            <tr>
                                <td class="border-4 border-slate-900 p-4">{{ $product->name }}</td>
                                <td class="border-4 border-slate-900 p-4">₱{{ $product->price }}</td>
                                <td class="border-4 border-slate-900 p-4">
                                    <a href="{{ $product->image }}">
                                        <img src="{{ $product->image }}" class="w-12 h-12">
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="flex-none w-fit mt-6 m-auto p-6 rounded-xl bg-slate-200">
                Your Product
                <table class="border-slate-900 border-4">
                    <thead>
                        <tr>
                            <th class="border-4 border-slate-900 p-4">Name</th>
                            <th class="border-4 border-slate-900 p-4">Price</th>
                            <th class="border-4 border-slate-900 p-4">Description</th>
                            <th class="border-4 border-slate-900 p-4">Image URL</th>
                        </tr>
                    </thead>

                    <form action="{{ route('product.store') }}">
                        <input type="hidden" name="uid" value="{{ $uid }}">
                    <tbody>
                        <tr>
                            <td class="border-4 border-slate-900 p-4">
                                <input type="text" name="name" class="px-6 py-2 rounded-lg bg-slate-100 border-2 border-slate-900">
                            </td>
                            <td class="border-4 border-slate-900 p-4">
                                <input type="number" name="price" min="0" class="px-6 py-2 rounded-lg bg-slate-100 border-2 border-slate-900">
                            </td>
                            <td class="border-4 border-slate-900 p-4">
                                <textarea name="description" cols="30" rows="10" class="px-6 py-2 rounded-lg bg-slate-100 border-2 border-slate-900"></textarea>
                            </td>
                            <td class="border-4 border-slate-900 p-4">
                                <input type="url" name="image" class="px-6 py-2 rounded-lg bg-slate-100 border-2 border-slate-900">
                            </td>
                        </tr>
                    </tbody>
                    <div class="float-right"><input type="submit" value="Submit" class="float-right border-x-4 border-t-4 border-slate-900 rounded-t-lg p-2 
                        transition duration-100 hover:bg-slate-500 hover:textwhite"></div>
                    </form>

                </table>
            </div>
        </div>
    </body>
</html>