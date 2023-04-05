<div class="container rows">
    <div class="wrap-left">
        <div class="profile-menu">
            <h1>Profile Menu</h1>
        </div>
        <div class="content-profile-menu">
            <div class="profile">
                <a href="#">
                    <img src="{{asset ('images/profile_card.png')}}" alt="Profile Card" width="38px" height="38px">
                    <p class="profile-text">Profile & Statistics</p>
                </a>
            </div>
            <div class="submis-history">
                <a href="#">
                    <img src="{{asset ('images/submit_history.png')}}" alt="Submit History" width="48px" height="48px">
                    <p class="submission-history-text">Submission History</p>
                </a>
            </div>
        </div>
    </div>
    @yield('content')