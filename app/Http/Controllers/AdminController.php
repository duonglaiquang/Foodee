<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    protected $information;
    protected $order;
    protected $orderDetail;
    protected $product;

    public function __construct(
        User $information,
        OrderDetail $orderDetail,
        Order $order,
        Product $product
    ){
        $this->information = $information;
        $this->order = $order;
        $this->orderDetail = $orderDetail;
        $this->product = $product;
    }

    public function home()
    {
        $Order = $this->order->all();
        $count = $Order->count();
        return view('admin.pages.dashboard_admin', compact(
            'count'
        ));
    }

    public function manage_food()
    {
        $Order = $this->order->all();
        $count = $Order->count();
        return view('admin.pages.manage_food', compact(
        'count'
    ));
    }

    public function post_products(Request $request)
    {
        $produces = new Product();
        $produces->name = $request->name;
        $produces->price = $request->price;
//        $produces->category = $request->category;
        $produces->description = $request->description;
        $produces->avatar = $request->avatar;
        $produces->save();

        return redirect()->back();

    }

    public function manage_drink()
    {
        $Order = $this->order->all();
        $count = $Order->count();
        return view('admin.pages.manage_drink', compact(
            'count'
        ));
    }

    public function top()
    {
        return view('admin.pages.layout.top-nav');
    }

    public function manage_order ()
    {
        $orders = $this->order->orderBy('created_at', 'desc')->get();
        $products = $this->product
            ->join('order_details', 'products.id', '=', 'order_details.product_id')
            ->distinct()
            ->get();
        $users = DB::table('users')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->distinct()
            ->get();
        $count = $orders->count();
        return view('admin.pages.manage_adminorder', compact(
            'users',
            'orders',
            'count',
            'products'
        ));
    }
}
