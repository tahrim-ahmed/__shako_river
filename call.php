<?php

include 'header.php';
if (isset($_SESSION['type']) && $_SESSION['type'] == "admin" || $_SESSION['type'] == "user") {
    global $r_code, $r_name, $r_proprietor, $r_bazar, $r_cell, $d_name, $d_cell, $r_territory, $r_region, $r_group, $f_name, $f_cell, $r_code, $error, $entry, $r_own, $r_other, $r_total, $r_count, $cnt, $r_groups,

//  $slab_id, $slab_gift, $r_total_next, $slab_id_next, $slab_gift_next,
           $c_slab, $a_slab, $n_slab, $n_a_slab, $gift, $a_gift, $slab_n_gift, $r_n_own, $a_slab_n_gift, $r_a_n_own;
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/call.css">
    </head>
    <body>
         <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Call</li>
  </ol>
    <div class="column left">
        <div class="card">
            <fieldset>
                <legend>Retailer Information</legend>
                <table class="table table-sm table-striped table-bordered" id="result_details">

                </table>
                <table class="table table-sm table-striped table-bordered">
                    <tbody style="text-align: left">
                    <tr>
                        <td>Own Purchase:</td>
                        <td><strong><?php echo $r_own; ?> </strong></td>
                        <td>Other Purchase:</td>
                        <td><strong><?php echo $r_other; ?> </strong></td>
                    </tr>

                    <tr>
                        <td>Total Purchase:</td>
                        <td><strong><?php echo $r_total; ?> </strong></td>
                        <!--  <td>Current Slab: </td> <td> <strong><?php echo $c_slab; ?></strong></td>  -->
                        <td>Current Slab: <strong><?php echo $c_slab; ?></strong></td>
                        <td>Next Slab: <strong><?php echo $n_slab; ?></strong></td>
                    </tr>
                    <tr>
                        <td colspan="">Current Gift:</td>
                        <td colspan="3"><strong><?php echo $gift; ?></strong></td>
                    </tr>

                    <tr>
                        <td colspan="">Next Slab Gift:</td>
                        <td colspan="2"><strong><?php echo $slab_n_gift; ?></strong></td>
                        <td>Next Slab Amount: <strong><?php echo $r_n_own; ?></strong></td>
                        <!--  <td>Next Slab: </td> <td> <strong><?php echo $n_slab; ?></strong></td> -->
                    </tr>
                    <!--   <tr>
            <td colspan="">Next Slab Gift: </td> <td colspan="3"> <strong><?php echo $slab_n_gift; ?></strong></td>
          </tr>
      -->
                    <tr>
                        <td colspan="">Aditional Gift:</td>
                        <td colspan="3"><strong><?php echo $a_gift; ?></strong></td>
                    </tr>
                    <!--  <tr>
            <td>Current Ad. Slab: </td> <td> <strong><?php echo $a_slab; ?></strong></td>
            <td>Next Ad. Slab: <strong><?php echo $n_a_slab; ?> </strong></td>
            <td>Next Amount: <strong><?php echo $r_a_n_own; ?></strong></td>
          </tr>
        -->
                    <tr>
                        <td colspan="">Next Ad. Slab Gift:</td>
                        <td colspan="2"><strong><?php echo $a_slab_n_gift; ?></strong></td>
                        <td>Next Amount: <strong><?php echo $r_a_n_own; ?></strong></td>
                    </tr>
                    <!--
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    -->
                    </tbody>
                </table>
            </fieldset>
        </div>
        <br>
        <div class="card bg-transparent server-side-table">
            <fieldset>
                <legend>Call Data</legend>
                <div class="row justify-content-center pb-2">
                    <div class="col-6" id="dateRange">
                        <input type="text" class="form-control border-bottom-3 border-info text-center"
                               name="dateRange">
                    </div>
                </div>
                <table id="call_info_table" class="table table-sm table-striped table-hover table-bordered">
                    <thead>
                    <th>Retailer Group</th>
                    <th>Retailer Code</th>
                    <th>Date</th>
                    <th>Call No</th>
                    <th>Status</th>
                    <th>Remarks</th>
                    </thead>
                </table>
            </fieldset>
        </div>
    </div>

    <div class="column right">
        <div class="card">
            <legend>Input Data</legend>
            <table class="table table-sm table-bordered">
                <tbody>
                <tr>
                    <td>
                        <select class="r_group form-control" style="width:100%" name="r_group"/>
                    </td>
                </tr>
                <tr id="r_group_select2_result"/>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal" id="callModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"> Call Information </h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <label for="call_status" class="col-sm-4 col-form-label">Status</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="call_status" required>
                                    <option value="1" selected>Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <br>

                        <div class="form-group row">
                            <label for="call_date" class="col-sm-4 col-form-label">Date</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="call_date" placeholder="date">
                            </div>
                        </div>
                        <br>

                        <div class="form-group row">
                            <label for="call_remarks" class="col-sm-4 col-form-label">Remarks</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="call_remarks" required>
                                    <option value="Call Done" selected>Call Done</option>
                                    <option value="No Answer">No Answer</option>
                                    <option value="Switch Off">Switch Off</option>
                                    <option value="User Busy">User Busy</option>
                                    <option value="Wrong Number">Wrong Number</option>
                                    <option value="Call Back">Call Back</option>
                                    <option value="Not Interested">Not Interested</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div id="modalDanger">
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" id="closeModal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-primary modalOff" onclick="save_call()">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // save call
        let scrapData = {
            call_no: null, retailer_code: null, retailer_group: null
        }
        //preSort again to default
        window.onload = function () {
            setDefault()
        }

        function getTable(group=null, dateRange = null, r_code = null) {
            $('#call_info_table').DataTable({
                processing: true,
                serverSide: true,
                deferRender: true,
                ajax: {
                    url: "api/get_call.php",
                    data: {group, dateRange, r_code},
                    dataType: 'JSON',
                    method: 'POST',
                },
                columns: [
                    {data: 'retailer_group'},
                    {data: 'retailer_code'},
                    {data: 'date'},
                    {data: 'call_no'},
                    {data: 'status'},
                    {data: 'remarks'}
                ],
                order: [[2, "DESC"]],
                columnDefs: [
                    {"visible": false, "targets": [0]},
                    {
                        "render": (data) => moment(data).format("D MMM, YYYY"),
                        "targets": [2]
                    },
                    {
                        "render": (data) => Number(data) ? '<h6><span class="badge badge-success">Yes</span></h6>' : '<h6><span class="badge badge-danger">No</span></h6>',
                        "targets": [4]
                    }
                ],
                buttons: [
                    <?php if((isset($_SESSION['Name']) && $_SESSION['Name'] == "Jim" || $_SESSION['Name'] == "Super Admin") || (isset($_SESSION['type']) && $_SESSION['type'] == "admin")) {?>
                    {
                        extend: 'collection',
                        text: '<i class="fa fa-file-export"></i>',
                        buttons: [
                            {
                                extend: "copy",
                                charset: "utf-8",
                                exportOptions: {
                                    columns: ':visible',
                                    format: {header: (data) => data.split('<')[0]}
                                }
                            }, {
                                extend: "csv",
                                charset: "utf-8",
                                exportOptions: {
                                    columns: ':visible',
                                    format: {header: (data) => data.split('<')[0]}
                                }
                            },
                            {
                                extend: "excel",
                                charset: "utf-8",
                                exportOptions: {
                                    columns: ':visible',
                                    format: {header: (data) => data.split('<')[0]}
                                }
                            },
                            {
                                extend: "pdf",
                                charset: "utf-8",
                                exportOptions: {
                                    columns: ':visible',
                                    format: {header: (data) => data.split('<')[0]}
                                }
                            },
                            {
                                extend: "print",
                                charset: "utf-8",
                                exportOptions: {
                                    columns: ':visible',
                                    format: {header: (data) => data.split('<')[0]}
                                }
                            }
                        ]
                    },
                    <?php } ?>
                    {
                        extend: "colvis",
                        text: '<i class="fa fa-eye"></i>',
                    }
                ],
                aLengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "all"]],
                dom: '<"float-left"B><"float-none"f>rti<"float-left"l>p',
            });
        }

        //select groups from tables
        $('.r_group').select2({
            placeholder: 'Select an Group',
            ajax: {
                url: 'api/save_call.php',
                dataType: 'json',
                delay: 250,
                data: function (data) {
                    return {searchTerm: data.term}
                },
                processResults: function (response) {
                    return {results: response}
                },
                cache: true
            }
        });

        // step to add call rows
        $('.r_group').on("change", function (e) {
            scrapData.retailer_group = $('.r_group').children("option:selected").val()
            $.ajax({
                data: {selectedGroup: scrapData.retailer_group},
                dataType: 'JSON',
                method: 'POST',
                url: 'api/save_call.php'
            }).done((res) => {
                $('#r_group_select2_result').html(res.div)
                setDefault();
                $('#call_info_table').DataTable().destroy()
                getTable(scrapData.retailer_group)
            }).fail((err) => {
                console.log(err)
            })
        });

        function selectCode(r_code) {
            $.ajax({
                data: {leftDeatils: r_code},
                dataType: 'JSON',
                method: 'POST',
                url: 'api/save_call.php'
            }).done((res) => {
                $('#call_info_table').DataTable().destroy()
                scrapData.retailer_code = r_code
                getTable(null, null, r_code)
                $('#result_details').html(res.details)
                setDefault();
            }).fail((err) => {
                console.log(err)
            })
        }

        function set_call_status(c_no, r_group, r_code) {
            scrapData.call_no = c_no
            scrapData.retailer_code = r_code
            scrapData.retailer_group = r_group
            let modal = document.getElementById("callModal")
            document.getElementById(c_no + '__' + r_code).onclick = () => modal.style.display = "block"
            document.getElementById("closeModal").onclick = () => modal.style.display = "none"
        }

        function save_call() {
            let status = $('#call_status').children("option:selected").val()
            let date = $('#call_date').val()
            let remarks = $('#call_remarks').children("option:selected").val()
            if (date) {
                $('#modalDanger').html('')
                $.ajax({
                    // ...scrapData - this is called -spread in javascript
                    data: {status, date, remarks, ...scrapData},
                    dataType: 'JSON',
                    method: 'POST',
                    url: 'api/save_call.php'
                }).done((res) => {
                    if (res.status) {
                        toastr.success('Call Info for - ' + scrapData.retailer_code + ' of call no' + scrapData.call_no + ' Saved')
                        $('#call_date').val(null)
                        $('#call_remarks').val(null)

                        let checked = document.getElementById(scrapData.call_no + '__' + scrapData.retailer_code)
                        checked.setAttribute("disabled", "true")
                        Number(status) ? checked.classList.add('btn-success') : checked.classList.add('btn-danger')
                        document.getElementById("callModal").style.display = "none"
                    } else {
                        $('#modalDanger').html('<label class="text-danger"> Save Failed!! </label>')
                    }
                }).fail((err) => {
                    console.log(err)
                })
            } else {
                $('#modalDanger').html('<label class="text-danger"> Input Date!! </label>')
            }
        }

        function setDefault() {
            let alreadyCheked = null
            <?php
            $sql5 = "SELECT * from call_info";
            $res = mysqli_query($conn, $sql5);
            while ($row = mysqli_fetch_assoc($res)) {?>
            alreadyCheked = document.getElementById('<?php echo $row['call_no'] . '__' . $row['retailer_code']?>')
            if (alreadyCheked) {
                alreadyCheked.setAttribute("disabled", "true")
                Number(<?php echo $row['status'] ?>) ? alreadyCheked.classList.add('btn-success') : alreadyCheked.classList.add('btn-danger')
            }
            <?php } ?>
        }

        $(function () {
            var start = moment().subtract(0, 'weeks').startOf('week');
            var end = moment().subtract(0, 'weeks').endOf('week');
            function cb(start, end) {
                let dateRange = {start: start.format('YYYY-MM-DD'), end: end.format('YYYY-MM-DD')}
                if (scrapData.retailer_code) {
                    $('#call_info_table').DataTable().destroy()
                    getTable(null, dateRange, scrapData.retailer_code)
                } else if (scrapData.retailer_group) {
                    $('#call_info_table').DataTable().destroy()
                    getTable(scrapData.retailer_group, dateRange)
                }
                $('#dateRange input').val(start.format('DD MMM,YYYY') + ' - ' + end.format('DD MMM,YYYY'));
            }

            $('#dateRange').daterangepicker({
                startDate: start,
                endDate: end,
                opens: 'center',
                showDropdowns: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);
            cb(start, end);
        });
    </script>
    </body>
    </html>
    <?php
} else {
    header('Location: disconnect.php');
}
?>