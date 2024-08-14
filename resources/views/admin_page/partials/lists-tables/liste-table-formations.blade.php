<div class="recent-orders">
    @php
        // $orders = App\Models\Order::where('user_id', auth()->user()->id)->get
        $formations =  App\Models\Cours::get()
    @endphp
    <table>
        <thead>
            <tr>
                <th>titre</th>
                <th>seance</th>
                <th>duree</th>
                <th>lieu</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($formations as $formation )
                <tr>
                    <td>{{$formation->titre}}</td>
                    <td>{{$formation->seance}}</td>
                    <td class="">{{$formation->duree}}</td>
                    <td>{{$formation->lieu}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
