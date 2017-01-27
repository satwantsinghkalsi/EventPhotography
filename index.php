<?
session_start();

?>
<?php require 'inc/template_header_start.php'; ?>

<link rel="stylesheet" href="assets/bootstrap/css/awesome-bootstrap-checkbox.css" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"/>
<link rel="stylesheet" href="assets/select2.css">
<link rel="stylesheet" href="assets/plugins.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="assets/bootstrap-select.min.css">

<style>
    .navbar-inverse {
        background: #262626 !important;
    }

    #searchForm {
        position: absolute;
        top: 40%;
    }

    .btn {
        border-radius: 10px !important;
    }

    .btn.btn-rounded {
        border-radius: 20px;
    }

    .btn-primary {
        width: auto !important;
        background: #F27802 !important;
    }

    #header-modal {
        background-color: #F27802;
        color: #fff;
    }

    #header-modal > .modal-header {

        font-family: "Comic Sans MS";
        font-size: xx-large;
        text-align: center;
        padding: 25px;
    }

    .modal-footer {
        border-top: none !important;
        padding: 0em 1em 1em 1em !important;
    }

    .modal-header {
        border-bottom: none !important;
    }

    #header-modal > .btn-primary:hover {
        background-color: #F27802 !important;
    }

    .modal-dialog {
        margin-top: 10px;
    }

    .modal-body {
        padding: 0 !important;
    }

    .vertical-alignment-helper {
        display: table;
        height: 100%;
        width: 100%;
    }

    .vertical-align-center {
        /* To center vertically */
        display: table-cell;
        vertical-align: middle;
    }

    .modal-content {
        /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
        width: inherit;
        height: inherit;
        /* To center horizontally */
        margin: 0 auto;
    }

    #header-modal > .modal-body {
        padding: 70px !important;
    }

    .progress {
        margin-bottom: 20px;
        overflow: hidden;
        background-color: #f5f5f5;
        border-radius: 4px;
    }

    .progress-mini {
        height: 5px !important;
        width: 50% !important;
        margin-top: auto;
        margin-bottom: auto;
        text-align: center;
    }

    .progress-bar-info {
        border-radius: 2px !important;
        box-shadow: none !important;
        background-color: #0187db !important;
    }

    .progress-bar-container {
        align-items: center;
        justify-content: center;
        display: flex;
        padding-top: 2em;
    }

    .header {
        text-align: center;
        margin: auto;

        width: 60%;
    }

    h3 {
        font: 400 1.5em Roboto, Arial, Helvetica !important;
    }

    .list-group-item {
        border-color: #eae9e9 !important;
    }

    .back {
        border: none !important;
        background-color: #fff !important;
        color: #F27802 !important;
        float: left !important;
    }

    .radio {
        padding-left: 3em !important;
        padding-top: 1.5em;
        padding-bottom: 2em;
    }

    #others-label {
        width: 100% !important;
    }

    #modal6 > .modal-body > .content > .container {
        padding: 2em !important;
        width: 100% !important;
    }
    #modal7 > .modal-body > .content > .container {
        padding: 2em !important;
        width: 100% !important;
    }
    #modal9 > .modal-body > .content > .container {
        padding: 2em !important;
    }

    #modal9 > .modal-body > .content > .container > .row {
        padding: 1em !important;
    }

    #event-day {
        padding: 1em !important;
    }

    #modal8 > .modal-body > .content {
        padding-bottom: 3em;
    }

    .progress-bar {
        -webkit-transition: width 2.5s ease !important;
        transition: width 2.5s ease !important;
    }

    .modal-footer > .failure > span {
        display: table;
        margin: 0 auto;
        color: red;
    }

    .failure > span {
        display: table;
        margin: 0 auto;
        color: red;
        padding: 0.5em;
    }

    #day,#num-photographer {
        padding-left: 1em;
        padding-right: 1em;
    }

    #timehours,#photo-details {
        padding-top: 1em;
        padding-bottom: 1em;
    }

    #createAccount > .vertical-alignment-helper > .modal-dialog > .modal-content {
        width: 80% !important;
    }

    .progress > .progress-bar-success {
        background-color: #ec9c4f !important;
    }

    .portlet.box.blue > .portlet-title {
        background-color: #F27802 !important;
    }

    .green.btn:hover, .green.btn:focus, .green.btn:active, .green.btn.active {
        background-color: #F27802 !important;
    }

    .blue.btn:hover, .blue.btn:focus, .blue.btn:active, .blue.btn.active {
        background-color: #F27802 !important;
    }

    .error {
        border: 2px solid red;
        background-color: #f9ecec;
    }
    #num-photographer>.btn-default:hover{
        background-color: #fff!important;
    }
    #num-photographer> .btn-default:active {
        background-color: #fff!important;
    }
    #photo-details>.col-md-6>.btn-default:hover{
        background-color: #fff!important;
    }
    #photo-details>.col-md-6>.btn-default:active {
        background-color: #fff!important;
    }

</style>
<?php require 'inc/template_header_end.php';?>

