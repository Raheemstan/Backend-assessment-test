<!-- Status Field -->
<div id="div_offer_status" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('status', 'Status:', ['class'=>'control-label']); ?> 
        <span id="spn_offer_status">
        <?php if(isset($offer->status) && empty($offer->status)==false): ?>
            <?php echo $offer->status; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Offer Title Field -->
<div id="div_offer_offer_title" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('offer_title', 'Offer Title:', ['class'=>'control-label']); ?> 
        <span id="spn_offer_offer_title">
        <?php if(isset($offer->offer_title) && empty($offer->offer_title)==false): ?>
            <?php echo $offer->offer_title; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Price Per Unit Field -->
<div id="div_offer_price_per_unit" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('price_per_unit', 'Price Per Unit:', ['class'=>'control-label']); ?> 
        <span id="spn_offer_price_per_unit">
        <?php if(isset($offer->price_per_unit) && empty($offer->price_per_unit)==false): ?>
            <?php echo $offer->price_per_unit; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Max Units Per Investor Field -->
<div id="div_offer_max_units_per_investor" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('max_units_per_investor', 'Max Units Per Investor:', ['class'=>'control-label']); ?> 
        <span id="spn_offer_max_units_per_investor">
        <?php if(isset($offer->max_units_per_investor) && empty($offer->max_units_per_investor)==false): ?>
            <?php echo $offer->max_units_per_investor; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Interest Rate Pct Field -->
<div id="div_offer_interest_rate_pct" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('interest_rate_pct', 'Interest Rate Pct:', ['class'=>'control-label']); ?> 
        <span id="spn_offer_interest_rate_pct">
        <?php if(isset($offer->interest_rate_pct) && empty($offer->interest_rate_pct)==false): ?>
            <?php echo $offer->interest_rate_pct; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Offer Start Date Field -->
<div id="div_offer_offer_start_date" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('offer_start_date', 'Offer Start Date:', ['class'=>'control-label']); ?> 
        <span id="spn_offer_offer_start_date">
        <?php if(isset($offer->offer_start_date) && empty($offer->offer_start_date)==false): ?>
            <?php echo $offer->offer_start_date; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Offer End Date Field -->
<div id="div_offer_offer_end_date" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('offer_end_date', 'Offer End Date:', ['class'=>'control-label']); ?> 
        <span id="spn_offer_offer_end_date">
        <?php if(isset($offer->offer_end_date) && empty($offer->offer_end_date)==false): ?>
            <?php echo $offer->offer_end_date; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Offer Settlement Date Field -->
<div id="div_offer_offer_settlement_date" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('offer_settlement_date', 'Offer Settlement Date:', ['class'=>'control-label']); ?> 
        <span id="spn_offer_offer_settlement_date">
        <?php if(isset($offer->offer_settlement_date) && empty($offer->offer_settlement_date)==false): ?>
            <?php echo $offer->offer_settlement_date; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Offer Maturity Date Field -->
<div id="div_offer_offer_maturity_date" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('offer_maturity_date', 'Offer Maturity Date:', ['class'=>'control-label']); ?> 
        <span id="spn_offer_offer_maturity_date">
        <?php if(isset($offer->offer_maturity_date) && empty($offer->offer_maturity_date)==false): ?>
            <?php echo $offer->offer_maturity_date; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<!-- Tenor Years Field -->
<div id="div_offer_tenor_years" class="col-sm-12 mb-10">
    <p>
        <?php echo Form::label('tenor_years', 'Tenor Years:', ['class'=>'control-label']); ?> 
        <span id="spn_offer_tenor_years">
        <?php if(isset($offer->tenor_years) && empty($offer->tenor_years)==false): ?>
            <?php echo $offer->tenor_years; ?>

        <?php else: ?>
            N/A
        <?php endif; ?>
        </span>
    </p>
</div>

<?php /**PATH C:\Users\DocB\Desktop\workspace\dmo-savings-bond-module\src/../resources/views/pages/offers/show_fields.blade.php ENDPATH**/ ?>