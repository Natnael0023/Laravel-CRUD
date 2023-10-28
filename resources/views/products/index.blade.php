<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class=" px-36">

    <x-nav now=""/>

    <main>
    <h1 class=" text-2xl mt-5">Products</h1>
    <div class=" ">
        <table class=" w-full mt-3 rounded-xl">
            <tr class=" text-start">
                <th class="text-start ">SN</th>
                <th class="text-start ">Image</th>
                <th class=" text-start ">Name</th>
                <th class=" text-start ">Qty</th>
                <th class=" text-start ">Description</th>
                <th class=" text-start ">Price</th>
                <th colspan="2">Action</th>
            </tr>
            @php $c = 1 @endphp
            @foreach($products as $p)
                <tr class=" border-b ">
                    <td class=" text-start">{{$c++ }}</td>
                    <td>
                        <div class=" w-28 h-28 flex items-center">
                            <img src="{{asset('images/'.$p->image)}}"   alt="" class=" rounded-xl">
                        </div>
                    </td>
                    <td class=" text-start ">{{$p->name}} </td>
                    <td class=" text-start ">{{$p->qty}}</td>
                    <td class=" text-start ">{{$p->description}} </td>
                    <td class=" text-start ">{{$p->price}} </td>
                    <td class=" text-center ">
                        <a class=" bg-blue-500 rounded-xl text-white p-2 px-4" href="{{route('product.edit', ['product' => $p])}}">
                            Edit
                        </a>
                    </td>
                    <td class=" text-center  ">
                        <a class=" bg-red-500 p-2 rounded-xl text-white  px-3" href="{{route('product.delete', ['product' => $p])}}">
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