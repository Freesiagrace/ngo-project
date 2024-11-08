<?php $__env->startSection('title', 'Donate'); ?>
<?php $__env->startSection('content'); ?>
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
            <img src="<?php echo e(asset('images/QR1.jpg')); ?>" alt="QR Code" class="w-60 h-60 mx-auto rounded-md" />
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
        <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="mb-4 border-b w-full">
                <button 
                    onclick="toggleFAQ(<?php echo e($index); ?>)" 
                    class="flex justify-between w-full p-4 text-left text-gray-800 font-medium rounded-sm bg-gray-100 hover:bg-gray-200 focus:outline-none"
                >
                    <span><?php echo e($faq['question']); ?></span>
                    <span id="icon-<?php echo e($index); ?>">+</span>
                </button>
                <div id="answer-<?php echo e($index); ?>" class="overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                    <div class="p-4 text-gray-600 bg-white rounded-sm">
                        <?php echo e($faq['answer']); ?>

                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NgoProject\resources\views/donate.blade.php ENDPATH**/ ?>