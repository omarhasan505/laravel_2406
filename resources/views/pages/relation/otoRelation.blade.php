@extends('pages.dashboard')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <div class="card mx-auto p-3">
        <div class="card-header text-center">
            <h4>One To One Relation</h4>
        </div>
        <div class="card-body text-center">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>#</th>
                    <th>Phone User</th>
                    <th>Phone Model</th>
                </tr>
                @forelse ($users as $key => $user )
                <tr>
                    <td>
                        {{ ++$key }}
                    </td>
                    <td>
                        {{ $user->name  }}
                    </td>
                    <td>
                        {{ optional($user->phone)->phone_model ?? 'N/A' }}
                    </td>
                </tr>
                @empty

                @endforelse
            </table>
        </div>
    </div>

</body>
</html>

@endsection
