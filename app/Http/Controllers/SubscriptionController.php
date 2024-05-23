<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Userinfo; // Assuming this is your model for the userinfo table
use App\Models\ExpiredSubscription;

class SubscriptionController extends Controller
{
    public function index()

    {
        
        $subscriptions = Userinfo::all();

    foreach ($subscriptions as $subscription) {
        $paymentPeriod = $subscription->payement; // Assuming 'payment' holds 'monthly', '3 month', etc.
        $updatedAt = Carbon::parse($subscription->updated_at);

        switch ($paymentPeriod) {
            case 'monthly':
                $expiryDate = $updatedAt->addMonth();
                break;
            case '3 month':
                $expiryDate = $updatedAt->addMonths(3);
                break;
            case '6 month':
                $expiryDate = $updatedAt->addMonths(6);
                break;
            case 'yearly':
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
    }
