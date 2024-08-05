@extends('admin_page.layouts.app')

@section('title', 'Analytique')

@section('contents')
    <h1>Analytique</h1>
    <div class="analyse">
        <div class="sales">
            <div class="status">
                <div class="info">
                    <h3>Ventes Totales</h3>
                    <h1>65 024 $</h1>
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
        <div class="user-list">
            <div class="user">
                <img src="{{ asset('images/profile-2.jpg') }}">
                <h2>Jack</h2>
                <p>Il y a 54 minutes</p>
            </div>
            <div class="user">
                <img src="{{ asset('images/profile-3.jpg') }}">
                <h2>Amir</h2>
                <p>Il y a 3 heures</p>
            </div>
            <div class="user">
                <img src="{{ asset('images/profile-4.jpg') }}">
                <h2>Ember</h2>
                <p>Il y a 6 heures</p>
            </div>
            <div class="user">
                <img src="{{ asset('images/plus.png') }}">
                <h2>Plus</h2>
                <p>Nouvel Utilisateur</p>
            </div>
        </div>
    </div>

    <div class="recent-orders">
        <h2>Commandes Récentes</h2>
        <table>
            <thead>
                <tr>
                    <th>Nom du Client</th>
                    <th>Nom du Cours</th>
                    <th>Numéro du Cours</th>
                    <th>Paiement</th>
                    <th>Statut</th>
                    <th>Détails</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>Python pour les Nuls</td>
                    <td>C001</td>
                    <td>$250</td>
                    <td>Payé</td>
                    <td><a href="#"><i class="fas fa-ellipsis"></i></a></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Java pour les Nuls</td>
                    <td>C002</td>
                    <td>$350</td>
                    <td>En Attente</td>
                    <td><a href="#"><i class="fas fa-ellipsis"></i></a></td>
                </tr>
                <tr>
                    <td></td>
                    <td>JavaScript pour les Nuls</td>
                    <td>C003</td>
                    <td>$450</td>
                    <td>Payé</td>
                    <td><a href="#"><i class="fas fa-ellipsis"></i></a></td>
            </tbody>
        </table>
        <a href="#">Voir Tout</a>
    </div>
@endsection
