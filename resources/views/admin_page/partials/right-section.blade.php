<div class="right-section">
    <div class="nav">
        <button id="menu-btn">
            <span class="material-icons-sharp icon-translate-no">menu</span>
        </button>
        <div class="dark-mode">
            <span class="material-icons-sharp icon-translate-no active">dark_mode</span>
            <span class="material-icons-sharp icon-translate-no ">light_mode</span>
        </div>

        <div class="profile">
            <div class="info">
                <p>Hey, <b>Reza</b></p>
                <small class="text-muted">Admin</small>
            </div>
            <div class="profile-photo">
                <img src="{{ asset('images/profile-1.jpg') }}" alt="Profile Photo">
            </div>
        </div>
    </div>

    <div class="user-profile">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
            <h2>O<span class="danger">RAL</span></h2>
        </div>
    </div>

    <div class="reminders">
        <div class="header">
            <h2>Reminders</h2>
            <span class="material-icons-sharp icon-translate-no">notifications_none</span>
        </div>

        <div class="notification">
            <div class="icon">
                <span class="material-icons-sharp icon-translate-no">volume_up</span>
            </div>
            <div class="content">
                <div class="info">
                    <h3>Workshop</h3>
                    <small class="text-muted">08:00 AM - 12:00 PM</small>
                </div>
                <span class="material-icons-sharp icon-translate-no">more_vert</span>
            </div>
        </div>

        <div class="notification deactive">
            <div class="icon">
                <span class="material-icons-sharp icon-translate-no">edit</span>
            </div>
            <div class="content">
                <div class="info">
                    <h3>Workshop</h3>
                    <small class="text-muted">08:00 AM - 12:00 PM</small>
                </div>
                <span class="material-icons-sharp icon-translate-no">more_vert</span>
            </div>
        </div>

        {{-- Section Control --}}
        @include('admin_page.partials.action')
    </div>
</div>
