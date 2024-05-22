@if(Auth::user())
@if(Auth::user()->role== "1")
@extends('welcome')
@section('title','fitness')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


@section('content')
<h1>im herer </h1>
<p>lorem200</p>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam culpa a odit expedita aut, dolorem reiciendis maiores perspiciatis facilis voluptatum aliquid esse. Delectus eligendi sint dignissimos officiis, modi et voluptatum quae sit dolore repellendus alias minus, velit veniam? Quaerat voluptates obcaecati distinctio dolor harum sunt adipisci, veniam ipsam cupiditate, ab, qui fugit quae aliquam nobis amet at placeat non. Recusandae voluptatibus error pariatur eligendi et voluptas vero, in doloribus, quisquam nostrum adipisci odit! Esse facilis enim corrupti excepturi laboriosam soluta voluptas repellat debitis dolores ab asperiores dignissimos, numquam harum rerum rem recusandae totam maxime. Dolorum iste enim perferendis nisi ut minus hic ipsum, vel obcaecati aperiam doloremque nam accusamus aspernatur unde itaque adipisci corporis delectus dolor modi molestiae rerum reiciendis quibusdam, odio quo. Rerum placeat dignissimos perspiciatis maxime et enim illum corporis saepe iure nulla. A consequatur expedita odio molestiae est, quaerat quidem quod quos sint nesciunt sunt. Perferendis minus, illum iste beatae ut tempore ullam molestiae praesentium! Esse a perferendis animi adipisci sint nisi repellendus quidem recusandae possimus libero ducimus architecto alias mollitia reiciendis, porro illo! Exercitationem quisquam illo dolorum id blanditiis. Maxime deserunt ipsam omnis! Unde eius numquam ratione cupiditate labore amet reiciendis repellat consectetur, ut magni culpa est quam voluptates sunt explicabo odit, id accusamus. Illo error alias rerum maxime nostrum odio doloribus deleniti laborum? Voluptate voluptatum quos repellendus voluptas velit temporibus, aspernatur quae nulla assumenda illo facilis commodi iste possimus maiores ratione numquam sunt nisi at accusantium fugiat sint repudiandae! Quisquam minima ab quaerat rem voluptate?</p>
<table>
    <tr><th>
        a</th>
    <th>b</th>
    <th>c</th>
    </tr>

    <tr>
        <th>12</th>
        <th>12</th>
        <th>12</th>
    </tr>
</table>
@endsection
@endif
@endif