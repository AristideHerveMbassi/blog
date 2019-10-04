@extends('metronic.index')
@section('title') Tags @endsection


@section('subtitle') Tags @endsection
@section('css')

    <style>


    </style>
@endsection

@section('content')


    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Ajouter un Tag
                            </h3>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="kt-form" method="POST" action="{{route('tag.store')}}">
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="form-group">
                                    <label>Nom:</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="nom tag  ">
                                    <span class="form-text text-muted">Entrez le nom du tag s'il vous plait</span>
                                </div>
                                <div class="form-group">
                                    <label>Description:</label>
                                    <textarea type="textarea" name="description" id="description" class="form-control" placeholder="description tag"> </textarea>
                                    <span class="form-text text-muted">Veuillez entrez la description s'il vous plait</span>
                                </div>

                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <button type="submit" class="btn btn-brand btn-elevate btn-icon-sm submit"><i class="la la-plus"></i> Ajouter</button>
                                <button type="submit" class="btn btn-secondary invisible update">Mettre à jour</button>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Portlet-->


            </div>
            <div class="col-lg-12">

                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">

                            <h3 class="kt-portlet__head-title">
                                Liste des Tag
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="kt-portlet__head-actions">
                                    <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-download"></i> Export
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__section kt-nav__section--first">
                                                    <span class="kt-nav__section-text">Choose an option</span>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-print"></i>
                                                        <span class="kt-nav__link-text">Print</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-copy"></i>
                                                        <span class="kt-nav__link-text">Copy</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                        <span class="kt-nav__link-text">Excel</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                        <span class="kt-nav__link-text">CSV</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                        <span class="kt-nav__link-text">PDF</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    &nbsp;
                                    <a href="#" class="btn btn-brand btn-elevate btn-icon-sm" id="recordexample">
                                        <i class="la la-plus"></i>
                                        New Record
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="tagTable">
                            <thead>
                            <tr>
                                <th style="text-align: center; width: 50px !important ;"><input type="checkbox" id="example-select-all" /></th>
                                <th>ID</th>
                                <th>Nom</th>
                                <th style="width: 100px !important ;">Articles</th>
                                <th style="width: 100px !important ;">Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($tags as $item)
                                <tr>
                                    <td class="text-center">
                                        <input value="{{$item->slug }}" type="checkbox"/>
                                    </td>
                                    <td> {{ $item->id  }}</td>
                                    <td> {{ $item->name  }}</td>
                                    <td class="text-center"><span class="btn rounded px-3 btn-sm btn-label-danger btn-bold">{{ $item->articles_count }}</span>


                                    </td>

                                    <td style="" nowrap="" class="text-center">
                                    <span class="dropdown">
                                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                          <i class="la la-edit"></i>
                                        </a>

                                    <div class="dropdown-menu dropdown-menu-right" style="display: none; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-32px, 27px, 0px);" x-placement="bottom-end">
                                            <a class="dropdown-item edit" data-slug="{{$item->slug}}" href="#"><i class="la la-edit "></i> Mettre à jour</a>
                                            <a  id="kt_sweetalert_demo_9" class="dropdown-item remove " data-slug="{{$item->slug}}" href="#"><i class="la la-trash remove"></i> Supprimer</a>

                                        </div></span>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!--end: Datatable -->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection



@section('scripts')
    <script src="{{asset('assets/js/tags/datatable.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/tags/create.js')}}"></script>
    <script src="{{asset('/assets/js/demo12/pages/components/extended/sweetalert2.js')}}" type="text/javascript"></script>

@endsection