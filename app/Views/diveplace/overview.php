<?php $config = config('DiveLogConfig'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">Dive Sites</div>
                <div class="col text-right">

                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="diveplace" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Country</th>
                            <th>City / Island</th>
                            <th>Country</th>
                            <th>Max Depth</th>
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
    $('#diveplace').DataTable({
        language: {
            url: '<?= lang('Text.datatable_lang') ?>'
        },
        processing: true,
        serverSide: true,
        pageLength: <?= $config->max_list ?>,
        ajax: {
            url: "<?php echo base_url('diveplace/fetch_all'); ?>",
            method: 'POST'
        },
        columns: [{
                data: 'Place'
            },
            {
                data: 'City'
            },
            {
                data: 'Country'
            },
            {
                data: 'MaxDepth'
            }
        ]
    });
});
</script>