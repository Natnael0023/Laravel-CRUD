<div class=" ">
    <nav class=" flex flex-col gap-3 pt-2 mb-3 border border-red-400">

            <div class=" flex items-center justify-between border border-blue-600">
                <div class="">
                    <a href="{{route('product.index')}}" class=" font-bold text-3xl text-green-500">
                    LOGO
                    </a>
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
                            <a href="{{route('product.create')}}"" class="hover:font-semibold">Create</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=" flex items-start border border-red-500">
                <p class=" text-gray-600 italic p-1 rounded-full font-semibold">Home > {{$now}}</p>
            </div>
            
    </nav>
</div>