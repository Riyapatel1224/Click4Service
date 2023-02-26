<?php
include_once 'mheader.php';
$bid = $_GET["bid"];
$bk = single("booking", "id=$bid");
extract($bk);
?>
<style>
    .rating {
        display: flex;
        flex-direction: row-reverse;
        justify-content: center
    }

    .rating > input {
        display: none
    }

    .rating > label {
        position: relative;
        width: 1em;
        font-size: 35px;
        color: #3a25f7;
        cursor: pointer
    }

    .rating > label::before {
        content: "\2605";
        position: absolute;
        opacity: 0
    }

    .rating > label:hover:before,
    .rating > label:hover ~ label:before {
        opacity: 1 !important
    }

    .rating > input:checked ~ label:before {
        opacity: 1
    }

    .rating:hover > input:checked ~ label:before {
        opacity: 0.4
    }
</style>
<div class="container" style="min-height:87vh;">
    <div class="row">
    <div class="col-sm-6 mx-auto">
        <div class="card shadow my-3">
            <div class="card-body">
                <h5 class="text-center">Booking Feedback</h5>
                <form method="POST" action="savefeedback.php">
                    <input type="hidden" name="bid" value="<?= $bid ?>">                               

                    <div class="form-group form-row">
                        <label class="col-sm-4">Feedback *</label>
                        <div class="col-sm-8">
                        <textarea rows="4" placeholder="Feedback" name="descr" class="form-control form-control-sm"></textarea>
                    </div>
                    </div>
                    <div class="form-row">
                        <label class="col-sm-3">Booking Rating</label>
                        <div class="col-sm-7">
                            <div class="rating">
                                <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                                <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                                <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                                <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                                <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-success btn-sm float-right">
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php include_once 'mfooter.php'; ?>