<div id="home">
    <!-- Slider Starts -->
    <div id="myCarousel" class="carousel slide banner-slider animated bounceInDown" data-ride="carousel">
        <div class="carousel-inner">

            <!-- Item 1 -->
            <div class="item active">
                <img src="images/back1.jpg" alt="banner">
            </div>
            <!-- #Item 1 -->

            <!-- Item 1 -->
            <div class="item">
                <img src="images/back2.jpg" alt="banner">
            </div>
            <!-- #Item 1 -->

            <!-- Item 1 -->
            <div class="item">
                <img src="images/back3.jpg" alt="banner">
            </div>
            <!-- #Item 1 -->

            <!-- Item 1 -->
            <div class="item">
                <img src="images/back4.jpg" alt="banner">
            </div>
            <!-- #Item 1 -->
        </div>

        <form class="form-inline" id="searchForm">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-4 col-md-10 col-md-offset-4">
                        <input id="searchBox" type="search" class="form-control" size="50"
                               placeholder="What event are you looking  for?" required="">
                        <button id="search" type="button" class="btn btn-sm btn-danger">Get Started</button>

                    </div>
                </div>

            </div>
        </form>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span></span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span></i></span></a>
    </div>
    <!-- #Slider Ends -->
    <!--<form  type="hidden"  name="qform" id="questionsform" action="customerHome.php" method="POST">-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         data-backdrop="static" data-keyboard="false">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog vertical-align-center">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" id="header-modal">
                        <div id="title" class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            panodo
                        </div>
                        <div class="modal-body">
                            <h2>
                                We'll ask you a few questions so we can bring you the right pros.
                            </h2>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick='$("#header-modal").hide();$("#modal1")
                    .show();$("#modal2").show();
                    ;'>Next
                            </button>
                        </div>
                    </div>
                    <div class="modal-content question" id="modal1" style="display:none;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <div class="progress-bar-container">
                                <div class="progress progress-mini">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                </div>
                            </div>

                        </div>
                        <div id="modal2" class="question" style="display: none;">
                            <div class="modal-body">
                                <div class="header">
                                    <h3>What kind of an event is it?</h3>
                                </div>
                                <div class="content">
                                    <div class="list-group">
                                        <div class="list-group-item radio radio-primary">
                                            <input class="2" type="radio" name="radios" id="radio1" value="birthday">
                                            <label for="radio1">Birthday</label>
                                        </div>
                                        <div class="list-group-item radio radio-primary">
                                            <input class="2" type="radio" name="radios" id="radio2" value="corporate">
                                            <label for="radio2">Corporate</label>
                                        </div>
                                        <div class="list-group-item radio radio-primary">
                                            <input class="2" type="radio" name="radios" id="radio3" value="wedding">
                                            <label for="radio3">Wedding</label>
                                        </div>
                                        <div class="list-group-item radio radio-primary">
                                            <input class="2" type="radio" name="radios" id="radio4" value="lifeevent">
                                            <label for="radio4">Life Event</label>
                                        </div>
                                        <div class="list-group-item radio radio-primary">
                                            <input class="2" type="radio" name="radios" id="radio5"
                                                   value="familyreunion">
                                            <label for="radio5">Family Reunion</label>
                                        </div>
                                        <div class="list-group-item radio radio-primary">
                                            <input class="2" type="radio" name="radios" id="radio6"
                                                   value="childrenparty">
                                            <label for="radio6">Children Party</label>
                                        </div>
                                        <div class="list-group-item radio radio-primary">
                                            <input class="2" type="radio" name="radios" id="radio7" value="others">
                                            <label id="others-label" for="radio7">
                                                <input type="text" id="others2" class="form-control" placeholder="Others
                                        (Please describe)
">
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <div class="failure"><span></span></div>
                                <button type="button" class="btn btn-default back"
                                        onclick='$("#header-modal").show();$("#modal1").hide();$("#modal2").hide();'><i
                                        class="fa fa-angle-left" aria-hidden="true"></i>Back
                                </button>
                                <button type="button" class="btn btn-primary" onclick='showNext2(2)'>Next</button>
                            </div>
                        </div>
                        <div id="modal3" class="question" style="display: none;">
                            <div class="modal-body">
                                <div class="header">
                                    <h3>How many people will be attending?</h3>
                                </div>

                                <div class="content">
                                    <div class="list-group">
                                        <div class="list-group-item radio radio-primary">
                                            <input class="3" type="radio" name="peoples" id="people1" value="people1">
                                            <label for="people1">25 people or fewer</label>
                                        </div>
                                        <div class="list-group-item radio radio-primary">
                                            <input class="3" type="radio" name="peoples" id="people2" value="people2">
                                            <label for="people2">25-50 people</label>
                                        </div>
                                        <div class="list-group-item radio radio-primary">
                                            <input class="3" type="radio" name="peoples" id="people3" value="people3">
                                            <label for="people3">51-100 people</label>
                                        </div>
                                        <div class="list-group-item radio radio-primary">
                                            <input class="3" type="radio" name="peoples" id="people4" value="people4">
                                            <label for="people4">100-150 people</label>
                                        </div>
                                        <div class="list-group-item radio radio-primary">
                                            <input class="3" type="radio" name="peoples" id="people5" value="people5">
                                            <label for="people5">150-200 people</label>
                                        </div>
                                        <div class="list-group-item radio radio-primary">
                                            <input class="3" type="radio" name="peoples" id="people7" value="others">
                                            <label id="others-label" for="radio7">
                                                <input type="text" id="others3" class="form-control" placeholder="Others
                                        (Please describe)
">
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="failure"><span></span></div>
                                <button type="button" class="btn btn-default back" onclick='showBack(3);'><i
                                        class="fa fa-angle-left" aria-hidden="true"></i>Back
                                </button>
                                <button type="button" class="btn btn-primary" onclick='showNext3(3);'>Next</button>
                            </div>
                        </div>
                        <div id="modal4" class="question" style="display: none">
                            <div class="modal-body">
                                <div class="header">
                                    <h3>Is the event Indoors or Outdoors?</h3>
                                </div>

                                <div class="content">
                                    <div class="list-group">
                                        <div class="list-group-item radio radio-primary">
                                            <input class="4" type="radio" name="locations" id="location1"
                                                   value="location1">
                                            <label for="location1">Indoors</label>
                                        </div>
                                        <div class="list-group-item radio radio-primary">
                                            <input class="4" type="radio" name="locations" id="location2"
                                                   value="location2">
                                            <label for="location2">Outdoors</label>
                                        </div>
                                        <div class="list-group-item radio radio-primary">
                                            <input class="4" type="radio" name="locations" id="location3"
                                                   value="location3">
                                            <label for="location3">Not sure yet?</label>
                                        </div>
                                        <div class="list-group-item radio radio-primary">
                                            <input class="4" type="radio" name="locations" id="location4"
                                                   value="others">
                                            <label id="others-label" for="location4">
                                                <input type="text" id="others4" class="form-control" placeholder="Others
                                        (Please describe)
">
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="failure"><span></span></div>
                                <button type="button" class="btn btn-default back" onclick='showBack(4);'><i
                                        class="fa fa-angle-left" aria-hidden="true"></i>Back
                                </button>
                                <button type="button" class="btn btn-primary" onclick='showNext4(4);'>Next</button>
                            </div>
                        </div>
                        <div id="modal5" class="question" style="display: none;">
                            <div class="modal-body">
                                <div class="header">
                                    <h3>What is your estimated budget for the photographer's services and images?</h3>
                                </div>

                                <div class="content">
                                    <div class="list-group">
                                        <div class="list-group-item radio radio-primary">
                                            <input class="5" type="radio" name="amounts" id="amount1" value="amount1">
                                            <label for="amount1">Over $2,000</label>
                                        </div>
                                        <div class="list-group-item radio radio-primary">
                                            <input class="5" type="radio" name="amounts" id="amount2" value="amount2">
                                            <label for="amount2">$1,000 - $2,000</label>
                                        </div>
                                        <div class="list-group-item radio radio-primary">
                                            <input class="5" type="radio" name="amounts" id="amount3" value="amount3">
                                            <label for="amount3">$500 - $1,000</label>
                                        </div>
                                        <div class="list-group-item radio radio-primary">
                                            <input class="5" type="radio" name="amounts" id="amount4" value="option4">
                                            <label for="amount4">$250 - $500</label>
                                        </div>
                                        <div class="list-group-item radio radio-primary">
                                            <input class="5" type="radio" name="amounts" id="amount5" value="others">
                                            <label id="others-label" for="amount5">
                                                <input type="text" id="others5" class="form-control" placeholder="(Amount in
                                        Dollars($))
