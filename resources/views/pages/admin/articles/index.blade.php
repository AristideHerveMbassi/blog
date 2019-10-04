@extends('metronic.index')
@section('title') Articles @endsection


@section('subtitle') Articles @endsection
@section('css')

    <style>
th {
    text-align: left;
}

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
                                Tous les articles
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
                                    <a href="{{route('article.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
                                        <i class="la la-plus"></i>
                                        Ajouter un nouveau
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin::Section-->
                        <div class="kt-section">

                            <div class="kt-section__content">
                                <table class="table" id="categorieTable">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Auteur</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th title="Commentaires"><svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"/>
                                                    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"/>
                                                </g>
                                            </svg></th>
                                        <th title="nombre de vues">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="9"/>
                                                    <path d="M11.7357634,20.9961946 C6.88740052,20.8563914 3,16.8821712 3,12 C3,11.9168367 3.00112797,11.8339369 3.00336944,11.751315 C3.66233009,11.8143341 4.85636818,11.9573854 4.91262842,12.4204038 C4.9904938,13.0609191 4.91262842,13.8615942 5.45804656,14.101772 C6.00346469,14.3419498 6.15931561,13.1409372 6.6267482,13.4612567 C7.09418079,13.7815761 8.34086797,14.0899175 8.34086797,14.6562185 C8.34086797,15.222396 8.10715168,16.1034596 8.34086797,16.2636193 C8.57458427,16.423779 9.5089688,17.54465 9.50920913,17.7048097 C9.50956962,17.8649694 9.83857487,18.6793513 9.74040201,18.9906563 C9.65905192,19.2487394 9.24857641,20.0501554 8.85059781,20.4145589 C9.75315358,20.7620621 10.7235846,20.9657742 11.7357634,20.9960544 L11.7357634,20.9961946 Z M8.28272988,3.80112099 C9.4158415,3.28656421 10.6744554,3 12,3 C15.5114513,3 18.5532143,5.01097452 20.0364482,7.94408274 C20.069657,8.72412177 20.0638332,9.39135321 20.2361262,9.6327358 C21.1131932,10.8600506 18.0995147,11.7043158 18.5573343,13.5605384 C18.7589671,14.3794892 16.5527814,14.1196773 16.0139722,14.886394 C15.4748026,15.6527403 14.1574598,15.137809 13.8520064,14.9904917 C13.546553,14.8431744 12.3766497,15.3341497 12.4789081,14.4995164 C12.5805657,13.664636 13.2922889,13.6156126 14.0555619,13.2719546 C14.8184743,12.928667 15.9189236,11.7871741 15.3781918,11.6380045 C12.8323064,10.9362407 11.963771,8.47852395 11.963771,8.47852395 C11.8110443,8.44901109 11.8493762,6.74109366 11.1883616,6.69207022 C10.5267462,6.64279981 10.170464,6.88841096 9.20435656,6.69207022 C8.23764828,6.49572949 8.44144409,5.85743687 8.2887174,4.48255778 C8.25453994,4.17415686 8.25619136,3.95717082 8.28272988,3.80112099 Z M20.9991771,11.8770357 C20.9997251,11.9179585 21,11.9589471 21,12 C21,16.9406923 17.0188468,20.9515364 12.0895088,20.9995641 C16.970233,20.9503326 20.9337111,16.888438 20.9991771,11.8770357 Z" fill="#000000" opacity="0.3"/>
                                                </g>
                                            </svg>

                                        </th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                        <th scope="row">1</th>





                                        <td data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell">

                                            <span style="width: 286px;">

                                                <div class="kt-user-card-v2">

                                                    <div class="kt-user-card-v2__pic">

                                                        <img alt="photo" src=" {{asset('assets/media/client-logos/logo1.png')}}">

                                                    </div>
                                                    <div class="kt-user-card-v2__details">
                                                        <a class="kt-user-card-v2__name" href="#">Gleichner, Ziemann and Gutkowski</a>

                                                        <span class="kt-user-card-v2__email">Angular, React</span> </div>


                                                 </div>


        </span>
                                        </td>
                                        <td data-field="Type" class="kt-datatable__cell"><span style="width: 200px;"><div class="kt-user-card-v2">



                                                    <div class="kt-user-card-v2__pic">
                                                        <img alt="photo" src=" {{asset('/assets/media/users/100_7.jpg')}}">
                                                    </div>							<div class="kt-user-card-v2__details">
                                                        <a class="kt-user-card-v2__name" href="#">Leila Fortune</a>
                                                        <span class="kt-user-card-v2__desc">Admin</span> </div>
        </div>
        </span>
                                        </td>



                                        <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">2/12/2018</span></span>
                                        </td>
                                        <td data-field="Status" class="kt-datatable__cell"><span style="width: 100px;"><span class="btn btn-bold btn-sm btn-font-sm rounded btn-label-success">online</span></span>
                                        </td>
                                        <td data-field="Status" class="kt-datatable__cell"><span style="width: 100px;"><span class="btn btn-bold btn-sm rounded btn-font-sm  btn-label-warning">20</span></span>
                                        </td>
                                        <td data-field="Status" class="kt-datatable__cell"><span style="width: 100px;"><span class="btn btn-bold btn-sm rounded btn-font-sm  btn-label-primary">500</span></span>
                                        </td>



                                        <td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="flaticon-more-1"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <ul class="kt-nav">                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-expand"></i>                                            <span class="kt-nav__link-text">View</span> </a>
        </li>
        <li class="kt-nav__item">
            <a class="kt-nav__link" href="#"> <i class="kt-nav__link-icon flaticon2-contract"></i> <span class="kt-nav__link-text">Edit</span> </a>
        </li>
        <li class="kt-nav__item">
            <a class="kt-nav__link" href="#"> <i class="kt-nav__link-icon flaticon2-trash"></i> <span class="kt-nav__link-text">Delete</span> </a>
        </li>

        </ul>
        </div>
        </div>
        </span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Section-->

                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Portlet-->




                <!--end::Portlet-->
            </div>
        </div>
    </div>


@endsection



@section('scripts')
    <script src="{{asset('assets/js/categories/datatable.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/categories/create.js')}}"></script>
    <script src="{{asset('/assets/js/demo12/pages/components/extended/sweetalert2.js')}}" type="text/javascript"></script>

@endsection