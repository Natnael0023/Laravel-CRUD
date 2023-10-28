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
    <div class="">
        <form method="post" enctype="multipart/form-data" action='{{route('product.update', ['product' => $product])}}' 
            class=" w-full lg:w-[60rem] md:w-[50rem] mx-auto flex gap-5 mt-4 items-center"
            >
            @csrf
            @method('put')
           
            <div class=" flex-1">
                <div class=" flex-1 flex flex-col ">
                    <div class=" flex flex-col justify-between"> 
                        <img src="{{asset('images/'.$product->image)}}" width="full" type="file" name="existingImg"
                        class="flex-1 border rounded-xl">
                    </div>

                <div class=" flex flex-col justify-between"> 
                    <label for="">Change Image </label>
                    <input type="file" name="image"
                    class=" p-2 border rounded-xl">
                </div>
            </div>
                
            </div>
            <div class="  flex-1">
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
                        <textarea  type="text" name="description" placeholder="runner shoes" autocomplete="off"
                            class=" p-2 focus: rounded-xl border">{{$product->description}}</textarea>
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
            </div>
        </form>
    </div>
    </main>

    <x-footer/>
</body>
</html>