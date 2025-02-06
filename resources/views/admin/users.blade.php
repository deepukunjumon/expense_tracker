@extends('admin.layout')
@section('title', 'Expense Tracker | Users')
@section('content')
    <main class="content">
        <div class="container">
            <h1>Users</h1>
            <div class="table-container">
                <div class="table-scroll">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                    </table>
                    <div class="table-body">
                        <table>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->mobile }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Pagination Links -->
            <div class="pagination-container">
                {{ $users->links() }} <!-- This will generate the pagination links -->
            </div>
        </div>
    </main>
</body>
</html>
@endsection