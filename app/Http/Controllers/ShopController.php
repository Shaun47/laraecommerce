<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->category){
            $products = Product::with('categories')->whereHas('categories',function($query){
                $query->where('slug',  request()->category);
                
            });
                
            $categories = Category::all();
            $categoryName = $categories->where('slug',  request()->category)->first()->name;
        }else{
            $products = Product::inRandomOrder()->take(12);
            $categories = Category::all();
            $categoryName = 'Featured';
        }

        if(request()->sort == 'low_high'){
            $products = $products->orderBy('price')->paginate(9);
        }elseif(request()->sort == 'high_low'){
            $products = $products->orderBy('price','desc')->paginate(9);
        }else{
            $products = $products->paginate(9);
        }
        
        

        return view('user.shop')->with([
            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName,
        ]);
    }



    public function search(Request $request){

        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');
        $products = Product::where('name','like',"%$query%")
                            ->orWhere('details','like',"%$query%")
                            ->orWhere('description','like',"%$query%")->paginate(10);
        return view('user.search-results')->with('products',$products);
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug',$slug)->firstOrFail(); 
        $youMightAlsoLike = Product::where('slug','!=',$slug)->inRandomOrder()->take(4)->get();

        return view('user.product')->with([
            'product' => $product,
            'youMightAlsoLike' => $youMightAlsoLike, 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
