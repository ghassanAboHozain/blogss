<h2>Admin Home Page</h2>
<hr/>



@forelse($data as $datum)
    <p>Name {{$datum}}</p>
@empty
    <p>Not Data</p>
@endforelse
