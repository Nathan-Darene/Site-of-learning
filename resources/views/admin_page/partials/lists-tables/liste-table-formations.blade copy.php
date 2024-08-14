<div class="recent-orders">
    @php
        // $orders = App\Models\Order::where('user_id', auth()->user()->id)->get
        $formations =  App\Models\Cours::get()
        // $formations = App\Models\Cours::with('formateur')->get() // Pour inclure le nom du formateur
        // $formations = App\Models\Cours::with('formateur:id,nom,prenom')->get() // Pour inclure uniquement le nom et prenom du formateur
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
            {{-- @foreach ($formateurs as $formateur ) --}}
                <tr>
                    {{-- <td>{{$formateur->nom}}</td> --}}
                    {{-- <td>{{$formateur->prenom }}</td> --}}
                    {{-- <td>{{$formateur->telephone}}</td> --}}
                    {{-- <td>{{$formateur->email}}</td> --}}
                    {{-- <td>{{$formateur->formation_disponse}}</td> --}}
                </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>
