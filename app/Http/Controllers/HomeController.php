<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
   
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('main','single_product','details');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function main()
    {
        $products = \App\Models\Product::all();
        return view('welcome',compact('products'));
    }
    public function about_us()
    {
        return view('about_us');
    }
    public function product()
    {
        return view('product.product');
    }


    public function nutrition()
    {
        return view('product.nutrition');
    }
    public function ambassadors()
    {
        return view('ambassadors');
    }
    public function fitness()
    {
        return view('fitness');
    }
    public function our_client()
    {
        return view('pages.our_client');
    }
    public function testimonial()
    {
        return view('pages.testimonial');
    }
    public function blog()
    {
        return view('blog');
    }
    public function blog_single()
    {
        return view('blog.blog-single');
    }
    public function contact()
    {
        return view('contact');
    }
    public function event()
    {
        return view('event');
    }
    public function detail()
    {
        return view('detail');
    }

    public function single_product()
    {
        return view('product.single_product');
    }   
    public function details($id)
    {
        $product = \App\Models\Product::find($id);
        return view('product.single_product',compact('product'));
    }    
     public function variant()
    {
        return view('product.variant');
    }
    public function index()
    {
        return view('home');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }

    public function agentHome()
    {
        return view('agent.home');
    }

    public function dispatcherHome()
    {
        return view('dispatcher.home');
    }
    
}