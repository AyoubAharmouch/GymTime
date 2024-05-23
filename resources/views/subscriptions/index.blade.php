<div class="container">
        <h1>Active Subscriptions</h1>
        @if($subscriptions->isEmpty())
            <p>No active subscriptions found.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Sex</th>
                        <th>CIN</th>
                        <th>Birth</th>
                        <th>payement</th>
                        <th>Start Date</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subscriptions as $subscription)
                        <tr>
                            <td>{{ $subscription->id }}</td>
                            <td>{{ $subscription->last_name }}</td>
                            <td>{{ $subscription->first_name }}</td>
                            <td>{{ $subscription->email }}</td>
                            <td>{{ $subscription->phone }}</td>
                            <td>{{ $subscription->address }}</td>
                            <td>{{ $subscription->sex }}</td>
                            <td>{{ $subscription->CIN }}</td>
                            <td>{{ $subscription->birth }}</td>
                            <td>{{ $subscription->payement }}</td>
                            <td>{{ $subscription->created_at }}</td>
                            <td>{{ $subscription->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <h1>Expired Subscriptions</h1>
        @if($expiredSubscriptions->isEmpty())
            <p>No expired subscriptions found.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Sex</th>
                        <th>CIN</th>
                        <th>Birth</th>
                        <th>payement"</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($expiredSubscriptions as $expiredSubscription)
                        <tr>
                            <td>{{ $expiredSubscription->id }}</td>
                            <td>{{ $expiredSubscription->last_name }}</td>
                            <td>{{ $expiredSubscription->first_name }}</td>
                            <td>{{ $expiredSubscription->email }}</td>
                            <td>{{ $expiredSubscription->phone }}</td>
                            <td>{{ $expiredSubscription->address }}</td>
                            <td>{{ $expiredSubscription->sex }}</td>
                            <td>{{ $expiredSubscription->CIN }}</td>
                            <td>{{ $expiredSubscription->birth }}</td>
                            <td>{{ $expiredSubscription->payement }}</td>
                            <td>{{ $expiredSubscription->start_date }}</td>
                            <td>{{ $expiredSubscription->end_date }}</td>
                            <td>{{ $expiredSubscription->created_at }}</td>
                            <td>{{ $expiredSubscription->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>