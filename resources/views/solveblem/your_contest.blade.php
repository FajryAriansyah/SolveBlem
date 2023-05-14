@extends('layouts.main')

@section('title', 'Solveblem | Contest')

@section('container')
<div class="container">
        <h1 class="contest-title">Contest</h1>
    </div>

    <div class="container">
        <div>
            <h1 class="contest-title">Your Contest</h1>
        </div>
        <div class="your-contest">
            <div class="table-contest">
                <table>
                    <thead>
                        <tr class="table-row">
                            <th class="table-header">Name</th>
                            <th class="table-header">Authors</th>
                            <th class="table-header">Start</th>
                            <th class="table-header">Lenght</th>
                            <th class="table-header">Participant</th>
                            <th class="table-header">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-row">
                            <td class="table-data">User Contest</td>
                            <td class="table-data">User</td>
                            <td class="table-data">18/Maret /2023
                            19:05 UTC+7</td>
                            <td class="table-data">02:00</td>
                            <td class="table-data">10</td>
                            <td class="table-data">Open Register in 2 Days</td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="button">
            <button class="button-create">
                <a href="{{url("solveblem/user/contest")}}" class="btn-create">Create a contest</a>
            </button>
        </div>
    </div>
@endsection    