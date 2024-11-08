<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonateController extends Controller
{
    //
    public function showDonatePage()
    {
        $faqs = [
            ['question' => 'Can I pay using a credit card?', 'answer' => 'Yes! Once you enter the amount you would like to donate, you will have the option to pay via credit card to the left which is processed by Stripe.'],
            ['question' => 'Can I pay by check?', 'answer' => 'Yes, you can pay by check. Please contact us for the mailing address.'],
            ['question' => 'Are my donations tax-deductible?', 'answer' => 'Yes, donations are tax-deductible to the extent allowed by law.'],
            ['question' => 'Can I donate if I live outside India?', 'answer' => 'Yes, we accept donations from all countries.'],
            ['question' => 'How much of my donation will go directly toward programs?', 'answer' => 'A majority of your donation goes directly to the programs. Admin costs are kept minimal.'],
            ['question' => 'What is my donation used for?', 'answer' => 'Your donation helps fund important programs and services.'],
        ];

        return view('donate', compact('faqs'));
    }

}
