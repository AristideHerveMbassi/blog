@extends('metronic.index')
@section('title') Nouveau article @endsection


@section('subtitle') Nouveau article @endsection
@section('css')

    <script src="{{asset('/js/ckeditor/ckeditor.js')}}" type="text/javascript"></script>


@endsection




@section('content')

    <form  method="POST" action="{{route('article.store')}}">
        @csrf
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="col-lg-9">
                    <!--begin::Portlet-->
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Titre de l'article
                                </h3>
                            </div>
                        </div>
                        <!--begin::Form-->

                        <div class="kt-portlet__body">
                            <div class="kt-section--first">
                                <div class="form-group">

                                    <input type="text" name="titre" id="name"  class="input-lg text-20 form-control" placeholder="Titre de l'article">
                                    <span class="form-text text-muted">Entrez le titre de l'article  s'il vous plait</span>
                                </div>

                            </div>
                        </div>

                        <!--end::Form-->
                    </div>
                    <!--end::Portlet-->






                    <!--begin::Portlet-->
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Reseaux sociaux
                                </h3>
                            </div>

                        </div>


                        <!--begin::Form-->

                        <div class="kt-portlet__body">

                            <div class="form-group form-group-last">
                                <div class="alert alert-solid-brand " role="alert">
                                    <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                    <div class="alert-text">
                                        Ces informations servent à afficher les informations de vos articles de façon optimale pour les réseaux sociaux : Facebook, Twitter, LinkedIn...
                                        <br>Pour en savoir plus, <strong>cliquez ici</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-section--first">
                                <div class="form-group">

                                    <input type="text" name="social_titre" id="name"  class="input-lg text-20 form-control" placeholder="Titre réseaux sociaux">
                                    <span class="form-text text-muted">Entrez le titre de l'article pour les réseaux sociaux s'il vous plait</span>
                                </div>
                                <div class="form-group">

                                    <textarea name="social_meta" class="form-control"></textarea>
                                    <span class="form-text text-muted">Entrez la description s'il vous plait. Elle corespond au message qui apparait en général en dessous du titre lors du partage de l'article. <br> Pour plus d'informations <strong>cliquez ici</strong></span>
                                </div>

                                <div class="form-group">
                                    <div></div>
                                    <div class="custom-file">
                                        <input type="file" name="social_image" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Image reseaux sociaux</label>
                                        <span class="form-text text-muted">Choissiez l'image ( <strong> 1200 x 500 pixels idealemnt) </strong> pour les réseaux sociaux.Elle represente l'image à afficher quand vous partagez vos articles sur les reseaux sociaux. <br> Pour plus d'informations <strong>cliquez ici</strong></span>

                                    </div>
                                </div>

                            </div>
                        </div>


                        <!--end::Form-->
                    </div>
                    <!--end::Portlet-->  <!--begin::Portlet-->
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Contenu de l'article
                                </h3>
                            </div>
                        </div>
                        <!--begin::Form-->

                        <div class="kt-portlet__body">
                            <div class="kt-section--first">
                                <div class="form-group">

                                     <textarea name="editor1" id="editor1" rows="1000" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
                                    <script>
                                        var options = {
                                            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                                            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                                            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                                            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                                        };
                                        // Replace the <textarea id="editor1"> with a CKEditor
                                        // instance, using default configuration.
                                        CKEDITOR.replace( 'editor1', options );



                                    </script>
                                    <span class="form-text text-muted">Entrez le titre de l'article  s'il vous plait</span>
                                </div>

                            </div>
                        </div>


                        <!--end::Form-->
                    </div>
                    <!--end::Portlet-->
                </div>


                <div class="col-lg-3">






                    <!--begin::Accordion-->
                    <div class="accordion accordion-solid accordion-toggle-svg" id="accordionExample7">
                        <div class="card">
                            <div class="card-header" id="headingOne7">
                                <div class="card-title" data-toggle="collapse" data-target="#collapseOne7" aria-expanded="true" aria-controls="collapseOne7">
                                    Publication
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon id="Shape" points="0 0 24 0 24 24 0 24" />
                                            <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero" />
                                            <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                                        </g>
                                    </svg> </div>
                            </div>
                            <div id="collapseOne7" class="collapse show" aria-labelledby="headingOne7" data-parent="#accordionExample7">
                                <div class="card-body">




                                    <div class="form-group row">
                                        <label class="col-9 col-form-label">
                                            Publier l'article ? <small><em>(Par defaut l'article n'est pas publié)</em></small></label>
                                        <div class="col-3">
                                            <span class="kt-switch kt-switch--sm kt-switch--icon">
											<label>
											<input type="checkbox"  name="publier_statut">
											<span></span>
                                            </label>
											</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-12 col-sm-12">Date de publication</label>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="input-group date">
                                                <input type="text" name="date_publication" class="form-control" readonly value="1899-11-29 00:30" id="kt_datetimepicker_3" />
                                                <div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar glyphicon-th"></i>
														</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="kt-portlet__foot">
                                        <div class="kt-form__actions">
                                            <button type="submit" class="btn btn-brand btn-elevate btn-icon-sm submit"><i class="la la-plus"></i> Publier l'article</button>

                                        </div>
                                    </div>

                                </div>



                            </div>

                        </div>

                    </div>

                    <!--end::Accordion-->
                    <!--begin::Accordion-->
                    <div class="accordion accordion-solid accordion-toggle-svg mt-5" id="accordionExample8">
                        <div class="card">
                            <div class="card-header" id="headingOne8">
                                <div class="card-title" data-toggle="collapse" data-target="#collapseOne8" aria-expanded="true" aria-controls="collapseOne8">
                                    Image liée
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon id="Shape" points="0 0 24 0 24 24 0 24" />
                                            <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero" />
                                            <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                                        </g>
                                    </svg> </div>
                            </div>
                            <div id="collapseOne8" class="collapse show" aria-labelledby="headingOne8" data-parent="#accordionExample8">
                                <div class="card-body">




                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-12 col-sm-12">Image de l'article</label>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <div></div>



                                                            <div class="input-group">
                                                                                   <span class="input-group-btn">
                                                                                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                                                       <i class="fa fa-picture-o"></i> Choose
                                                                                     </a>
                                                                                   </span>
                                                    <input id="thumbnail" class="form-control" type="text" name="filepath">
                                                </div>
                                                <img id="holder" style="margin-top:15px;max-height:100px;">






                                                <div id="kt_apps_user_add_avatar" class="kt-avatar kt-avatar--outline">
                                                    <div class="kt-avatar__holder" id="holder"></div>
                                                    <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                        <i class="fa fa-pen"></i>
                                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                        <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                                                        </a>
                                                    </label>

                                                    <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
																				<i class="fa fa-times"></i>
																			</span>

                                                </div>
                                                <span class="form-text text-muted">Choissiez l'image  principale de votre article.</span>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>

                    <!--end::Accordion-->




                    <br><br>









                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Catégories
                                </h3>
                            </div>
                        </div>
                        <!--begin::Form-->

                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-12 col-sm-12">Choisissez une (plusieurs) catégorie(s)</label>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <select name="categories[]" data-live-search="true" class="form-control kt-selectpicker" multiple>
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!--end::Form-->


                    </div>
                    <!--end::Portlet-->

                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Tags
                                </h3>
                            </div>
                        </div>
                        <!--begin::Form-->

                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-12 col-sm-12">Choisissez un (plusieurs) Tag(s)</label>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <select name="tags[] "data-live-search="true" class="form-control kt-selectpicker" multiple>
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!--end::Form-->


                    </div>
                    <!--end::Portlet-->


                </div>
            </div>
        </div>
    </form>

@endsection



@section('scripts')
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script> $('#lfm').filemanager('image');

    </script>
    <script src="{{asset('assets/js/demo12/pages/crud/forms/widgets/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/js/demo12/pages/crud/forms/widgets/bootstrap-select.js')}}" type="text/javascript"></script>

    <script src="{{asset('assets/js/categories/datatable.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/categories/create.js')}}"></script>
    <script src="{{asset('/assets/js/demo12/pages/components/extended/sweetalert2.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/js/demo12/pages/custom/user/profile.js')}}" type="text/javascript"></script>

@endsection