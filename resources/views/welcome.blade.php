<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document Tracking System</title>
<script src="https://cdn.tailwindcss.com/3.4.16"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
<style>
:where([class^="ri-"])::before { content: "\f3c2"; }
body {
font-family: 'Inter', sans-serif;
}
.hero-bg {
background-image: url('https://readdy.ai/api/search-image?query=elegant%20corporate%20office%20environment%20with%20floating%20digital%20documents%20and%20red%20glowing%20connection%20lines%2C%20modern%20minimalist%20design%2C%20clean%20white%20workspace%20with%20subtle%20technology%20elements%2C%20professional%20atmosphere%20with%20depth%20of%20field%2C%20soft%20lighting%2C%20no%20people%20or%20text&width=1600&height=800&seq=67890&orientation=landscape');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
}
input:focus {
outline: none;
}
</style>
<script>tailwind.config={theme:{extend:{colors:{primary:'#8B0000',secondary:'#4B5563'},borderRadius:{'none':'0px','sm':'4px',DEFAULT:'8px','md':'12px','lg':'16px','xl':'20px','2xl':'24px','3xl':'32px','full':'9999px','button':'8px'}}}}</script>
</head>
<body class="bg-gray-50">
<!-- Header -->
<header class="fixed top-0 left-0 right-0 bg-white shadow-sm z-50">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-between items-center h-16">
<div class="flex items-center">
<a href="#" class="flex items-center">
<img src="https://play-lh.googleusercontent.com/PyMkbUMh997psckFgLwHKERDwEVqiAfaIVGweHyPeWni5JlQ2ZhFFITsQU-0l6Xmjg" alt="Logo" class="h-8 w-auto">
</a>
</div>
<div class="hidden md:flex items-center space-x-8">
<a href="#home" class="text-gray-700 hover:text-primary font-medium">Home</a>
<a href="#features" class="text-gray-700 hover:text-primary font-medium">Features</a>
<a href="#about" class="text-gray-700 hover:text-primary font-medium">About</a>
<a href="#contact" class="text-gray-700 hover:text-primary font-medium">Contact</a>
<a href="/login" class="bg-primary text-white px-4 py-2 !rounded-button font-medium hover:bg-primary/90 transition-colors whitespace-nowrap">Login</a>
</div>
<div class="md:hidden flex items-center">
<button id="mobile-menu-button" class="w-10 h-10 flex items-center justify-center text-gray-700">
<i class="ri-menu-line ri-lg"></i>
</button>
</div>
</div>
</div>
<!-- Mobile menu -->
<div id="mobile-menu" class="md:hidden hidden bg-white border-t">
<div class="container mx-auto px-4 py-3 space-y-3">
<a href="#home" class="block text-gray-700 hover:text-primary font-medium py-2">Home</a>
<a href="#features" class="block text-gray-700 hover:text-primary font-medium py-2">Features</a>
<a href="#about" class="block text-gray-700 hover:text-primary font-medium py-2">About</a>
<a href="#contact" class="block text-gray-700 hover:text-primary font-medium py-2">Contact</a>
<a href="/login" class="block bg-primary text-white px-4 py-2 !rounded-button font-medium hover:bg-primary/90 transition-colors text-center whitespace-nowrap">Login</a>
</div>
</div>
</header>
<!-- Hero Section -->
<section id="home" class="hero-bg pt-32 pb-20 relative">
<div class="absolute inset-0 bg-gradient-to-r from-white/90 to-white/30"></div>
<div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
<div class="flex flex-col md:flex-row items-center">
<div class="md:w-1/2 mb-10 md:mb-0">
<h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-4">
Track Documents <span class="text-primary">Effortlessly</span>
</h1>
<p class="text-lg md:text-xl text-gray-600 mb-8 max-w-lg">
Manage and track document movement within your organization for better efficiency and transparency.
</p>
<div class="flex flex-col sm:flex-row gap-4">
<a href="/login" class="bg-primary text-white px-6 py-3 !rounded-button font-medium hover:bg-primary/90 transition-colors text-center whitespace-nowrap">
Get Started
</a>
<a href="#about" class="border border-gray-300 text-gray-700 px-6 py-3 !rounded-button font-medium hover:bg-gray-50 transition-colors text-center whitespace-nowrap">
Learn More
</a>
</div>
</div>
</div>
</div>
</section>
<!-- Features Section -->
<section id="features" class="py-20 bg-white">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-16">
<h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Key Features</h2>
<p class="text-lg text-gray-600 max-w-2xl mx-auto">
Our document tracking system provides everything you need to manage your documents efficiently.
</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Feature 1 -->
<div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
<div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
<i class="ri-upload-cloud-line ri-lg text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-2">Upload and Assign Documents</h3>
<p class="text-gray-600">
Easily upload documents and assign them to specific departments or individuals for processing.
</p>
</div>
<!-- Feature 2 -->
<div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
<div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
<i class="ri-history-line ri-lg text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-2">Track Document History</h3>
<p class="text-gray-600">
View the complete history of each document including all actions, comments, and status changes.
</p>
</div>
<!-- Feature 3 -->
<div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
<div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
<i class="ri-toggle-line ri-lg text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-2">Set and Update Statuses</h3>
<p class="text-gray-600">
Create custom document statuses and update them as documents move through your workflow.
</p>
</div>
<!-- Feature 4 -->
<div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
<div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
<i class="ri-notification-3-line ri-lg text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-2">Notifications and Reminders</h3>
<p class="text-gray-600">
Receive timely notifications about document updates and reminders for pending actions.
</p>
</div>
<!-- Feature 5 -->
<div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
<div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
<i class="ri-user-settings-line ri-lg text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-2">Role-based User Management</h3>
<p class="text-gray-600">
Assign different access levels and permissions based on user roles within your organization.
</p>
</div>
<!-- Feature 6 -->
<div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
<div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
<i class="ri-file-chart-line ri-lg text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-2">Generate Reports</h3>
<p class="text-gray-600">
Export comprehensive reports in multiple formats including CSV and PDF for analysis.
</p>
</div>
</div>
</div>
</section>
<!-- Who It's For Section -->
<section id="about" class="py-20 bg-gray-50">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-16">
<h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Who It's For</h2>
<p class="text-lg text-gray-600 max-w-2xl mx-auto">
Our system is designed to meet the needs of various roles within your organization.
</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- Admin Role -->
<div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
<div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6 mx-auto">
<i class="ri-admin-line ri-xl text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-3 text-center">Administrator</h3>
<p class="text-gray-600 text-center">
Configure system settings, manage user accounts, and oversee the entire document workflow process.
</p>
<ul class="mt-4 space-y-2">
<li class="flex items-start">
<div class="w-5 h-5 flex-shrink-0 flex items-center justify-center mt-0.5">
<i class="ri-check-line text-primary"></i>
</div>
<span class="ml-2 text-gray-600">Full system configuration</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex-shrink-0 flex items-center justify-center mt-0.5">
<i class="ri-check-line text-primary"></i>
</div>
<span class="ml-2 text-gray-600">User management</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex-shrink-0 flex items-center justify-center mt-0.5">
<i class="ri-check-line text-primary"></i>
</div>
<span class="ml-2 text-gray-600">Workflow customization</span>
</li>
</ul>
</div>
<!-- Clerk Role -->
<div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
<div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6 mx-auto">
<i class="ri-user-3-line ri-xl text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-3 text-center">Clerk</h3>
<p class="text-gray-600 text-center">
Handle day-to-day document processing, including uploading, categorizing, and routing documents.
</p>
<ul class="mt-4 space-y-2">
<li class="flex items-start">
<div class="w-5 h-5 flex-shrink-0 flex items-center justify-center mt-0.5">
<i class="ri-check-line text-primary"></i>
</div>
<span class="ml-2 text-gray-600">Document uploading</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex-shrink-0 flex items-center justify-center mt-0.5">
<i class="ri-check-line text-primary"></i>
</div>
<span class="ml-2 text-gray-600">Basic tracking</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex-shrink-0 flex items-center justify-center mt-0.5">
<i class="ri-check-line text-primary"></i>
</div>
<span class="ml-2 text-gray-600">Status updates</span>
</li>
</ul>
</div>
<!-- Reviewer Role -->
<div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
<div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6 mx-auto">
<i class="ri-file-search-line ri-xl text-primary"></i>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-3 text-center">Reviewer</h3>
<p class="text-gray-600 text-center">
Review, approve, or reject documents and provide feedback within the workflow.
</p>
<ul class="mt-4 space-y-2">
<li class="flex items-start">
<div class="w-5 h-5 flex-shrink-0 flex items-center justify-center mt-0.5">
<i class="ri-check-line text-primary"></i>
</div>
<span class="ml-2 text-gray-600">Document review</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex-shrink-0 flex items-center justify-center mt-0.5">
<i class="ri-check-line text-primary"></i>
</div>
<span class="ml-2 text-gray-600">Approval/rejection</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex-shrink-0 flex items-center justify-center mt-0.5">
<i class="ri-check-line text-primary"></i>
</div>
<span class="ml-2 text-gray-600">Comment and feedback</span>
</li>
</ul>
</div>
</div>
</div>
</section>
<!-- Testimonials Section -->
<section id="features" class="py-20 bg-white">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-16">
<h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
<p class="text-lg text-gray-600 max-w-2xl mx-auto">
Hear from organizations that have transformed their document management with our system.
</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Testimonial 1 -->
<div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
<div class="flex mb-4">
<i class="ri-star-fill text-yellow-400"></i>
<i class="ri-star-fill text-yellow-400"></i>
<i class="ri-star-fill text-yellow-400"></i>
<i class="ri-star-fill text-yellow-400"></i>
<i class="ri-star-fill text-yellow-400"></i>
</div>
<p class="text-gray-600 italic mb-6">
"This document tracking system has completely transformed how our legal department manages case files. We've reduced processing time by 40% and eliminated lost documents."
</p>
<div class="flex items-center">
<div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center mr-4">
<i class="ri-user-line text-gray-500"></i>
</div>
<div>
<h4 class="font-semibold text-gray-900">Michael Richardson</h4>
<p class="text-gray-500 text-sm">Legal Director, Westfield Partners</p>
</div>
</div>
</div>
<!-- Testimonial 2 -->
<div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
<div class="flex mb-4">
<i class="ri-star-fill text-yellow-400"></i>
<i class="ri-star-fill text-yellow-400"></i>
<i class="ri-star-fill text-yellow-400"></i>
<i class="ri-star-fill text-yellow-400"></i>
<i class="ri-star-fill text-yellow-400"></i>
</div>
<p class="text-gray-600 italic mb-6">
"As a government agency, we handle thousands of documents daily. This system has provided unprecedented transparency and accountability in our document workflow."
</p>
<div class="flex items-center">
<div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center mr-4">
<i class="ri-user-line text-gray-500"></i>
</div>
<div>
<h4 class="font-semibold text-gray-900">Joseph Tshimpanga </h4>
<p class="text-gray-500 text-sm">Operations Manager, City of Riverdale</p>
</div>
</div>
</div>
<!-- Testimonial 3 -->
<div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
<div class="flex mb-4">
<i class="ri-star-fill text-yellow-400"></i>
<i class="ri-star-fill text-yellow-400"></i>
<i class="ri-star-fill text-yellow-400"></i>
<i class="ri-star-fill text-yellow-400"></i>
<i class="ri-star-half-fill text-yellow-400"></i>
</div>
<p class="text-gray-600 italic mb-6">
"The role-based access control and detailed audit trail have been game-changers for our compliance requirements. Implementation was smooth and the support team is excellent."
</p>
<div class="flex items-center">
<div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center mr-4">
<i class="ri-user-line text-gray-500"></i>
</div>
<div>
<h4 class="font-semibold text-gray-900">David Thompson</h4>
<p class="text-gray-500 text-sm">IT Director, Meridian Healthcare</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="py-20 bg-primary/5">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="max-w-4xl mx-auto text-center">
<h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Ready to Transform Your Document Management?</h2>
<p class="text-lg text-gray-600 mb-8">
Join thousands of organizations that have streamlined their document workflows with our tracking system.
</p>
<div class="flex flex-col sm:flex-row gap-4 justify-center">
<a href="/login" class="bg-primary text-white px-8 py-3 !rounded-button font-medium hover:bg-primary/90 transition-colors text-center whitespace-nowrap">
Start Free Trial
</a>
<a href="#" class="bg-white text-gray-700 border border-gray-300 px-8 py-3 !rounded-button font-medium hover:bg-gray-50 transition-colors text-center whitespace-nowrap">
Schedule Demo
</a>
</div>
</div>
</div>
</section>
<!-- Footer -->
<footer id="contact" class="bg-gray-900 text-white pt-16 pb-8">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
<!-- Company Info -->
<div>
<img src="https://play-lh.googleusercontent.com/PyMkbUMh997psckFgLwHKERDwEVqiAfaIVGweHyPeWni5JlQ2ZhFFITsQU-0l6Xmjg" alt="Logo" class="h-12 w-auto mb-4">
<p class="text-gray-400 mb-4">
Streamlining document management for organizations of all sizes since 2020.
</p>
<div class="flex space-x-4">
<a href="#" class="text-gray-400 hover:text-white transition-colors">
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-twitter-x-line"></i>
</div>
</a>
<a href="#" class="text-gray-400 hover:text-white transition-colors">
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-linkedin-line"></i>
</div>
</a>
<a href="#" class="text-gray-400 hover:text-white transition-colors">
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-facebook-line"></i>
</div>
</a>
<a href="#" class="text-gray-400 hover:text-white transition-colors">
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-instagram-line"></i>
</div>
</a>
</div>
</div>
<!-- Quick Links -->
<div>
<h4 class="text-lg font-semibold mb-4">Quick Links</h4>
<ul class="space-y-2">
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">Features</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">Pricing</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
</ul>
</div>
<!-- Legal -->
<div>
<h4 class="text-lg font-semibold mb-4">Legal</h4>
<ul class="space-y-2">
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">Cookie Policy</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">GDPR Compliance</a></li>
</ul>
</div>
<!-- Newsletter -->
<div>
<h4 class="text-lg font-semibold mb-4">Stay Updated</h4>
<p class="text-gray-400 mb-4">Subscribe to our newsletter for the latest updates and features.</p>
<form class="flex">
<input type="email" placeholder="Your email" class="bg-gray-800 text-gray-200 px-4 py-2 !rounded-button border-none w-full">
<button type="submit" class="bg-primary text-white px-4 py-2 !rounded-button ml-2 whitespace-nowrap">Subscribe</button>
</form>
</div>
</div>
<div class="border-t border-gray-800 pt-8">
<p class="text-gray-500 text-center">
&copy; 2025 Document Tracking System. All rights reserved.
</p>
</div>
</div>
<!-- Scroll to Top Button -->
<button id="scrollToTop" class="fixed bottom-8 right-8 bg-primary text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center opacity-0 transition-opacity duration-300 hover:bg-primary/90">
<i class="ri-arrow-up-line ri-lg"></i>
</button>
</footer>
<script id="scroll-to-top-script">
document.addEventListener('DOMContentLoaded', function() {
const scrollToTopButton = document.getElementById('scrollToTop');
window.addEventListener('scroll', () => {
if (window.pageYOffset > 300) {
scrollToTopButton.style.opacity = '1';
} else {
scrollToTopButton.style.opacity = '0';
}
});
scrollToTopButton.addEventListener('click', () => {
window.scrollTo({
top: 0,
behavior: 'smooth'
});
});
});
</script>
<script id="mobile-menu-script">
document.addEventListener('DOMContentLoaded', function() {
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');
const menuLinks = document.querySelectorAll('#mobile-menu a');
mobileMenuButton.addEventListener('click', function() {
mobileMenu.classList.toggle('hidden');
if (mobileMenu.classList.contains('hidden')) {
mobileMenuButton.innerHTML = '<i class="ri-menu-line ri-lg"></i>';
} else {
mobileMenuButton.innerHTML = '<i class="ri-close-line ri-lg"></i>';
}
});
menuLinks.forEach(link => {
link.addEventListener('click', () => {
mobileMenu.classList.add('hidden');
mobileMenuButton.innerHTML = '<i class="ri-menu-line ri-lg"></i>';
});
});
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
anchor.addEventListener('click', function (e) {
e.preventDefault();
const targetId = this.getAttribute('href');
const targetElement = document.querySelector(targetId);
if (targetElement) {
window.scrollTo({
top: targetElement.offsetTop - 64,
behavior: 'smooth'
});
}
});
});
});
</script>
</body>
</html>