@extends('layouts.app')

@section('title', 'Donate')

@section('content')
<div>
    <section class="bg-gray-200 text-gray-800 rounded-md">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-red-600 font-semibold tracking-wide uppercase">Defend • Rescue • Deliver</h2>
                <p class="mt-4 max-w-2xl text-xl leading-8 text-gray-600 lg:mx-auto">
                    Sponsor a Child to Love
                </p>
            </div>

            <div class="mt-10">
                <div class="flex">
                    <div>
                        <img 
                            src="{{ asset('images/hero.jpeg') }}" 
                            alt="Image 1" 
                            class="rounded-md shadow-md w-96 h-96"
                        />
                    </div>
                    <div>
                        <img 
                            src="{{ asset('images/elderly.jpg') }}"
                            alt="Image 2" 
                            class="mx-auto rounded-md shadow-md w-96 h-96"
                        />
                    </div>
                    <div>
                        <img 
                            src="{{ asset('images/spon.jpeg') }}"
                            alt="Image 2" 
                            class="mx-auto rounded-md shadow-md w-96 h-96"
                        />
                    </div>  
                </div>
                <p class="mt-6 text-lg text-pink-700 text-center">
                    Relationships are a key component of Children to Love and what we stand for. Help support the growth and
                    development of a child in need in a tangible way!
                </p>
            </div>

            <div class="mt-16 bg-gray-100 p-6 rounded-md shadow-md">
                <h2 class="text-2xl font-bold text-gray-800">
                    Make a Difference Through Sponsorship
                </h2>
                <p class="mt-4 text-gray-700">
                    At Shareforcare, we believe that meaningful relationships are at the heart of creating positive change. Are you ready to make a personal connection and directly impact a life in need? Through our sponsorship program, you can support the growth and development of children, elderly individuals, or animals in a tangible way.
                </p>
                <h3 class="mt-4 text-lg font-semibold text-gray-800">
                    Sponsor a Child, Elder, or Animal
                </h3>
                <p class="mt-2 text-gray-700">
                    For just Rs 10000 per month, you can help us provide essential care and support:
                </p>
                <ul class="mt-2 list-disc list-inside text-gray-700">
                    <li>For Children: Education, nutritious meals, healthcare, and mentorship</li>
                    <li>For Elderly: Medical care, companionship, and dignified living assistance</li>
                    <li>For Animals: Food, shelter, veterinary care, and loving attention</li>
                </ul>
                <p class="mt-4 text-gray-700">
                    Your sponsorship covers the cost of these vital services, ensuring that those under our care receive the support they need to thrive.
                </p>
                <h3 class="mt-4 text-lg font-semibold text-gray-800">
                    Building Connections
                </h3>
                <p class="mt-2 text-gray-700">
                    Many Shareforcare sponsors have formed deep, lasting connections with their sponsored individuals or animals. Depending on the circumstances, you may have the opportunity to:
                </p>
                <ul class="mt-2 list-disc list-inside text-gray-700">
                    <li>Exchange letters or cards</li>
                    <li>Send birthday or holiday greetings</li>
                    <li>Receive updates and photos</li>
                    <li>In some cases, arrange in-person visits</li>
                </ul>
                <p class="mt-4 text-gray-700">
                    Whether through correspondence or direct interaction, being a Shareforcare sponsor allows you to create a meaningful bond while making a significant difference in a life.
                </p>
                <h3 class="mt-4 text-lg font-semibold text-gray-800">
                    Get Started Today
                </h3>
                <p class="mt-2 text-gray-700">
                    Ready to begin your sponsorship journey? Click the button below to explore available sponsorship opportunities and start changing a life today.
                </p>
                <div class="mt-4 flex justify-center">
                    <a
                        href="#"
                        class="px-6 py-3 bg-blue-600 text-white font-medium text-sm rounded-md shadow-md hover:bg-blue-500 transition">
                        Explore Sponsorship Opportunities
                    </a>
                </div>
            </div>

            <div class="mt-8 flex flex-col items-center">
                <a
                    href="#"
                    class="mb-4 px-6 py-3 bg-red-600 text-white font-medium text-sm rounded-md shadow-md hover:bg-red-500 transition">
                    Sponsorship FAQ
                </a>
                <a
                    href="{{ route('sponsorform')}}"
                    class="mb-4 px-6 py-3 bg-green-600 text-white font-medium text-sm rounded-md shadow-md hover:bg-green-500 transition">
                    Sponsor a Child Today
                </a>
                <a
                    href="sponsorform2"
                    class="mb-4 px-6 py-3 bg-blue-600 text-white font-medium text-sm rounded-md shadow-md hover:bg-blue-500 transition">
                    Sponsor an Elderly Today
                </a>
                <a
                    href="sponsorform3"
                    class="px-6 py-3 bg-yellow-600 text-white font-medium text-sm rounded-md shadow-md hover:bg-yellow-500 transition">
                    Sponsor an Animal Today
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-100 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="col-span-1">
                    <h4 class="text-lg font-semibold text-gray-800">Address</h4>
                    <p class="mt-2 text-sm text-gray-600">
                        ShareForCare Intl.<br />
                        P.O. Box 12345<br />
                        Your City, Your Country
                    </p>
                </div>
                <div class="col-span-1">
                    <h4 class="text-lg font-semibold text-gray-800">Stay Connected</h4>
                    <p class="mt-2 text-sm text-gray-600">Follow us on social media</p>
                    <div class="mt-4 space-x-4">
                        <a href="#" class="text-gray-600 hover:text-gray-800">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-gray-800">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="col-span-1">
                    <h4 class="text-lg font-semibold text-gray-800">Contact Us</h4>
                    <p class="mt-2 text-sm text-gray-600">
                        Email: contact@shareforcare.org<br />
                        Phone: +1 (234) 567-8900
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection

