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

        // dd($request);
 
        $product->update($request->all());
        return redirect(route('product.index'))->with('status','product updated successfully');
    }

    public function delete(Product $product, Request $request) {
        $product->delete($request->all());
        return redirect(route('product.index'))->with('success', 'product deleted successfully');
    }

    public function store(Request $request) {

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$request->image->extension();
            $image->move(public_path('images'),$imageName);
        }
        $newProduct = new Product;
        $newProduct -> name = $request->input('name');
        $newProduct -> qty = $request->input('qty');
        $newProduct -> description = $request->input('description');
        $newProduct -> price = $request->input('price');
        $newProduct-> image = $imageName;


        // $newProduct = $request->validate([
        //     'name' => ['required','max:255'],
        //     'qty' => ['required','numeric'],
        //     'description' => ['required','max:255'],
        //     'price'=> ['required', 'decimal:0,2']
        // ]);

        $newProduct->save();

        return redirect(route('product.index'))->with('status','product added successfully');
    }
}
?>

