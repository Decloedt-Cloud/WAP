@extends('admin.layouts.app')

@section('title', 'Admin - Care Beneficiaries')


@push('styles')
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/dashboard-assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="/dashboard-assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="/dashboard-assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="/dashboard-assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="/dashboard-assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="/dashboard-assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="/dashboard-assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="/dashboard-assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="/dashboard-assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="/dashboard-assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="/dashboard-assets/css/vendors/date-picker.css">
    <link rel="stylesheet" type="text/css" href="/dashboard-assets/css/vendors/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="/dashboard-assets/css/vendors/rating.css">
    <link rel="stylesheet" type="text/css" href="/dashboard-assets/css/vendors/vector-map.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/dashboard-assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="/dashboard-assets/css/style.css">
    <link id="color" rel="stylesheet" href="/dashboard-assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="/dashboard-assets/css/responsive.css">
@endpush


@push('scripts')
    <!-- latest jquery-->
    <script src="/dashboard-assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="/dashboard-assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="/dashboard-assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="/dashboard-assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="/dashboard-assets/js/scrollbar/simplebar.js"></script>
    <script src="/dashboard-assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="/dashboard-assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="/dashboard-assets/js/sidebar-menu.js"></script>
    <script src="/dashboard-assets/js/sidebar-pin.js"></script>
    <script src="/dashboard-assets/js/slick/slick.min.js"></script>
    <script src="/dashboard-assets/js/slick/slick.js"></script>
    <script src="/dashboard-assets/js/header-slick.js"></script>
    <script src="/dashboard-assets/js/chart/morris-chart/raphael.js"></script>
    <script src="/dashboard-assets/js/chart/morris-chart/morris.js"></script>
    <script src="/dashboard-assets/js/chart/morris-chart/prettify.min.js"></script>
    <script src="/dashboard-assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="/dashboard-assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="/dashboard-assets/js/chart/apex-chart/moment.min.js"></script>
    <script src="/dashboard-assets/js/chart/echart/pie-chart/facePrint.js"></script>
    <script src="/dashboard-assets/js/chart/echart/pie-chart/testHelper.js"></script>
    <script src="/dashboard-assets/js/chart/echart/pie-chart/custom-transition-texture.js"></script>
    <script src="/dashboard-assets/js/chart/echart/data/symbols.js"></script>
    <script src="/dashboard-assets/js/slick/slick.min.js"></script>
    <script src="/dashboard-assets/js/slick/slick-theme.js"></script>
    <script src="/dashboard-assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/dashboard-assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/dashboard-assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
    <script src="/dashboard-assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="/dashboard-assets/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
    <script src="/dashboard-assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
    <script src="/dashboard-assets/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
    <script src="/dashboard-assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script>
    <!-- calendar js-->
    <script src="/dashboard-assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="/dashboard-assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="/dashboard-assets/js/datatable/datatables/datatable.custom1.js"></script>

    <script src="/dashboard-assets/js/rating/jquery.barrating.js"></script>
    <script src="/dashboard-assets/js/rating/rating-script.js"></script>
    <script src="/dashboard-assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="/dashboard-assets/js/vector-map/map-vector.js"></script>
    <script src="/dashboard-assets/js/countdown.js"></script>
    <script src="/dashboard-assets/js/dashboard/dashboard_3.js"></script>
    <script src="/dashboard-assets/js/ecommerce.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="/dashboard-assets/js/script.js"></script>
    <script src="/dashboard-assets/js/script1.js"></script>
    <script src="/dashboard-assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
@endpush


