<?php

use App\Models\User;
use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

function days_left($today, $sub_ending)
{
    $interval = $today->diff($sub_ending);
    $days_left = $interval->days;
    return $days_left;
}

function check_sub()
{

    $user = User::find(Auth::id());
    $enquiry_id = $user->enquiry_id;
    $subscription = Subscription::where('user_id', $enquiry_id)->first();


    // dd($enquiry_id->subscriptions[0]->ending_date);




    $today = Carbon::now();
    if ($subscription) {
        if ($subscription->count() > 0) {
            $sub_ending = $subscription->ending_date;
            $days_left  = days_left($today, $sub_ending);

            if ($days_left < 7) {
?>
                <style>
                    .modal-backdrop {
                        position: fixed;
                        top: 0;
                        left: 0;
                        z-index: 900 !important;
                        width: 100vw;
                        height: 100vh;
                        background-color: #000000;

                    }
                </style>
                <button type="button" id="myButton" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Only <?= $days_left ?> days left in your subscription.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        // Get the button element by its ID
                        var myButton = document.getElementById("myButton");

                        // Change visibility to visible
                        myButton.style.visibility = "visible";

                        // Simulate a click
                        myButton.click();

                        // Change visibility back to hidden (optional)
                        myButton.style.visibility = "hidden";


                    })
                </script>
            <?php
            }

            if ($user->disclaimer == 0) {
            ?>
                <style>
                    .modal-backdrop {
                        position: fixed;
                        top: 0;
                        left: 0;
                        z-index: 900 !important;
                        width: 100vw;
                        height: 100vh;
                        background-color: #000000;

                    }
                </style>
                <button type="button" id="myButton2" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModal2Label">Disclaimer</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h4>Risk Disclosure on Derivatives</h4>

                                <p>
                                    9 out of 10 individual traders in equity Futures and Options Segment, incurred net losses.
                                    On an average, loss makers registered net trading loss close to Rs 50,000
                                </p>
                                <hr>
                                <p>Over and above the net trading losses incurred, loss makers expended an additional 28% of net trading losses as transaction costs.</p>
                                <hr>
                                <p>Those making net trading profits, incurred between 15% to 50% of such profits as transaction cost.</p>
                                <hr>
                                Source: SEBI Study

                                <!-- <p>I have read the Risk Disclosures, Please do not show it to me again</p> -->
                            </div>
                            <div class="modal-footer">



                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        I have read the Risk Disclosures, Please do not show it to me again
                                    </button>

                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </div>
                    </div>
                </div>
<?php
                                $user_disclaimer = User::where('id', $user->id)->first();
                                $user_disclaimer->disclaimer = 1;
                                $user_disclaimer->save();
?>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        // Get the button element by its ID
                        var myButton2 = document.getElementById("myButton2");

                        // Change visibility to visible
                        myButton2.style.visibility = "visible";

                        // Simulate a click
                        myButton2.click();

                        // Change visibility back to hidden (optional)
                        myButton2.style.visibility = "hidden";


                    })
                </script>
<?php
            }
            if ($today > $sub_ending) {
                $user->removeRole("Registered User");
                $user->assignRole("Unregistered User");
                $subscription->delete();
            } else {
                echo "<b style='font-weight: 600'>Starting Date: </b>";
                echo Carbon::parse($user->subscriptions->first()->starting_date)->format('d-m-Y');
                echo " / <b style='font-weight: 600'> Ending Date:</b> ";

                echo Carbon::parse($user->subscriptions->first()->ending_date)->format('d-m-Y');
                echo "  ";

                // echo " (";
                // echo Carbon::parse($user->subscriptions->first()->starting_date)->diffInDays(\Carbon\Carbon::parse($user->subscriptions->first()->ending_date));
                // echo "days)";
                echo " (";
                if ($days_left < 7) {
                    echo "Only " . $days_left . " days left.";
                } else {
                    echo $days_left . " days left.";
                }
                echo ") ";
            }
        } else {
            $user->removeRole("Registered User");
            $user->assignRole("Unregistered User");
        }
    } else {
        $user->removeRole("Registered User");
        $user->assignRole("Unregistered User");
    }
}

?>
