<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index',['products'=>$products] );
    }

    public function create() {
        return view('products.create');
    }

    public function edit(Product $product) {
       return view('products.update', ['product'=>$product]);
    }

    public function update(Product $product, Request $request) {

        if($request->hasFile('image')) {
            $newImage = $request->file('image');
            $imageName = time().'.'.$request->image->extension();
            $newImage->move(public_path('images'),$imageName);
            
            $product->image = $imageName;
        }

        if($request->input('name')){
            $product->name = $request->input('name');
        }

        if($request->input('inStock')){
            $product->inStock = $request->input('inStock');
        }

        if($request->input('description')){
            $product->description = $request->input('description');
        }

        if($request->input('price')){
            $product->price = $request->input('price');
        }

        // dd($request);
        $product->save();
        return redirect(route('product.index'))->with('status','product updated successfully');
    }

    public function delete(Product $product, Request $request) {
        $product->delete($request->all());
        return redirect(route('product.index'))->with('success', 'product deleted successfully');
    }

    public function store(Request $request) {
        $newProduct = new Product;

        if($request->hasFile('image')) {

            $image = $request->file('image');
            $imageName = time().'.'.$request->image->extension();
            
            $image->move(public_path('images'),$imageName);
            $newProduct-> image = $imageName;
        }

        $newProduct -> name = $request->input('name');
        $newProduct -> inStock = $request->input('inStock');
        $newProduct -> description = $request->input('description');
        $newProduct -> price = $request->input('price');

        // $validated = $request->validate([
        //     'name' => ['required','max:255'],
        //     'inStock' => ['required','numeric','max:1000'],
        //     'description' => ['required','max:255'],
        //     'price'=> ['required','numeric', 'decimal:0,2'],
        //     'image'=>['required'],
        // ]);

        $newProduct->save();

        return redirect(route('product.index'))->with('status','product added successfully');
    }
}
?>

