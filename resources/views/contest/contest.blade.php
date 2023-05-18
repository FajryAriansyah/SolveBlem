@extends ('layouts.main')

@section('title', 'Solveblem | Contest')

@section('container')

<div class="container mb-2">
    <h1 class="title">Contest</h1>
</div>

@if(session()->has('error'))
<div class="container-contest grid mb-0">

<div class="alert alert-success alert-dismissible fade show mt-0" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @else

  <div class="container container-contest mb-4">
@endif


    <div class="enter-contest mt-0">
        <div class="enter-contest-wrap">
            <form action="/contest/enter" method="POST">
                @csrf
                <p class="text-id">Enter Contest</p>
                <input class="form-control" name="contest_id" type="text" aria-label="default input example"
                style="background-color: #D9D9D9; border: 1px solid black; border-radius: 15px;" placeholder="ID">
                <input class="form-control mt-2" name="password" type="password" aria-label="default input example"
                style="background-color: #D9D9D9; border: 1px solid black; border-radius: 15px;" placeholder="Password">
                <button class="button-create btn-create bg-primary mt-4 mb-0" type="submit" name="submit">
                    Enter
                </button>
            </form>
            <p class="text-or">or</p>
            <p class="text-contest">Make your local contest</p><br>
            <button class="btn btn-primary" >
                <a href="{{url("/contest/create")}}" class="btn-create">Create a contest</a>
            </button>
        </div>
    </div>
</div>
@endsection
