<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\UserInfo;
use App\Models\ExpiredSubscription;
use Carbon\Carbon;

class CheckSubscriptions extends Command
{
    protected $signature = 'subscriptions:check';
    protected $description = 'Check and update expired subscriptions';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $subscriptions = Userinfo::all();

        foreach ($subscriptions as $subscription) {
            $expirationDate = $this->getExpirationDate($subscription->start_date, $subscription->payment);

            if (Carbon::now()->greaterThan($expirationDate)) {
                ExpiredSubscription::create([
                    'user_id' => $subscription->user_id,
                    'name' => $subscription->name,
                    'payment' => $subscription->payment,
                    'start_date' => $subscription->start_date,
                    'end_date' => $expirationDate,
                ]);

                $subscription->delete();
            }
        }
    }

    private function getExpirationDate($startDate, $payment)
    {
        switch ($payment) {
            case 'monthly':
                return Carbon::parse($startDate)->addMonth();
            case '3months':
                return Carbon::parse($startDate)->addMonths(3);
            case '6months':
                return Carbon::parse($startDate)->addMonths(6);
            case 'yearly':
                return Carbon::parse($startDate)->addYear();
            default:
                throw new \Exception('Invalid payment period');
        }
    }
}
