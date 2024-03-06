
    <div style="background-color: #f4f4f4; padding: 30px;">
        <h2 style="color: #333; margin-bottom: 20px;">Your Order Has Been Completed</h2>
        <p style="color: #666;">Dear Customer,</p>

        <p style="color: #666;">We're pleased to inform you that your order with the following details has been successfully completed:</p>

        <ul style="color: #666;">
            <li><strong>Order ID:</strong> <?php echo e($order_id); ?></li>
            <li><strong>Status:</strong> Completed</li>
        </ul>

        <p style="color: #666;">Thank you for choosing us. If you have any questions or need further assistance, please don't hesitate to contact us.</p>

        <!-- Button -->
        <a href="<?php echo e(route('order_feedback', ['order_id'=>$order_id])); ?>" style="display: inline-block; background-color: #007bff; color: #fff; text-decoration: none; padding: 10px 20px; border-radius: 5px;">Leave Feedback</a>

        <p style="color: #666;">Best regards,<br><?php echo e(config('app.name')); ?></p>
    </div>


<?php /**PATH C:\xampp\htdocs\blog.com\resources\views/emails/order_done_mail.blade.php ENDPATH**/ ?>