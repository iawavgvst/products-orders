<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('orderItems.product')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::all();
        return view('orders.create', compact('products'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'customer_name' => 'required|string|max:255',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'created_at' => 'nullable|date',
            'comment' => 'nullable|string|max:255',
        ]);

        $order = Order::create([
            'customer_name' => $request->get('customer_name'),
            'created_at' => $request->get('created_at'),
            'status' => 'новый',
            'comment' => $request->get('comment'),

        ]);

        orderItem::create([
            'order_id' => $order->id,
            'product_id' => $request->get('product_id'),
            'quantity' => $request->get('quantity'),
        ]);

        return redirect()->route('orders.index')->with('success', 'Заказ создан');
    }

    public function show(Order $order)
    {
        $order->load('orderItems.product');
        return view('orders.show', compact('order'));
    }

    public function updateStatus(Order $order)
    {
        $order->update(['status' => 'выполнен']);
        return redirect()->route('orders.index')->with('success', 'Статус заказа обновлен');
    }

    public function edit(Order $order)
    {
        $products = Product::all();
        return view('orders.edit', compact('order', 'products'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'comment' => 'nullable|string|max:255',
        ]);

        DB::transaction(function () use ($request, $order) {
            $order->update([
                'customer_name' => $request->get('customer_name'),
                'comment' => $request->get('comment'),
                'status' => $request->get('status'),
            ]);

            $orderItem = $order->orderItems()->first();

            if ($orderItem) {
                $orderItem->update([
                    'product_id' => $request->get('product_id'),
                    'quantity' => $request->get('quantity'),
                ]);
            } else {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $request->get('product_id'),
                    'quantity' => $request->get('quantity'),
                ]);
            }
        });

        return redirect()->route('orders.index')->with('success', 'Заказ успешно обновлен!');
    }

    public function destroy(Order $order)
    {
        DB::transaction(function () use ($order) {
            foreach ($order->orderItems as $item) {
                $item->delete();
            }

            $order->delete();
        });

        return redirect()->route('orders.index')->with('success', 'Заказ успешно удален!');
    }
}
