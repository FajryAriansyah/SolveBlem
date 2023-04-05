@extends ('layouts.navigation')

@section('title', 'Solveblem | User')


@section('content')


@include('layouts.profile')
<div class="wrap">
    <div class="title">
        <h1>Submission History</h1>
    </div>
    <div class="inner-wrap">
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Problem</th>
                        <th>Bahasa</th>
                        <th>Keputusan</th>
                        <th>Poin</th>
                        <th>Lihat Jawaban</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>JohnDoe</td>
                        <td>Problem A</td>
                        <td>Python</td>
                        <td>Accepted</td>
                        <td>100</td>
                        <td><a href="#">Lihat</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="page">
                <p class="display-page">Menampilkan 1..2 dari 2 hasil</p>
                <div class="next-page">
                    <a href="#">
                        <img src="{{ asset('images/arrow_left.png') }}" alt="arrow_left">
                    </a>
                    <p class="number">1</p>
                    <a href="#">
                        <img src="{{asset ('images/arrow_right.png') }}" alt="arrow_right">
                    </a>
                </div>
            </div>
    </div>
</div>
</div>
@include('layouts.footer')
@endsection