<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Spatie\Permission\Models\Role;

use Illuminate\Support\Facades\Mail;
use App\Mail\KycMail;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Storage;
class EnquiryController extends Controller
{
    public function index()
    {
        $enquiries = Enquiry::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.enquiry.index', compact('enquiries'));
    }

    public function edit_enquiry($id)
    {
        $enquiry = Enquiry::where('id', $id)->first();
        $subscription = Subscription::where('user_id', $id)->first();

        return view('admin.enquiry.edit_enquiry', compact('enquiry', 'subscription'));
    }

    public function create_enquiry()
    {

        return view('admin.enquiry.create_enquiry');
    }

    public function store_enquiry(Request $request)
    {
        if (isset($request->btnRiskProfileSubmit)) {
            // Perform Google reCAPTCHA verification
            $captcha = $request->input('g-recaptcha-response');
            $ip = $request->ip();
            $key = env('GOOGLE_SECRET');
            $url = 'https://www.google.com/recaptcha/api/siteverify';

            $recaptcha_response = file_get_contents($url . '?secret=' . $key . '&response=' . $captcha . '&remoteip=' . $ip);
            $recaptcha_data = json_decode($recaptcha_response);

            if (!$recaptcha_data->success) {
                return redirect()->back()->with('error', 'reCAPTCHA verification failed.');
            }
        }

        $request->validate([
            'email' => 'required|unique:enquiries,email',
        ]);

        $enquiry = new Enquiry;
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->phone = $request->phone;
        $enquiry->boe = $request->boe;
        $enquiry->dob = $request->dob;
        $enquiry->age_group = $request->age_group;
        $enquiry->adhar = $request->adhar;
        $enquiry->pan = $request->pan;
        $enquiry->experience = $request->experience;
        $enquiry->trading_goal = $request->trading_goal;
        $enquiry->trading_amount = $request->trading_amount;
        $enquiry->trading_type = $request->trading_type;
        $enquiry->annual_income = $request->annual_income;
        $enquiry->income_source = $request->income_source;
        $enquiry->earning_person = $request->earning_person;
        $enquiry->dependent_family = $request->dependent_family;
        $enquiry->existing_investment = $request->existing_investment;
        $enquiry->emergency = $request->emergency;
        $enquiry->total_exist_investment = $request->total_exist_investment;
        $enquiry->preferred_segment = $request->preferred_segment;
        $enquiry->preference = $request->preference;
        $enquiry->agreecheck = $request->agreecheck;
        $enquiry->btnRiskProfileSubmit = $request->btnRiskProfileSubmit;
        $enquiry->client_ip = $request->client_ip;

        if ($request->hasFile('adhaar_card_front')) {
            $aadhar_card_front = $request->file('adhaar_card_front');
            $aadhar_front_image = $request->name . '_' . time() . '.' . $aadhar_card_front->getClientOriginalExtension();
            $aadhar_card_front->move(public_path('admin/documents/aadhar_card_front/'), $aadhar_front_image);
            $enquiry->adhaar_card_front = 'admin/documents/aadhar_card_front/'.$aadhar_front_image;
        }

        if($request->hasFile('adhaar_card_back')){
            $aadhar_card_back = $request->file('adhaar_card_back');
            $aadhar_back_image = $request->name.'_'.time().'.'.$aadhar_card_back->getClientOriginalExtension();
            $aadhar_card_back->move(public_path('admin/documents/aadhar_card_back/'),$aadhar_back_image);
            $enquiry->adhaar_card_back = 'admin/documents/aadhar_card_back/'.$aadhar_back_image;
        }

        if($request->file('pan_card')){
            $pan_card = $request->file('pan_card');
            $pan_card_image = $request->name . '_' . time() . '.' . $pan_card->getClientOriginalExtension();
            $pan_card->move(public_path('admin/documents/pan_card'), $pan_card_image);
            $enquiry->pan_card = 'admin/documents/pan_card/'.$pan_card_image;
        }
        $pdfName = $request->name.'_'.uniqid() . '.pdf';

        $enquiry->pdf = $pdfName;

        if ($enquiry->save()) {
            $emailData['name'] = $request->name;
            $emailData['email'] = $request->email;
            $emailData['mobile'] = $request->phone;
            $emailData['boe'] = $request->boe;
            $emailData['dob'] = $request->dob;
            $emailData['age_group'] = $request->age_group;
            $emailData['adhar'] = $request->adhar;
            $emailData['pan'] = $request->pan;
            $emailData['trading_goal'] = $request->trading_goal;
            $emailData['trading_amount'] = $request->trading_amount;
            $emailData['trading_type'] = $request->trading_type;
            $emailData['annual_income'] = $request->annual_income;
            $emailData['income_source'] = $request->income_source;
            $emailData['earning_person'] = $request->earning_person;
            $emailData['dependent_family'] = $request->dependent_family;
            $emailData['emergency'] = $request->emergency;
            $emailData['existing_investment'] = $request->existing_investment;
            $emailData['total_exist_investment'] = $request->total_exist_investment;
            $emailData['preferred_segment'] = $request->preferred_segment;
            $emailData['experience'] = $request->experience;
            $emailData['preference'] = $request->preference;
            $emailData['dependent_family'] = $request->dependent_family;
            $emailData['pdfName'] = 'user_agreement' . $request->name;
            $pdf = new Dompdf(); // Create a new instance of the Dompdf class
            $pdf->loadHtml(view('frontend.pdf.kycpdf', $emailData)); // Load HTML content for PDF
            $pdf->setPaper('A4', 'portrait'); // Set paper size and orientation
            $pdf->render(); // Render PDF content

            $pdfContent = $pdf->output();

            // Save PDF to the public folder
            $pdfPath = 'admin/pdfs/' . $pdfName;
            Storage::disk('public')->put($pdfPath, $pdfContent);


            $emailData['pdf'] = $pdf;
            if(Mail::to([env('MAIL_USERNAME'), $request->email])->send(new KycMail($emailData))){
                echo "<script>console.log('Mail Sent Successfully')</script>";
            }else{
                echo "<script>console.log('Mail Not Sent')</script>";
            }
            if(isset($request->btnRiskProfileSubmit)){
                return redirect()->route('thankyou');
            } else {
                return redirect()->back()->with('success', 'Enquiry Created Successfully');
            }
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }

    public function update_enquiry(Request $request)
    {

        $enquiry = Enquiry::where('id', $request->id)->first();
        if (isset($request->subscription)) {
            $user = User::where('enquiry_id', $request->id)->first();
            $role = Role::findByName('Registered User');
            $subscription = Subscription::where('user_id', $request->id)->first();
            if ($user) {
                $user->assignRole($role);
                if ($subscription) {
                    return redirect()->back()->with('message', 'Subscription already exist');
                } else {

                    $new_subscription = new Subscription;

                    $new_subscription->user_id = $request->id;
                    $new_subscription->subscription_name = $request->subscription;
                    $new_subscription->starting_date = Carbon::now(); // Current date and time
                    if ($request->subscription == '1m') {
                        $new_subscription->ending_date = Carbon::now()->addMonth(); // Current date + 1 month
                    } elseif ($request->subscription == '2m') {
                        $new_subscription->ending_date = Carbon::now()->addMonth(2);
                    } elseif ($request->subscription == '3m') {
                        $new_subscription->ending_date = Carbon::now()->addMonth(3);
                    } elseif ($request->subscription == '1y') {
                        $new_subscription->ending_date = Carbon::now()->addYear();
                    } elseif ($request->subscription == '2y') {
                        $new_subscription->ending_date = Carbon::now()->addYear(2);
                    }
                    $new_subscription->save();
                }
            } else {

                $new_user = new User;
                $new_user->name = $request->name;
                if ($request->password) {
                    $new_user->password = $request->password;
                }
                $new_user->email = $request->email;
                $new_user->phone = $request->phone;
                $new_user->state = $request->state;
                $new_user->investment = $request->investment;
                $new_user->resource = $request->resource;

                $new_user->enquiry_id = $request->id;

                $new_user->save();
                $new_user->assignRole($role);
                $new_subscription = new Subscription;

                $new_subscription->user_id = $request->id;
                $new_subscription->subscription_name = $request->subscription;
                $new_subscription->starting_date = Carbon::now(); // Current date and time
                if ($request->subscription == '1m') {
                    $new_subscription->ending_date = Carbon::now()->addMonth(); // Current date + 1 month
                } elseif ($request->subscription == '2m') {
                    $new_subscription->ending_date = Carbon::now()->addMonth(2);
                } elseif ($request->subscription == '3m') {
                    $new_subscription->ending_date = Carbon::now()->addMonth(3);
                } elseif ($request->subscription == '1y') {
                    $new_subscription->ending_date = Carbon::now()->addYear();
                } elseif ($request->subscription == '2y') {
                    $new_subscription->ending_date = Carbon::now()->addYear(2);
                }
                $new_subscription->save();
            }
        }
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->phone = $request->phone;
        $enquiry->state = $request->state;
        $enquiry->investment = $request->investment;
        $enquiry->resource = $request->resource;
        $enquiry->segment = $request->segment;

        if ($enquiry->save()) {
            return redirect()->back()->with('success', 'Enquiry Edited Successfully');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }



    public function delete_enquiry($id)
    {
        $enquiry = Enquiry::where('id', $id);
        if ($enquiry->delete()) {
            return redirect()->back()->with('deleted', 'Lead Deleted Successfully');
        }
    }
}
