<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', ['customers' => $customers]);
    }

    public function destroy(string $id)
    {
        Customer::destroy([$id]);
        return redirect("/customer");
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $post = $request->post();

        $customer = new Customer();
        $customer->name = $post['name'];
        $customer->surname = $post['surname'];
        $customer->birth_date = $post['birthDate'];
        $customer->phone_number = $post['phoneNumber'];

        $customer->save();

        return redirect("/customer");
    }

    public function edit(string $id)
    {
        return view('customer.edit', ["customer" => Customer::all()->where('id', "=", $id)->first()]);
    }
}

?>
