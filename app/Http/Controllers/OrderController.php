<?php

namespace App\Http\Controllers;

use App\Billing;
use App\Billingaddr;
use App\Client;
use App\Clientpayment;
use App\Discount;
use App\Mail\OrderPlaced;
use App\MembershipType;
use App\Shipping;
use App\Sippingaddr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Session;
use App\Order;
use App\Payment;
use App\Product;
use App\Orderdetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('authenticate')->except('index', 'destroy', 'edit', 'update');
        $this->middleware('auth')->only('index', 'destroy', 'edit', 'update');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all orders
        $adminorders = Order::all()->sortByDesc('id');
      

        return view('admin.allOrders')->with('adminorders',$adminorders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Get cart data    
        $carts = Session::get('cart');

        // If cart is empty then return back with error message
        if ($carts == null){
            return redirect()->back()->with('error', 'your cart is empty! Please add product to cart to purchase them.');
        }

        $price = 0;
        foreach($carts as $cart){
            $product = \App\Product::find($cart['product_id']);
            $salePrice = 0;
            foreach($product->deals as $deals){
                if ($deals){
                    if ($deals->valid_until >= \Carbon\Carbon::now()){
                        $salePrice = $product->salePrice-(($product->salePrice*$deals->discount_value)/100);
                    }
                }
            }

            foreach($product->offers as $offers){
                if ($offers){
                    if ($offers->valid_until >= \Carbon\Carbon::now()){
                        $salePrice = $product->salePrice-(($product->salePrice*$offers->discount_value)/100);
                    }
                }
            }

            if(isset($salePrice) && $salePrice != 0)
                $proPrice = $salePrice;
            else
                $proPrice = $product->salePrice;

            $unitPrice = $cart['qty'] * $proPrice;
            $price += $unitPrice;
        }

        if ($price < 100){
            return redirect()->back()->with('error', 'The minimum amount to checkout is 100 TK. ! Your cart doesn\'t satisfy minimum amount.');
        }

        // Find client
        $client = Client::find(Session::get('ID'));

        return view('checkout', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Get cart data
        $carts = Session::get('cart');

        // Get the client
        $client = Client::find(Session::get('ID'));

        // Check if agreed to terms condition
        if(!isset($request->terms)){
            return redirect()->back()->with('error', 'Please agree with the terms and conditions to continue.');
        }

        // Check if billing is different
        if(!isset($request->billing)){
            // Check if client's billing is specified
            if (!$client->billing){
                return redirect()->back()->with('error', 'Your profile\'s billing address is not specified. Please check the box "Different billing address" and fill up the form with your billing details. You can update your profile\'s billing address by checking the box "Update profile\'s billing".');
            }

            // Create instance of Billing model & assign form value then save to database
            $billing = new Billing();
            $billing->address = $client->billing->address;
            $billing->city = $client->billing->town;
            $billing->country = $client->billing->country;
            $billing->division = $client->billing->division;
            $billing->zipCode = $client->billing->zipCode;
            $billing->phone = $client->billing->phone;
            $billing->email = $client->billing->email;

            // Check if shipping is different
            if(!isset($request->shipping)){
                // Check if client's shipping is specified
                if (!$client->shipping){
                    return redirect()->back()->with('error', 'Your profile\'s shipping address is not specified. Please check the box below and fill up the form with your shipping details. You can update your profile\'s shipping address by checking the box "Update profile\'s shipping".');
                }

                // Create instance of Shipping model & assign form value then save to database
                $shipping = new Shipping();
                $shipping->address = $client->shipping->address;
                $shipping->town = $client->shipping->town;
                $shipping->country = $client->shipping->country;
                $shipping->division = $client->shipping->division;
                $shipping->zipCode = $client->shipping->zipCode;
                $shipping->phone = $client->shipping->phone;
                $shipping->email = $client->shipping->email;
            }else{
                // Validate form data
                $validatedData = $this->validate($request, [
                    'shipping_email' => 'required',
                    'shipping_phone' => 'required',
                    'shipping_zipCode' => 'required',
                    'shipping_country' => 'required',
                    'shipping_division' => 'required',
                    'shipping_city' => 'required',
                    'shipping_address' => 'required',
                ]);

                // Create instance of Shipping model & assign form value then save to database
                $shipping = new Shipping();
                $shipping->address = $request->shipping_address;
                $shipping->town = $request->shipping_city;
                $shipping->country = $request->shipping_country;
                $shipping->division = $request->shipping_division;
                $shipping->zipCode = $request->shipping_zipCode;
                $shipping->phone = $request->shipping_phone;
                $shipping->email = $request->shipping_email;

                // Check if shipping update is set
                if (isset($request->shipping_different)){
                    // Get client shipping address
                    $shippingaddr = Sippingaddr::where('client_id', Session::get('ID'))->first();

                    // Check if has
                    if (!$shippingaddr){
                        // If no create new instance
                        $shippingaddr = new Sippingaddr();
                    }

                    // Assign form value then save to database
                    $shippingaddr->address = $request->shipping_address;
                    $shippingaddr->town = $request->shipping_city;
                    $shippingaddr->country = $request->shipping_country;
                    $shippingaddr->division = $request->shipping_division;
                    $shippingaddr->zipCode = $request->shipping_zipCode;
                    $shippingaddr->phone = $request->shipping_phone;
                    $shippingaddr->email = $request->shipping_email;
                }
            }

            // Check if payment method is set
            if(!isset($request->paymentMethod)){
                return redirect()->back()->with('error', 'Your profile\'s payment method is not specified. Please choose a payment method to continue. You can update your profile\'s payment method by checking the box "Update profile\'s payment method".');
            }else{
                // Create instance of Payment model & assign form value then save to database
                $payment = new Payment;
                $payment->paymentMethod = $request->paymentMethod;

                // Check payment method
                if ($request->paymentMethod == 0){
                    // Validate form data
                    $validatedData = $this->validate($request, [
                        'bkash_number' => 'required',
                        'bkash_transaction_id' => 'required',
                    ]);

                    $payment->accNo = $request->bkash_number;
                    $payment->tranId = $request->bkash_transaction_id;
                    $payment->bank_name = 'BRAC Bank';
                }elseif ($request->paymentMethod == 1){
                    // Validate form data
                    $validatedData = $this->validate($request, [
                        'rocket_number' => 'required',
                        'rocket_transaction_id' => 'required',
                    ]);

                    $payment->accNo = $request->rocket_number;
                    $payment->tranId = $request->rocket_transaction_id;
                    $payment->bank_name = 'Dutch-Bangla Bank';
                }elseif ($request->paymentMethod == 2){
                    // Validate form data
                    $validatedData = $this->validate($request, [
                        'bacs_acc_name' => 'required',
                        'bacs_acc_no' => 'required',
                        'bacs_bank_name' => 'required',
                        'bacs_transaction_id' => 'required',
                        'bacs_bank_deposit' => 'required|image|max:25',
                    ]);

                    $payment->acc_name = $request->bacs_acc_name;
                    $payment->accNo = $request->bacs_acc_no;
                    $payment->bank_name = $request->bacs_bank_name;
                    $payment->tranId = $request->bacs_transaction_id;

                    // Handle image upload

                    // Checks if the file exists
                    if ($request->hasFile('bacs_bank_deposit')){
                        // Get file name with extension
                        $fileNameWithExt = $request->file('bacs_bank_deposit')->getClientOriginalName();
                        // Get only file name
                        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                        // Get only extension
                        $extension = $request->file('bacs_bank_deposit')->getClientOriginalExtension();
                        // Filename to store
                        $fileNameToStore = $fileName . time() . "." . $extension;
                        // Directory to upload
                        $path = $request->file('bacs_bank_deposit')->storeAs('public/images/client/payment', $fileNameToStore);
                        $payment->deposit = $fileNameToStore;
                    }
                }elseif ($request->paymentMethod == 3){
                    // Validate form data
                    $validatedData = $this->validate($request, [
                        'cps_bank_deposit' => 'required|image|max:25',
                    ]);

                    // Handle image upload

                    // Checks if the file exists
                    if ($request->hasFile('cps_bank_deposit')){
                        // Get file name with extension
                        $fileNameWithExt = $request->file('cps_bank_deposit')->getClientOriginalName();
                        // Get only file name
                        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                        // Get only extension
                        $extension = $request->file('cps_bank_deposit')->getClientOriginalExtension();
                        // Filename to store
                        $fileNameToStore = $fileName . time() . "." . $extension;
                        // Directory to upload
                        $path = $request->file('cps_bank_deposit')->storeAs('public/images/client/payment', $fileNameToStore);
                        $payment->deposit = $fileNameToStore;
                    }
                }

                $payment->save();
            }

            // Check if payment update is set
            if (isset($request->payment_update)){
                // Get client payment method
                $payment_method = Clientpayment::where('client_id', Session::get('ID'))->first();

                // Check if has
                if (!$payment_method){
                    // If no create new instance
                    $payment_method = new Clientpayment();
                }

                // Assign form value then save to database
                $payment_method->paymentMethod = $request->paymentMethod;

                // Check payment method
                if ($request->paymentMethod == 0){
                    $payment_method->accNo = $request->bkash_number;
                    $payment_method->bank_name = 'BRAC Bank';
                }elseif ($request->paymentMethod == 1){
                    $payment_method->accNo = $request->rocket_number;
                    $payment_method->bank_name = 'Dutch-Bangla Bank';
                }elseif ($request->paymentMethod == 2){
                    $payment_method->acc_name = $request->bacs_acc_name;
                    $payment_method->accNo = $request->bacs_acc_no;
                    $payment_method->bank_name = $request->bacs_bank_name;
                }

                $payment_method->client_id = Session::get('ID');
                $payment_method->save();
            }

            // Get current month orders
            $curr_month_order = Order::where('client_id', $client->id)->whereYear('created_at', '=', Carbon::now()->year)->whereMonth('created_at', '=', Carbon::now()->month)->get();

            $total_price = 0;
            // Loop over each order
            foreach ($curr_month_order as $order){
                // Loop over each order details
                foreach($order->orderDetails as $orderDetail){
                    $salePrice = 0;
                    // Checks if any product is associated with any deal
                    foreach($orderDetail->product->deals as $deals){
                        if ($deals){
                            // If so then check for deal date
                            if ($deals->valid_until >= \Carbon\Carbon::now()){
                                // deduct the price
                                $salePrice = $orderDetail->product->salePrice-(($orderDetail->product->salePrice*$deals->discount_value)/100);
                            }
                        }
                    }
                    // Checks if any product is associated with any deal
                    foreach($orderDetail->product->offers as $offers){
                        if ($offers){
                            // Checks if any product is associated with any deal
                            if ($offers->valid_until >= \Carbon\Carbon::now()){
                                // deduct the price
                                $salePrice = $orderDetail->product->salePrice-(($orderDetail->product->salePrice*$offers->discount_value)/100);
                            }
                        }
                    }

                    // If deal or offer then assign the price
                    if(isset($salePrice) && $salePrice != 0){
                        $proPrice = $salePrice;
                    }
                    // If no then assign the product sale price
                    else{
                        $proPrice = $orderDetail->product->salePrice;
                    }

                    // multiply price with quantity
                    $unitPrice = $orderDetail->quantity * $proPrice;
                    // keep the value in total
                    $total_price += $unitPrice;
                }
            }

            // Create instance of Order model & assign form value then save to database
            $order = new Order;
            $order->client_id = Session::get('ID');
            $order->payment_id = $payment->id;
            $order->discount_id = Session::get('coupon_id');
            $order->save();

            // Loop over each cart
            foreach($carts as $cart){
                // Create instance of OrderDetails model & assign form value then save to database
                $orderDetails = new Orderdetail;
                $orderDetails->quantity = $cart['qty'];
                $orderDetails->product_id = $cart['product_id'];
                $orderDetails->order_id = $order->id;
                $orderDetails->save();
            }

            // Save shipping details
            if (isset($shipping)){
                $shipping->order_id = $order->id;
                $shipping->save();
            }

            // Save billing details
            if (isset($billing)){
                $billing->order_id = $order->id;
                $billing->save();
            }

            // check if client shipping is set
            if (isset($shippingaddr)){
                $shippingaddr->client_id = Session::get('ID');
                $shippingaddr->save();
            }

            // Check if any discount available
            if (Session::has('coupon_id')) {
                // Get the discount
                $discount = Discount::find(Session::get('coupon_id'));

                // update pivot table client_discount
                $discount->client()->attach(Session::get('ID'));
            }
        }else{
            // Validate form data
            $validatedData = $this->validate($request, [
                'billing_email' => 'required',
                'billing_phone' => 'required',
                'billing_zipCode' => 'required',
                'billing_country' => 'required',
                'billing_division' => 'required',
                'billing_city' => 'required',
                'billing_address' => 'required',
            ]);

            // Create instance of Billing model & assign form value then save to database
            $billing = new Billing();
            $billing->address = $request->billing_address;
            $billing->city = $request->billing_city;
            $billing->country = $request->billing_country;
            $billing->division = $request->billing_division;
            $billing->zipCode = $request->billing_zipCode;
            $billing->phone = $request->billing_phone;
            $billing->email = $request->billing_email;

            // Check if billing update is set
            if (isset($request->billing_different)){
                // Get client billing address
                $billingaddr = Billingaddr::where('client_id', Session::get('ID'))->first();

                // Check if has
                if (!$billingaddr){
                    //If no create new instance
                    $billingaddr = new Billingaddr();
                }

                // Assign form value then save to database
                $billingaddr->address = $request->billing_address;
                $billingaddr->town = $request->billing_city;
                $billingaddr->country = $request->billing_country;
                $billingaddr->division = $request->billing_division;
                $billingaddr->zipCode = $request->billing_zipCode;
                $billingaddr->phone = $request->billing_phone;
                $billingaddr->email = $request->billing_email;
            }

            // Check if shipping is different
            if(!isset($request->shipping)){
                // Check if client's shipping is specified
                if (!$client->shipping){
                    return redirect()->back()->with('error', 'Your profile\'s shipping address is not specified. Please check the box below and fill up the form with your shipping details. You can update your profile\'s shipping address by checking the box "Update profile\'s shipping".');
                }

                // Create instance of Shipping model & assign form value then save to database
                $shipping = new Shipping();
                $shipping->address = $client->shipping->address;
                $shipping->town = $client->shipping->town;
                $shipping->country = $client->shipping->country;
                $shipping->division = $client->shipping->division;
                $shipping->zipCode = $client->shipping->zipCode;
                $shipping->phone = $client->shipping->phone;
                $shipping->email = $client->shipping->email;
            }else{
                // Validate form data
                $validatedData = $this->validate($request, [
                    'shipping_email' => 'required',
                    'shipping_phone' => 'required',
                    'shipping_zipCode' => 'required',
                    'shipping_country' => 'required',
                    'shipping_division' => 'required',
                    'shipping_city' => 'required',
                    'shipping_address' => 'required',
                ]);

                // Create instance of Shipping model & assign form value then save to database
                $shipping = new Shipping();
                $shipping->address = $request->shipping_address;
                $shipping->town = $request->shipping_city;
                $shipping->country = $request->shipping_country;
                $shipping->division = $request->shipping_division;
                $shipping->zipCode = $request->shipping_zipCode;
                $shipping->phone = $request->shipping_phone;
                $shipping->email = $request->shipping_email;

                // Check if shipping update is set
                if (isset($request->shipping_different)){
                    // Get client shipping address
                    $shippingaddr = Sippingaddr::where('client_id', Session::get('ID'))->first();

                    // Check if has
                    if (!$shippingaddr){
                        // If no create new instance
                        $shippingaddr = new Sippingaddr();
                    }

                    // Assign form value then save to database
                    $shippingaddr->address = $request->shipping_address;
                    $shippingaddr->town = $request->shipping_city;
                    $shippingaddr->country = $request->shipping_country;
                    $shippingaddr->division = $request->shipping_division;
                    $shippingaddr->zipCode = $request->shipping_zipCode;
                    $shippingaddr->phone = $request->shipping_phone;
                    $shippingaddr->email = $request->shipping_email;
                }
            }

            // Check if payment method is set
            if(!isset($request->paymentMethod)){
                return redirect()->back()->with('error', 'Your profile\'s payment method is not specified. Please choose a payment method to continue. You can update your profile\'s payment method by checking the box "Update profile\'s payment method".');
            }else{
                // Create instance of Payment model & assign form value then save to database
                $payment = new Payment;
                $payment->paymentMethod = $request->paymentMethod;

                // Check payment method
                if ($request->paymentMethod == 0){
                    // Validate form data
                    $validatedData = $this->validate($request, [
                        'bkash_number' => 'required',
                        'bkash_transaction_id' => 'required',
                    ]);

                    $payment->accNo = $request->bkash_number;
                    $payment->tranId = $request->bkash_transaction_id;
                    $payment->bank_name = 'BRAC Bank';
                }elseif ($request->paymentMethod == 1){
                    // Validate form data
                    $validatedData = $this->validate($request, [
                        'rocket_number' => 'required',
                        'rocket_transaction_id' => 'required',
                    ]);

                    $payment->accNo = $request->rocket_number;
                    $payment->tranId = $request->rocket_transaction_id;
                    $payment->bank_name = 'Dutch-Bangla Bank';
                }elseif ($request->paymentMethod == 2){
                    // Validate form data
                    $validatedData = $this->validate($request, [
                        'bacs_acc_name' => 'required',
                        'bacs_acc_no' => 'required',
                        'bacs_bank_name' => 'required',
                        'bacs_transaction_id' => 'required',
                        'bacs_bank_deposit' => 'required|image|max:25',
                    ]);

                    $payment->acc_name = $request->bacs_acc_name;
                    $payment->accNo = $request->bacs_acc_no;
                    $payment->bank_name = $request->bacs_bank_name;
                    $payment->tranId = $request->bacs_transaction_id;

                    // Handle image upload

                    // Checks if the file exists
                    if ($request->hasFile('bacs_bank_deposit')){
                        // Get file name with extension
                        $fileNameWithExt = $request->file('bacs_bank_deposit')->getClientOriginalName();
                        // Get only file name
                        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                        // Get only extension
                        $extension = $request->file('bacs_bank_deposit')->getClientOriginalExtension();
                        // Filename to store
                        $fileNameToStore = $fileName . time() . "." . $extension;
                        // Directory to upload
                        $path = $request->file('bacs_bank_deposit')->storeAs('public/images/client/payment', $fileNameToStore);
                        $payment->deposit = $fileNameToStore;
                    }
                }elseif ($request->paymentMethod == 3){
                    // Validate form data
                    $validatedData = $this->validate($request, [
                        'cps_bank_deposit' => 'required|image|max:25',
                    ]);

                    // Handle image upload

                    // Checks if the file exists
                    if ($request->hasFile('cps_bank_deposit')){
                        // Get file name with extension
                        $fileNameWithExt = $request->file('cps_bank_deposit')->getClientOriginalName();
                        // Get only file name
                        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                        // Get only extension
                        $extension = $request->file('cps_bank_deposit')->getClientOriginalExtension();
                        // Filename to store
                        $fileNameToStore = $fileName . time() . "." . $extension;
                        // Directory to upload
                        $path = $request->file('cps_bank_deposit')->storeAs('public/images/client/payment', $fileNameToStore);
                        $payment->deposit = $fileNameToStore;
                    }
                }

                $payment->save();
            }

            // Check if payment update is set
            if (isset($request->payment_update)){
                // Get client payment method
                $payment_method = Clientpayment::where('client_id', Session::get('ID'))->first();

                // Check if has
                if (!$payment_method){
                    // If no create new instance
                    $payment_method = new Clientpayment();
                }

                // Assign form value then save to database
                $payment_method->paymentMethod = $request->paymentMethod;

                // Check payment method
                if ($request->paymentMethod == 0){
                    $payment_method->accNo = $request->bkash_number;
                    $payment_method->bank_name = 'BRAC Bank';
                }elseif ($request->paymentMethod == 1){
                    $payment_method->accNo = $request->rocket_number;
                    $payment_method->bank_name = 'Dutch-Bangla Bank';
                }elseif ($request->paymentMethod == 2){
                    $payment_method->acc_name = $request->bacs_acc_name;
                    $payment_method->accNo = $request->bacs_acc_no;
                    $payment_method->bank_name = $request->bacs_bank_name;
                }

                $payment_method->client_id = Session::get('ID');
                $payment_method->save();
            }

            // Get current month orders
            $curr_month_order = Order::where('client_id', $client->id)->whereYear('created_at', '=', Carbon::now()->year)->whereMonth('created_at', '=', Carbon::now()->month)->get();

            $total_price = 0;
            // Loop over each order
            foreach ($curr_month_order as $order){
                // Loop over each order details
                foreach($order->orderDetails as $orderDetail){
                    $salePrice = 0;
                    // Checks if any product is associated with any deal
                    foreach($orderDetail->product->deals as $deals){
                        if ($deals){
                            // If so then check for deal date
                            if ($deals->valid_until >= \Carbon\Carbon::now()){
                                // deduct the price
                                $salePrice = $orderDetail->product->salePrice-(($orderDetail->product->salePrice*$deals->discount_value)/100);
                            }
                        }
                    }
                    // Checks if any product is associated with any deal
                    foreach($orderDetail->product->offers as $offers){
                        if ($offers){
                            // Checks if any product is associated with any deal
                            if ($offers->valid_until >= \Carbon\Carbon::now()){
                                // deduct the price
                                $salePrice = $orderDetail->product->salePrice-(($orderDetail->product->salePrice*$offers->discount_value)/100);
                            }
                        }
                    }

                    // If deal or offer then assign the price
                    if(isset($salePrice) && $salePrice != 0){
                        $proPrice = $salePrice;
                    }
                    // If no then assign the product sale price
                    else{
                        $proPrice = $orderDetail->product->salePrice;
                    }

                    // multiply price with quantity
                    $unitPrice = $orderDetail->quantity * $proPrice;
                    // keep the value in total
                    $total_price += $unitPrice;
                }
            }

            // Create instance of Order model & assign form value then save to database
            $order = new Order;
            $order->client_id = Session::get('ID');
            $order->payment_id = $payment->id;
            $order->discount_id = Session::get('coupon_id');
            $order->save();

            // Loop over each cart item
            foreach($carts as $cart){
                // Create instance of OrderDetails model & assign form value then save to database
                $orderDetails = new Orderdetail;
                $orderDetails->quantity = $cart['qty'];
                $orderDetails->product_id = $cart['product_id'];
                $orderDetails->order_id = $order->id;
                $orderDetails->save();
            }

            // Save billing and shipping details
            $billing->order_id = $order->id;
            $billing->save();

            // check if client billing is set
            if (isset($billingaddr)){
                $billingaddr->client_id = Session::get('ID');
                $billingaddr->save();
            }

            // check if shipping is set
            if (isset($shipping)){
                $shipping->order_id = $order->id;
                $shipping->save();
            }

            // check if client shipping is set
            if (isset($shippingaddr)){
                $shippingaddr->client_id = Session::get('ID');
                $shippingaddr->save();
            }

            // Check if any discount available
            if (Session::has('coupon_id')) {
                // Get the discount
                $discount = Discount::find(Session::get('coupon_id'));

                // update pivot table client_discount
                $discount->client()->attach(Session::get('ID'));
            }
        }

        // Unset carts & coupon
        Session::put('cart', null);
        Session::put('coupon_id', null);

        // Get current month orders
        $current_month_order = Order::where('client_id', $client->id)->whereYear('created_at', '=', Carbon::now()->year)->whereMonth('created_at', '=', Carbon::now()->month)->get();

        $sum = 0;
        // Loop over each order
        foreach ($current_month_order as $order){
            // Loop over each order details
            foreach($order->orderDetails as $orderDetail){
                $salePrice = 0;
                // Checks if any product is associated with any deal
                foreach($orderDetail->product->deals as $deals){
                    if ($deals){
                        // If so then check for deal date
                        if ($deals->valid_until >= \Carbon\Carbon::now()){
                            // deduct the price
                            $salePrice = $orderDetail->product->salePrice-(($orderDetail->product->salePrice*$deals->discount_value)/100);
                        }
                    }
                }
                // Checks if any product is associated with any deal
                foreach($orderDetail->product->offers as $offers){
                    if ($offers){
                        // Checks if any product is associated with any deal
                        if ($offers->valid_until >= \Carbon\Carbon::now()){
                            // deduct the price
                            $salePrice = $orderDetail->product->salePrice-(($orderDetail->product->salePrice*$offers->discount_value)/100);
                        }
                    }
                }

                // If deal or offer then assign the price
                if(isset($salePrice) && $salePrice != 0){
                    $proPrice = $salePrice;
                }
                // If no then assign the product sale price
                else{
                    $proPrice = $orderDetail->product->salePrice;
                }

                // multiply price with quantity
                $unitPrice = $orderDetail->quantity * $proPrice;
                // keep the value in sum
                $sum += $unitPrice;
            }
        }

        // Check if number of order is equals to 12
        if ($current_month_order->count() == 12){
            // Add 5 promotional point to client
            $client->promotional_reward_points = $client->promotional_reward_points + 5;
            $client->save();
        }

        // Check if previous order value is less than 12,000
        if ($total_price < 12000){
            // Check if current order value is greater than or equals to 12,000
            if ($sum >= 12000){
                // Add 5 promotional point to client
                $client->promotional_reward_points = $client->promotional_reward_points + 5;
                $client->save();
            }
        }

        // check the client point & update it to associated policy
        if ($client->promotional_reward_points >= 100){
            // Get the id of associated membership type
            $membership_type = MembershipType::select('id')->where('membership_type', '1')->get()->toArray();
            // Update client level to associated membership type
            $client->membership_type_id = $membership_type[0]['id'];
            $client->save();
        }elseif ($client->promotional_reward_points >= 200){
            // Get the id of associated membership type
            $membership_type = MembershipType::select('id')->where('membership_type', '2')->get()->toArray();
            // Update client level to associated membership type
            $client->membership_type_id = $membership_type[0]['id'];
            $client->save();
        }elseif ($client->promotional_reward_points >= 300){
            // Get the id of associated membership type
            $membership_type = MembershipType::select('id')->where('membership_type', '3')->get()->toArray();
            // Update client level to associated membership type
            $client->membership_type_id = $membership_type[0]['id'];
            $client->save();
        }elseif ($client->promotional_reward_points >= 400){
            // Get the id of associated membership type
            $membership_type = MembershipType::select('id')->where('membership_type', '4')->get()->toArray();
            // Update client level to associated membership type
            $client->membership_type_id = $membership_type[0]['id'];
            $client->save();
        }

        // Send order details to client by E-mail
        Mail::to($client->email)->send(new OrderPlaced($order));
        // Send order details to sales by E-mail
        Mail::to('offtica@gmail.com')->send(new OrderPlaced($order));

        return view('order', compact('order'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        // Get the order
        $order = Order::find($order->id);

        return view('orderDetails', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        // Get the order & update
        $order = Order::find($order->id);

        return view('admin.invoice', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        // Get the order & update
        $order = Order::find($order->id);
        $order->status = $request->status;
        $order->save();

        return response()->json($order);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        // Get the order
        Order::find($order->id)->delete();

        return response()->json();
    }
}
