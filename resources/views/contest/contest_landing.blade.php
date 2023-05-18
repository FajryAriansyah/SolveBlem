@extends ('layouts.main')

@section('title', 'Solveblem | Contest')

@section('container')

@php
    use Illuminate\Support\Facades\Hash;
@endphp
    <div class="container">
        <h1 class="title-contest">Contest</h1>

        <div class="contest-content mt-3 row">
            <div class="contest-rule col">
                <p class="contest-text">Contest Name: {{ $contest->title }}</p>
                <p class="
                contest-text">Author Name: {{ $contest->user->name }}</p>
                <p class="contest-text">Start At: {{ $contest->start_at }}</p>
                <p class="contest-text">Duration: {{ $contest->duration }}</p>
            </div>
            <div class="contest-rule col">
                <p class="contest-text">Id Contest: <strong>{{ $contest->id }}</strong></p>
                <p class="contest-text">Password: <strong> {{ $contest->password }}</strong></p>
                
            </div>
        </div>
        <div class="global-contest rows d-flex justify-content-center align-items-center">
            @php
                $index = 'a';
            @endphp

            <div class="table-contest">
                <table>
                    <thead>
                        <tr class="table-row">
                            <th class="table-header">Name</th>
                            @foreach ($problems as $problem)
                                <th class="table-header t-problem"
                                    onclick="window.location.href='{{ url('contest/' . $contest->slug . '/' . $problem->slug) }}'">
                                    {{ $index++ }}</th>
                            @endforeach

                            <th class="table-header">Total</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="table-row">
                            <td class="table-data">Fajry</td>
                            @for ($i = 0; $i < $problems->count(); $i++)
                                <td class="table-data"></td>
                            @endfor
                            <td class="table-data"></td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-data">Habil</td>
                            @for ($i = 0; $i < $problems->count(); $i++)
                                <td class="table-data"></td>
                            @endfor
                            <td class="table-data"></td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