">
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="failure"><span></span></div>
                                <button type="button" class="btn btn-default back" onclick='showBack(5);'><i
                                        class="fa fa-angle-left" aria-hidden="true"></i>Back
                                </button>
                                <button type="button" class="btn btn-primary" onclick='showNext5(5);'>Next</button>
                            </div>
                        </div>
                        <div id="modal6" class="question" style="display:none;">
                            <div class="modal-body">
                                <div class="header">
                                    <h3>When do you need event photography??</h3>
                                </div>

                                <div class="content">
                                    <div class="container">
                                        <div class="row" id="day">
                                            <label for="event-date">Event Date</label>
                                            <input type="text" id="event-date" class="form-control"
                                                   placeholder="Click to select date" readonly="readonly">
                                            <div class="failure"><span></span></div>
                                        </div>
                                        <div class="row" id="timehours">
                                            <div class="col-md-6" id="time">
                                                <label for="event-time">At what time?</label>
                                                <input type="time" id="event-time" class="form-control">
                                                <div class="failure"><span></span></div>
                                            </div>
                                            <div class="col-md-6" id="duration">
                                                <label for="event-duration">For how many hours</label>
                                                <input type="text" id="event-duration" class="form-control"
                                                       placeholder="Ex '4'">
                                                <div class="failure"><span></span></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">

                                <button type="button" class="btn btn-default back" onclick='showBack(6);'><i
                                        class="fa fa-angle-left" aria-hidden="true"></i>Back
                                </button>
                                <button type="button" class="btn btn-primary" onclick='showNext6(6);'>Next</button>
                            </div>
                        </div>
                        <!--  <div id="modal7" class="question" style="display:none;">
                              <div class="modal-body">
                                  <div class="header">
                                      <h3>Anything else the event photographer should know?</h3>
                                  </div>

                                  <div class="content">
                                      <div class="list-group">
                                          <div class="list-group-item radio radio-primary">
                                              <input type="radio" name="extra" id="no" value="no">
                                              <label for="no">
                                                  No
                                              </label>
                                          </div>
                                          <div class="list-group-item radio radio-primary">
                                              <input type="radio" name="extra" id="yes" value="yes">
                                              <label for="yes">
                                                  Yes
                                              </label>

                                          </div>
                                      </div>
                                      <div id="extras"style="display: none" class="list-group-item radio radio-primary">
                                          <textarea class="form-control" rows="5" placeholder="Tell us more" ></textarea>
                                          <div class="failure"><span></span></div>
                                      </div>


                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <div class="failure"><span></span></div>
                                  <button type="button" class="btn btn-default back" onclick='showBack(7)'><i class="fa fa-angle-left" aria-hidden="true"></i>Back</button>
                                  <button type="button" class="btn btn-primary" onclick='showNext7(7);'>Next</button>
                              </div>
                          </div>-->
                        <div id="modal7" class="question" style="display:none;">
                            <div class="modal-body">
                                <div class="header">
                                    <h3>Few details about the order?</h3>
                                </div>

                                <div class="content">
                                    <div class="container">
                                        <div class="row" id="num-photographer">
                                            <label for="photographers">Number of Photographers?</label>
                                            <select id="photographers" class="selectpicker" title="Select ">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>

                                            <!--<label for="photographers">Number of Photographers?</label>
                                            <select class="dropdown-menu" id="photographers">
                                                <option value="0">Select a value</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>-->
                                           
                                        </div>
                                        <div class="row" id="photo-details">
                                            <div class="col-md-6">
                                                <label for="num-photos">Number of Photos?</label>
                                                <select class="selectpicker" id="num-photos" title="Select">
                                                    <option value="0">Select a value</option>
                                                    <option value="100">100</option>
                                                    <option value="200">200</option>
                                                    <option value="400">400</option>
                                                    <option value="600">600</option>
                                                </select>

                                            </div>
                                            <div class="col-md-6">
                                                <label for="photo-size">Size of Photos?</label>
                                                <select class="selectpicker" id="photo-size" title="Select">
                                                    <option value="0">Print Size(inches) Image Size(pixels)</option>
                                                    <option value="1">3X5 900X1500</option>
                                                    <option value="2">4X6 1200X1800</option>
                                                    <option value="3">5X7 1500X2100</option>
                                                    <option value="4">8X8 2400X2400</option>
                                                    <option value="5">8X10 2400X3000</option>
                                                    <option value="6">8.5X11 2550X3300</option>
                                                    <option value="7">9X16 2700X4800</option>
                                                    <option value="8">11X14 3300X4200</option>
                                                    <option value="9">11X16 3300X4800</option>
                                                </select>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="failure"><span></span></div>
                                <button type="button" class="btn btn-default back" onclick='showBack(7);'><i
                                        class="fa fa-angle-left" aria-hidden="true"></i>Back
                                </button>
                                <button type="button" class="btn btn-primary" onclick='showNext7(7);'>Next</button>
                            </div>
                        </div>
                        <div id="modal8" class="question" style="display:none;">
                            <div class="modal-body">
                                <div class="header">
                                    <h3>Please confirm where you need the event photographer.</h3>
                                </div>

                                <div class="content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-md-offset-1" id="zip">
                                                <input type="text" id="zip-code" class="form-control"
                                                       placeholder="US Zip code">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="failure"><span></span></div>
                                <button type="button" class="btn btn-default back" onclick='showBack(8);'><i
                                        class="fa fa-angle-left" aria-hidden="true"></i>Back
                                </button>
                                <button type="button" class="btn btn-primary" onclick='showNext8(8);'>Next</button>
                            </div>
                        </div>
                        <div id="modal9" class="question" style="display:none;">
                            <div class="modal-body">
                                <div class="header">
                                    <h3>Please select the delivery type?</h3>
                                </div>

                                <div class="content">
                                    <div class="list-group">
                                        <div class="list-group-item radio radio-primary">
                                            <input class="9" type="radio" name="delivery" id="delivery1"
                                                   value="delivery1">
                                            <label for="delivery1">Digital</label>
                                        </div>
                                        <div class="list-group-item radio radio-primary">
                                            <input class="9" type="radio" name="delivery" id="delivery2"
                                                   value="delivery2">
                                            <label for="delivery2">Print</label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="failure"><span></span></div>
                                <button type="button" class="btn btn-default back" onclick='showBack(9);'><i
                                        class="fa fa-angle-left" aria-hidden="true"></i>Back
                                </button>
                                <button type="button" class="btn btn-primary" onclick='showNext9(9);'>Next</button>
                            </div>
                        </div>
                        <div id="modal10" class="question" style="display:none;">
                            <div class="modal-body">
                                <div class="header">
                                    <h3 id="success">Almost Done!</h3>
                                </div>

                                <div class="row">
                                    <div id="formdiv" class="col-lg-8 col-lg-offset-2">
                                        <!-- BEGIN LOGIN FORM -->
                                        <form id="formlogin" class="login-form" action="verify.php" method="post">
                                            <h3 class="form-title">Login to your account</h3>
                                            <div class="alert alert-danger display-hide">
                                                <button class="close" data-close="alert"></button>
                                                <span>
			Enter any username and password. </span>
                                            </div>
                                            <div class="form-group">
                                                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                                                <label class="control-label visible-ie8 visible-ie9">Username</label>
                                                <div class="input-icon">
                                                    <i class="fa fa-user"></i>
                                                    <input id="usrname" class="form-control placeholder-no-fix"
                                                           type="text"
                                                           autocomplete="off" placeholder="Username" name="username"/>
                                                    <div id="usrerror"class="failure" style="hidden"><span></span></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label visible-ie8 visible-ie9">Password</label>
                                                <div class="input-icon">
                                                    <i class="fa fa-lock"></i>
                                                    <input id="pwd" class="form-control placeholder-no-fix"
                                                           type="password"
                                                           autocomplete="off" placeholder="Password" name="password"/>
                                                    <div id="pwderror"class="failure"><span></span></div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <!--<label class="checkbox">
                                                    <input type="checkbox" name="remember" value="1"/> Remember me
                                                </label>-->
                                                <button id="login" type="submit" class="btn green-haze pull-right">
                                                    Login <i class="m-icon-swapright m-icon-white"></i>
                                                </button>
                                            </div>
                                            <!--<div class="login-options">
                                                <h4>Or login with</h4>
                                                <ul class="social-icons">
                                                    <li>
                                                        <a class="facebook" data-original-title="facebook"
                                                           href="javascript:;">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="twitter" data-original-title="Twitter"
                                                           href="javascript:;">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="googleplus" data-original-title="Goole Plus"
                                                           href="javascript:;">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="linkedin" data-original-title="Linkedin"
                                                           href="javascript:;">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>-->
                                           <!-- <div class="forget-password">
                                                <h4>Forgot your password ?</h4>
                                                <p>
                                                    no worries, click <a href="javascript:;" id="forget-password">
                                                    here </a>
                                                    to reset your password.
                                                </p>
                                            </div>-->
                                            <div class="create-account">
                                                <p>
                                                    Don't have an account yet ?&nbsp; <a href="#createAccount"
                                                                                         data-toggle="modal">
                                                    Create an account </a>
                                                </p>
                                            </div>
                                        </form>
                                        <!-- END LOGIN FORM -->
                                        <!-- BEGIN FORGOT PASSWORD FORM -->
                                        <!--     <form class="forget-form" action="index.html" method="post">
                                                 <h3>Forget Password ?</h3>
                                                 <p>
                                                     Enter your e-mail address below to reset your password.
                                                 </p>
                                                 <div class="form-group">
                                                     <div class="input-icon">
                                                         <i class="fa fa-envelope"></i>
                                                         <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
                                                     </div>
                                                 </div>
                                                 <div class="form-actions">
                                                     <button type="button" id="back-btn" class="btn">
                                                         <i class="m-icon-swapleft"></i> Back </button>
                                                     <button type="submit" class="btn green-haze pull-right">
                                                         Submit <i class="m-icon-swapright m-icon-white"></i>
                                                     </button>
                                                 </div>
                                             </form>-->
                                        <!-- END FORGOT PASSWORD FORM -->
                                        <!-- BEGIN REGISTRATION FORM -->

                                    </div>

                            </div>
                            <div class="modal-footer">
                                <div class="failure"><span></span></div>
                                <button type="button" class="btn btn-default back" onclick='showBack(10)'><i
                                        class="fa fa-angle-left" aria-hidden="true"></i>Back
                                </button>
                                <!--<button type="submit" class="btn btn-primary">Submit</button>-->
                             </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    <div class="modal fade" id="createAccount" tabindex="-1">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog vertical-align-center">

                <div class="modal-content">
                    <div class="modal-body">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content">
                            <!-- BEGIN PAGE CONTENT-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="portlet box blue" id="form_wizard_1">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-gift"></i> Create Account <span
                                                    class="step-title">
								Step 1 of 4 </span>
                                            </div>
                                            <div class="tools hidden-xs">
                                                <a href="javascript:;" class="collapse">
                                                </a>
                                                <a href="#portlet-config" data-toggle="modal" class="config">
                                                </a>
                                                <a href="javascript:;" class="reload">
                                                </a>
                                                <a href="javascript:;" class="remove" data-dismiss="modal"
                                                   aria-hidden="true">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body form">
                                            <form action="scripts/login.php" class="form-horizontal"
                                                  id="submit_form"
                                                  method="POST">
                                                <div class="form-wizard">
                                                    <div class="form-body">
                                                        <ul class="nav nav-pills nav-justified steps">
                                                            <li>
                                                                <a href="#tab1" data-toggle="tab" class="step">
												<span class="number">
												1 </span>
                                                                    <span class="desc">
												<i class="fa fa-check"></i> Account Setup </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab2" data-toggle="tab" class="step">
												<span class="number">
												2 </span>
                                                                    <span class="desc">
												<i class="fa fa-check"></i> Profile Setup </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab3" data-toggle="tab" class="step active">
												<span class="number">
												3 </span>
                                                                    <span class="desc">
												<i class="fa fa-check"></i> Billing Setup </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab4" data-toggle="tab" class="step">
												<span class="number">
												4 </span>
                                                                    <span class="desc">
												<i class="fa fa-check"></i> Confirm </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div id="bar" class="progress progress-striped"
                                                             role="progressbar">
                                                            <div class="progress-bar progress-bar-success">
                                                            </div>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div class="alert alert-danger display-none">
                                                                <button class="close" data-dismiss="alert"></button>
                                                                You have some form errors. Please check below.
                                                            </div>
                                                            <div class="alert alert-success display-none">
                                                                <button class="close" data-dismiss="alert"></button>
                                                                Your form validation is successful!
                                                            </div>
                                                            <div class="tab-pane active" id="tab1">
                                                                <h3 class="block">Provide your account details</h3>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Username <span
                                                                            class="required">
													* </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control"
                                                                               name="username"/>
                                                                        <span class="help-block">
														Provide your username </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Password <span
                                                                            class="required">
													* </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="password" class="form-control"
                                                                               name="password"
                                                                               id="submit_form_password"/>
                                                                        <span class="help-block">
														Provide your password. </span>
                                                                        <div id="form_password_error">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Confirm
                                                                        Password <span class="required">
													* </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="password" class="form-control"
                                                                               name="rpassword"/>
                                                                        <span class="help-block">
														Confirm your password </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Email <span
                                                                            class="required">
													* </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control"
                                                                               name="email"/>
                                                                        <span class="help-block">
														Provide your email address </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="tab2">
                                                                <h3 class="block">Provide your profile details</h3>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Fullname <span
                                                                            class="required">
													* </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control"
                                                                               name="fullname"/>
                                                                        <span class="help-block">
														Provide your fullname </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Phone Number
                                                                        <span class="required">
													* </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control"
                                                                               name="phone"/>
                                                                        <span class="help-block">
														Provide your phone number </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Gender <span
                                                                            class="required">
													* </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <div class="radio-list">
                                                                            <label>
                                                                                <input type="radio" name="gender"
                                                                                       value="M" data-title="Male"/>
                                                                                Male </label>
                                                                            <label>
                                                                                <input type="radio" name="gender"
                                                                                       value="F" data-title="Female"/>
                                                                                Female </label>
                                                                        </div>
                                                                        <div id="form_gender_error">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Address <span
                                                                            class="required">
													* </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control"
                                                                               name="address"/>
                                                                        <span class="help-block">
														Provide your street address </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">City/Town
                                                                        <span class="required">
													* </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control"
                                                                               name="city"/>
                                                                        <span class="help-block">
														Provide your city or town </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Country</label>
                                                                    <div class="col-md-4">
                                                                        <select name="country" id="country_list"
                                                                                class="form-control">
                                                                            <option value=""></option>
                                                                            <option value="AF">Afghanistan</option>
                                                                            <option value="AL">Albania</option>
                                                                            <option value="DZ">Algeria</option>
                                                                            <option value="AS">American Samoa</option>
                                                                            <option value="AD">Andorra</option>
                                                                            <option value="AO">Angola</option>
                                                                            <option value="AI">Anguilla</option>
                                                                            <option value="AR">Argentina</option>
                                                                            <option value="AM">Armenia</option>
                                                                            <option value="AW">Aruba</option>
                                                                            <option value="AU">Australia</option>
                                                                            <option value="AT">Austria</option>
                                                                            <option value="AZ">Azerbaijan</option>
                                                                            <option value="BS">Bahamas</option>
                                                                            <option value="BH">Bahrain</option>
                                                                            <option value="BD">Bangladesh</option>
                                                                            <option value="BB">Barbados</option>
                                                                            <option value="BY">Belarus</option>
                                                                            <option value="BE">Belgium</option>
                                                                            <option value="BZ">Belize</option>
                                                                            <option value="BJ">Benin</option>
                                                                            <option value="BM">Bermuda</option>
                                                                            <option value="BT">Bhutan</option>
                                                                            <option value="BO">Bolivia</option>
                                                                            <option value="BA">Bosnia and Herzegowina
                                                                            </option>
                                                                            <option value="BW">Botswana</option>
                                                                            <option value="BV">Bouvet Island</option>
                                                                            <option value="BR">Brazil</option>
                                                                            <option value="IO">British Indian Ocean
                                                                                Territory
                                                                            </option>
                                                                            <option value="BN">Brunei Darussalam
                                                                            </option>
                                                                            <option value="BG">Bulgaria</option>
                                                                            <option value="BF">Burkina Faso</option>
                                                                            <option value="BI">Burundi</option>
                                                                            <option value="KH">Cambodia</option>
                                                                            <option value="CM">Cameroon</option>
                                                                            <option value="CA">Canada</option>
                                                                            <option value="CV">Cape Verde</option>
                                                                            <option value="KY">Cayman Islands</option>
                                                                            <option value="CF">Central African
                                                                                Republic
                                                                            </option>
                                                                            <option value="TD">Chad</option>
                                                                            <option value="CL">Chile</option>
                                                                            <option value="CN">China</option>
                                                                            <option value="CX">Christmas Island</option>
                                                                            <option value="CC">Cocos (Keeling) Islands
                                                                            </option>
                                                                            <option value="CO">Colombia</option>
                                                                            <option value="KM">Comoros</option>
                                                                            <option value="CG">Congo</option>
                                                                            <option value="CD">Congo, the Democratic
                                                                                Republic of the
                                                                            </option>
                                                                            <option value="CK">Cook Islands</option>
                                                                            <option value="CR">Costa Rica</option>
                                                                            <option value="CI">Cote d'Ivoire</option>
                                                                            <option value="HR">Croatia (Hrvatska)
                                                                            </option>
                                                                            <option value="CU">Cuba</option>
                                                                            <option value="CY">Cyprus</option>
                                                                            <option value="CZ">Czech Republic</option>
                                                                            <option value="DK">Denmark</option>
                                                                            <option value="DJ">Djibouti</option>
                                                                            <option value="DM">Dominica</option>
                                                                            <option value="DO">Dominican Republic
                                                                            </option>
                                                                            <option value="EC">Ecuador</option>
                                                                            <option value="EG">Egypt</option>
                                                                            <option value="SV">El Salvador</option>
                                                                            <option value="GQ">Equatorial Guinea
                                                                            </option>
                                                                            <option value="ER">Eritrea</option>
                                                                            <option value="EE">Estonia</option>
                                                                            <option value="ET">Ethiopia</option>
                                                                            <option value="FK">Falkland Islands
                                                                                (Malvinas)
                                                                            </option>
                                                                            <option value="FO">Faroe Islands</option>
                                                                            <option value="FJ">Fiji</option>
                                                                            <option value="FI">Finland</option>
                                                                            <option value="FR">France</option>
                                                                            <option value="GF">French Guiana</option>
                                                                            <option value="PF">French Polynesia</option>
                                                                            <option value="TF">French Southern
                                                                                Territories
                                                                            </option>
                                                                            <option value="GA">Gabon</option>
                                                                            <option value="GM">Gambia</option>
                                                                            <option value="GE">Georgia</option>
                                                                            <option value="DE">Germany</option>
                                                                            <option value="GH">Ghana</option>
                                                                            <option value="GI">Gibraltar</option>
                                                                            <option value="GR">Greece</option>
                                                                            <option value="GL">Greenland</option>
                                                                            <option value="GD">Grenada</option>
                                                                            <option value="GP">Guadeloupe</option>
                                                                            <option value="GU">Guam</option>
                                                                            <option value="GT">Guatemala</option>
                                                                            <option value="GN">Guinea</option>
                                                                            <option value="GW">Guinea-Bissau</option>
                                                                            <option value="GY">Guyana</option>
                                                                            <option value="HT">Haiti</option>
                                                                            <option value="HM">Heard and Mc Donald
                                                                                Islands
                                                                            </option>
                                                                            <option value="VA">Holy See (Vatican City
                                                                                State)
                                                                            </option>
                                                                            <option value="HN">Honduras</option>
                                                                            <option value="HK">Hong Kong</option>
                                                                            <option value="HU">Hungary</option>
                                                                            <option value="IS">Iceland</option>
                                                                            <option value="IN">India</option>
                                                                            <option value="ID">Indonesia</option>
                                                                            <option value="IR">Iran (Islamic Republic
                                                                                of)
                                                                            </option>
                                                                            <option value="IQ">Iraq</option>
                                                                            <option value="IE">Ireland</option>
                                                                            <option value="IL">Israel</option>
                                                                            <option value="IT">Italy</option>
                                                                            <option value="JM">Jamaica</option>
                                                                            <option value="JP">Japan</option>
                                                                            <option value="JO">Jordan</option>
                                                                            <option value="KZ">Kazakhstan</option>
                                                                            <option value="KE">Kenya</option>
                                                                            <option value="KI">Kiribati</option>
                                                                            <option value="KP">Korea, Democratic
                                                                                People's Republic of
                                                                            </option>
                                                                            <option value="KR">Korea, Republic of
                                                                            </option>
                                                                            <option value="KW">Kuwait</option>
                                                                            <option value="KG">Kyrgyzstan</option>
                                                                            <option value="LA">Lao People's Democratic
                                                                                Republic
                                                                            </option>
                                                                            <option value="LV">Latvia</option>
                                                                            <option value="LB">Lebanon</option>
                                                                            <option value="LS">Lesotho</option>
                                                                            <option value="LR">Liberia</option>
                                                                            <option value="LY">Libyan Arab Jamahiriya
                                                                            </option>
                                                                            <option value="LI">Liechtenstein</option>
                                                                            <option value="LT">Lithuania</option>
                                                                            <option value="LU">Luxembourg</option>
                                                                            <option value="MO">Macau</option>
                                                                            <option value="MK">Macedonia, The Former
                                                                                Yugoslav Republic of
                                                                            </option>
                                                                            <option value="MG">Madagascar</option>
                                                                            <option value="MW">Malawi</option>
                                                                            <option value="MY">Malaysia</option>
                                                                            <option value="MV">Maldives</option>
                                                                            <option value="ML">Mali</option>
                                                                            <option value="MT">Malta</option>
                                                                            <option value="MH">Marshall Islands</option>
                                                                            <option value="MQ">Martinique</option>
                                                                            <option value="MR">Mauritania</option>
                                                                            <option value="MU">Mauritius</option>
                                                                            <option value="YT">Mayotte</option>
                                                                            <option value="MX">Mexico</option>
                                                                            <option value="FM">Micronesia, Federated
                                                                                States of
                                                                            </option>
                                                                            <option value="MD">Moldova, Republic of
                                                                            </option>
                                                                            <option value="MC">Monaco</option>
                                                                            <option value="MN">Mongolia</option>
                                                                            <option value="MS">Montserrat</option>
                                                                            <option value="MA">Morocco</option>
                                                                            <option value="MZ">Mozambique</option>
                                                                            <option value="MM">Myanmar</option>
                                                                            <option value="NA">Namibia</option>
                                                                            <option value="NR">Nauru</option>
                                                                            <option value="NP">Nepal</option>
                                                                            <option value="NL">Netherlands</option>
                                                                            <option value="AN">Netherlands Antilles
                                                                            </option>
                                                                            <option value="NC">New Caledonia</option>
                                                                            <option value="NZ">New Zealand</option>
                                                                            <option value="NI">Nicaragua</option>
                                                                            <option value="NE">Niger</option>
                                                                            <option value="NG">Nigeria</option>
                                                                            <option value="NU">Niue</option>
                                                                            <option value="NF">Norfolk Island</option>
                                                                            <option value="MP">Northern Mariana
                                                                                Islands
                                                                            </option>
                                                                            <option value="NO">Norway</option>
                                                                            <option value="OM">Oman</option>
                                                                            <option value="PK">Pakistan</option>
                                                                            <option value="PW">Palau</option>
                                                                            <option value="PA">Panama</option>
                                                                            <option value="PG">Papua New Guinea</option>
                                                                            <option value="PY">Paraguay</option>
                                                                            <option value="PE">Peru</option>
                                                                            <option value="PH">Philippines</option>
                                                                            <option value="PN">Pitcairn</option>
                                                                            <option value="PL">Poland</option>
                                                                            <option value="PT">Portugal</option>
                                                                            <option value="PR">Puerto Rico</option>
                                                                            <option value="QA">Qatar</option>
                                                                            <option value="RE">Reunion</option>
                                                                            <option value="RO">Romania</option>
                                                                            <option value="RU">Russian Federation
                                                                            </option>
                                                                            <option value="RW">Rwanda</option>
                                                                            <option value="KN">Saint Kitts and Nevis
                                                                            </option>
                                                                            <option value="LC">Saint LUCIA</option>
                                                                            <option value="VC">Saint Vincent and the
                                                                                Grenadines
                                                                            </option>
                                                                            <option value="WS">Samoa</option>
                                                                            <option value="SM">San Marino</option>
                                                                            <option value="ST">Sao Tome and Principe
                                                                            </option>
                                                                            <option value="SA">Saudi Arabia</option>
                                                                            <option value="SN">Senegal</option>
                                                                            <option value="SC">Seychelles</option>
                                                                            <option value="SL">Sierra Leone</option>
                                                                            <option value="SG">Singapore</option>
                                                                            <option value="SK">Slovakia (Slovak
                                                                                Republic)
                                                                            </option>
                                                                            <option value="SI">Slovenia</option>
                                                                            <option value="SB">Solomon Islands</option>
                                                                            <option value="SO">Somalia</option>
                                                                            <option value="ZA">South Africa</option>
                                                                            <option value="GS">South Georgia and the
                                                                                South Sandwich Islands
                                                                            </option>
                                                                            <option value="ES">Spain</option>
                                                                            <option value="LK">Sri Lanka</option>
                                                                            <option value="SH">St. Helena</option>
                                                                            <option value="PM">St. Pierre and Miquelon
                                                                            </option>
                                                                            <option value="SD">Sudan</option>
                                                                            <option value="SR">Suriname</option>
                                                                            <option value="SJ">Svalbard and Jan Mayen
                                                                                Islands
                                                                            </option>
                                                                            <option value="SZ">Swaziland</option>
                                                                            <option value="SE">Sweden</option>
                                                                            <option value="CH">Switzerland</option>
                                                                            <option value="SY">Syrian Arab Republic
                                                                            </option>
                                                                            <option value="TW">Taiwan, Province of
                                                                                China
                                                                            </option>
                                                                            <option value="TJ">Tajikistan</option>
                                                                            <option value="TZ">Tanzania, United Republic
                                                                                of
                                                                            </option>
                                                                            <option value="TH">Thailand</option>
                                                                            <option value="TG">Togo</option>
                                                                            <option value="TK">Tokelau</option>
                                                                            <option value="TO">Tonga</option>
                                                                            <option value="TT">Trinidad and Tobago
                                                                            </option>
                                                                            <option value="TN">Tunisia</option>
                                                                            <option value="TR">Turkey</option>
                                                                            <option value="TM">Turkmenistan</option>
                                                                            <option value="TC">Turks and Caicos
                                                                                Islands
                                                                            </option>
                                                                            <option value="TV">Tuvalu</option>
                                                                            <option value="UG">Uganda</option>
                                                                            <option value="UA">Ukraine</option>
                                                                            <option value="AE">United Arab Emirates
                                                                            </option>
                                                                            <option value="GB">United Kingdom</option>
                                                                            <option value="US">United States</option>
                                                                            <option value="UM">United States Minor
                                                                                Outlying Islands
                                                                            </option>
                                                                            <option value="UY">Uruguay</option>
                                                                            <option value="UZ">Uzbekistan</option>
                                                                            <option value="VU">Vanuatu</option>
                                                                            <option value="VE">Venezuela</option>
                                                                            <option value="VN">Viet Nam</option>
                                                                            <option value="VG">Virgin Islands
                                                                                (British)
                                                                            </option>
                                                                            <option value="VI">Virgin Islands (U.S.)
                                                                            </option>
                                                                            <option value="WF">Wallis and Futuna
                                                                                Islands
                                                                            </option>
                                                                            <option value="EH">Western Sahara</option>
                                                                            <option value="YE">Yemen</option>
                                                                            <option value="ZM">Zambia</option>
                                                                            <option value="ZW">Zimbabwe</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Remarks</label>
                                                                    <div class="col-md-4">
                                                                        <textarea class="form-control" rows="3"
                                                                                  name="remarks"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="tab3">
                                                                <h3 class="block">Provide your billing and credit card
                                                                    details</h3>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Card Holder
                                                                        Name <span class="required">
													* </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control"
                                                                               name="card_name"/>
                                                                        <span class="help-block">
														</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Card Number
                                                                        <span class="required">
													* </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control"
                                                                               name="card_number"/>
                                                                        <span class="help-block">
														</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">CVC <span
                                                                            class="required">
													* </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" placeholder=""
                                                                               class="form-control" name="card_cvc"/>
                                                                        <span class="help-block">
														</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Expiration(MM/YYYY)
                                                                        <span class="required">
													* </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" placeholder="MM/YYYY"
                                                                               maxlength="7" class="form-control"
                                                                               name="card_expiry_date"/>
                                                                        <span class="help-block">
														e.g 11/2020 </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Payment
                                                                        Options <span class="required">
													* </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <div class="checkbox-list">
                                                                            <label>
                                                                                <input type="checkbox" name="payment[]"
                                                                                       value="1"
                                                                                       data-title="Auto-Pay with this Credit Card."/>
                                                                                Auto-Pay with this Credit Card </label>
                                                                            <label>
                                                                                <input type="checkbox" name="payment[]"
                                                                                       value="2"
                                                                                       data-title="Email me monthly billing."/>
                                                                                Email me monthly billing </label>
                                                                        </div>
                                                                        <div id="form_payment_error">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="tab4">
                                                                <h3 class="block">Confirm your account</h3>
                                                                <h4 class="form-section">Account</h4>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Username:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static"
                                                                           data-display="username">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Email:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static"
                                                                           data-display="email">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <h4 class="form-section">Profile</h4>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Fullname:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static"
                                                                           data-display="fullname">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Gender:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static"
                                                                           data-display="gender">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Phone:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static"
                                                                           data-display="phone">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Address:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static"
                                                                           data-display="address">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">City/Town:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static"
                                                                           data-display="city">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Country:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static"
                                                                           data-display="country">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Remarks:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static"
                                                                           data-display="remarks">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <h4 class="form-section">Billing</h4>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Card Holder
                                                                        Name:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static"
                                                                           data-display="card_name">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Card
                                                                        Number:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static"
                                                                           data-display="card_number">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">CVC:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static"
                                                                           data-display="card_cvc">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Expiration:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static"
                                                                           data-display="card_expiry_date">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Payment
                                                                        Options:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static"
                                                                           data-display="payment[]">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <a href="javascript:;"
                                                                   class="btn default button-previous">
                                                                    <i class="m-icon-swapleft"></i> Back </a>
                                                                <a href="javascript:;" class="btn blue button-next">
                                                                    Continue <i
                                                                        class="m-icon-swapright m-icon-white"></i>
                                                                </a>
                                                                <button type="submit" class="btn green button-submit">
                                                                    Submit <i class="m-icon-swapright m-icon-white"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PAGE CONTENT-->

                            <!-- END CONTENT -->
                        </div>
                        <div class="modal-footer">
                            <!--    <button type="button" data-dismiss="modal" class="btn">Close</button>
                                <button type="button" class="btn yellow">Ok</button>-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Cirlce Starts -->
