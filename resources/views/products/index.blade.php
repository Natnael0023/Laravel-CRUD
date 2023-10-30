<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <div class="gradient">
    </div>

</head>

<body class=" px-6 md:px-20 lg:px-36">


    <x-nav now=""/>
    <main>
    <h1 class=" text-2xl mt-5">Products</h1>
    <div class=" min-h-[50vh] ">
        <table class=" lg:w-full md:w-full mt-3 rounded-xl">
            <tr class=" text-start">
                <th class="text-start ">SN</th>
                <th class="text-start ">Image</th>
                <th class=" text-start ">Name</th>
                <th class="  text-start ">InStock</th>
                <th class=" text-start ">Description</th>
                <th class=" text-start ">Price</th>
                <th colspan="2">Action</th>
            </tr>
            @php $c = 1 @endphp
            @foreach($products as $p)
                <tr class=" border-b  ">
                    <td class=" text-start">{{$c++ }}</td>
                    <td>
                        <div class=" w-[80px] lg:w-32 md:w-32 h-28 overflow-hidden rounded-xl flex items-center ">
                            <img src="{{asset('images/'.$p->image)}}"   alt="" class=" rounded-xl">
                        </div>
                    </td>
                    <td class=" text-start ">{{$p->name}} </td>
                    <td class=" text-start ">{{$p->inStock}}</td>
                    <td class=" text-start ">{{$p->description}} </td>
                    <td class=" text-start ">{{$p->price}} </td>
                    <td class=" text-center ">
                        <a href="{{route('product.edit',['product' => $p])}}" 
                            class=" bg-sky-300 p-1  rounded-xl border-2 border-transparent hover:border-blue-400 text-blue-700 font-semibold md:p-2 md:px-4 lg:p-2  lg:px-4" >
                            Edit
                        </a>
                    </td>
                    <td class=" text-center  ">
                        <a href="{{route('product.delete', ['product' => $p])}}"
                            class=" bg-red-300 p-1 lg:p-2 md:p-2  lg:px-3 md:px-3 rounded-xl border-2 border-transparent hover:border-red-400 text-red-800 font-semibold " >
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
   </main>
   <x-footer/>
</body>
</html>