<?php $config = config('DiveLogConfig'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col"><?= lang(
                    'Text.country_details_pagetitle'
                ) ?></div>
                <div class="col text-right">

                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="divecountry" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th><?= lang('Text.country_title_country') ?></th>
                            <th><?= lang('Text.country_title_count') ?></th>
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
    $('#divecountry').DataTable({
        language: {
            url: '<?= lang('Text.datatable_lang') ?>'
        },
        processing: true,
        serverSide: true,
        pageLength: <?= $config->max_list ?>,
        ajax: {
            url: "<?php echo base_url('divecountry/fetch_all'); ?>",
            method: 'POST'
        },
        columns: [{
                data: 'Country'
            },
            {
                data: 'Dives'
            }

        ]
    });
});
</script>