<div id="about" class="container spacer about">
    <h2 class="text-center wowload fadeInUp">What we think at Panodo</h2>
    <div class="row">
        <div class="col-sm-6 wowload fadeInLeft">
            <h4><i class="fa fa-camera-retro"></i> About us </h4>
            <p>We are a Dallas based full-service agency that offers services to both organizations and individuals. 
			From the most exclusive, intimate affairs to global incentive programs and huge multi-day engagements, 
			our clients have come to count on our dedicated staff to deliver stunning images and unparalleled customer 
			service throughout their entire experience with Panodo. Our team includes renowned photographers and videographers, 
			as well as an exceptional client services department. Together, we work for the success of each client’s unique needs.</p>
        </div>
        <div class="col-sm-6 wowload fadeInRight">
            <h4><i class="fa fa-bullseye"></i> Mission</h4>
            <p>Panodo's mission is to create lasting memories with passion and enthusiasm, in a way that has never been 
			captured and is also determined to handle each and every guest in a family like manner, capturing their 
			personality and natural expressions while minimizing the flaws. We will provide an efficient and enjoyable portrait 
			experience that is completely hassle-free. Our goal is simple. Our job is not done until everyone is thrilled 
			with both our products and services. We guarantee it!</p>
        </div>
    </div>
    <div class="services">
        <h3 class="text-center wowload fadeInUp">Services</h3>
        <ul class="row text-center list-inline  wowload bounceInUp">
            <li>
                <span><i class="fa fa-heart"></i><b>Wedding</b></span>
            </li>
            <li>
                <span><i class="fa fa-users"></i><b>Birthday</b></span>
            </li>
			<li>
                <span><i class="fa fa-institution"></i><b>Corporate</b></span>
            </li>
            <li>
                <span><i class="fa fa-graduation-cap"></i><b>Life Events</b></span>
            </li>
            <li>
                <span><i class="fa fa-umbrella"></i><b>Travel</b></span>
            </li>
        </ul>
    </div>
