<?php


// Multiple choose, calculate by %
$application_type = array(
    'Web Application or Website' => '100',
    'Android Mobile Application' => '60',
    'IOS Mobile Application' => '85',
    'Mobile Responsive View' => '30',
    'Desktop Application' => '90',
    'POS Application' => '100',
    'Cloud CRM Application' => '100'
);


// Single choose
$project_type = array(
    'Single Page Website Development' => '3500',
    'Simple Company Website Development - 4 pages' => '3500',
    'Simple Company Website Development - 5 pages' => '3800',
    'Simple Company Website Development - 6 pages' => '4000',
    'Simple Bisiness Website Development' => '5000',
    'Custom Bisiness Website Development' => '7000',
    'School Management System' => '8000',
    'College Management System' => '10000',
    'Library Management System' => '8000',
    'Education Management System' => '8000',
    'Institute Management System' => '8000',
    'Clinic Management System' => '8000',
    'SPA & Beauty Parlour Management System' => '8000',
    'Doctor Booking Management System' => '9000',
    'Dispensary Management System' => '9000',
    'Pharmacy & Medicine Management System' => '8500',
    'Resturant Booking System' => '9500',
    'Online Delivery System' => '10500',
    'Simple Online Shopping System' => '6500',
    'Custom Online Shopping System' => '9500',
    'eCommerce Website' => '10000',
    'Car Booking System' => '9500',
    'Blogging Website' => '4000',
    'Personal Website' => '4500',
    'Simple Profile Website' => '3000',
    'Photography Website' => '4500',
    'Portfolio Website' => '4500',
    'Social Media System' => '40000',
    'Online Messageing System' => '12000',
    'Personal Chat System' => '12000',
    'Employee & HR Management System' => '15000',
    'Stock & Account Management System' => '18000',
    'Telecalling Management System' => '15000',
    'Online Market Place System' => '11000',
    'Online Marketing Website' => '8000',
    'Lead Generation System' => '12000',
    'Payroll Management System' => '14000',
    'Distributor System' => '22000',
    'B2B Website' => '12000',
    'B2C Website' => '10000',
    'Gym or Yoga or Fitness Website' => '7000',
    'Client Based or Custom Requirement System' => '10000',
    'Online Accounting Software' => '6000',
    'Online Auto Invoice System' => '8000',
);
ksort($project_type);

$integration = array(
    'Payment Getway Integration' => '2000',
    'SMS Getway Integration' => '1600',
    'LIVE Chat Integration' => '0',
    'Social Media Sharing Integration' => '0'
);

$seo = array(
    'Viral Marketing on Facebook' => '6000',
    'Viral MarKeting on Twitter' => '6000',
    'Viral MarKeting on Youtube' => '8000',
    'Viral MarKeting on Instagram' => '4000',
    'Viral MarKeting on Linkedin' => '4000',
    'Search Engine Optimization (SEO)' => '8000',
    'Brand Creation' => '6000',
    'Lead Generation' => '4000',
    'Google Page Ranking' => '6000',
    'Google Business Registration' => '2000',
);
ksort($seo);


$maintaince = array(
    'For 1 Year' => '5000',
    'For 2 Years' => '8500',
    'For 3 Years' => '12000',
    'For 4 Years' => '16000',
    'For 5 Years' => '21000',
);


$design = array(
    'Logo Design' => '1200',
    'Brochure  Design' => '400',
    'Envelope Design' => '600',
    'Letter Head Design' => '400',
    'Visiting Card Design' => '600',
    'Banner Design' => '550',
    'Social Media Post Design' => '200',
    'Graphics Design' => '500',
    'Promotional Video' => '2500',
);
ksort($design);

?>