<?php $config = config('DiveLogConfig'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col"><?= lang('Text.dive_log') ?></div>
                <div class="col text-right">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="divelog" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th><?= lang('Text.dlog_title_divedate') ?></th>
                            <th><?= lang('Text.dlog_title_divetime') ?></th>
                            <th><?= lang('Text.dlog_title_depth') ?></th>
                            <th><?= lang('Text.dlog_title_location') ?></th>
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
    $('#divelog').DataTable({
        language: {
            url: '<?= lang('Text.datatable_lang') ?>'
        },
        processing: true,
        serverSide: true,
        pageLength: <?= $config->max_list ?>,
        order: [],
        ajax: {
            url: "<?php echo base_url('divelog/fetch_all'); ?>",
            method: 'POST'
        },
        columns: [{
                data: 'Number'
            },
            {
                data: 'Divedate'
            },
            {
                data: 'Divetime'
            },
            {
                data: 'Depth'
            },
            {
                data: 'Place'
            }
        ]
    });
});
</script>