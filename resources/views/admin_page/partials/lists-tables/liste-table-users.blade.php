<div class="recent-orders">
    @php
        // $orders = App\Models\Order::where('user_id', auth()->user()->id)->get
        $users =  App\Models\users::get()
    @endphp
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>telephone</th>
                <th>Email de l'Utilisateurs</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user )
                <tr>
                    <td>{{$fuser->nom}}</td>
                    <td>{{$fuser->prenom }}</td>
                    <td>{{$fuser->telephone}}</td>
                    <td>{{$fuser->email}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
