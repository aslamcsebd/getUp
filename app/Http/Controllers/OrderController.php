<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function total_sales()
    {
        // Using Eloquent:
        $topSellingProducts = Product::orderBy('total_sales', 'desc')->limit(5)->get();

        // Using Query Builder
        // $topSellingProducts = DB::table('products')->orderBy('total_sales', 'desc')->limit(5)->get();

        return response()->json([
            'status'  => true,
            'message' => 'Top selling product list',
            'Total' => $topSellingProducts->count(),
            'topSellingProducts'   => $topSellingProducts
        ], 200);
    }

    public function latest_orders()
    {
        $recentOrders = Order::orderBy('order_date', 'desc')->limit(5)->get();

        return response()->json([
            'status'  => true,
            'message' => 'Top 5 latest order',
            'Total' => $recentOrders->count(),
            'recentOrders'   => $recentOrders
        ], 200);
    }

    public function specific_custom_order($customerId)
    {
        $recentCustomerOrders = Order::where('customer_id', $customerId)->orderBy('order_date', 'desc')->limit(5)->get();

        return response()->json([
            'status'  => true,
            'message' => 'Customer Top 5 latest order',
            'Total' => $recentCustomerOrders->count(),
            'recentCustomerOrders'   => $recentCustomerOrders
        ], 200);
    }

    public function grouped_by_product_category()
    {
        $orders = Order::with(['product.category'])->get();
        $groupedOrders = $orders->groupBy('product.category.name');
        return response()->json($groupedOrders);
    }
}