</div>
<!-- #Cirlce Ends -->


<!-- works -->
<div id="works" class=" clearfix grid">
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/1.jpg" alt="img01"/>
        <figcaption>
            <h2>Wedding</h2>
            <p>Better to have loved and lost, than to have never loved at all...!<br>
                <a href="images/portfolio/1.jpg" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
	<figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/6.jpg" alt="img01"/>
        <figcaption>
            <h2>Children</h2>
            <p>The littlest feet make the biggest footprints in our hearts...!<br>
                <a href="images/portfolio/6.jpg" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/3.jpg" alt="img01"/>
        <figcaption>
            <h2>Corporate</h2>
            <p>If you don’t know where you are going, any road will get you there...!<br>
                <a href="images/portfolio/3.jpg" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/11.jpg" alt="img01"/>
        <figcaption>
            <h2>Events</h2>
            <p>Everyone is a moon, and has a dark side which he never shows to anybody...!<br>
                <a href="images/portfolio/11.jpg" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/5.jpg" alt="img01"/>
        <figcaption>
            <h2>Mothers</h2>
            <p>You never understand life until it grows inside of you...!<br>
                <a href="images/portfolio/5.jpg" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/2.png" alt="img01"/>
        <figcaption>
            <h2>Birthday</h2>
            <p>Celebrate, because age is just a number...!<br>
                <a href="images/portfolio/2.png" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>


