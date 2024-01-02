@extends('back.layout.pages-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'Les Artisans')
@section('content')

    {{-- <div class="mobile-menu-overlay"></div> --}}

    {{-- <div class="main-container"> --}}
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
            
                <!-- Simple Datatable start -->
                {{-- <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Data Table Simple</h4>
                        <p class="mb-0">
                            you can find more options
                            <a
                                class="text-primary"
                                href="https://datatables.net/"
                                target="_blank"
                                >Click Here</a
                            >
                        </p>
                    </div>
                    <div class="pb-20">
                        <table class="data-table table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">Name</th>
                                    <th>Age</th>
                                    <th>Office</th>
                                    <th>Address</th>
                                    <th>Start Date</th>
                                    <th class="datatable-nosort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-plus">Gloria F. Mead</td>
                                    <td>25</td>
                                    <td>Sagittarius</td>
                                    <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                    <td>29-03-2018</td>
                                    <td>
                                        <div class="dropdown">
                                            <a
                                                class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#"
                                                role="button"
                                                data-toggle="dropdown"
                                            >
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                            >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-eye"></i> View</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-edit2"></i> Edit</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-delete-3"></i> Delete</a
                                                >
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>
                                        <div class="dropdown">
                                            <a
                                                class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#"
                                                role="button"
                                                data-toggle="dropdown"
                                            >
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                            >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-eye"></i> View</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-edit2"></i> Edit</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-delete-3"></i> Delete</a
                                                >
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>20</td>
                                    <td>Gemini</td>
                                    <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                    <td>29-03-2018</td>
                                    <td>
                                        <div class="dropdown">
                                            <a
                                                class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#"
                                                role="button"
                                                data-toggle="dropdown"
                                            >
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                            >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-eye"></i> View</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-edit2"></i> Edit</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-delete-3"></i> Delete</a
                                                >
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Sagittarius</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>
                                        <div class="dropdown">
                                            <a
                                                class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#"
                                                role="button"
                                                data-toggle="dropdown"
                                            >
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                            >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-eye"></i> View</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-edit2"></i> Edit</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-delete-3"></i> Delete</a
                                                >
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>25</td>
                                    <td>Gemini</td>
                                    <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                    <td>29-03-2018</td>
                                    <td>
                                        <div class="dropdown">
                                            <a
                                                class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#"
                                                role="button"
                                                data-toggle="dropdown"
                                            >
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                            >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-eye"></i> View</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-edit2"></i> Edit</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-delete-3"></i> Delete</a
                                                >
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>20</td>
                                    <td>Sagittarius</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>
                                        <div class="dropdown">
                                            <a
                                                class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#"
                                                role="button"
                                                data-toggle="dropdown"
                                            >
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                            >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-eye"></i> View</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-edit2"></i> Edit</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-delete-3"></i> Delete</a
                                                >
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>18</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>
                                        <div class="dropdown">
                                            <a
                                                class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#"
                                                role="button"
                                                data-toggle="dropdown"
                                            >
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                            >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-eye"></i> View</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-edit2"></i> Edit</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-delete-3"></i> Delete</a
                                                >
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Sagittarius</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>
                                        <div class="dropdown">
                                            <a
                                                class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#"
                                                role="button"
                                                data-toggle="dropdown"
                                            >
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                            >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-eye"></i> View</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-edit2"></i> Edit</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-delete-3"></i> Delete</a
                                                >
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Sagittarius</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>
                                        <div class="dropdown">
                                            <a
                                                class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#"
                                                role="button"
                                                data-toggle="dropdown"
                                            >
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                            >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-eye"></i> View</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-edit2"></i> Edit</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-delete-3"></i> Delete</a
                                                >
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>
                                        <div class="dropdown">
                                            <a
                                                class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#"
                                                role="button"
                                                data-toggle="dropdown"
                                            >
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                            >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-eye"></i> View</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-edit2"></i> Edit</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-delete-3"></i> Delete</a
                                                >
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>
                                        <div class="dropdown">
                                            <a
                                                class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#"
                                                role="button"
                                                data-toggle="dropdown"
                                            >
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                            >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-eye"></i> View</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-edit2"></i> Edit</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-delete-3"></i> Delete</a
                                                >
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>
                                        <div class="dropdown">
                                            <a
                                                class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#"
                                                role="button"
                                                data-toggle="dropdown"
                                            >
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                            >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-eye"></i> View</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-edit2"></i> Edit</a
                                                >
                                                <a class="dropdown-item" href="#"
                                                    ><i class="dw dw-delete-3"></i> Delete</a
                                                >
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> --}}
                <!-- Simple Datatable End -->

                <!-- multiple select row Datatable start -->
                {{-- <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Data Table with multiple select row</h4>
                    </div>
                    <div class="pb-20">
                        <table class="data-table table hover multiple-select-row nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">Name</th>
                                    <th>Age</th>
                                    <th>Office</th>
                                    <th>Address</th>
                                    <th>Start Date</th>
                                    <th>Salart</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-plus">Gloria F. Mead</td>
                                    <td>25</td>
                                    <td>Sagittarius</td>
                                    <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>20</td>
                                    <td>Gemini</td>
                                    <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Sagittarius</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>25</td>
                                    <td>Gemini</td>
                                    <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>20</td>
                                    <td>Sagittarius</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>18</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Sagittarius</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Sagittarius</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Andrea J. Cagle</td>
                                    <td>30</td>
                                    <td>Gemini</td>
                                    <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                    <td>29-03-2018</td>
                                    <td>$162,700</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> --}}
                <!-- multiple select row Datatable End -->

                <!-- Checkbox select Datatable start -->
                {{-- <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Data Table with Checckbox select</h4>
                    </div>
                    <div class="pb-20">
                        <table class="checkbox-datatable table nowrap">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="dt-checkbox">
                                            <input
                                                type="checkbox"
                                                name="select_all"
                                                value="1"
                                                id="example-select-all"
                                            />
                                            <span class="dt-checkbox-label"></span>
                                        </div>
                                    </th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Tokyo</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Angelica Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>2009/10/09</td>
                                    <td>$1,200,000</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>2012/10/13</td>
                                    <td>$132,000</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>2011/06/07</td>
                                    <td>$206,850</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>2011/12/12</td>
                                    <td>$106,450</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Dai Rios</td>
                                    <td>Personnel Lead</td>
                                    <td>Edinburgh</td>
                                    <td>2012/09/26</td>
                                    <td>$217,500</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Doris Wilder</td>
                                    <td>Sales Assistant</td>
                                    <td>Sidney</td>
                                    <td>2010/09/20</td>
                                    <td>$85,600</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Fiona Green</td>
                                    <td>Chief Operating Officer (COO)</td>
                                    <td>San Francisco</td>
                                    <td>2010/03/11</td>
                                    <td>$850,000</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Gavin Cortez</td>
                                    <td>Team Leader</td>
                                    <td>San Francisco</td>
                                    <td>2008/10/26</td>
                                    <td>$235,500</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>2012/08/06</td>
                                    <td>$137,500</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Hope Fuentes</td>
                                    <td>Secretary</td>
                                    <td>San Francisco</td>
                                    <td>2010/02/12</td>
                                    <td>$109,850</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>2008/12/19</td>
                                    <td>$90,560</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> --}}
                <!-- Checkbox select Datatable End -->

                <!-- Export Datatable start -->
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Table de Donnés des Artisans</h4>
                    </div>
                    <div class="pb-20">
                        <table
                            class="table hover multiple-select-row data-table-export nowrap "
                        >
                            <thead>
                                <tr>
                                    
                                    <th class="table-plus datatable-nosort">Nom</th>
                                    <th>Age</th>
                                    <th>Genre</th>
                                    <th>Adresse</th>
                                    <th>Date de Creation</th>
                                    <th>Téléphone</th>
                                    <th>qte Article</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($artisans as $artisan)
                                
                                    <tr>
                                       
                                        <td class="table-plus">{{ $artisan->nom_artisan }}</td>
                                        <td>{{ isset($artisan->date_naiss_artisan)? $artisan->date_naiss_artisan : 'nom definie' }}</td>
                                        <td>{{ $artisan->genre_artisan }}</td>
                                        <td>{{ $artisan->adresse_artisan }}</td>
                                        <td>{{ $artisan->created_at }}</td>
                                        <td>{{ $artisan->telephone_artisan }}</td>
                                        <td>{{ $artisan->articles->count() }}</td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="{{route('home.showArtisan', ['artisan'=>$artisan->id])}}" data-color="#265ed7"
                                                    ><i class="icon-copy dw dw-edit2 mx-3"></i
                                                ></a>
                                                <form action="{{route('home.destroy', ['artisan'=>$artisan->id])}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" data-color="#e95959">
                                                        <i class="icon-copy dw dw-delete-3"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                
                                @empty
                                <tr>
                                    <td class="table-plus">Vide</td>
                                    <td>Vide</td>
                                    <td>Vide</td>
                                    <td>Vide</td>
                                    <td>Vide</td>
                                    <td>Vide</td>
                                </tr>
                                @endforelse
                             
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Export Datatable End -->
            </div>
            
        </div>
    {{-- </div>	 --}}
   <!-- js -->
   <script src="/back/vendors/scripts/core.js"></script>
   <script src="/back/vendors/scripts/script.min.js"></script>
   <script src="/back/vendors/scripts/process.js"></script>
   <script src="/back/vendors/scripts/layout-settings.js"></script>
   <!-- switchery js -->
   <script src="/back/src/plugins/switchery/switchery.min.js"></script>
   <!-- bootstrap-tagsinput js -->
   <script src="/back/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
   <!-- bootstrap-touchspin js -->
   
   <script src="/back/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
   <script src="/back/vendors/scripts/advanced-components.js"></script>
   <script src="/back/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
       <script src="/back/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
       <script src="/back/src/plugins/datatables/js/buttons.print.min.js"></script>
       <script src="/back/src/plugins/datatables/js/buttons.html5.min.js"></script>
       <script src="/back/src/plugins/datatables/js/buttons.flash.min.js"></script>
       <script src="/back/src/plugins/datatables/js/pdfmake.min.js"></script>
       <script src="/back/src/plugins/datatables/js/vfs_fonts.js"></script>
       <!-- Datatable Setting js -->
       <script src="/back/vendors/scripts/datatable-setting.js"></script>


@endsection
