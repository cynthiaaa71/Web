<?php
include_once("../inc/header.inc.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['id'])) {
    print("<script>window.location = '{$HOME_URL}pages/signIn.php';</script>");
    die();
}
include_once("../class/database.class.php");
$db = new Database();
?>

<title>Book</title>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="slider col-md-12">
                <div class="">
                    <div class="title col-md-12">
                        <h2>Book</h2>
                    </div>
                </div>
            </div>
            <?php if(isset($_GET["id"]) && !empty($_GET['id'])) { 
                $place = $db->getPlaceById($_GET['id']);
                $calendar = $db->parseCalendar(json_decode($place['availability_calendar'], true));
                $maxDate = $calendar[0];
                $minDate = end($calendar);
                $oldPrice = $place['price_per_night'];
                if(isset($_GET['offer_id']) && !empty($_GET['offer_id'])) {
                    $discount = $db->getSpecialOfferById($_GET['offer_id'])['discount'];
                    $place['price_per_night'] = $place['price_per_night'] * (1 - $discount / 100);
                }
            ?>

            <?php  if(isset($_GET['offer_id']) && !empty($_GET['offer_id']) && !$db->isPlaceInSpecialOffer($_GET['id'], $_GET['offer_id'])){ ?>
            <div class="col-md-6 col-12 text-center mx-auto py-3">
                <h1>This offer is not available for this place.</h1>
            </div>
        </div>
    </div>
    <?php 
                  include_once("../inc/footer.inc.php");
                  die();
            }
            ?>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card my-5">
                <form id="book_form" class="card-body cardbody-color p-lg-5">
                    <div class="alert alert-success" id="book_form_alert" style="display:none"></div>
                    <div class="text-center">
                        <img class="img-fluid" src="<?php print("$HOME_URL{$place['image']}");?>" />
                        <h1><?php print($place['title']); ?></h1>
                        <p><?php print($place['description']); ?></p>
                    </div>
                    <div class="book_details">
                        <p>Country: <b><?php print($db->getCountryNameByCode($place['country'])); ?> </b></p>
                        <p>City: <b><?php print($place['city']); ?> </b></p>
                        <p>State: <b><?php print($place['state']); ?> </b></p>
                        <p>Address: <b><?php print($place['address']); ?> </b></p>
                        <p>Type: <b><?php print($place['type']); ?> </b>
                        <p>
                        <p>Total Bathrooms: <b><?php print($place['total_bathrooms']); ?> </b>
                        <p>
                        <p>Total Bedrooms: <b><?php print($place['total_bedrooms']); ?>
                            </b>
                        <p>
                        <p>Total Guests: <b><?php print($place['total_guests']); ?>
                            </b>
                        <p>
                            </b></p>
                        <p>Cancellation Policy: <b><?php print($place['cancellation_policy']); ?></b></p>
                        <p>Price per night:
                            <b style="color:green;">$<?php print((int) $place['price_per_night']); ?>
                            </b>
                            <?php if (isset($_GET['offer_id']) && !empty($_GET['offer_id'])) { ?>
                            <span class="text-decoration-line-through"
                                style="color:red;"><b>$<?php print((int) $oldPrice); ?></b></span>
                            <?php } ?>
                        </p>

                        <p>Total price: <b id="total_price">$0</b></p>
                        <input type="hidden" id="price_per_night"
                            value="<?php print((int) $place['price_per_night']); ?>" />
                        <input type="hidden" value="<?php print($place['id']); ?>" name="place_id" />
                        <?php if(isset($_GET['offer_id']) && !empty($_GET['offer_id'])) { ?>
                        <input type="hidden" value="<?php print($_GET['offer_id']); ?>" name="offer_id" />
                        <?php } ?>
                        <div class="date-picker">

                            <div class="">
                                <div class="form-group col-12 col-md-6">
                                    <label>Check-in:</label>
                                    <input type="date" name="check_in_date" class="form-control"
                                        min="<?php print("$minDate") ?>" max="<?php print("$maxDate") ?>">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label>Check-out:</label>
                                    <input type="date" class="form-control" name="check_out_date"
                                        min="<?php print("$minDate")?>" max="<?php print("$maxDate") ?>">

                                    <?php 
                                                
                                            ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="check btn">Book</button>
                </form>
            </div>

        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <?php 
                include_once("../inc/footer.inc.php");
                die();
            }
            ?>

    <div class="offers-grid">
        <div class="grid-content">
            <?php
        
        $places = $db->getRentablelPlaces();
        foreach ($places as $place) {
            ?>
            <div class="card" data-item="book_item" data-place-id="<?php print($place['id']); ?>">
                <img class="img-fluid" src="<?php print("$HOME_URL{$place['image']}"); ?>" />
                <h3>
                    <?php print($place['title']); ?>
                </h3>
                <p>
                    <?php print($place['description']); ?>
                </p>
                <button class="btn" name="addToWishListBtn"><i class="fa fa-heart" aria-hidden="true"></i></button>
            </div>
            <?php } ?>
        </div>
    </div>
    </div>
    </div>
    </div>
    <?php include_once("../inc/footer.inc.php"); ?>