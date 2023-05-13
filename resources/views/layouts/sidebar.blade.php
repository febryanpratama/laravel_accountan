<div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
    <div class="settings-widget dash-profile">
        <div class="settings-menu p-0">
            <div class="profile-bg">
                <h5>Beginner</h5>
                <img src="assets/img/instructor-profile-bg.jpg" alt="">
                <div class="profile-img">
                    <a href="{{ url('dashboard') }}"><img src="assets/img/user/user15.jpg"
                            alt=""></a>
                </div>
            </div>
            <div class="profile-group">
                <div class="profile-name text-center">
                    <h4><a href="{{ url('dashboard') }}">Admin</a></h4>
                    <p>Admin</p>
                </div>
                <div class="go-dashboard text-center">
                    <a href="{{ url('dashboard') }}" class="btn btn-primary">Create New Course</a>
                </div>
            </div>
        </div>
    </div>
    <div class="settings-widget account-settings">
        <div class="settings-menu">
            <h3>DASHBOARD</h3>
            <ul>
                <li class="nav-item ">
                    <a class="active" href="{{ url('dashboard') }}" class="nav-link">
                        <i class="feather-home"></i> My Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="{{ url('pemasukan') }}" class="nav-link">
                        <i class="feather-book"></i> Pemasukan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="{{ url('pengeluaran') }}" class="nav-link">
                        <i class="feather-star"></i> Pengeluaran
                    </a>
                </li>
            </ul>
            <div class="instructor-title">
                <h3>ACCOUNT SETTINGS</h3>
            </div>
            <ul>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" id="myform">
                        @csrf
                        <a href="#" class="nav-link" onclick="document.getElementById('myform').submit()">
                            <i class="feather-power"></i> Sign Out
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>