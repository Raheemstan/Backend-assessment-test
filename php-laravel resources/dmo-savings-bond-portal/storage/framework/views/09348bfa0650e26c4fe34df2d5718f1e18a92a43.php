<!-- Status Field -->
<div id="div_broker_status" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('status', 'Status:', ['class'=>'control-label']); ?> 
        <span id="spn_broker_status">
        <?php if(isset($broker->status) && empty($broker->status)==false): ?>
            <?php echo $broker->status; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Broker Code Field -->
<div id="div_broker_broker_code" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('broker_code', 'Broker Code:', ['class'=>'control-label']); ?> 
        <span id="spn_broker_broker_code">
        <?php if(isset($broker->broker_code) && empty($broker->broker_code)==false): ?>
            <?php echo $broker->broker_code; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Full Name Field -->
<div id="div_broker_full_name" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('full_name', 'Full Name:', ['class'=>'control-label']); ?> 
        <span id="spn_broker_full_name">
        <?php if(isset($broker->full_name) && empty($broker->full_name)==false): ?>
            <?php echo $broker->full_name; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Short Name Field -->
<div id="div_broker_short_name" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('short_name', 'Short Name:', ['class'=>'control-label']); ?> 
        <span id="spn_broker_short_name">
        <?php if(isset($broker->short_name) && empty($broker->short_name)==false): ?>
            <?php echo $broker->short_name; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<?php /**PATH C:\Users\DocB\Desktop\workspace\dmo-savings-bond-module\src/../resources/views/pages/brokers/show_fields.blade.php ENDPATH**/ ?>