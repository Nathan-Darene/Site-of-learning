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
            @forelse ($users as $user )
                <tr>
                    <td>{{$user->nom}}</td>
                    <td>{{$user->prenom }}</td>
                    <td>{{$user->telephone}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Aucun utilisateur trouvé</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
