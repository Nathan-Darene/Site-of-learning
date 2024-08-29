<div class="recent-orders">
    @php
        // $orders = App\Models\Order::where('user_id', auth()->user()->id)->get
        $formateurs = App\Models\formateurs::get();
    @endphp
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>telephone</th>
                <th>Eamil</th>
                <th>Formation disponsé</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($formateurs as $formateur)
                <tr>
                    <td>{{ $formateur->nom }}</td>
                    <td>{{ $formateur->prenom }}</td>
                    <td>{{ $formateur->telephone }}</td>
                    <td>{{ $formateur->email }}</td>
                    <td>{{ $formateur->formation_disponse }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Aucun formateurs trouvé</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
