@extends('back.layout.profil-layout')

@section('contentProfil')

    <!-- Timeline Tab start -->
    <div class="tab-pane fade show active"id="timeline" role="tabpanel">
    <form action="#" method="POST">
        @csrf
        @method('put')
        <div class="pd-20">
            <div class="profile-timeline">
                <div class="timeline-month">
                    <h5>August, 2020</h5>
                </div>
                <div class="profile-timeline-list">
                    <ul>
                        <li>
                            <div class="date">12 Aug</div>
                            <div class="task-name">
                                <i class="ion-android-alarm-clock"></i> Task
                                Added
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit.
                            </p>
                            <div class="task-time">09:30 am</div>
                        </li>
                        <li>
                            <div class="date">10 Aug</div>
                            <div class="task-name">
                                <i class="ion-ios-chatboxes"></i> Task Added
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit.
                            </p>
                            <div class="task-time">09:30 am</div>
                        </li>
                        <li>
                            <div class="date">10 Aug</div>
                            <div class="task-name">
                                <i class="ion-ios-clock"></i> Event Added
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit.
                            </p>
                            <div class="task-time">09:30 am</div>
                        </li>
                        <li>
                            <div class="date">10 Aug</div>
                            <div class="task-name">
                                <i class="ion-ios-clock"></i> Event Added
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit.
                            </p>
                            <div class="task-time">09:30 am</div>
                        </li>
                    </ul>
                </div>
                <div class="timeline-month">
                    <h5>July, 2020</h5>
                </div>
                <div class="profile-timeline-list">
                    <ul>
                        <li>
                            <div class="date">12 July</div>
                            <div class="task-name">
                                <i class="ion-android-alarm-clock"></i> Task
                                Added
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit.
                            </p>
                            <div class="task-time">09:30 am</div>
                        </li>
                        <li>
                            <div class="date">10 July</div>
                            <div class="task-name">
                                <i class="ion-ios-chatboxes"></i> Task Added
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit.
                            </p>
                            <div class="task-time">09:30 am</div>
                        </li>
                    </ul>
                </div>
                <div class="timeline-month">
                    <h5>June, 2020</h5>
                </div>
                <div class="profile-timeline-list">
                    <ul>
                        <li>
                            <div class="date">12 June</div>
                            <div class="task-name">
                                <i class="ion-android-alarm-clock"></i> Task
                                Added
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit.
                            </p>
                            <div class="task-time">09:30 am</div>
                        </li>
                        <li>
                            <div class="date">10 June</div>
                            <div class="task-name">
                                <i class="ion-ios-chatboxes"></i> Task Added
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit.
                            </p>
                            <div class="task-time">09:30 am</div>
                        </li>
                        <li>
                            <div class="date">10 June</div>
                            <div class="task-name">
                                <i class="ion-ios-clock"></i> Event Added
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit.
                            </p>
                            <div class="task-time">09:30 am</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
    </div>
    <!-- Timeline Tab End -->

    <!-- Tasks Tab start -->
    <div class="tab-pane fade" id="tasks" role="tabpanel">
    <form action="#" method="POST">
        @csrf
        @method('put')
        <div class="pd-20 profile-task-wrap">
            <div class="container pd-0">
                <!-- Open Task start -->
                <div class="task-title row align-items-center">
                    <div class="col-md-8 col-sm-12">
                        <h5>Open Tasks (4 Left)</h5>
                    </div>
                    <div class="col-md-4 col-sm-12 text-right">
                        <a
                            href="task-add"
                            data-toggle="modal"
                            data-target="#task-add"
                            class="bg-light-blue btn text-blue weight-500"
                            ><i class="ion-plus-round"></i> Add</a
                        >
                    </div>
                </div>
                <div class="profile-task-list pb-30">
                    <ul>
                        <li>
                            <div
                                class="custom-control custom-checkbox mb-5"
                            >
                                <input
                                    type="checkbox"
                                    class="custom-control-input"
                                    id="task-1"
                                />
                                <label
                                    class="custom-control-label"
                                    for="task-1"
                                ></label>
                            </div>
                            <div class="task-type">Email</div>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Id ea earum.
                            <div class="task-assign">
                                Assigned to Ferdinand M.
                                <div class="due-date">
                                    due date <span>22 February 2019</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div
                                class="custom-control custom-checkbox mb-5"
                            >
                                <input
                                    type="checkbox"
                                    class="custom-control-input"
                                    id="task-2"
                                />
                                <label
                                    class="custom-control-label"
                                    for="task-2"
                                ></label>
                            </div>
                            <div class="task-type">Email</div>
                            Lorem ipsum dolor sit amet.
                            <div class="task-assign">
                                Assigned to Ferdinand M.
                                <div class="due-date">
                                    due date <span>22 February 2019</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div
                                class="custom-control custom-checkbox mb-5"
                            >
                                <input
                                    type="checkbox"
                                    class="custom-control-input"
                                    id="task-3"
                                />
                                <label
                                    class="custom-control-label"
                                    for="task-3"
                                ></label>
                            </div>
                            <div class="task-type">Email</div>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit.
                            <div class="task-assign">
                                Assigned to Ferdinand M.
                                <div class="due-date">
                                    due date <span>22 February 2019</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div
                                class="custom-control custom-checkbox mb-5"
                            >
                                <input
                                    type="checkbox"
                                    class="custom-control-input"
                                    id="task-4"
                                />
                                <label
                                    class="custom-control-label"
                                    for="task-4"
                                ></label>
                            </div>
                            <div class="task-type">Email</div>
                            Lorem ipsum dolor sit amet. Id ea earum.
                            <div class="task-assign">
                                Assigned to Ferdinand M.
                                <div class="due-date">
                                    due date <span>22 February 2019</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Open Task End -->
                <!-- Close Task start -->
                <div class="task-title row align-items-center">
                    <div class="col-md-12 col-sm-12">
                        <h5>Closed Tasks</h5>
                    </div>
                </div>
                <div class="profile-task-list close-tasks">
                    <ul>
                        <li>
                            <div
                                class="custom-control custom-checkbox mb-5"
                            >
                                <input
                                    type="checkbox"
                                    class="custom-control-input"
                                    id="task-close-1"
                                    checked=""
                                    disabled=""
                                />
                                <label
                                    class="custom-control-label"
                                    for="task-close-1"
                                ></label>
                            </div>
                            <div class="task-type">Email</div>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Id ea earum.
                            <div class="task-assign">
                                Assigned to Ferdinand M.
                                <div class="due-date">
                                    due date <span>22 February 2018</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div
                                class="custom-control custom-checkbox mb-5"
                            >
                                <input
                                    type="checkbox"
                                    class="custom-control-input"
                                    id="task-close-2"
                                    checked=""
                                    disabled=""
                                />
                                <label
                                    class="custom-control-label"
                                    for="task-close-2"
                                ></label>
                            </div>
                            <div class="task-type">Email</div>
                            Lorem ipsum dolor sit amet.
                            <div class="task-assign">
                                Assigned to Ferdinand M.
                                <div class="due-date">
                                    due date <span>22 February 2018</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div
                                class="custom-control custom-checkbox mb-5"
                            >
                                <input
                                    type="checkbox"
                                    class="custom-control-input"
                                    id="task-close-3"
                                    checked=""
                                    disabled=""
                                />
                                <label
                                    class="custom-control-label"
                                    for="task-close-3"
                                ></label>
                            </div>
                            <div class="task-type">Email</div>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit.
                            <div class="task-assign">
                                Assigned to Ferdinand M.
                                <div class="due-date">
                                    due date <span>22 February 2018</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div
                                class="custom-control custom-checkbox mb-5"
                            >
                                <input
                                    type="checkbox"
                                    class="custom-control-input"
                                    id="task-close-4"
                                    checked=""
                                    disabled=""
                                />
                                <label
                                    class="custom-control-label"
                                    for="task-close-4"
                                ></label>
                            </div>
                            <div class="task-type">Email</div>
                            Lorem ipsum dolor sit amet. Id ea earum.
                            <div class="task-assign">
                                Assigned to Ferdinand M.
                                <div class="due-date">
                                    due date <span>22 February 2018</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Close Task start -->
                <!-- add task popup start -->
                <div
                    class="modal fade customscroll"
                    id="task-add"
                    tabindex="-1"
                    role="dialog"
                >
                    <div
                        class="modal-dialog modal-dialog-centered"
                        role="document"
                    >
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5
                                    class="modal-title"
                                    id="exampleModalLongTitle"
                                >
                                    Tasks Add
                                </h5>
                                <button
                                    type="button"
                                    class="close"
                                    data-dismiss="modal"
                                    aria-label="Close"
                                    data-toggle="tooltip"
                                    data-placement="bottom"
                                    title=""
                                    data-original-title="Close Modal"
                                >
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body pd-0">
                                <div class="task-list-form">
                                    <ul>
                                        <li>
                                            <form>
                                                <div class="form-group row">
                                                    <label class="col-md-4"
                                                        >Task Type</label
                                                    >
                                                    <div class="col-md-8">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4"
                                                        >Task Message</label
                                                    >
                                                    <div class="col-md-8">
                                                        <textarea
                                                            class="form-control"
                                                        ></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4"
                                                        >Assigned to</label
                                                    >
                                                    <div class="col-md-8">
                                                        <select
                                                            class="selectpicker form-control"
                                                            data-style="btn-outline-primary"
                                                            title="Not Chosen"
                                                            multiple=""
                                                            data-selected-text-format="count"
                                                            data-count-selected-text="{0} people selected"
                                                        >
                                                            <option>Ferdinand M.</option>
                                                            <option>Don H. Rabon</option>
                                                            <option>Ann P. Harris</option>
                                                            <option>
                                                                Katie D. Verdin
                                                            </option>
                                                            <option>
                                                                Christopher S. Fulghum
                                                            </option>
                                                            <option>
                                                                Matthew C. Porter
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-0">
                                                    <label class="col-md-4"
                                                        >Due Date</label
                                                    >
                                                    <div class="col-md-8">
                                                        <input
                                                            type="text"
                                                            class="form-control date-picker"
                                                        />
                                                    </div>
                                                </div>
                                            </form>
                                        </li>
                                        <li>
                                            <a
                                                href="javascript:;"
                                                class="remove-task"
                                                data-toggle="tooltip"
                                                data-placement="bottom"
                                                title=""
                                                data-original-title="Remove Task"
                                                ><i class="ion-minus-circled"></i
                                            ></a>
                                            <form>
                                                <div class="form-group row">
                                                    <label class="col-md-4"
                                                        >Task Type</label
                                                    >
                                                    <div class="col-md-8">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4"
                                                        >Task Message</label
                                                    >
                                                    <div class="col-md-8">
                                                        <textarea
                                                            class="form-control"
                                                        ></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4"
                                                        >Assigned to</label
                                                    >
                                                    <div class="col-md-8">
                                                        <select
                                                            class="selectpicker form-control"
                                                            data-style="btn-outline-primary"
                                                            title="Not Chosen"
                                                            multiple=""
                                                            data-selected-text-format="count"
                                                            data-count-selected-text="{0} people selected"
                                                        >
                                                            <option>Ferdinand M.</option>
                                                            <option>Don H. Rabon</option>
                                                            <option>Ann P. Harris</option>
                                                            <option>
                                                                Katie D. Verdin
                                                            </option>
                                                            <option>
                                                                Christopher S. Fulghum
                                                            </option>
                                                            <option>
                                                                Matthew C. Porter
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-0">
                                                    <label class="col-md-4"
                                                        >Due Date</label
                                                    >
                                                    <div class="col-md-8">
                                                        <input
                                                            type="text"
                                                            class="form-control date-picker"
                                                        />
                                                    </div>
                                                </div>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="add-more-task">
                                    <a
                                        href="#"
                                        data-toggle="tooltip"
                                        data-placement="bottom"
                                        title=""
                                        data-original-title="Add Task"
                                        ><i class="ion-plus-circled"></i> Add
                                        More Task</a
                                    >
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-primary"
                                >
                                    Add
                                </button>
                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-dismiss="modal"
                                >
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- add task popup End -->
            </div>
        </div>
    </form>
    </div>
    <!-- Tasks Tab End -->
    <!-- Setting Tab start -->
    
   
        <div
        class="tab-pane fade height-100-p"
        id="setting"
        role="tabpanel"
    >   
    
        <div class="profile-setting">
        
        <form action="{{route('home.update', ['id'=>$id, 'dataUser'=>$table])}}" method="POST">
        @csrf
        @method('put')
     
                <ul class="profile-edit-list row">
                    <li class="weight-500 col-md-8">
                        <h4 class="text-blue h5 mb-20">
                            Modifier votre information personnel
                        </h4>
                        <div class="form-group">
                            <label>Votre Nom Complet</label>
                           
                          
                            <input
                                class="form-control form-control-lg"
                                type="text" name="nom"
                                value="{{isset($nom) ? $nom: 'nom definie'}}"
                            />
                        </div>
                        <div class="form-group">
                            <label>Nom d'utilisteur</label>
                            <input
                                class="form-control form-control-lg"
                                type="text"
                                name="nom_usr"
                                value="{{isset($nom_usr) ? $nom_usr: 'non definie'}}"
                            />
                        </div>

                        <div class="form-group">
                            <label>Profession</label>
                            <input
                                class="form-control form-control-lg"
                                type="text"
                                name="profession"
                                value="{{isset($profession) ? $profession: null}}"
                            />
                        </div>
                        <div class="form-group">
                            <label>Votre Email</label>
                            <input
                                class="form-control form-control-lg"
                                type="email"
                                name="email"
                                value="{{isset($email) ? $email: 'non definie'}}"
                            />
                        </div>
                        <div class="form-group">
                            <label>Date de Naissance</label>
                            <input
                                class="form-control form-control-lg date-picker"
                                type="text"
                                name="date_naiss"
                                value="{{isset($date_naiss) ? $date_naiss: 'non definie'}}"
                            />
                        </div>
                       <div class="form-group">
                            <label>Genre</label>
                            <div class="d-flex">
                                <div
                                    class="custom-control custom-radio mb-5 mr-20"
                                >
                                    <input
                                        type="radio"
                                        id="customRadio4"                                        
                                        class="custom-control-input"
                                        name="genre"

                                    />
                                    <label
                                        class="custom-control-label weight-400"
                                        for="customRadio4"
                                        >Homme</label
                                    >
                                </div>
                                <div
                                    class="custom-control custom-radio mb-5"
                                >
                                    <input
                                        type="radio"
                                        id="customRadio5"
                                        name="genre"
                                        class="custom-control-input"
                                    />
                                    <label
                                        class="custom-control-label weight-400"
                                        for="customRadio5"
                                        >Femme</label
                                    >
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label>Votre Pays</label>
                            <select
                                class="selectpicker form-control form-control-lg"
                                data-style="btn-outline-secondary btn-lg"
                                title="Not Chosen"
                            >
                                <option>Mali</option>
                                <option>United States</option>
                                <option>India</option>
                                <option>United Kingdom</option>
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label>Adresse</label>
                            <input
                                class="form-control form-control-lg"
                                type="text"
                                name="address"
                                value="{{isset($adresse) ? $adresse: 'nom definie'}}"
                            />
                        </div>
                        <div class="form-group">
                            <label>Votre Mot de Passe</label>
                            <input
                                class="form-control form-control-lg"
                                type="password"
                                name="passwd"
                            />
                        </div>
                        <div class="form-group">
                            <label>Passe Confirmation</label>
                            <input
                                class="form-control form-control-lg"
                                type="password"
                                name="passwd_conf"
                            />
                        </div>
                        <div class="form-group">
                            <label>Numero de Téléphone</label>
                            <input
                                class="form-control form-control-lg"
                                type="text"
                                name="telephone"
                                value="{{isset($telephone) ? $telephone: 'nom definie'}}"
                            />
                        </div>
                        <div class="form-group">
                            <label>Adresse D'identification</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Numero de Carte Visa</label>
                            <input
                                class="form-control form-control-lg"
                                type="text"
                            />
                        </div>
                        <div class="form-group">
                            <label>Paypal ID</label>
                            <input
                                class="form-control form-control-lg"
                                type="text"
                            />
                        </div>
                        <div class="form-group">
                            <div
                                class="custom-control custom-checkbox mb-5"
                            >
                                <input
                                    type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck1-1"
                                />
                                <label
                                    class="custom-control-label weight-400"
                                    for="customCheck1-1"
                                    >J'accepte de recevoir des e-mails de 
                                    notification</label
                                >
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <input
                                type="submit"
                                class="btn btn-primary"
                                value="Mises en jour"
                            />
                        </div>
                    </li>
                    <!-- <li class="weight-500 col-md-6">
                        <h4 class="text-blue h5 mb-20">
                            Edit Social Media links
                        </h4>
                        <div class="form-group">
                            <label>Facebook URL:</label>
                            <input
                                class="form-control form-control-lg"
                                type="text"
                                placeholder="Paste your link here"
                            />
                        </div>
                        <div class="form-group">
                            <label>Twitter URL:</label>
                            <input
                                class="form-control form-control-lg"
                                type="text"
                                placeholder="Paste your link here"
                            />
                        </div>
                        <div class="form-group">
                            <label>Linkedin URL:</label>
                            <input
                                class="form-control form-control-lg"
                                type="text"
                                placeholder="Paste your link here"
                            />
                        </div>
                        <div class="form-group">
                            <label>Instagram URL:</label>
                            <input
                                class="form-control form-control-lg"
                                type="text"
                                placeholder="Paste your link here"
                            />
                        </div>
                        <div class="form-group">
                            <label>Dribbble URL:</label>
                            <input
                                class="form-control form-control-lg"
                                type="text"
                                placeholder="Paste your link here"
                            />
                        </div>
                        <div class="form-group">
                            <label>Dropbox URL:</label>
                            <input
                                class="form-control form-control-lg"
                                type="text"
                                placeholder="Paste your link here"
                            />
                        </div>
                        <div class="form-group">
                            <label>Google-plus URL:</label>
                            <input
                                class="form-control form-control-lg"
                                type="text"
                                placeholder="Paste your link here"
                            />
                        </div>
                        <div class="form-group">
                            <label>Pinterest URL:</label>
                            <input
                                class="form-control form-control-lg"
                                type="text"
                                placeholder="Paste your link here"
                            />
                        </div>
                        <div class="form-group">
                            <label>Skype URL:</label>
                            <input
                                class="form-control form-control-lg"
                                type="text"
                                placeholder="Paste your link here"
                            />
                        </div>
                        <div class="form-group">
                            <label>Vine URL:</label>
                            <input
                                class="form-control form-control-lg"
                                type="text"
                                placeholder="Paste your link here"
                            />
                        </div>
                        <div class="form-group mb-0">
                            <input
                                type="submit"
                                class="btn btn-primary"
                                value="Save & Update"
                            />
                        </div>
                    </li> -->
                </ul>
            </form>
        </div>
    </div>


                        <!-- Setting Tab End -->

    
@endsection