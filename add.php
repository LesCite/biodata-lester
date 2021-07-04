<?php
include 'functions.php';
if(isset($_POST['btn_add_bio_data'])) {
    add_or_update_personal_data();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finial Project</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <style>
    body {
        background: #fff;
        border-radius: 0px !important;
    }

    .card,
    .card-header {
        border-radius: 0px !important;
    }
    .accordion-item {
        background:#f5f5f5
    }
    .accordion-button {
        background:silver !important;
        color:#fff !important;
    }
    </style>
</head>

<body>

    <form method="POST" enctype="multipart/form-data">
        <div class="container mt-3 mb-3">
            <h4 class="text-center">BIO - DATA</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="accordion accordion-flush"  id="">
                        <div class="accordion-item" >
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#" aria-expanded="true"
                                    aria-controls="">
                                    Personal Data
                                </button>
                            </h2>
                            <div id="" class="accordion-collapse collapse show"
                                aria-labelledby="flush-headingOne" data-bs-parent="#">
                                <div class="accordion-body">
                                    <div class="card-body">

                                        <div class="row mb-3">
                                            <div class="col-sm-12">
                                                <input type="file" name="file" class="form-control">
                                                <?=isset($_SESSION['file']) ? '<label class="text-danger">'.$_SESSION['file'].'</label>' : ''; unset($_SESSION['file'])?>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Desired
                                                        Position</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="desired_position" class="form-control">
                                                        <?=isset($_SESSION['desired_position']) ? '<label class="text-danger">'.$_SESSION['desired_position'].'</label>' : ''; unset($_SESSION['desired_position'])?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Name</label>
                                                    <div class="col-md-12">
                                                        <input onkeypress="return /[a-z ]/i.test(event.key)" type="text"
                                                            name="name" class="form-control">
                                                        <?=isset($_SESSION['name']) ? '<label class="text-danger">'.$_SESSION['name'].'</label>' : ''; unset($_SESSION['name'])?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">City Address</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="address" class="form-control">
                                                        <?=isset($_SESSION['address']) ? '<label class="text-danger">'.$_SESSION['address'].'</label>' : ''; unset($_SESSION['address'])?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Provincial
                                                        Address</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="province" class="form-control">
                                                        <?=isset($_SESSION['province']) ? '<label class="text-danger">'.$_SESSION['province'].'</label>' : ''; unset($_SESSION['province'])?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Telephone</label>
                                                    <div class="col-md-12">
                                                        <input type="text" onkeypress="return /[0-9]/i.test(event.key)"
                                                            name="telephone" class="form-control">
                                                        <?=isset($_SESSION['telephone']) ? '<label class="text-danger">'.$_SESSION['telephone'].'</label>' : ''; unset($_SESSION['telephone'])?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Email Address</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="email" class="form-control">
                                                        <?=isset($_SESSION['email']) ? '<label class="text-danger">'.$_SESSION['email'].'</label>' : ''; unset($_SESSION['email'])?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Date of Birth</label>
                                                    <div class="col-md-12">
                                                        <input type="date" name="date_of_birth" class="form-control">
                                                        <?=isset($_SESSION['date_of_birth']) ? '<label class="text-danger">'.$_SESSION['date_of_birth'].'</label>' : ''; unset($_SESSION['date_of_birth'])?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Civil Status</label>
                                                    <div class="col-md-12">
                                                        <select name="civil_status" style="width:100%"
                                                            class="form-control" id="">
                                                            <option value="Single">Single</option>
                                                            <option value="Married">Married</option>
                                                            <option value="Widowed">Widowed</option>
                                                            <option value="Separated">Separated</option>
                                                            <option value="Divorced">Divorced</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Height in CM</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="height"
                                                            onkeypress="return /[0-9]/i.test(event.key)"
                                                            class="form-control">
                                                        <?=isset($_SESSION['height']) ? '<label class="text-danger">'.$_SESSION['height'].'</label>' : ''; unset($_SESSION['height'])?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Religion</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="religion" class="form-control">
                                                        <?=isset($_SESSION['religion']) ? '<label class="text-danger">'.$_SESSION['religion'].'</label>' : ''; unset($_SESSION['religion'])?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Spouse</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="spouse" class="form-control">
                                                        <?=isset($_SESSION['spouse']) ? '<label class="text-danger">'.$_SESSION['spouse'].'</label>' : ''; unset($_SESSION['spouse'])?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Children/s</label>
                                                    <div class="col-md-12">
                                                        <select style="width:100%" name="children[]"
                                                            class="form-control" multiple="multiple"></select>
                                                        <?=isset($_SESSION['children']) ? '<label class="text-danger">'.$_SESSION['children'].'</label>' : ''; unset($_SESSION['children'])?>
                                                    </div>
                                                </div>


                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Father's Name</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="father_name" class="form-control">
                                                        <?=isset($_SESSION['father_name']) ? '<label class="text-danger">'.$_SESSION['father_name'].'</label>' : ''; unset($_SESSION['father_name'])?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Mother's Name</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="mother_name" class="form-control">
                                                        <?=isset($_SESSION['mother_name']) ? '<label class="text-danger">'.$_SESSION['mother_name'].'</label>' : ''; unset($_SESSION['mother_name'])?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Date</label>
                                                    <div class="col-md-12">
                                                        <input type="text" readonly value="<?=date('m/d/Y')?>"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Gender</label>
                                                    <div class="col-md-12">
                                                        <select name="gender" style="width:100%" class="form-control"
                                                            id="">
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Cellphone</label>
                                                    <div class="col-md-12">
                                                        <input type="text" onkeypress="return /[0-9]/i.test(event.key)"
                                                            name="cellphone" class="form-control">
                                                        <?=isset($_SESSION['cellphone']) ? '<label class="text-danger">'.$_SESSION['cellphone'].'</label>' : ''; unset($_SESSION['cellphone'])?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Place of
                                                        Birth</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="place_of_birth" class="form-control">
                                                        <?=isset($_SESSION['place_of_birth']) ? '<label class="text-danger">'.$_SESSION['place_of_birth'].'</label>' : ''; unset($_SESSION['place_of_birth'])?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Citizenship</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="citizenship" class="form-control">
                                                        <?=isset($_SESSION['citizenship']) ? '<label class="text-danger">'.$_SESSION['citizenship'].'</label>' : ''; unset($_SESSION['citizenship'])?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Weight in KG</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="weight"
                                                            onkeypress="return /[0-9]/i.test(event.key)"
                                                            class="form-control">
                                                        <?=isset($_SESSION['weight']) ? '<label class="text-danger">'.$_SESSION['weight'].'</label>' : ''; unset($_SESSION['weight'])?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Spouse
                                                        Occupation</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="spouse_occupation"
                                                            class="form-control">
                                                        <?=isset($_SESSION['spouse_occupation']) ? '<label class="text-danger">'.$_SESSION['spouse_occupation'].'</label>' : ''; unset($_SESSION['spouse_occupation'])?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Children's Date of
                                                        Birth</label>
                                                    <div class="col-md-12">
                                                        <select style="width:100%" name="children_date_of_birth[]"
                                                            class="form-control" multiple="multiple"></select>
                                                        <?=isset($_SESSION['children_date_of_birth']) ? '<label class="text-danger">'.$_SESSION['children_date_of_birth'].'</label>' : ''; unset($_SESSION['children_date_of_birth'])?>

                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Father's
                                                        Occupation</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="father_occupation"
                                                            class="form-control">
                                                        <?=isset($_SESSION['father_occupation']) ? '<label class="text-danger">'.$_SESSION['father_occupation'].'</label>' : ''; unset($_SESSION['father_occupation'])?>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Mother's
                                                        Occupation</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="mother_occupation"
                                                            class="form-control">
                                                        <?=isset($_SESSION['mother_occupation']) ? '<label class="text-danger">'.$_SESSION['mother_occupation'].'</label>' : ''; unset($_SESSION['mother_occupation'])?>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="row mb-3">
                                                    <label for="" class="col-sm-12 col-form-label">Language or Dialect
                                                        spoken
                                                        and written</label>
                                                    <div class="col-sm-12">
                                                        <select style="width:100%" name="language[]"
                                                            class="form-control" multiple="multiple"></select>
                                                    </div>
                                                </div>


                                                <div class="row mb-3">
                                                    <label for="" class="col-sm-12 col-form-label">Person to be
                                                        contacted in
                                                        case of emergency</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" name="person_emergency" class="form-control">
                                                        <?=isset($_SESSION['person_emergency']) ? '<label class="text-danger">'.$_SESSION['person_emergency'].'</label>' : ''; unset($_SESSION['person_emergency'])?>
                                                    </div>
                                                </div>


                                                <div class="row mb-3">
                                                    <label for="" class="col-sm-12 col-form-label">His or her address
                                                        and
                                                        contact</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" name="person_emergency_details"
                                                            class="form-control">
                                                        <?=isset($_SESSION['person_emergency_details']) ? '<label class="text-danger">'.$_SESSION['person_emergency_details'].'</label>' : ''; unset($_SESSION['person_emergency_details'])?>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="true"
                                    aria-controls="flush-collapseTwo">
                                    Educational Background
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse show"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#">
                                <div class="accordion-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Elementary</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="elementary" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">High School</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="high_school" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">College</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="college" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Degree
                                                        Received</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="degree_received" class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Year
                                                        Graduated</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="elementary_year_graduate"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Year
                                                        Graduated</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="high_school_year_graduate"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Year
                                                        Graduated</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="college_year_graduate"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Special
                                                        Skills</label>
                                                    <div class="col-md-12">
                                                        <select style="width:100%" name="special_skills[]"
                                                            class="form-control" multiple="multiple"></select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="accordion accordion-flush" id="">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#" aria-expanded="true"
                                    aria-controls="">
                                    Employment Record
                                </button>
                            </h2>
                            <div id="" class="accordion-collapse collapse show"
                                aria-labelledby="" data-bs-parent="#">
                                <div class="accordion-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label for="" class="col-sm-12 col-form-label">Company Name</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" name="company_name_1" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Position</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="position_1" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">


                                            <div class="col md-6">
                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="row mb-3">
                                                            <label for="" class="col-md-12 col-form-label">From</label>
                                                            <div class="col-md-12">
                                                                <input type="date" name="from_1" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="row mb-3">
                                                            <label for="" class="col-md-12 col-form-label">To</label>
                                                            <div class="col-md-12">
                                                                <input type="date" name="to_1" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label for="" class="col-sm-12 col-form-label">Company Name</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" name="company_name_2" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Position</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="position_2" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col md-6">
                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="row mb-3">
                                                            <label for="" class="col-md-12 col-form-label">From</label>
                                                            <div class="col-md-12">
                                                                <input type="date" name="from_2" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="row mb-3">
                                                            <label for="" class="col-md-12 col-form-label">To</label>
                                                            <div class="col-md-12">
                                                                <input type="date" name="to_2" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="true"
                                    aria-controls="flush-collapseFour">
                                    Character Reference
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse show"
                                aria-labelledby="flush-collapseFour" data-bs-parent="#">
                                <div class="accordion-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Name</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="c_name_1"
                                                            onkeypress="return /[a-z ]/i.test(event.key)"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Position</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="c_position_1" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Name</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="c_name_2"
                                                            onkeypress="return /[a-z ]/i.test(event.key)"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Position</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="c_position_2" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Company</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="c_company_1" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Contact No</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="c_contact_no_1"
                                                            onkeypress="return /[0-9]/i.test(event.key)"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Company</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="c_company_2" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="" class="col-md-12 col-form-label">Contact No</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="c_contact_no_2"
                                                            onkeypress="return /[0-9]/i.test(event.key)"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="row">
                            <div class="col-md-12">
                                <div class="mt-2">
                                    <button type="submit" name="btn_add_bio_data" style="width:100%;border-radius:0px;background:silver !important"
                                        class="btn btn-md btn-block btn-flat text-white" >Submit</button>
                                </div>
                            </div>
                        </div>
                </div>
                
            </div>

        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/select2.min.js"></script>
    </form>
</body>


<script>
$("select").select2({
    tags: true
});
</script>

</html>