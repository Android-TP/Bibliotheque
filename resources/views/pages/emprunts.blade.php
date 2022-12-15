<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="billing"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Abonnement"></x-navbars.navs.auth>

          <div class="container py-3">
            <div class="card my-2" >
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th
                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                ID
                            </th>
                            <th
                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                PHOTO</th>
                            <th
                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                TITRE</th>
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                ISBN</th>
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                MAISON D'EDITION</th>
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                ANNEE D'EDITION
                            </th>
                            <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-sm">6</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('assets') }}/img/team-4.jpg"
                                            class="avatar avatar-sm me-3 border-radius-lg" alt="user6">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">La Programmation Orienté objet</h6>
                                </div>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-xs text-secondary mb-0">
                                    745-GTR-MM41</p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">DUNOD</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">2020</span>
                            </td>
                            <td class="align-middle">
                                <a rel="tooltip" class="btn btn-success btn-link"
                                    href="" data-original-title=""
                                    title="">
                                    <i class="material-iconsd">Emprunter</i>
                                    <div class="ripple-container"></div>
                                </a>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="date" class="title-smart-input">Choisir la date de remise</label>
                        <div class="grid-2 ">
                            <input type="date" name="remise" class="form-control smart-input">

                        </div>

                    </div>
                </form>
            </div>
          </div>

    </main>
    <x-plugins></x-plugins>

   </x-layout>
