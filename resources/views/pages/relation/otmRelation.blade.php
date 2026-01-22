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
            <h4>One To Many Relation</h4>
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
                        {{ $user->post_title  }}
                    </td>
                    <td>
                        <ul style="list-style-type: decimel;
                                    text-align:center;">
                            @if ($user->comments)
                        @forelse ( $user->comments as $comment)
                            <li>
                                {{ $comment ->comment }}
                            </li>
                        @empty
                            <li class="text-danger">
                                No Comment Found
                            </li>
                        @endforelse
                    @endif
                        </ul>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-danger">No Data Found!</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>

</body>
</html>

@endsection
