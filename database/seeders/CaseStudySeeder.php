<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CaseStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         CaseStudy::insert([
    [
        'title' => 'Olivia Rivers',
        'subtitle' => 'Digital Platform for Creative Professionals',
        'client' => 'ThemePure',
        'date' => '2025-06-08',
        'role' => 'Brand, Product',
        'visit_url' => 'https://oliviarivers.example.com',
        'banner_image' => 'case-studies/olivia-rivers-banner.jpg',
        'gallery' => json_encode([
            'case-studies/gallery/portfolio-details-1.jpg',
            'case-studies/gallery/portfolio-details-2.jpg',
            'case-studies/gallery/portfolio-details-3.jpg',
            'case-studies/gallery/portfolio-details-4.jpg',
            'case-studies/gallery/portfolio-details-5.jpg',
        ]),
        'overview' => 'We provided digital experience services to a rising brand...',
        'about_project' => 'Since 2004, we’ve delivered high-value solutions...',
        'approach' => 'Our journey was marked by strategic planning...',
        'conversion_increase' => 120,
        'traffic_increase' => 140,
        'daily_signups' => 80,
    ],
    [
        'title' => 'Ethan Carter',
        'subtitle' => 'Innovative Solutions for Modern Challenges',
        'client' => 'Tech Innovations',
        'date' => '2025-07-15',
        'role' => 'Lead Developer, UX Designer',
        'visit_url' => 'https://ethancarter.example.com',
        'banner_image' => 'case-studies/ethan-carter-banner.jpg',
        'gallery' => json_encode([
            'case-studies/gallery/ethan-carter-1.jpg',
            'case-studies/gallery/ethan-carter-2.jpg',
            'case-studies/gallery/ethan-carter-3.jpg',
            'case-studies/gallery/ethan-carter-4.jpg',
            'case-studies/gallery/ethan-carter-5.jpg',
        ]),
        'overview' => 'We partnered with Tech Innovations to enhance their digital presence...',
        'about_project' => 'Our collaboration focused on delivering cutting-edge solutions...',
        'approach' => 'We implemented a user-centric design approach...',
        'conversion_increase' => 150,
        'traffic_increase' => 160,
        'daily_signups' => 90,
    ],
    [
        'title' => 'Atlas Finance',
        'subtitle' => 'Redesigning a Legacy Banking Experience',
        'client' => 'Atlas Bank',
        'date' => '2025-01-22',
        'role' => 'UI/UX, Security Consultation, Fintech Development',
        'visit_url' => 'https://atlasfinance.example.com',
        'banner_image' => 'case-studies/atlas/banner.jpg',
        'gallery' => json_encode([
            'case-studies/gallery/portfolio-details-1.jpg',
            'case-studies/gallery/portfolio-details-2.jpg',
            'case-studies/gallery/portfolio-details-3.jpg',
            'case-studies/gallery/portfolio-details-4.jpg',
            'case-studies/gallery/portfolio-details-5.jpg',
        ]),
        'overview' => 'Atlas Bank needed a digital refresh. We created a fast, mobile-first banking dashboard with biometric security layers.',
        'about_project' => 'Legacy systems made user flow difficult. Our redesign introduced a frictionless login, dynamic accounts view, and real-time transaction processing.',
        'approach' => 'We worked closely with Atlas IT to migrate their old architecture into a secure Laravel + Vue SPA with zero downtime.',
        'conversion_increase' => 160,
        'traffic_increase' => 240,
        'daily_signups' => 120,
    ],
    [
        'title' => 'GreenTech Solutions',
        'subtitle' => 'Sustainable Energy Management Platform',
        'client' => 'GreenTech',
        'date' => '2025-03-10',
        'role' => 'Product Design, Development',
        'visit_url' => 'https://greentechsolutions.example.com',
        'banner_image' => 'case-studies/greentech/banner.jpg',
        'gallery' => json_encode([
            'case-studies/greentech/1.jpg',
            'case-studies/greentech/2.jpg',
            'case-studies/greentech/3.jpg',
            'case-studies/greentech/4.jpg',
        ]),
        'overview' => 'We developed a platform to help businesses manage their energy consumption and reduce costs.',
        'about_project' => 'The project aimed to create a user-friendly interface for monitoring energy usage and implementing sustainable practices.',
        'approach' => 'Our approach involved extensive user research, iterative design, and collaboration with energy experts.',
        'conversion_increase' => 180,
        'traffic_increase' => 200,
        'daily_signups' => 150,
    ],
    [
        'title' => 'EcoTrack',
        'subtitle' => 'Sustainability Dashboard for Enterprises',
        'client' => 'EcoTrack Inc.',
        'date' => '2025-03-18',
        'role' => 'Branding, UI Design, Analytics Integration',
        'visit_url' => 'https://ecotrack.example.com',
        'banner_image' => 'case-studies/ecotrack/banner.jpg',
        'gallery' => json_encode([
            'case-studies/gallery/portfolio-details-1.jpg',
            'case-studies/gallery/portfolio-details-2.jpg',
            'case-studies/gallery/portfolio-details-3.jpg',
            'case-studies/gallery/portfolio-details-4.jpg',
            'case-studies/gallery/portfolio-details-5.jpg',
        ]),
        'overview' => 'EcoTrack helps companies monitor their carbon footprint, optimize energy usage, and publish sustainability reports.',
        'about_project' => 'We built a data-heavy dashboard with clear, digestible insights. The system also allowed exporting branded reports.',
        'approach' => 'We focused on data visualization, responsive UX, and seamless API integrations for external sensors and IoT devices.',
        'conversion_increase' => 110,
        'traffic_increase' => 200,
        'daily_signups' => 92,
    ]
]);
    }
}
