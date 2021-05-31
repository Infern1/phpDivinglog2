<?php use App\Libraries\UrlHelper;
$divetrip = model('App\Models\DivetripModel');
$diveshop = model('App\Models\DiveshopModel');
?>

<div class="container">
    <!-- first row -->
    <div class="row align-items-start">
        <div class="col">
            <div class="p-3 mb-2 bg-light text-dark">
                <?= lang('Text.logbook_divedate') ?>
            </div>
            <?php echo !empty($dive['Divedate']) ? $dive['Divedate'] : '-'; ?>
        </div>
        <div class="col">
            <div class="p-3 mb-2 bg-light text-dark">
                <?= lang('Text.logbook_entrytime') ?>
            </div>
            <?php echo !empty($dive['Entrytime']) ? $dive['Entrytime'] : '-'; ?>
        </div>
        <div class="col">
            <div class="p-3 mb-2 bg-light text-dark">
                <?= lang('Text.logbook_divetime') ?>
            </div>
            <?php echo !empty($dive['Divetime']) ? $dive['Divetime'] : '-'; ?>
        </div>
        <div class="col">
            <div class="p-3 mb-2 bg-light text-dark">
                <?= lang('Text.logbook_depth') ?>
            </div>
            <?php echo !empty($dive['Depth']) ? $dive['Depth'] : '-'; ?>
        </div>
    </div>
    <!-- second row -->

    <div class="row align-items-center">
        <div class="col-md-4">
            <div class="p-6 mb-2 bg-light text-dark">
                <?= lang('Text.logbook_place') ?>
            </div>
            <?php echo UrlHelper::detail_url('diveplace', $dive['PlaceID'], $dive['Place']); ?>
        </div>
        <div class="col-md-2 offset-md-2">
            <div class="p-3 mb-2 bg-light text-dark">
                <?= lang('Text.logbook_city') ?>
            </div>
            <?php echo UrlHelper::detail_url('divecity', $dive['CityID'], $dive['City']); ?>
        </div>
    </div>

    <div class="row align-items-center">
        <div class="col">
            <div class="p-3 mb-2 bg-light text-dark">
                <?= lang('Text.logbook_country') ?>
            </div>
            <?php echo UrlHelper::detail_url('divecountry', $dive['PlaceID'], $dive['Country']); ?>
        </div>
        <div class="col">
            <div class="p-3 mb-2 bg-light text-dark">
                <?= lang('Text.logbook_divemaster') ?>
            </div>
            <?php echo !empty($dive['Divemaster']) ? $dive['Divemaster'] : '-'; ?>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col">
            <div class="p-3 mb-2 bg-light text-dark">
                <?= lang('Text.logbook_dive_shop') ?>
            </div>
            <?php echo UrlHelper::detail_url(
                'diveshop',
                $dive['ShopID'],
                isset($diveshop->find($dive['ShopID'])['ShopName']) ? $diveshop->find($dive['ShopID'])['ShopName'] : ''
            ); ?>
        </div>
        <div class="col">
            <div class="p-3 mb-2 bg-light text-dark">
                <?= lang('Text.logbook_dive_trip') ?>
            </div>
            <?php echo UrlHelper::detail_url(
                'divetrip',
                $dive['TripID'],
                isset($divetrip->find($dive['TripID'])['TripName']) ? $divetrip->find($dive['TripID'])['TripName'] : ''
            ); ?>
        </div>
    </div>
    <div class="row align-items-end">
        <div class="col">
            One of three columns
        </div>
        <div class="col">
            One of three columns
        </div>
        <div class="col">
            One of three columns
        </div>
        <div class="col">
            One of three columns
        </div>
    </div>
    <p><?= esc($dive['Number']) ?></p>

</div>