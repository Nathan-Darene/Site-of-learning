@extends('admin_page.layouts.app')

@section('title', 'Analytique')

@section('contents')
    @php
        $formateurs = App\Models\formateurs::all();
        $users = App\Models\users::with('Cours',)->get();

    @endphp

    <h1>
        <span>Centre de controle</span>
        <span class="logo-1">O</span>
        <span class="logo-2">RAL</span>

    </h1>
    <div class="analyse">
        <div class="sales">
            <div class="status">
                <div class="info">
                    <h3>Nombres d'utilisateur</h3>
                    <h1></h1>
                </div>
                <div class="progresss">
                    <svg>
                        <circle cx="38" cy="38" r="36"></circle>
                    </svg>
                    <div class="percentage">
                        <p>+81%</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="visits">
            <div class="status">
                <div class="info">
                    <h3>Formations réalisées</h3>
                    <h1>24 981</h1>
                </div>
                <div class="progresss">
                    <svg>
                        <circle cx="38" cy="38" r="36"></circle>
                    </svg>
                    <div class="percentage">
                        <p>-48%</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="searches">
            <div class="status">
                <div class="info">
                    <h3>Taux de participation</h3>
                    <h1>14 147</h1>
                </div>
                <div class="progresss">
                    <svg>
                        <circle cx="38" cy="38" r="36"></circle>
                    </svg>
                    <div class="percentage">
                        <p>+21%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="new-users">
        <h2>Utilisateurs</h2>
        <div class="recent-orders">

            <table>

                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Formation suivi</th>
                        <th>Téléphone</th>
                        <th>Adresse Mail</th>
                        <th>Nombre de seance de la formation</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->nom }}</td>
                            <td>{{ $user->prenom }}</td>
                            <td>{{ $user->cours->titre ?? 'Non attribué' }}</td>
                            <td>{{ $user->telephone }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->cours->seance ?? 'Non attribué' }} seances</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">Aucun utilisateur trouvé</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
            <a href="#">Voir Tout</a>
        </div>
    </div>

    <div class="recent-orders">
        <h2>Formations en cours</h2>
        <table>
            <thead>

                <tr>
                    <th>Nom du Client</th>
                    <th>Nom du Cours</th>
                    <th>Formations</th>
                    <th>Nom du formateur</th>
                    <th>Côut</th>
                    <th>status du paiements</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->nom }}</td>
                        <td>{{ $user->prenom }}</td>
                        <td>{{ $user->cours->titre ?? 'Non attribué' }}</td>
                        <td>{{ $user->cours->formateur->nom }} {{ $user->cours->formateur->prenom }}</td>
                        <td>{{$user->cours->facture}}</td>
                        <td>Payé</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">Aucun utilisateur trouvé</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <a href="#">Voir Tout</a>
    </div>
@endsection
