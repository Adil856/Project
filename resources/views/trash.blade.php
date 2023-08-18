<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Data Show</title>
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-sm nav justify-content-center p-3">
            <a class="navbar-brand" href="">
               @if (session()->has('name'))
                   {{session()->get('name')}}
               @else
                   Guest
               @endif 
            </a>
            <a class="nav-link" href="{{('/customer')}}">Add Data</a>
            <a class="nav-link" href="{{url('customer/view')}}">View Data</a>
            <a class="nav-link" href="{{route('user.trash')}}">Trash</a>
          </nav>
    </div>
   

   <table class="table">
    <thead>
        <tr>
            <th>Sr No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $user)
        <tr>
            <td>{{$user->customer_id}} </td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{route('user.restore', ['id' => $user->customer_id])}}" class="btn btn-primary">
                    Restore
                </a> 
            </td>
             <td>
                <a href="{{route('user.delete', ['id' => $user->customer_id])}}" class="btn btn-danger">
                    Delete 
                </a>    
            </td> 
        </tr>
        @endforeach
    </tbody>
   </table>
</body>
</html>