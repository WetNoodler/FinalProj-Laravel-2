<div class="w-full h-20">
    <div class="flex fixed w-full h-20 bg-slate-200 p-3">
        <button class="w-fit px-2 flex">
                @if ( $you->image == null )
                    <img class="float-left w-14 rounded-full border-4 border-slate-700"
                    src="https://t4.ftcdn.net/jpg/03/46/93/61/360_F_346936114_RaxE6OQogebgAWTalE1myseY1Hbb5qPM.jpg">
                @else
                    <img class="float-left w-14 rounded-full border-4 border-slate-700"
                    src="{{ $you->image }}">
                @endif

            <div class="mx-4">
                <div class="font-black pt-2">{{ $you->username }}</div>
                <div class="float-right text-sm italic">Title</div>
            </div>
        </button>

        <div class="grow"><br></div>

        <div class="w-fit grid grid-cols-3">
            <form action="/act/cart/{{ $uid }}">
                <input type="hidden" name="uid" value="{{ $uid }}">
                <button class="w-12 h-12 mx-1 p-2 rounded-xl transition duration-100 hover:scale-110 hover:bg-orange-200 hover:invert">
                    <img src="https://www.svgrepo.com/show/80543/shopping-cart-outline.svg">
                </button>
            </form>
            <button class="w-12 h-12 mx-1 p-2 rounded-xl transition duration-100 hover:scale-110 hover:bg-orange-200 hover:invert">
                <img src="https://www.svgrepo.com/show/409881/trophy.svg">
            </button>
            <a href="/act/e/login" class="w-12 h-12 mx-1 p-2 rounded-xl transition duration-100 hover:scale-110 hover:bg-orange-200 hover:invert">
                <img src="https://cdn-icons-png.flaticon.com/512/660/660350.png">
            </a>
        </div>
        
    </div>
</div>