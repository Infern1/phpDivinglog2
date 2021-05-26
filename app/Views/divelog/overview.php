<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">Dive Log</div>
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
                            <th>Dive Date</th>
                            <th>Dive Time</th>
                            <th>Max Depth</th>
                            <th>Location</th>
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
            processing: true,
            serverSide: true,
            order: [],
            ajax: {
                url: "<?php echo base_url('divelog/fetch_all') ?>",
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