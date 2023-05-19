<!-- Date Of Birth Field -->
<div id="div_investor_date_of_birth" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('date_of_birth', 'Date Of Birth:', ['class'=>'control-label']); ?> 
        <span id="spn_investor_date_of_birth">
        <?php if(isset($investor->date_of_birth) && empty($investor->date_of_birth)==false): ?>
            <?php echo $investor->date_of_birth; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Origin Geo Zone Field -->
<div id="div_investor_origin_geo_zone" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('origin_geo_zone', 'Origin Geo Zone:', ['class'=>'control-label']); ?> 
        <span id="spn_investor_origin_geo_zone">
        <?php if(isset($investor->origin_geo_zone) && empty($investor->origin_geo_zone)==false): ?>
            <?php echo $investor->origin_geo_zone; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Origin Lga Field -->
<div id="div_investor_origin_lga" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('origin_lga', 'Origin Lga:', ['class'=>'control-label']); ?> 
        <span id="spn_investor_origin_lga">
        <?php if(isset($investor->origin_lga) && empty($investor->origin_lga)==false): ?>
            <?php echo $investor->origin_lga; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Address Street Field -->
<div id="div_investor_address_street" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('address_street', 'Address Street:', ['class'=>'control-label']); ?> 
        <span id="spn_investor_address_street">
        <?php if(isset($investor->address_street) && empty($investor->address_street)==false): ?>
            <?php echo $investor->address_street; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Address Town Field -->
<div id="div_investor_address_town" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('address_town', 'Address Town:', ['class'=>'control-label']); ?> 
        <span id="spn_investor_address_town">
        <?php if(isset($investor->address_town) && empty($investor->address_town)==false): ?>
            <?php echo $investor->address_town; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Address State Field -->
<div id="div_investor_address_state" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('address_state', 'Address State:', ['class'=>'control-label']); ?> 
        <span id="spn_investor_address_state">
        <?php if(isset($investor->address_state) && empty($investor->address_state)==false): ?>
            <?php echo $investor->address_state; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Status Field -->
<div id="div_investor_status" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('status', 'Status:', ['class'=>'control-label']); ?> 
        <span id="spn_investor_status">
        <?php if(isset($investor->status) && empty($investor->status)==false): ?>
            <?php echo $investor->status; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Bank Account Name Field -->
<div id="div_investor_bank_account_name" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('bank_account_name', 'Bank Account Name:', ['class'=>'control-label']); ?> 
        <span id="spn_investor_bank_account_name">
        <?php if(isset($investor->bank_account_name) && empty($investor->bank_account_name)==false): ?>
            <?php echo $investor->bank_account_name; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Bank Account Number Field -->
<div id="div_investor_bank_account_number" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('bank_account_number', 'Bank Account Number:', ['class'=>'control-label']); ?> 
        <span id="spn_investor_bank_account_number">
        <?php if(isset($investor->bank_account_number) && empty($investor->bank_account_number)==false): ?>
            <?php echo $investor->bank_account_number; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Bank Name Field -->
<div id="div_investor_bank_name" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('bank_name', 'Bank Name:', ['class'=>'control-label']); ?> 
        <span id="spn_investor_bank_name">
        <?php if(isset($investor->bank_name) && empty($investor->bank_name)==false): ?>
            <?php echo $investor->bank_name; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Bank Verification Number Field -->
<div id="div_investor_bank_verification_number" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('bank_verification_number', 'Bank Verification Number:', ['class'=>'control-label']); ?> 
        <span id="spn_investor_bank_verification_number">
        <?php if(isset($investor->bank_verification_number) && empty($investor->bank_verification_number)==false): ?>
            <?php echo $investor->bank_verification_number; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- National Id Number Field -->
<div id="div_investor_national_id_number" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('national_id_number', 'National Id Number:', ['class'=>'control-label']); ?> 
        <span id="spn_investor_national_id_number">
        <?php if(isset($investor->national_id_number) && empty($investor->national_id_number)==false): ?>
            <?php echo $investor->national_id_number; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Cscs Id Number Field -->
<div id="div_investor_cscs_id_number" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('cscs_id_number', 'Cscs Id Number:', ['class'=>'control-label']); ?> 
        <span id="spn_investor_cscs_id_number">
        <?php if(isset($investor->cscs_id_number) && empty($investor->cscs_id_number)==false): ?>
            <?php echo $investor->cscs_id_number; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Chn Id Number Field -->
<div id="div_investor_chn_id_number" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('chn_id_number', 'Chn Id Number:', ['class'=>'control-label']); ?> 
        <span id="spn_investor_chn_id_number">
        <?php if(isset($investor->chn_id_number) && empty($investor->chn_id_number)==false): ?>
            <?php echo $investor->chn_id_number; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<?php /**PATH C:\Users\DocB\Desktop\workspace\dmo-savings-bond-module\src/../resources/views/pages/investors/show_fields.blade.php ENDPATH**/ ?>