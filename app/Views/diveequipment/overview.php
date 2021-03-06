<?php $config = config('DiveLogConfig'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col"><?= lang(
                    'Text.equip_details_pagetitle'
                ) ?></div>
                <div class="col text-right">

                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="diveequipment" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th><?= lang('Text.equip_object') ?></th>
                            <th><?= lang('Text.equip_manufacturer') ?></th>
                            <th><?= lang('Text.equip_inactive') ?></th>
                            <th><?= lang('Text.equip_title_photo') ?></th>
                            <th><?= lang('Text.equip_title_service') ?></th>
                        </tr>
                    </thead>

                </table>
            </div>
            <div>
            </div>
        </div>
    </div>

</div>

<script>
$(document).ready(function() {
    $('#diveequipment').DataTable({
        language: {
            url: '<?= lang('Text.datatable_lang') ?>'
        },
        processing: true,
        serverSide: true,
        pageLength: <?= $config->max_list ?>,
        ajax: {
            url: "<?php echo base_url('diveequipment/fetch_all'); ?>",
            method: 'POST'
        },
        columns: [{
                data: 'Object'
            },
            {
                data: 'Manufacturer'
            },
            {
                data: 'Inactive'

            },
            {
                data: 'PhotoPath'
            },
            {
                data: 'Service'
            }

        ]
    });
});
</script>