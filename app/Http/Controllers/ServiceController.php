<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public static function getServices(): array
    {
        return [
            'house-manager' => [
                'slug' => 'house-manager',
                'title' => 'House Manager & Estate Managers',
                'category' => 'Estate Management',
                'subtitle' => 'Expert Property and Household Management',
                'short_description' => 'Solitaire Consultancy provides highly experienced House Managers and Estate Managers who oversee the seamless operation of your luxury properties, domestic staff, and vendor coordination with absolute precision and discretion.',
                'description' => 'Solitaire Consultancy provides highly experienced House Managers and Estate Managers who oversee the seamless operation of your luxury properties. From managing domestic staff and coordinating with vendors, to ensuring impeccable maintenance and security, our estate managers are trained to handle complex household operations with absolute precision and discretion. Trust us to find the perfect professional to maintain the high standards of your private residence.',
                'image' => asset('images/house_manager_1791033588093.jpg'),
                'icon' => 'estate',
                'highlights' => [
                    'Comprehensive staff supervision & daily household rosters',
                    'Vendor, contractor & luxury property maintenance management',
                    'Strict privacy, security & confidentiality standards',
                    'Financial oversight, household budgets & expense tracking',
                ],
            ],
            'executive-assistant' => [
                'slug' => 'executive-assistant',
                'title' => 'Executive & Personal Assistants',
                'category' => 'Executive Support',
                'subtitle' => 'Dedicated Support for Your Busy Lifestyle',
                'short_description' => 'Meticulously vetted Executive and Personal Assistants to manage demanding schedules, bespoke international travel itineraries, private affairs, and complex administrative operations with unwavering discretion.',
                'description' => 'Our highly capable Executive Assistants and Personal Assistants are meticulously vetted to manage your demanding schedule, arrange bespoke travel, and handle complex administrative tasks. Whether you need support for your business endeavors or personal lifestyle requirements, our candidates bring exceptional organizational skills, unwavering confidentiality, and a proactive approach to ensure your life runs smoothly.',
                'image' => asset('images/executive_assistant_1791033601425.jpg'),
                'icon' => 'assistant',
                'highlights' => [
                    'Demanding calendar, appointment & meeting coordination',
                    'Bespoke global travel, private aviation & hotel itineraries',
                    'Confidential correspondence & business document management',
                    'Personal lifestyle concierge & daily administrative support',
                ],
            ],
            'chef' => [
                'slug' => 'chef',
                'title' => 'Private Chefs & Cooks',
                'category' => 'Culinary Excellence',
                'subtitle' => 'Culinary Excellence Tailored to Your Palate',
                'short_description' => 'Elite Private Chefs and Cooks delivering restaurant-grade gastronomy in the comfort of your private residence, customized precisely to your dietary preferences, cultural tastes, and fine dining entertainment.',
                'description' => 'Elevate your dining experience with Solitaire Consultancy’s elite Private Chefs and Cooks. Our culinary experts are capable of designing bespoke menus that cater specifically to your dietary preferences, cultural tastes, and entertaining needs. From daily family meals to grand dinner parties, our chefs deliver restaurant-quality cuisine in the comfort of your own home, prioritizing fresh ingredients, impeccable presentation, and absolute food safety.',
                'image' => asset('images/private_chef_1791033614640.jpg'),
                'icon' => 'chef',
                'highlights' => [
                    'Customized multi-cuisine menus (Continental, Indian, Asian, Vegan, Keto)',
                    'Specialized dietary management & farm-to-table organic sourcing',
                    'Formal dinner parties, banquets & intimate family dining',
                    'Highest standards of food safety, kitchen hygiene & pantry curation',
                ],
            ],
            'personal-butler' => [
                'slug' => 'personal-butler',
                'title' => 'Personal Butlers',
                'category' => 'Private Hospitality',
                'subtitle' => 'The Pinnacle of Personalized Household Service',
                'short_description' => 'Impeccably trained Personal Butlers steeped in traditional British and modern luxury hospitality, anticipating your personal needs, managing wardrobes, and greeting guests with grace and discretion.',
                'description' => 'Experience the ultimate in bespoke household service with our impeccably trained Personal Butlers. Trained in the finest traditions of hospitality, our butlers are dedicated to maintaining the sanctuary of your home. They anticipate your needs, manage your wardrobe, coordinate sophisticated events, and provide highly personalized service with the utmost discretion and grace, ensuring a refined and effortless lifestyle for you and your guests.',
                'image' => asset('images/personal_butler_1791033627050.jpg'),
                'icon' => 'butler',
                'highlights' => [
                    'Silver service, formal dining etiquette & beverage cellar management',
                    'Wardrobe curation, packing/unpacking & fine fabric care',
                    'Distinguished guest reception & seamless VIP hosting',
                    'Intuitive, discreet service tailored to your personal preferences',
                ],
            ],
            'chauffeur' => [
                'slug' => 'chauffeur',
                'title' => 'Chauffeurs & Drivers',
                'category' => 'Executive Transport',
                'subtitle' => 'Professional, Safe, and Discreet Transportation',
                'short_description' => 'Vetted, professional, and security-conscious Chauffeurs providing seamless, punctual, and safe transportation in luxury vehicles across Mumbai, with advanced defensive driving and route expertise.',
                'description' => 'Solitaire Consultancy connects you with professional, discreet, and highly trained Chauffeurs and Drivers. Understanding that your time and safety are paramount, our chauffeurs ensure your secure and timely arrival at every destination. With extensive knowledge of local routes, advanced driving skills, and a commitment to maintaining your luxury vehicles in pristine condition, our drivers provide a seamless and relaxing travel experience.',
                'image' => asset('images/chauffeur_1791033640039.jpg'),
                'icon' => 'chauffeur',
                'highlights' => [
                    'Advanced defensive driving skills & road safety protocols',
                    'Impeccable care and maintenance of luxury vehicle fleets',
                    'In-depth knowledge of Mumbai navigation, bypasses & airport corridors',
                    'Unwavering punctuality, professional demeanor & client discretion',
                ],
            ],
            'nanny' => [
                'slug' => 'nanny',
                'title' => 'Nannies & Babysitters',
                'category' => 'Child Care & Education',
                'subtitle' => 'Nurturing Care for Your Most Precious Assets',
                'short_description' => 'Warm, educated, and thoroughly background-checked Nannies and Babysitters dedicated to the holistic well-being, early learning routines, safety, and emotional development of your children.',
                'description' => 'We understand that entrusting someone with your children requires absolute confidence. Solitaire Consultancy provides experienced, vetted, and deeply nurturing Nannies and Babysitters who are dedicated to the well-being and development of your children. From educational engagement and routine management to providing a safe, loving environment, our child care professionals offer absolute peace of mind for busy parents.',
                'image' => asset('images/nanny_1791033658428.jpg'),
                'icon' => 'nanny',
                'highlights' => [
                    'First-aid & child safety certified professionals',
                    'Age-appropriate cognitive, creative & physical development',
                    'Daily nutrition, sleep routine & educational homework support',
                    'Thorough background checks & impeccable family references',
                ],
            ],
        ];
    }

    public function index()
    {
        $services = self::getServices();
        return view('public.services', compact('services'));
    }

    public function show($slug)
    {
        $services = self::getServices();

        if (!array_key_exists($slug, $services)) {
            abort(404);
        }

        $service = $services[$slug];
        $otherServices = array_filter($services, fn($key) => $key !== $slug, ARRAY_FILTER_USE_KEY);

        return view('public.service', compact('service', 'otherServices'));
    }
}
