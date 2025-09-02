<table>
    <thead>
        <tr>
            <th colspan="3">
                <h2> My Company</h2>
            </th>
        </tr>
        <tr>
            <th>#</th>
            <th style="color:red">Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $i => $cus)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $cus->full_name }}</td>
                <td>{{ $cus->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
