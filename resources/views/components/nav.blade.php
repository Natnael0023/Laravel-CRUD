<div class=" ">
    <nav class=" flex flex-col gap-3 pt-4 py-4 mb-3  ">

            <div class=" flex items-center justify-between ">
                <div class=" py-4 ">
                    <a href="{{route('product.index')}}" class=" font-bold text-2xl md:text-3xl lg:text-3xl text-green-500">
                    LARA
                    </a>
                </div>
                <div class=" flex border w-2/4 rounded-full ">
                    <input type="text"
                    class=" p-2 px-5 w-full outline-none rounded-l-full">
                    <button class=" px-4 bg-green-500 rounded-r-full text-white font-semibold">
                        search
                    </button>
                </div>
                <div class="">
                    <ul class=" flex gap-5">
                        <li>
                            <a class=" hover:font-semibold" href="{{route('product.index')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('product.index')}}" class="hover:font-semibold">Products</a>
                        </li>
                        <li>
                            <a href="{{route('product.store')}}"" class="hover:font-semibold">Create</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=" flex items-start ">
                <p class=" text-gray-600 italic p-1 rounded-full font-semibold">Home > {{$now}}</p>
            </div>
            
    </nav>
</div>