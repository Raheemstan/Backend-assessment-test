<!-- Broker Code Field -->
<div id="div_subscription_broker_code" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('broker_code', 'Broker Code:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_broker_code">
        <?php if(isset($subscription->broker_code) && empty($subscription->broker_code)==false): ?>
            <?php echo $subscription->broker_code; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Broker Name Field -->
<div id="div_subscription_broker_name" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('broker_name', 'Broker Name:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_broker_name">
        <?php if(isset($subscription->broker_name) && empty($subscription->broker_name)==false): ?>
            <?php echo $subscription->broker_name; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Status Field -->
<div id="div_subscription_status" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('status', 'Status:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_status">
        <?php if(isset($subscription->status) && empty($subscription->status)==false): ?>
            <?php echo $subscription->status; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Price Per Unit Field -->
<div id="div_subscription_price_per_unit" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('price_per_unit', 'Price Per Unit:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_price_per_unit">
        <?php if(isset($subscription->price_per_unit) && empty($subscription->price_per_unit)==false): ?>
            <?php echo $subscription->price_per_unit; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Total Price Field -->
<div id="div_subscription_total_price" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('total_price', 'Total Price:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_total_price">
        <?php if(isset($subscription->total_price) && empty($subscription->total_price)==false): ?>
            <?php echo $subscription->total_price; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Interest Rate Pct Field -->
<div id="div_subscription_interest_rate_pct" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('interest_rate_pct', 'Interest Rate Pct:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_interest_rate_pct">
        <?php if(isset($subscription->interest_rate_pct) && empty($subscription->interest_rate_pct)==false): ?>
            <?php echo $subscription->interest_rate_pct; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Offer Start Date Field -->
<div id="div_subscription_offer_start_date" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('offer_start_date', 'Offer Start Date:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_offer_start_date">
        <?php if(isset($subscription->offer_start_date) && empty($subscription->offer_start_date)==false): ?>
            <?php echo $subscription->offer_start_date; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Offer End Date Field -->
<div id="div_subscription_offer_end_date" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('offer_end_date', 'Offer End Date:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_offer_end_date">
        <?php if(isset($subscription->offer_end_date) && empty($subscription->offer_end_date)==false): ?>
            <?php echo $subscription->offer_end_date; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Offer Settlement Date Field -->
<div id="div_subscription_offer_settlement_date" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('offer_settlement_date', 'Offer Settlement Date:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_offer_settlement_date">
        <?php if(isset($subscription->offer_settlement_date) && empty($subscription->offer_settlement_date)==false): ?>
            <?php echo $subscription->offer_settlement_date; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Offer Maturity Date Field -->
<div id="div_subscription_offer_maturity_date" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('offer_maturity_date', 'Offer Maturity Date:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_offer_maturity_date">
        <?php if(isset($subscription->offer_maturity_date) && empty($subscription->offer_maturity_date)==false): ?>
            <?php echo $subscription->offer_maturity_date; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Tenor Years Field -->
<div id="div_subscription_tenor_years" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('tenor_years', 'Tenor Years:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_tenor_years">
        <?php if(isset($subscription->tenor_years) && empty($subscription->tenor_years)==false): ?>
            <?php echo $subscription->tenor_years; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Investor Email Field -->
<div id="div_subscription_investor_email" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('investor_email', 'Investor Email:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_investor_email">
        <?php if(isset($subscription->investor_email) && empty($subscription->investor_email)==false): ?>
            <?php echo $subscription->investor_email; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Investor Telephone Field -->
<div id="div_subscription_investor_telephone" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('investor_telephone', 'Investor Telephone:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_investor_telephone">
        <?php if(isset($subscription->investor_telephone) && empty($subscription->investor_telephone)==false): ?>
            <?php echo $subscription->investor_telephone; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- First Name Field -->
<div id="div_subscription_first_name" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('first_name', 'First Name:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_first_name">
        <?php if(isset($subscription->first_name) && empty($subscription->first_name)==false): ?>
            <?php echo $subscription->first_name; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Middle Name Field -->
<div id="div_subscription_middle_name" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('middle_name', 'Middle Name:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_middle_name">
        <?php if(isset($subscription->middle_name) && empty($subscription->middle_name)==false): ?>
            <?php echo $subscription->middle_name; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Last Name Field -->
<div id="div_subscription_last_name" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('last_name', 'Last Name:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_last_name">
        <?php if(isset($subscription->last_name) && empty($subscription->last_name)==false): ?>
            <?php echo $subscription->last_name; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Date Of Birth Field -->
<div id="div_subscription_date_of_birth" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('date_of_birth', 'Date Of Birth:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_date_of_birth">
        <?php if(isset($subscription->date_of_birth) && empty($subscription->date_of_birth)==false): ?>
            <?php echo $subscription->date_of_birth; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Origin Geo Zone Field -->
<div id="div_subscription_origin_geo_zone" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('origin_geo_zone', 'Origin Geo Zone:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_origin_geo_zone">
        <?php if(isset($subscription->origin_geo_zone) && empty($subscription->origin_geo_zone)==false): ?>
            <?php echo $subscription->origin_geo_zone; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Origin Lga Field -->
<div id="div_subscription_origin_lga" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('origin_lga', 'Origin Lga:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_origin_lga">
        <?php if(isset($subscription->origin_lga) && empty($subscription->origin_lga)==false): ?>
            <?php echo $subscription->origin_lga; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Address Street Field -->
<div id="div_subscription_address_street" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('address_street', 'Address Street:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_address_street">
        <?php if(isset($subscription->address_street) && empty($subscription->address_street)==false): ?>
            <?php echo $subscription->address_street; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Address Town Field -->
<div id="div_subscription_address_town" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('address_town', 'Address Town:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_address_town">
        <?php if(isset($subscription->address_town) && empty($subscription->address_town)==false): ?>
            <?php echo $subscription->address_town; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Address State Field -->
<div id="div_subscription_address_state" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('address_state', 'Address State:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_address_state">
        <?php if(isset($subscription->address_state) && empty($subscription->address_state)==false): ?>
            <?php echo $subscription->address_state; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Bank Account Name Field -->
<div id="div_subscription_bank_account_name" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('bank_account_name', 'Bank Account Name:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_bank_account_name">
        <?php if(isset($subscription->bank_account_name) && empty($subscription->bank_account_name)==false): ?>
            <?php echo $subscription->bank_account_name; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Bank Account Number Field -->
<div id="div_subscription_bank_account_number" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('bank_account_number', 'Bank Account Number:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_bank_account_number">
        <?php if(isset($subscription->bank_account_number) && empty($subscription->bank_account_number)==false): ?>
            <?php echo $subscription->bank_account_number; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Bank Name Field -->
<div id="div_subscription_bank_name" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('bank_name', 'Bank Name:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_bank_name">
        <?php if(isset($subscription->bank_name) && empty($subscription->bank_name)==false): ?>
            <?php echo $subscription->bank_name; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Bank Verification Number Field -->
<div id="div_subscription_bank_verification_number" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('bank_verification_number', 'Bank Verification Number:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_bank_verification_number">
        <?php if(isset($subscription->bank_verification_number) && empty($subscription->bank_verification_number)==false): ?>
            <?php echo $subscription->bank_verification_number; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- National Id Number Field -->
<div id="div_subscription_national_id_number" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('national_id_number', 'National Id Number:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_national_id_number">
        <?php if(isset($subscription->national_id_number) && empty($subscription->national_id_number)==false): ?>
            <?php echo $subscription->national_id_number; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Cscs Id Number Field -->
<div id="div_subscription_cscs_id_number" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('cscs_id_number', 'Cscs Id Number:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_cscs_id_number">
        <?php if(isset($subscription->cscs_id_number) && empty($subscription->cscs_id_number)==false): ?>
            <?php echo $subscription->cscs_id_number; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Chn Id Number Field -->
<div id="div_subscription_chn_id_number" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('chn_id_number', 'Chn Id Number:', ['class'=>'control-label']); ?> 
        <span id="spn_subscription_chn_id_number">
        <?php if(isset($subscription->chn_id_number) && empty($subscription->chn_id_number)==false): ?>
            <?php echo $subscription->chn_id_number; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<?php /**PATH C:\Users\DocB\Desktop\workspace\dmo-savings-bond-module\src/../resources/views/pages/subscriptions/show_fields.blade.php ENDPATH**/ ?>