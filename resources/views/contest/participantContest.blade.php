@extends('layouts.main')
@section('container')

    @php
        use Carbon\Carbon;
        
        $contestTime = Carbon::parse($contest->start_at);
        
        $akhirContest = $contestTime;
        $akhirContest = $akhirContest->addMinutes($contest->duration);
        $contestTime = Carbon::parse($contest->start_at);
        // dd($contestTime);
    @endphp


    @if ($akhirContest->isPast())
    <div class="container">
        <h1 class="title">Contest</h1>
    </div>
    <div class="container participant-container mt-4">
        <div class="participant-contest">
            <p class="participant-data bg-danger text-center">
                !!! Contest Telah Berakhir !!!
            </p>
            <p class="participant-data">
                Contest &ensp;: {{ $contest->title }}
            </p>
            <p class="participant-data">
                Author &emsp;: {{ $contest->user->name }}
            </p>
            <p class="participant-data">
                Start at &ensp;: {{ $contest->start_at }} UTC+7
            </p>
            <p class="participant-data">
                Duration &ensp;:{{ $contest->duration }} minute
            </p>

        
        </div>
        <div class="table-contest">
            <table>
                <thead>
                    <tr class="table-row">
                        <th class="table-header">Rank</th>
                        <th class="table-header">Name</th>
                        @php
                            $index = 'A';
                            $num = 1;
                        @endphp
                        @foreach ($problems as $problem)
                            <th class="table-header">{{ $index++ }}</th>
                        @endforeach
                        <th class="table-header">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="table-row">
                            <td class="table-data">{{ $num++ }}</td>
                            <td class="table-data">{{ $user->name }}</td>
                            @foreach ($problems as $problem)
                                @php
                                    $nilai = -1;
                                @endphp
                                @foreach ($user->answerProblem as $item)
                                    {{-- {{ dd($item->pivot) }} --}}
                                    {{-- <p>{{ $item }}</p><br> --}}
                                    @if ($item->pivot->problem_id == $problem->id)
                                        @php
                                            $nilai = $item->pivot->answer;
                                        @endphp
                                    @endif
                                @endforeach


                                @if ($nilai >= 100)
                                    <td class="table-data">
                                        <span class="table-data-participant ac">AC</span>
                                    </td>
                                @elseif ($nilai == 0)
                                    $user->contestParticipant
                                    <td class="table-data">
                                        <span class="table-data-participant wa">WA</span>
                                    </td>
                                @else
                                    <td class="table-data">
                                    </td>
                                @endif
                            @endforeach

                            @php
                                foreach ($user->contestParticipant as $cp) {
                                    if ($cp->pivot->contest_id = $contest->id) {
                                        $total = $cp->pivot->nilai;
                                        break;
                                    }
                                }
                            @endphp
                            <td class="table-data table-data-participant duration-participant">{{ $total }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>  
    @elseif($contestTime->isPast())  
    <div class="container">
        <h1 class="title">Contest</h1>
    </div>
    <div class="container participant-container">
        <div class="participant-contest">
            <p class="participant-data">
                Contest &ensp;: {{ $contest->title }}
            </p>
            <p class="participant-data">
                Author &ensp;: {{ $contest->user->name }}
            </p>
            <p class="participant-data">
                Start at &ensp;: {{ $contest->start_at }} UTC+7
            </p>
            <p class="participant-data">
                Duration &ensp;:{{ $contest->duration }} minute
            </p>
        </div>
        <div class="table-contest">
            <table>
                <thead>
                    <tr class="table-row">
                        <th class="table-header">Rank</th>
                        <th class="table-header">Name</th>
                        @php
                            $index = 'A';
                            $num = 1;
                        @endphp
                        @foreach ($problems as $problem)
                            <th class="table-header t-problem" onclick="window.location.href='{{ url('contest/' . $contest->slug . '/' . $problem->slug) }}'">{{ $index++ }}</th>
                        @endforeach
                        <th class="table-header">Total</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{ dd($users) }} --}}
                    @foreach ($users as $user)
                        <tr class="table-row">
                            <td class="table-data">{{ $num++ }}</td>
                            <td class="table-data">{{ $user->name }}</td>
                            @foreach ($problems as $problem)
                                @php
                                    $nilai = -1;
                                @endphp
                                @foreach ($user->answerProblem as $item)
                                    {{-- {{ dd($item->pivot) }} --}}
                                    {{-- <p>{{ $item }}</p><br> --}}
                                    @if ($item->pivot->problem_id == $problem->id) 
                                        @php
                                            $nilai = $item->pivot->answer;
                                        @endphp
                                    @endif
                                @endforeach


                                @if ($nilai >= 100)
                                    <td class="table-data">
                                        <span class="table-data-participant ac">AC</span>
                                    </td>
                                @elseif ($nilai == 0)
                                    
                                    <td class="table-data">
                                        <span class="table-data-participant wa">WA</span>
                                    </td>
                                @elseif ($nilai == -100)
                                    
                                    <td class="table-data">
                                        <span class="table-data-participant rte">RTE</span>
                                    </td>
                                @else
                                    <td class="table-data">
                                    </td>
                                @endif
                            @endforeach

                            @php
                                foreach ($user->contestParticipant as $cp) {
                                    if ($cp->pivot->contest_id == $contest->id) {
                                        $total = $cp->pivot->nilai;
                                        break;
                                    }
                                }
                            @endphp
                            <td class="table-data table-data-participant duration-participant">{{ $total }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>  
    @else
    <div class="d-flex justify-content-center align-items-center bg-success p-6 mt-12 rounded">
        @php
            
            $sekarang = Carbon::now();
            
            $selisih = $sekarang->diff($contestTime);
            echo '<div class="countDown text-center fs-2 color-light">'.'Contest akan dimulai dalam : <br><p style="color: white; font-weight:700">' . $selisih->format('%y years, %m months, %d days, %h hours, %i minutes, %s seconds'). '</p></div>';
            
            
            @endphp

</div>

<div class="d-flex justify-content-center align-items-center  p-6 mt-6 rounded">
<a href="{{ url('contest') }}" class="btn-primary btn rounded mb-12">Kembali</a>
</div>
    @endif
@endsection

{{-- @foreach ($answer[0]->answerProblem as $item)
    {{ dd($item->pivot->problem_id) }}
    @endforeach --}}
{{-- {{ dd($users[0]->answerProblem[0]->pivot->answer) }} --}}

{{-- <td class="table-data">

                                    <span class="table-data-participant rte">RTE</span>
                                </td>
                                <td class="table-data">
                                    <span class="table-data-participant wa">WA</span>
                                </td>
                                <td class="table-data">
                                    <span class="table-data-participant wa">WA</span>
                                </td> --}}
