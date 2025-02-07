<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;


class FAQController extends Controller
{
    public function index()
{
    // Fetch FAQs from the database or define them here statically
    $faqs = [
        [
            'question' => 'Do you sell phones or tablets?',
            'answer' => 'A resounding NO. GSMArena.com provides detailed and accurate information about mobile phones but does not sell them.'
        ],
        [
            'question' => 'Can I send you my phone for repairs or upgrades?',
            'answer' => 'No, we do not repair or upgrade phones. We merely provide information about them.'
        ],
        // Add more FAQs here...
    ];
    
    return view('faq.index', compact('faqs'));
}
public function filterByCategory()
{
    $explanation = "Mobile technology has advanced rapidly, and it's difficult to provide filters for every single feature. However, you can use the 'Free text' field in the Phone Finder to search for specific features.";
    
    return view('faq.filter_by_category', compact('explanation'));
}
public function glossaryTerms()
{
    $message = "Feel free to send us suggestions for any missing or incorrect terms in the glossary. You can find the support email on the Contact Us page.";
    
    return view('faq.glossary_terms', compact('message'));
}
public function deviceCompatibility()
{
    $instruction = "You can use our comprehensive Coverage guide to check if a device works in your country. Find the guide at the top of our site.";
    
    return view('faq.device_compatibility', compact('instruction'));
}
public function topRatedPhones()
{
    $explanation = "Only phones that are 'Available' and have over 1000 votes are considered for the Top 5 list.";
    
    return view('faq.top_rated_phones', compact('explanation'));
}
public function incorrectData()
{
    $message = "If you think there is incorrect data, please email us with the correct information, along with where you found it.";
    
    return view('faq.incorrect_data', compact('message'));
}
public function deviceAvailability()
{
    $explanation = "Some models are announced but not yet released. Manufacturers often give vague timeframes for device availability, making it hard to predict exact release dates.";
    
    return view('faq.device_availability', compact('explanation'));
}

}
