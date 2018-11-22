<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    
</head>
<body>

    <div class="container">
    <h1>Data Table</h1>
    <table class="table table-bordered table-hover" id="example">
    <thead>
    <tr>
    <th> No </th>
    <th> Nama </th>   
    <th> Email </th>
    <th> Terdaftar </th>
    <th> Diperbarui </th>
    <th> action </th>
    </tr>
    </thead>
    <tr>
    <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
    <tr>
    </tr>
    </table>
    </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script>
                $(function(){
                    $('#example').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route('users') }}',
                    columns: [
                        {data: 'DT_RowIndex', orderable:false , searchable:false},
                        {data: 'name'},
                        {data: 'email'},
                        {data: 'created_at'},
                        {data: 'updated_at'},
                        {data: 'action'},
                    ]
                })
            })
        </script>
</body>
</html>