<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gray-600 text-white rounded-md">
    <nav class="flex justify-center items-center p-4 shadow-md">
        <h1 class="text-2xl font-bold italic text-center">
            Sponsor today and Make a difference
        </h1>
    </nav>

    <div class="max-w-3xl mx-auto p-8">
        <h2 class="text-center text-3xl font-bold mb-3">Sponsor a Child to Love</h2>
        <img 
            src="<?php echo e(asset('images/children.jpg')); ?>" 
            alt="Image 1" 
            class="mx-auto rounded-md shadow-md max-w-full h-auto mb-3"
        />
        <form action="<?php echo e(route('sponsor.store')); ?>" method="POST" class="space-y-6">
            <?php echo csrf_field(); ?>

            <div>
                <label class="block text-lg font-semibold">Gender Preference</label>
                <div class="flex gap-4">
                    <?php $__currentLoopData = ['Girl', 'Boy', 'Either gender']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label>
                            <input type="radio" name="gender" value="<?php echo e($gender); ?>" /> <?php echo e($gender); ?>

                        </label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div>
                <label class="block text-lg font-semibold">Age Preference</label>
                <div class="flex gap-4">
                    <?php $__currentLoopData = ['0 - 10 years old', '11 - 18 years old', 'College Student', 'Any age']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $age): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label>
                            <input type="radio" name="age" value="<?php echo e($age); ?>" /> <?php echo e($age); ?>

                        </label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div>
                <label class="block text-lg font-semibold">Child’s Name (if known)</label>
                <input
                    type="text"
                    name="childName"
                    class="w-full border p-2 bg-white dark:bg-gray-700 rounded-md dark:text-white placeholder-gray-500 dark:placeholder-gray-400"
                    placeholder="Enter name..."
                />
            </div>

            <div>
                <label class="block text-lg font-semibold">Sponsorship Amount</label>
                <div class="flex gap-4">
                    <label>
                        <input type="radio" name="amount" value="$40" /> ₹ 10000
                    </label>
                    <label>
                        <input type="radio" name="amount" value="Other Amount" /> Other Amount
                    </label>
                </div>
            </div>

            <div>
                <label class="block text-lg font-semibold rounded-md">Do you have a message for us?</label>
                <textarea
                    name="message"
                    class="w-full border p-2 bg-white dark:bg-gray-700 dark:text-white placeholder-gray-500 dark:placeholder-gray-400"
                    rows="4"
                    placeholder="Enter your message..."
                ></textarea>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">
                Submit
            </button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NgoProject\resources\views/sponsorform.blade.php ENDPATH**/ ?>