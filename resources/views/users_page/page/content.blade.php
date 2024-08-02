{{-- Contenu de la page de l'utilisateur --}}
@extends('users_page.layouts.app')

@section('title', 'page utilisateur')

{{-- Section pour l'affichage de la progestion et du niveau des utilisateur au cours de leurs formations --}}

@section('content')
    <div class="status" id="cours">
        <div class="header">
            <h4 id="big">Mes cours</h4>
            {{-- <h4 id="small">Activité hebdomadaire</h4> --}}
        </div>

        <div class="items-list">
            <div class="item">
                <div class="info">
                    <div>
                        <h5>Data Analysis</h5>
                        <p>- Il reste 3 cours</p>
                        <p>- 1 project left</p>
                    </div>
                    <i class='fa-solid fa-award'></i>
                </div>
                <div class="progress">
                    <div class="bar"></div>
                </div>
            </div>
            <div class="item">
                <div class="info">
                    <div>
                        <h5>Machine Learn</h5>
                        <p>- Il reste 2 missions</p>
                        <p>- Il reste 5 tutoriels</p>
                    </div>
                    <i class='fa-solid fa-award'></i>
                </div>
                <div class="progress">
                    <div class="bar"></div>
                </div>
            </div>
            <div class="item">
                <div class="info">
                    <div>
                        <h5>Python</h5>
                        <p>- Il reste 4 chapitres</p>
                        <p>- Il reste 8 quiz </p>
                    </div>
                    <i class='fa-solid fa-award'></i>
                </div>
                <div class="progress">
                    <div class="bar"></div>
                </div>
            </div>
            <div class="item">
                <div class="info">
                    <div>
                        <h5>Python</h5>
                        <p>- Il reste 4 chapitres</p>
                        <p>- Il reste 8 quiz </p>
                    </div>
                    <i class='fa-solid fa-award'></i>
                </div>
                <div class="progress">
                    <div class="bar"></div>
                </div>
            </div>
        </div>
    </div>

@endsection

{{-- Section pour l'affichage de la progestion des utilisateur au cours de leurs formations --}}

@section('bottom-content')
    <div class="prog-status" id="progress">
        <div class="header">
            <h4>Learning Progress: </h4>
            <h3>Art Oratoire</h3>
        </div>
        <div class="upcoming en-cour">
            <div class="progres-user events">
                <div class="item">
                    <div>
                        <i class='fa-solid fa-hourglass-half'></i>
                        <div class="event-info">
                            <a href="#">Art Oratoire : Seance 1</a>
                            <p>10:00-11:30</p>
                            <p>Lieu: À ORAL</p>
                        </div>
                    </div>
                    <div>
                        <p>Terminé ?</p>
                        <input type="checkbox" name="" id="" class="checkbox">
                        <i class='bx bx-dots-horizontal-rounded'></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Section pour l'afficher les suggestion sur les cours les plus suivie --}}

    <div class="popular">
        <div class="header">
            <h4>Populaire</h4>
            <a href="#"># Data</a>
        </div>

        <img src="{{ asset('images/assets/podcast.jpg') }}">
        <div class="audio">
            <i class='bx bx-podcast'></i>
            <a href="#">Podcast : Maîtriser la visualisation des données</a>
        </div>
        <p>Apprenez à créer des visualisations convaincantes avec des données.</p>
        <div class="listen">
            <div class="author">
                <img src="{{ asset('images/assets/profile.png') }}">
                <div>
                    <a href="#">Alex</a>
                    <p>Art Oratoire</p>
                </div>
            </div>
            <button>Suivre<i class='bx bx-right-arrow-alt'></i></button>
        </div>
    </div>

    {{-- section pour l'affichage des cours avenir --}}

    <div class="upcoming">
        <div class="header" id="to_do_list">
            <h4><i class="fa-solid fa-calendar-days"></i> Emploi du temps </h4>
            <a href="#"><?php echo date('F'); ?><i class='bx bx-chevron-down'></i></a>
        </div>

        <div class="dates">
            <div class="item">
                <h5>Lun</h5>
                <a href="#"></a>
            </div>
            <div class="item">
                <h5>Mar</h5>
                <a href="#"></a>
            </div>
            <div class="item">
                <h5>Mer</h5>
                <a href="#"></a>
            </div>
            <div class="item">
                <h5>Jeu</h5>
                <a href="#"></a>
            </div>
            <div class="item">
                <h5>Ven</h5>
                <a href="#"></a>
            </div>
            <div class="item">
                <h5>Sam</h5>
                <a href="#"></a>
            </div>
            <div class="item">
                <h5>Dim</h5>
                <a href="#"></a>
            </div>
        </div>

        <div class="events">
            <div class="item">
                <div>
                    <i class='bx bx-time'></i>
                    <div class="event-info">
                        <a href="#">Formation en marketing</a>
                        <p>10:00-11:30</p>
                        <p>Lieu: À ORAL</p>
                    </div>
                </div>
                <i class='bx bx-dots-horizontal-rounded'></i>
            </div>
            <div class="item">
                <div>
                    <i class='bx bx-time'></i>
                    <div class="event-info">
                        <a href="#">Coaching en leadership</a>
                        <p>13:30-15:00</p>
                        <p>Lieu: À ORAL</p>
                    </div>
                </div>
                <i class='bx bx-dots-horizontal-rounded'></i>
            </div>
            <div class="item">
                <div>
                    <i class='bx bx-time'></i>
                    <div class="event-info">
                        <a href="#">Formation en ART Oratoire</a>
                        <p>11:30-13:00</p>
                        <p>Lieu: À ORAL</p>
                    </div>
                </div>
                <i class='bx bx-dots-horizontal-rounded'></i>
            </div>
            <div class="item">
                <div>
                    <i class='bx bx-time'></i>
                    <div class="event-info">
                        <a href="#">Introduction à SQL</a>
                        <p>10:00-11:30</p>
                        <p>Lieu: À ORAL</p>
                    </div>
                </div>
                <i class='bx bx-dots-horizontal-rounded'></i>
            </div>
        </div>
    </div>
@endsection
