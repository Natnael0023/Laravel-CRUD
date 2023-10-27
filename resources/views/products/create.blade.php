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
   <x-nav now="create products"/>

   <main>
    <h1 class=" text-2xl mt-5">Create Product</h1>

    <?php 
        if($errors->any()){
            foreach($errors->all() as $error)
                echo $error;
        }
    ?>

    <form method="post" action='{{route('product.store')}}' class=" w-full lg:w-[30rem] md:w-[40rem] mx-auto flex flex-col gap-4 mt-4 border p-4 rounded-xl">
        @csrf
        @method('post')
        <div class=" flex flex-col justify-between">
            <label for="">Name </label>
            <input type="text" name="name" placeholder="adidas" autocomplete="off"
            class=" p-2 focus: rounded-xl border">
        </div>
        <div class=" flex flex-col justify-between">
            <label for="">Quantity </label>
            <input type="text" name="qty" placeholder="2" autocomplete="off"
            class=" p-2 border  rounded-xl">
        </div>
        <div class=" flex flex-col justify-between">
            <label for="">Description </label>
            <textarea name="description" id=""  rows="4"
            type="text" placeholder="runner shoes" autocomplete="off"
            class=" p-2 border  rounded-xl"></textarea>
        </div>
        <div class=" flex flex-col justify-between"> 
            <label for="">Price </label>
            <input type="text" name="price" placeholder="75" autocomplete="off"
            class=" p-2 border rounded-xl">
        </div>
        <div class=" flex flex-col justify-between mt-4">
            <input type="submit" name="submit" value="Create"
            class=" w-full bg-green-500 py-3 rounded-full font-semibold text-xl" >
        </div>
    </form>
   </main>
   <x-footer/>
</body>
</html>