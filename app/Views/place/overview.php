<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/b-1.7.0/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/b-1.7.0/datatables.min.js"></script>
    <title>Codeigniter 4 Crud Application</title>
</head>

<body>
    <div class="container">
        <h2 class="text-center mt-4 mb-4">Codeigniter 4 Crud Application</h2>
        <?php
        $session = \Config\Services::session();
        if ($session->getFlashdata('success')) {
            echo '
            <div class="alert alert-success">' . $session->getFlashdata("success") . '</div>
            ';
        }
        ?>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">Sample Data</div>
                    <div class="col text-right">

                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="places" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Place</th>
                            <th>Comments</th>
                        </tr>
                        </thead>

                    </table>
                </div>
                <div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
<script>
$(document).ready(function(){
$('#places').DataTable({
    "order":[],
    "serverSide":true,
    "searching": true,
    "lengthChange":true,
    "ajax":{
        url:"<?php echo base_url('place/fetch_all')?>",
        type:'POST'
    }
});
});
</script>
<style>

</style>