</div>
<!-- works -->
<input id="user" type="hidden" value="" >

<div id="partners" class="container spacer ">
	<br>
    <h2 class="text-center  wowload fadeInUp">Some of our happy clients</h2>
    <div class="clearfix">
        <div class="col-sm-6 partners  wowload fadeInLeft">
            <img src="images/partners/1.png" alt="partners">
            <img src="images/partners/2.jpg" alt="partners">
            <img src="images/partners/3.png" alt="partners">
            <img src="images/partners/4.png" alt="partners">
        </div>
        <div class="col-sm-6">


            <div id="carousel-testimonials" class="carousel slide testimonails  wowload fadeInRight"
                 data-ride="carousel">
                <div class="carousel-inner" id="reviews">
                    <div class="item active animated bounceInRight row">
                        <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/team/1.jpg"
                                                                        width="100" class="img-circle img-responsive">
                        </div>
                        <div class="col-xs-10">
                            <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising
                                pain was born and I will give you a complete account of the system, and expound the
                                actual teachings of the great explorer of the truth, the master-builder of human
                                happiness. </p>
                            <span>Angel Smith - <b>eshop Canada</b></span>
                        </div>
                    </div>
                    <div class="item  animated bounceInRight row">
                        <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/team/1.jpg"
                                                                        width="100" class="img-circle img-responsive">
                        </div>
                        <div class="col-xs-10">
                            <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because
                                those who do not know how to pursue pleasure rationally encounter consequences that are
                                extremely painful.</p>
                            <span>John Partic - <b>Crazy Pixel</b></span>
                        </div>
                    </div>
                    <div class="item  animated bounceInRight row">
                        <div class="animated slideInLeft  col-xs-2"><img alt="portfolio" src="images/team/1.jpg"
                                                                         width="100" class="img-circle img-responsive">
                        </div>
                        <div class="col-xs-10">
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so
                                beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire,
                                that they cannot foresee the pain and trouble that are bound to ensue.</p>
                            <span>Harris David - <b>Jet London</b></span>
                        </div>
                    </div>
                </div>

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
                </ol>
                <!-- Indicators -->
            </div>
			<br>
        </div>
    </div>


    <!-- team 
    <h3 class="text-center  wowload fadeInUp">Our team</h3>
    <p class="text-center  wowload fadeInLeft">Our creative team that is making everything possible</p>
    <div class="row grid team  wowload fadeInUpBig">
        <div class=" col-sm-3 col-xs-6">
            <figure class="effect-chico">
                <img src="images/team/8.jpg" alt="img01" class="img-responsive"/>
                <figcaption>
                    <p><b>Barbara Husto</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a
                            href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a>
                    </p>
                </figcaption>
            </figure>
        </div>

        <div class=" col-sm-3 col-xs-6">
            <figure class="effect-chico">
                <img src="images/team/10.jpg" alt="img01"/>
                <figcaption>
                    <p><b>Barbara Husto</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a
                            href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a>
                    </p>
                </figcaption>
            </figure>
        </div>

        <div class=" col-sm-3 col-xs-6">
            <figure class="effect-chico">
                <img src="images/team/12.jpg" alt="img01"/>
                <figcaption>
                    <p><b>Barbara Husto</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a
                            href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a>
                    </p>
                </figcaption>
            </figure>
        </div>

        <div class=" col-sm-3 col-xs-6">
            <figure class="effect-chico">
                <img src="images/team/17.jpg" alt="img01"/>
                <figcaption>
                    <p><b>Barbara Husto</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a
                            href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a>
                    </p>
                </figcaption>
            </figure>
        </div>


    </div>
	-->
    <!-- team -->

</div>


<!-- About Starts -->
<div class="highlight-info">
    <div class="overlay spacer">
        <div class="container">
            <div class="row text-center  wowload fadeInDownBig">
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-smile-o  fa-5x"></i><h4>24 Clients</h4>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-rocket  fa-5x"></i><h4>75 Projects</h4>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-cloud-download  fa-5x"></i><h4>454 Downloads</h4>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-map-marker fa-5x"></i><h4>2 Offices</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Ends -->


<div id="contact" class="spacer">
    <!--Contact Starts-->
    <div class="container contactform center">
        <h2 class="text-center  wowload fadeInUp">Get in touch to start your project</h2>
        <div class="row wowload fadeInLeftBig">
            <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                <input type="text" placeholder="Name">
                <input type="text" placeholder="Company">
                <textarea rows="5" placeholder="Message"></textarea>
                <button class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
            </div>
        </div>


    </div>
</div>
<!--Contact Ends-->


<!-- Footer Starts -->
<div class="footer text-center">
    Copyright 2016 <a href='www.utdallas.edu'>UT Dallas</a>
</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>


<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
</div>


<?php require 'inc/template_footer_start.php'?>


