@extends('layouts.main')
@section('container')
<div class="container">
    <h1 class="title">Contest</h1>
</div>

<div class="container participant-container">
        <div class="participant-contest">
            <p class="participant-data">
                User Contest
            </p>
            <p class="participant-data">
                By User
            </p>
            <p class="participant-data">
                Start at 18/Maret/2023 at 19.05 UTC+7
            </p>
            <p class="participant-data">
                Duration 02:00 hours
            </p>
        </div>
        <div class="table-contest">
            <table>
                <thead>
                    <tr class="table-row">
                        <th class="table-header">Rank</th>
                        <th class="table-header">Name</th>
                        <th class="table-header">A</th>
                        <th class="table-header">B</th>
                        <th class="table-header">C</th>
                        <th class="table-header">D</th>
                        <th class="table-header">E</th>
                        <th class="table-header">F</th>
                        <th class="table-header">G</th>
                        <th class="table-header">Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row">
                        <td class="table-data">1</td>
                        <td class="table-data">User1</td>
                        <td class="table-data">
                            <span class="table-data-participant rte">RTE</span>
                        <td class="table-data">
                            <span class="table-data-participant wa">WA</span>
                        </td>
                        <td class="table-data">
                            <span class="table-data-participant wa">WA</span>
                        </td>
                        <td class="table-data">
                            <span class="table-data-participant ac">AC</span>
                        </td>
                        <td class="table-data">
                            <span class="table-data-participant ac">AC</span>
                        </td>
                        <td class="table-data">
                            <span class="table-data-participant ac">AC</span>
                        </td>
                        <td class="table-data">
                            <span class="table-data-participant ac">AC</span>
                        </td>
                        <td class="table-data table-data-participant duration-participant">02:34:23</td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>
@endsection