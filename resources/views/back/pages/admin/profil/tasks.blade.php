@extends('back.pages.admin.profil')
@section('contentProfil')
   
    <!-- Tasks Tab start -->
    @section('contentTasks')
        <!-- Tasks Tab start -->
        <div class="tab-pane fade" id="tasks" role="tabpanel">
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
        </div>
        <!-- Tasks Tab End -->
    @endsection
    <!-- Tasks Tab End -->

    
@endsection