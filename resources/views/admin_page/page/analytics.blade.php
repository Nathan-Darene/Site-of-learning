@extends('admin_page.layouts.app')

@section('title', 'Analytique')

@section('contents')
    @php
        $nbr_cours = App\Models\Cours::count();
        $nbr_users = App\Models\users::count();
        $nbr_formateurs = App\Models\formateurs::count();
    @endphp
    <h1>Analytique</h1>
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
                    <h3>Visites du Site</h3>
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
                    <h3>Recherches</h3>
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
        <h2>Nouveaux Utilisateurs</h2>
        <div class="recent-orders">

            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Numéro</th>
                        <th>Formation suivi</th>
                        <th>Statut du payement</th>
                        <th>Détails</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td></td>

                    </tr>
                </tbody>
            </table>
            <a href="#">Voir Tout</a>
        </div>
    </div>

    <div class="recent-orders">
        <h2>Commandes Récentes</h2>
        <table>
            <thead>
                <tr>
                    <th>Nom du Client</th>
                    <th>Nom du Cours</th>
                    <th>Statut</th>
                    <th>Détails</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>username</td>
                    <td>Python pour les Nuls</td>
                    <td>$250</td>
                    <td>Payé</td>
                    <td><a href="#"><i class="fas fa-ellipsis"></i></a></td>
                </tr>
                <tr>
                    <td>username</td>
                    <td>Java pour les Nuls</td>
                    <td>$350</td>
                    <td>En Attente</td>
                    <td><a href="#"><i class="fas fa-ellipsis"></i></a></td>
                </tr>
                <tr>
                    <td>username</td>
                    <td>JavaScript pour les Nuls</td>
                    <td>$450</td>
                    <td>Payé</td>
                    <td><a href="#"><i class="fas fa-ellipsis"></i></a></td>
            </tbody>
        </table>
        <a href="#">Voir Tout</a>
    </div>
@endsection
