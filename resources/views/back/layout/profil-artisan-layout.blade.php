@extends('back.layout.artisan-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'Titre du page')
@section('contentArtisan')
<div class="row">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
        <div class="pd-20 card-box height-100-p">
            <div class="profile-photo">
                <a
                    href="modal"
                    data-toggle="modal"
                    data-target="#modal"
                    class="edit-avatar"
                    ><i class="fa fa-pencil"></i
                ></a>
                <img
                    src="/storage/{{ (Auth::user()->image_artisan) }}"
                    alt=""
                    class="avatar-photo"
                    width="140" height="140"
                />
                <div
                    class="modal fade"
                    id="modal"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="modalLabel"
                    aria-hidden="true"
                >
                    <div
                        class="modal-dialog modal-dialog-centered"
                        role="document"
                    >
                        <div class="modal-content">
                            <div class="modal-body pd-5">
                                <div class="img-container">
                                    <img                                       
                                        src="/storage/images/profiles/{{ (Auth::user()->image_artisan) }}"                                        
                                        alt="Picture"
                                        id="selectedAvatar"
                                    />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="btn btn-primary">
                                    <label for="customFile2">Modifier</label>
                                    <input type="file" class="form-control d-none" 
                                    name="image_artisan" id="customFile2" onchange="displaySelectedImage(event, 'selectedAvatar')" />
                                </div>

                                <!-- <input
                                    type="submit"
                                    value="Update"
                                    class="btn btn-primary"
                                /> -->
                                <button
                                    type="submit"
                                    class="btn btn-default"
                                    data-dismiss="modal"
                                >
                                    Fermer
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
                                    
            <h5 class="text-center h5 mb-0"> {{isset($nom) ? $nom: 'nom definie'}}</h5>
            <p class="text-center text-muted font-14">
           
            </p>
            <div class="profile-info">
                <h5 class="mb-20 h5 text-blue">Informations Personnel</h5>
                <ul>
                    <li>
                        <span>Nom Utilisateur:</span>
                        {{isset($nom_usr) ? $nom_usr: 'non definie'}}
                    </li>
                    <li>
                        <span>Date de Naissance:</span>
                        {{isset($date_naiss) ? $date_naiss: 'non definie'}}
                    </li>
                    <li>
                        <span>Genre:</span>
                        {{isset($genre) ? $genre: 'non definie'}}
                    </li>
                </ul>
            </div>
            
            <div class="profile-info">
                <h5 class="mb-20 h5 text-blue">Contact Informations</h5>
                <ul>
                    <li>
                        <span>Adresse Email:</span>
                        {{isset($email) ? $email: 'non definie'}}
                    </li>
                    <li>
                        <span>Téléphone:</span>
                        {{isset($telephone) ? $telephone: 'nom definie'}}
                    </li>
                   
                    <li>
                        <span>Etat:</span>
                        {{isset($etat) ? $etat: 'Active'}}
                    </li>
                    <li>
                        <span>Adresse:</span>
                        Commune Pays<br />
                        {{isset($adresse) ? $adresse: 'nom definie'}}
                    </li>
                </ul>
            </div>
            <!-- <div class="profile-social">
                <h5 class="mb-20 h5 text-blue">Social Links</h5>
                <ul class="clearfix">
                    <li>
                        <a
                            href="#"
                            class="btn"
                            data-bgcolor="#3b5998"
                            data-color="#ffffff"
                            ><i class="fa fa-facebook"></i
                        ></a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="btn"
                            data-bgcolor="#1da1f2"
                            data-color="#ffffff"
                            ><i class="fa fa-twitter"></i
                        ></a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="btn"
                            data-bgcolor="#007bb5"
                            data-color="#ffffff"
                            ><i class="fa fa-linkedin"></i
                        ></a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="btn"
                            data-bgcolor="#f46f30"
                            data-color="#ffffff"
                            ><i class="fa fa-instagram"></i
                        ></a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="btn"
                            data-bgcolor="#c32361"
                            data-color="#ffffff"
                            ><i class="fa fa-dribbble"></i
                        ></a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="btn"
                            data-bgcolor="#3d464d"
                            data-color="#ffffff"
                            ><i class="fa fa-dropbox"></i
                        ></a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="btn"
                            data-bgcolor="#db4437"
                            data-color="#ffffff"
                            ><i class="fa fa-google-plus"></i
                        ></a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="btn"
                            data-bgcolor="#bd081c"
                            data-color="#ffffff"
                            ><i class="fa fa-pinterest-p"></i
                        ></a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="btn"
                            data-bgcolor="#00aff0"
                            data-color="#ffffff"
                            ><i class="fa fa-skype"></i
                        ></a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="btn"
                            data-bgcolor="#00b489"
                            data-color="#ffffff"
                            ><i class="fa fa-vine"></i
                        ></a>
                    </li>
                </ul>
            </div>
            <div class="profile-skills">
                <h5 class="mb-20 h5 text-blue">Key Skills</h5>
                <h6 class="mb-5 font-14">HTML</h6>
                <div class="progress mb-20" style="height: 6px">
                    <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 90%"
                        aria-valuenow="0"
                        aria-valuemin="0"
                        aria-valuemax="100"
                    ></div>
                </div>
                <h6 class="mb-5 font-14">Css</h6>
                <div class="progress mb-20" style="height: 6px">
                    <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 70%"
                        aria-valuenow="0"
                        aria-valuemin="0"
                        aria-valuemax="100"
                    ></div>
                </div>
                <h6 class="mb-5 font-14">jQuery</h6>
                <div class="progress mb-20" style="height: 6px">
                    <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 60%"
                        aria-valuenow="0"
                        aria-valuemin="0"
                        aria-valuemax="100"
                    ></div>
                </div>
                <h6 class="mb-5 font-14">Bootstrap</h6>
                <div class="progress mb-20" style="height: 6px">
                    <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 80%"
                        aria-valuenow="0"
                        aria-valuemin="0"
                        aria-valuemax="100"
                    ></div>
                </div>
            </div> -->
         
        </div>
    </div>
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
        <div class="card-box height-100-p overflow-hidden">
            <div class="profile-tab height-100-p">
                <div class="tab height-100-p">
                    <ul class="nav nav-tabs customtab" role="tablist">
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                data-toggle="tab"
                                href="#setting"
                                role="tab"
                                >Modification</a
                            >
                        </li>
                        {{-- <li class="nav-item">
                            <a
                                class="nav-link active"
                                data-toggle="tab"
                                href="#timeline"
                                role="tab"
                                >Chronologie</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                data-toggle="tab"
                                href="#tasks"
                                role="tab"
                                >Tache</a
                            >
                        </li> --}}                        
                    </ul>
                    <div class="tab-content">
                        @yield('contentProfil')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
<script>
    function displaySelectedImage(event, elementId) {
    const selectedImage = document.getElementById(elementId);
    const fileInput = event.target;

    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            selectedImage.src = e.target.result;
        };

        reader.readAsDataURL(fileInput.files[0]);
    }
}
</script>
@endsection