<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="clientLoanPayments form large-9 medium-8 columns content">
    <?= $this->Form->create($clientLoanPayment) ?>
    <fieldset>
        <legend><?= __('Add Client Loan Payment') ?></legend>
        <?php
            echo $this->Form->input('client_loan_id', ['options' => $clientLoanInfo,'label' => 'Client name: ']);
            echo $this->Form->input('interest_received',['id' => 'interestReceived','label' => 'Interest Received (Rs.)']);
            echo $this->Form->input('installment_received',['id' => 'installmentReceived','label' => 'Installment Received (Rs.)']);
//            echo $this->Form->label('final_loan_amount',['label' => 'Loan amount (Rs.): ','text' => $loan_amount]);
            echo $this->Form->input('created_date',['value' => date("Y-m-d H:i:s"),'type' => 'hidden']);
//            echo $this->Form->input('modified_date', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
