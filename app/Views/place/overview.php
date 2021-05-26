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
                <table id="places" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Place</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>MaxDepth</th>
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
        $('#places').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "<?php echo base_url('place/fetch_all') ?>",
                method: 'POST'
            },
            columns: [{
                    data: 'Place',
                    name: 'DL_Place.Place'
                },
                {
                    data: 'Country',
                    name: 'DL_Logbook.Country'
                },
                {
                    data: 'City',
                    name: 'DL_Logbook.City'
                },
                {
                    data: 'MaxDepth',
                    name: 'DL_Place.MaxDepth'
                }
            ]
        });
    });
</script>