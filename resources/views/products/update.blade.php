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
    <x-nav now="update products"/>
    <main>
        <h1 class=" text-2xl mt-5">Update Product</h1>
    <div class="border border-red-400">
        <form method="post" action='{{route('product.update', ['product' => $product])}}' 
            class=" w-full lg:w-[30rem] md:w-[40rem] mx-auto flex flex-col gap-4 mt-4"
            >
            @csrf
            @method('put')
            <fieldset class="border p-6 rounded-xl flex flex-col gap-4">
                <legend class=" text-gray-400 italic"> Product details </legend>
                <div class=" flex flex-col justify-between">
                    <label for="">Name</label>
                    <input type="text" value="{{$product->name}} " name="name" placeholder="adidas" autocomplete="off"
                    class=" p-2 focus: rounded-xl border">
                </div>
                <div class=" flex flex-col justify-between">
                    <label for="">Quantity </label>
                    <input type="text" name="qty" value="{{$product->qty}}" placeholder="2" autocomplete="off"
                    class=" p-2 focus: rounded-xl border">
                </div>
                <div class=" flex flex-col justify-between">
                    <label for="">Description </label>
                    <input type="text" name="description" value={{$product->description}} placeholder="runner shoes" autocomplete="off"
                    class=" p-2 focus: rounded-xl border">
                </div>
                <div class=" flex flex-col justify-between">
                    <label for="">Price </label>
                    <input type="text" name="price" value={{$product->price}} placeholder="75" autocomplete="off"
                    class=" p-2 focus: rounded-xl border">
                </div>
                <div class=" flex flex-col justify-between">
                    <input type="submit" name="submit" value="Update"
                    class=" w-full bg-green-500 py-3 rounded-full font-semibold text-xl" >
                </div>
            </fieldset>
        </form>
    </div>
    </main>

    <x-footer/>
</body>
</html>