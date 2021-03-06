<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="clientDetails view large-9 medium-8 columns content">
    <div class="row">
        <div class="col-md-4">
            <div class="tableimg">
                <img src="<?= h($clientDetail->client_photo) ?>" style="width: 158px; height: 200px;"><br>
            </div>
            <p id="clientName"><?= h($clientDetail->client_name) ?></p>
        </div>
        <div class="tableui col-md-6" align="center">
            <table class="table table-responsive table-striped">
                <tbody>
                <caption >Personal Details</caption>
                <tr>
                    <th class="col-lg-2" scope="row"><?= __('Id') ?></th>
                    <td class="col-lg-4"><?= $this->Number->format($clientDetail->id) ?></td>
                </tr>
<!--                <tr>-->
<!--                    <th scope="row">--><?php // __('Client Name') ?><!--</th>-->
<!--                    <td>--><?php // h($clientDetail->client_name) ?><!--</td>-->
<!--                </tr>-->
                <tr>
                    <th scope="row"><?= __('Introducer Person') ?></th>
                    <td><?= h($clientDetail->introducer_person) ?></td>
                </tr>
                <!--                <tr>-->
                <!--                    <th scope="row">--><?php // __('Client Photo') ?><!--</th>-->
                <!--                    <td>--><?php // h($clientDetail->client_photo) ?><!--</td>-->
                <!--                </tr>-->
                <tr>
                    <th scope="row"><?= __('Mobile') ?></th>
                    <td><?= $clientDetail->mobile ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Status') ?></th>
                    <td><?= $this->Number->format($clientDetail->status) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Client Sign Photo') ?></th>
                    <td><img src="<?= h($clientDetail->client_sign_photo) ?>" width="80" height="40"></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Created Date') ?></th>
                    <td><?= h($clientDetail->created_date) ?></td>
                </tr>
                <!--                <tr>-->
                <!--                    <th scope="row">--><?php //__('Modified Date') ?><!--</th>-->
                <!--                    <td>--><?php //h($clientDetail->modified_date) ?><!--</td>-->
                <!--                </tr>-->
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
    </div>
</div>