@section('page-header')
    <h4 class="f-w-700">categorie</h4>
    <nav>
        <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item f-w-400">Admin Panel</li>
            <li class="breadcrumb-item f-w-400">categorie</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid dashboard-3">

            <div class="card"
                style="background-color: rgba(255, 255, 255, 0.7); box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <a href="{{ route('admin.categorie.create') }}" class="btn btn-outline-primary">
                        <i class="fa fa-plus"></i> Ajouter
                    </a>

                    <!-- Go Back Button (Uses JavaScript history to go back) -->
                    <button type="button" class="btn btn-outline-primary" onclick="history.back()">
                        <i class="fa fa-arrow-left"></i> Go Back
                    </button>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-6 col-sm-6">
                    <div class="card pb-5">
                        <div class="card-header card-no-border pb-0">
                            <div class="header-top daily-revenue-card">
                                <h4>Catégorie totale </h4>
                            </div>
                        </div>
                        <div class="card-body pb-0 total-sells">
                            <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0">
                                    <i class="fa fa-user text-white"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center gap-2">
                                        <h2>{{ $totalCount }} </h2>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="card pb-5">
                        <div class="card-header card-no-border pb-0">
                            <div class="header-top daily-revenue-card">
                                <h4>Active Catégorie </h4>
                            </div>
                        </div>
                        <div class="card-body pb-0 total-sells-2">
                            <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0">
                                    <i class="fa fa-user text-white"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center gap-2">
                                        <h2>{{ $activeCount }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            @include('partials._dashboard_message')


            @if ($Categories->isEmpty())
                <div class="alert txt-primary border-warning alert-dismissible fade show" role="alert">
                    <i data-feather="clock"></i>
                    <p class="text-danger">Aucune catégorie trouvée.</p>                </div>
            @else
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Categories</h4>
                            </div>
                            <div class="card-body">
                                <!-- Standard Bootstrap responsive table wrapper -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead style="background-color: #F4F7F9;">
                                            <tr>
                                                <th style="width: 20%;">Nom</th>
                                                <th style="width: 20%;">Description</th>
                                                <th style="width: 20%;">Status</th>
                                                <th style="width: 20%;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($Categories as $cat)
                                                <tr>
                                                    <td>{{ $cat->nom }}</td>
                                                    <td>{{ $cat->description }}</td>
                                                    <td>
                                                        @if ($cat->status == 'active')
                                                            <span
                                                                class="badge
                                                bg-success
                                        ">
                                                                active
                                                            </span>
                                                        @else
                                                            <span
                                                                class="badge
                                                bg-danger
                                        ">
                                                                desactive
                                                            </span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <!-- 🔧 Edit Button -->
                                                        <button type="button" class="btn btn-sm btn-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editModal{{ $cat->id }}">
                                                            <i class="fa fa-pencil"></i>
                                                        </button>

                                                        <!-- 🗑️ Delete Button -->
                                                        <button type="button" class="btn btn-sm btn-danger"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal{{ $cat->id }}">
                                                            <i class="fa fa-trash"></i>
                                                        </button>

                                                        <!-- ✏️ Edit Modal -->
                                                        <div class="modal fade" id="editModal{{ $cat->id }}"
                                                            tabindex="-1"
                                                            aria-labelledby="editModalLabel{{ $cat->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <form method="POST"
                                                                        action="{{ route('admin.categorie.update', $cat->id) }}">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="editModalLabel{{ $cat->id }}">
                                                                                Modifier la catégorie</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Fermer"></button>
                                                                        </div>
                                                                        <input type="hidden" name="id" value="{{$cat->id}}">
                                                                        <div class="modal-body">
                                                                            <div class="mb-3">
                                                                                <label for="nom{{ $cat->id }}"
                                                                                    class="form-label">Nom</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="nom{{ $cat->id }}"
                                                                                    name="nom"
                                                                                    value="{{ $cat->nom }}" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="description{{ $cat->id }}"
                                                                                    class="form-label">Description</label>
                                                                                <textarea class="form-control" id="description{{ $cat->id }}" name="description" rows="3" required>{{ $cat->description }}</textarea>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Status</label>
                                                                                <select class="form-control" name="status" required>
                                                                                    <option value="active" {{ ($cat->status ?? '') === 'active' ? 'selected' : '' }}>Active</option>
                                                                                    <option value="inactive" {{ ($cat->status ?? '') === 'inactive' ? 'selected' : '' }}>Desactive</option>
                                                                                </select>
                                                                            </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Annuler</button>
                                                                            <button type="submit"
                                                                                class="btn btn-success">Mettre à
                                                                                jour</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- 🧨 Delete Confirmation Modal -->
                                                        <div class="modal fade" id="deleteModal{{ $cat->id }}"
                                                            tabindex="-1"
                                                            aria-labelledby="deleteModalLabel{{ $cat->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <form method="POST"
                                                                        action="{{ route('admin.categorie.destroy', $cat->id) }}">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="deleteModalLabel{{ $cat->id }}">
                                                                                Confirmer la suppression</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Fermer"></button>
                                                                        </div>
                                                                        <input type="hidden" value="{{ $cat->id }}"
                                                                            name="id">
                                                                        <div class="modal-body">
                                                                            Voulez-vous vraiment supprimer
                                                                            <strong>{{ $cat->nom }}</strong> ?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Annuler</button>
                                                                            <button type="submit"
                                                                                class="btn btn-danger">Supprimer</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endif
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
