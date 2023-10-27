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
            <tr class=" text-start border-2">
                <th class="text-start border">SN</th>
                <th class=" text-start border">Name</th>
                <th class=" text-start border">Qty</th>
                <th class=" text-start border">Description</th>
                <th class=" text-start border">Price</th>
                <th colspan="2">Action</th>
            </tr>
            @php $c = 1 @endphp
            @foreach($products as $p)
                <tr class=" border">
                    <td class=" text-start border">{{$c++ }}</td>
                    <td class=" text-start border">{{$p->name}} </td>
                    <td class=" text-start border">{{$p->qty}}</td>
                    <td class=" text-start border">{{$p->description}} </td>
                    <td class=" text-start border">{{$p->price}} </td>
                    <td class=" text-center border">
                        <a class=" bg-blue-500 border px-4" href="{{route('product.edit', ['product' => $p])}}">
                            Edit
                        </a>
                    </td>
                    <td class=" text-center border ">
                        <a class=" bg-red-500 border px-3" href="{{route('product.delete', ['product' => $p])}}">
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