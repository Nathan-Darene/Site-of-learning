<aside>
    @php
        $nbr_cours = App\Models\Cours::count();
        $nbr_users = App\Models\users::count();
        $nbr_formateur = App\Models\formateurs::count();
    @endphp
    <div class="toggle">
        <div class="logo">
            {{-- <img src="{{ asset('images/logo.png') }}"> --}}
            <h2>O<span class="danger">RAL</span></h2>
        </div>
        <div class="close" id="close-btn">
            <span class="material-icons-sharp icon-translate-no">close</span>
        </div>
    </div>

    <div class="sidebar">
        <a href="#" class="active" id="dashboard">
            <span class="material-icons-sharp icon-translate-no">dashboard</span>
            <h3>Dashboard</h3>
        </a>
        <a href="#" id="users">
            <span class="material-icons-sharp icon-translate-no">person_outline</span>
            <h3>Utilisateur</h3>
            <span class="message-count">{{$nbr_users}}</span>
        </a>
        <a href="#" id="formateur">
            <span class="material-icons-sharp icon-translate-no"><i class="fas fa-user-graduate"></i></span>
            <h3>Formateur</h3>
            <span class="message-count">{{$nbr_formateur}}</span>
        </a>
        {{-- <a href="#" id="history">
            <span class="material-icons-sharp icon-translate-no">receipt_long</span>
            <h3>History</h3>
        </a> --}}
        {{-- <a href="#" id="analytics">
            <span class="material-icons-sharp icon-translate-no">insights</span>
            <h3>Analytics</h3>
        </a> --}}
        <a href="#" id="formations">
            <span class="material-icons-sharp icon-translate-no">inventory</span>
            <h3>Formations</h3>
            <span class="message-count">{{$nbr_cours}}</span>
        </a>
        {{-- <a href="#" id="reports">
            <span class="material-icons-sharp icon-translate-no">report_gmailerrorred</span>
            <h3>Reports</h3>
        </a> --}}
        {{-- <a href="#" id="settings">
            <span class="material-icons-sharp icon-translate-no">settings</span>
            <h3>Settings</h3>
        </a> --}}
        <a href="#">
            <span class="material-icons-sharp icon-translate-no">logout</span>
            <h3>Logout</h3>
        </a>
    </div>
</aside>
