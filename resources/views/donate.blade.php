@extends('layouts.app')

@section('title', 'Donate')
@section('content')
<style>
    .overflow-hidden {
    overflow: hidden;
    transition: max-height 0.5s ease-in-out;
}
</style>


<div class="flex justify-center items-center h-screen">
    <!-- Left Section: QR Code and Buttons -->
    <div class="w-1/2 flex justify-center mr-6">
        <div class="text-center">
            <p class="text-2xl mb-4 dark:text-white">Scan QR to Donate</p>
            <img src="{{ asset('images/QR1.jpg')}}" alt="QR Code" class="w-60 h-60 mx-auto rounded-md" />
            <div class="flex flex-col space-y-4 mt-6"> 
                <button type="button" class="bg-pink-400 h-10 rounded-md"> Check out with Apple Pay</button>
                <button type="button" class="bg-red-400 h-10 rounded-md">Pay with American Express </button>
                <button type="button" class="bg-gray-300 h-10 rounded-md text-black">Pay with Visa</button>
            </div>
      </div>
    </div>
    <div class="h-40 border-l-2 border-gray-300 mr-32"></div>


    <div class="w-1/2 flex flex-col items-center">
        <h1 class="text-center text-2xl mb-4">FAQs</h1>
        @foreach ($faqs as $index => $faq)
            <div class="mb-4 border-b w-full">
                <button 
                    onclick="toggleFAQ({{ $index }})" 
                    class="flex justify-between w-full p-4 text-left text-gray-800 font-medium rounded-sm bg-gray-100 hover:bg-gray-200 focus:outline-none"
                >
                    <span>{{ $faq['question'] }}</span>
                    <span id="icon-{{ $index }}">+</span>
                </button>
                <div id="answer-{{ $index }}" class="overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                    <div class="p-4 text-gray-600 bg-white rounded-sm">
                        {{ $faq['answer'] }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
  </div>
  <script>
    function toggleFAQ(index) {
        const allAnswers = document.querySelectorAll('[id^="answer-"]');
        const allIcons = document.querySelectorAll('[id^="icon-"]');

        allAnswers.forEach((answer, idx) => {
            if (idx !== index) {
                answer.style.maxHeight = null;  // Close other FAQs
                allIcons[idx].innerText = '+';  // Reset icons
            }
        });

        const answer = document.getElementById(`answer-${index}`);
        const icon = document.getElementById(`icon-${index}`);
        
        if (answer.style.maxHeight) {
            answer.style.maxHeight = null;
            icon.innerText = '+';
        } else {
            answer.style.maxHeight = answer.scrollHeight + 'px';
            icon.innerText = '-';
        }
    }
</script>



@endsection