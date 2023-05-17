@extends ('layouts.main')
 
@section('title', 'Solveblem | Contest')

@section('content')

<div class="container">
    <h1 class="title-contest">Contest</h1>

    <div class="contest-content mt-3">
        <div class="contest-rule">
            <p class="contest-text">Contest Name: </p>
            <p class="
                contest-text">Author Name: </p>
            <p class="contest-text">Start At: </p>
            <p class="contest-text">Duration: </p>
            <p class="contest-text">Max Participant: </p>
            <p class="contest-text">Password: </p>
        </div>
        
        </div>
        <div class="global-contest rows">
                            @php
                               $index = 'a' 
                            @endphp
           
            <div class="table-contest">
                <table>
                    <thead>
                        <tr class="table-row">
                            <th class="table-header">Name</th>
                            @foreach ($problems as $problem)
                                    <th class="table-header t-problem" onclick="window.location.href='{{  url('contest/'.$contest->slug.'/'.$problem->slug)  }}'">{{ $index++ }}</th>
                            @endforeach
                            
                            <th class="table-header">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr class="table-row">
                            <td class="table-data">Fajry</td>
                            
                        </tr>
                        <tr class="table-row">
                            <td class="table-data">Habil</td>
                            
                        </tr>
                        
                    </tbody>
                </table>
            </div>
    </div>
    
</div>
@include('layouts.footer')
@endsection