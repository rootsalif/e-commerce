@extends('back.pages.admin.profil')
@section('contentProfil')
   
    <!-- Setting Tab start -->
    @section('contentEdit')
        <!-- Setting Tab start -->
        <div
            class="tab-pane fade height-100-p"
            id="setting"
            role="tabpanel"
        >
            <div class="profile-setting">
                <form>
                    <ul class="profile-edit-list row">
                        <li class="weight-500 col-md-6">
                            <h4 class="text-blue h5 mb-20">
                                Edit Your Personal Setting
                            </h4>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input
                                    class="form-control form-control-lg"
                                    type="text"
                                />
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input
                                    class="form-control form-control-lg"
                                    type="text"
                                />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input
                                    class="form-control form-control-lg"
                                    type="email"
                                />
                            </div>
                            <div class="form-group">
                                <label>Date of birth</label>
                                <input
                                    class="form-control form-control-lg date-picker"
                                    type="text"
                                />
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <div class="d-flex">
                                    <div
                                        class="custom-control custom-radio mb-5 mr-20"
                                    >
                                        <input
                                            type="radio"
                                            id="customRadio4"
                                            name="customRadio"
                                            class="custom-control-input"
                                        />
                                        <label
                                            class="custom-control-label weight-400"
                                            for="customRadio4"
                                            >Male</label
                                        >
                                    </div>
                                    <div
                                        class="custom-control custom-radio mb-5"
                                    >
                                        <input
                                            type="radio"
                                            id="customRadio5"
                                            name="customRadio"
                                            class="custom-control-input"
                                        />
                                        <label
                                            class="custom-control-label weight-400"
                                            for="customRadio5"
                                            >Female</label
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Country</label>
                                <select
                                    class="selectpicker form-control form-control-lg"
                                    data-style="btn-outline-secondary btn-lg"
                                    title="Not Chosen"
                                >
                                    <option>United States</option>
                                    <option>India</option>
                                    <option>United Kingdom</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>State/Province/Region</label>
                                <input
                                    class="form-control form-control-lg"
                                    type="text"
                                />
                            </div>
                            <div class="form-group">
                                <label>Postal Code</label>
                                <input
                                    class="form-control form-control-lg"
                                    type="text"
                                />
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input
                                    class="form-control form-control-lg"
                                    type="text"
                                />
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Visa Card Number</label>
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
                                        >I agree to receive notification
                                        emails</label
                                    >
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <input
                                    type="submit"
                                    class="btn btn-primary"
                                    value="Update Information"
                                />
                            </div>
                        </li>
                        <li class="weight-500 col-md-6">
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
                        </li>
                    </ul>
                </form>
            </div>
        </div>
         <!-- Setting Tab End -->

    @endsection
    <!-- Setting Tab End -->

    
@endsection