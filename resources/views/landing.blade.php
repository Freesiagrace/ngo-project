@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <x-hero />

    <!-- Mission Section -->
    <section class="container mx-auto py-12 text-center">
        <h2 class="text-3xl font-bold text-blue-600 dark:text-green-400">Our Mission</h2>
        <p class="mt-4 text-white">
            We aim to make the world a better place by providing essential items to those in need, ensuring their well-being and dignity.
        </p>
    </section>

    <!-- How It Works Section -->
    <section class="container mx-auto py-12 text-center">
        <h2 class="text-3xl font-bold text-blue-600 dark:text-green-400 mb-8">How It Works</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <x-card step="1" title="Choose Items" description="Browse the list of items required by NGOs and select what you want to donate." />
            <x-card step="2" title="Find Nearby NGOs" description="Find the nearest NGO or old age home that needs your donations using our location-based services." />
            <x-card step="3" title="Donate!" description="Donate your items and make a difference in someone's life." />
        </div>
    </section>
@endsection
