<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Userinfo; // Assuming this is your model for the userinfo table
use App\Models\ExpiredSubscription;
use App\Models\DeleteUser;


class SubscriptionController extends Controller
{

    public function active(){
        $subscriptions = Userinfo::all();

    foreach ($subscriptions as $subscription) {
        $paymentPeriod = $subscription->payement; // Assuming 'payment' holds 'monthly', '3 month', etc.
        $updatedAt = Carbon::parse($subscription->updated_at);

        switch ($paymentPeriod) {
            case 'Monthly':
                $expiryDate = $updatedAt->addMonth();
                break;
            case '3 Month':
                $expiryDate = $updatedAt->addMonths(3);
                break;
            case '6 Month':
                $expiryDate = $updatedAt->addMonths(6);
                break;
            case 'Yearly':
                $expiryDate = $updatedAt->addYear();
                break;
            default:
                $expiryDate = null;
                break;
        }

        // Check if the subscription is expired
        if ($expiryDate && Carbon::now()->gt($expiryDate)) {
            // Add to expired_subscriptions table if not already added
            $existingExpired = ExpiredSubscription::where('email', $subscription->email)->first();
            if (!$existingExpired) {
                ExpiredSubscription::create([
                    'last_name' => $subscription->last_name,
                    'first_name' => $subscription->first_name,
                    'email' => $subscription->email,
                    'phone' => $subscription->phone,
                    'address' => $subscription->address,
                    'sex' => $subscription->sex,
                    'CIN' => $subscription->CIN,
                    'birth' => $subscription->birth,
                    'payement' => $subscription->payement,
                    'start_date' => $subscription->created_at, // Assuming the start date is the creation date
                    'end_date' => $expiryDate,
                ]);
            }
        }
    }

       
        // return view('subscriptions.index');
        $subscriptions = Userinfo::all();
    $expiredSubscriptions = ExpiredSubscription::all();

    return view('subscriptions.active', compact('subscriptions', 'expiredSubscriptions'));
}
    

    public function index()

    {
        
        $subscriptions = Userinfo::all();

    foreach ($subscriptions as $subscription) {
        $paymentPeriod = $subscription->payement; // Assuming 'payment' holds 'monthly', '3 month', etc.
        $updatedAt = Carbon::parse($subscription->updated_at);

        switch ($paymentPeriod) {
            case 'Monthly':
                $expiryDate = $updatedAt->addMonth();
                break;
            case '3 Month':
                $expiryDate = $updatedAt->addMonths(3);
                break;
            case '6 Month':
                $expiryDate = $updatedAt->addMonths(6);
                break;
            case 'Yearly':
                $expiryDate = $updatedAt->addYear();
                break;
            default:
                $expiryDate = null;
                break;
        }

        // Check if the subscription is expired
        if ($expiryDate && Carbon::now()->gt($expiryDate)) {
            // Add to expired_subscriptions table if not already added
            $existingExpired = ExpiredSubscription::where('email', $subscription->email)->first();
            if (!$existingExpired) {
                ExpiredSubscription::create([
                    'last_name' => $subscription->last_name,
                    'first_name' => $subscription->first_name,
                    'email' => $subscription->email,
                    'phone' => $subscription->phone,
                    'address' => $subscription->address,
                    'sex' => $subscription->sex,
                    'CIN' => $subscription->CIN,
                    'birth' => $subscription->birth,
                    'payement' => $subscription->payement,
                    'start_date' => $subscription->created_at, // Assuming the start date is the creation date
                    'end_date' => $expiryDate,
                ]);
            }
        }
    }

       
        // return view('subscriptions.index');
        $subscriptions = Userinfo::all();
    $expiredSubscriptions = ExpiredSubscription::all();

    return view('subscriptions.index', compact('subscriptions', 'expiredSubscriptions'));
}


public function show($id)
{
    $subscription = Userinfo::find($id);
    if (!$subscription) {
        $subscription = ExpiredSubscription::find($id);
    }

    if (!$subscription) {
        return redirect()->route('subscriptions.index')->with('error', 'Subscription not found.');
    }

    return view('subscriptions.show', compact('subscription'));
}
 public function update(Request $request, $id)
    {
        try {
            $gymer = UserInfo::find($id);

            if (!$gymer) {
                return response()->json(['success' => false, 'message' => 'Data not found'], 404);
            }

            $field = $request->all();
            $key = array_key_first($field);
            $value = $field[$key];

            $gymer->$key = $value;
            $gymer->save();

            return response()->json(['success' => true, 'message' => 'Data updated successfully']);
        } catch (\Exception $e) {
            // Log the error message
            Log::error('Update failed: '.$e->getMessage());
            return response()->json(['success' => false, 'message' => 'Server error', 'error' => $e->getMessage()], 500);
        }
    }
    }
