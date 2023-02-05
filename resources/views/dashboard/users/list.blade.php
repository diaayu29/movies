@include('landing')
<table class="table table-striped table-hover">
    <tr>
        <th></th>
        <th>Nama</th>
        <th>Email</th>
        <th>Registered</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ ($users->currentPage() -1) * $users->perPage() + $loop->iteration }}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
    </tr>
    @endforeach
</table>

{{ $users->links() }}
