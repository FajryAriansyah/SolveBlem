@extends('layouts.main')

@section('title', 'Solveblem | Contest')

@section('container')

    <div class="container">
        <h1 class="title">Contest</h1>
    </div>

    <div class="container">
        <div>
            <h1 class="contest-title">Global Contest</h1>
        </div>

        <div class="global-contest rows">
            <div class="table-contest">
                <table>
                    <thead>
                        <tr class="table-row">
                            <th class="table-header">Name</th>
                            <th class="table-header">Authors</th>
                            <th class="table-header">Start</th>
                            <th class="table-header">Lenght</th>
                            <th class="table-header">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-row">
                            <td class="table-data">Infust Contest</td>
                            <td class="table-data">Fajry Ariansyah Habil Nasution</td>
                            <td class="table-data">18/Maret /2023
                                19:05 UTC+7</td>
                            <td class="table-data">02:00</td>
                            <td class="table-data">Open Register in 2 Days</td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                            <td class="table-data"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="enter-contest">
                <div class="enter-contest-wrap">
                    <p class="text-id">Enter ID Contest</p>
                    <input class="form-control" type="text" aria-label="default input example"
                        style="background-color: #D9D9D9; border: 1px solid black; border-radius: 15px;">
                    <button class="button-enter">
                        <a href="#" class="btn-enter">Enter</a>
                    </button>
                    <p class="text-or">or</p>
                    <p class="text-contest">Make your local contest</p>
                    <button class="button-create">
                        <a href="{{url("solveblem/user/contest")}}" class="btn-create">Create a contest</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endsection    