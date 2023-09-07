<h1>All Users List</h1>
{{-- @dd($data); --}}
@foreach($data as  $user)
         <h3>
            {{ $user->name }} |
            {{ $user->email }} |
            {{ $user->age }} |
            {{ $user->city }} |
            <a href="{{ route('view.user',$user->id)  }}">View</a>
         </h3>
@endforeach