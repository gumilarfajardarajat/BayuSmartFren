<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form id="edit_form" action="action.php" class="was-validated">
            <div class="form-group">
                <label for="x"> SAP ID :</label>
                <input type="text" class="form-control" id="sap_id" placeholder="Enter username" name="sap_id" value="sap_id" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">SAP ID harus diisi.</div>
            </div>
            <div class="form-group">
                <label for="x"> SAP BIL SERVICE ID TRANS :</label>
                <input type="text" class="form-control" id="sap_bil_service_id_trans" placeholder="Enter username" name="sap_bil_service_id_trans" value="sap_bil_service_id_trans" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">SAP BIL SERVICE ID TRANS harus diisi.</div>
            </div>
            <div class="form-group">
                <label for="x"> SAP BIL SERVICE SO NO :</label>
                <input type="text" class="form-control" id="sap_bil_service_so_no" placeholder="Enter username" name="sap_bil_service_so_no" value="sap_bil_service_so_no" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">SAP BIL SERVICE SO NO harus diisi.</div>
            </div>
            <div class="form-group">
                <label for="x"> SAP BIL SERVICE DATE :</label>
                <input type="text" class="form-control" id="sap_bil_service_date" placeholder="Enter username" name="sap_bil_service_date" value="sap_bil_service_date" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">SAP BIL SERVICE DATE harus diisi.</div>
            </div>
            <div class="form-group">
                <label for="x"> SAP BIL SERVICE CUST ID :</label>
                <input type="text" class="form-control" id="sap_bil_service_cust_id" placeholder="Enter username" name="sap_bil_service_cust_id" value="sap_bil_service_cust_id" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">SAP BIL SERVICE CUST ID harus diisi.</div>
            </div>
            <div class="form-group">
                <label for="x"> SAP BIL SERVICE NO INV TARI :</label>
                <input type="text" class="form-control" id="sap_bil_service_no_inv_tari" placeholder="Enter username" name="sap_bil_service_no_inv_tari" value="sap_bil_service_no_inv_tari" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">SAP BIL SERVICE NO INV TARI harus diisi.</div>
            </div>
            <div class="form-group">
                <label for="x"> SAP BIL SERVICE PERIODE BILING PLAN :</label>
                <input type="text" class="form-control" id="sap_bil_service_periode_billing_plan" placeholder="Enter username" name="sap_bil_service_periode_billing_plan" value="sap_bil_service_periode_billing_plan" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">SAP BIL SERVICE PERIODE BILING PLAN harus diisi.</div>
            </div>
            <div class="form-group">
                <label for="x"> SAP BIL SERVICE MATCODE :</label>
                <input type="text" class="form-control" id="sap_bil_service_matcode" placeholder="Enter username" name="sap_bil_service_matcode" value="sap_bil_service_matcode" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">SAP BIL SERVICE MATCODE harus diisi.</div>
            </div>
            <div class="form-group">
                <label for="x"> SAP BIL SERVICE MATDESC :</label>
                <input type="text" class="form-control" id="sap_bil_service_matdesc" placeholder="Enter username" name="sap_bil_service_matdesc" value="sap_bil_service_matdesc" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">SAP BIL SERVICE MATDESC harus diisi.</div>
            </div>
            <div class="form-group">
                <label for="x"> SAP BIL SERVICE DPP :</label>
                <input type="text" class="form-control" id="sap_bil_service_dpp" placeholder="Enter username" name="sap_bil_service_dpp" value="sap_bil_service_dpp" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">SAP BIL SERVICE DPP harus diisi.</div>
            </div>
            <div class="form-group">
                <label for="x"> SAP BIL SERVICE NO  BILLING SAP :</label>
                <input type="text" class="form-control" id="sap_bil_service_no_billing_sap" placeholder="Enter username" name="sap_bil_service_no_billing_sap" value="sap_bil_service_no_billing_sap" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">SAP BIL SERVICE NO  BILLING SAP harus diisi.</div>
            </div>
            <div class="form-group">
                <label for="x"> SAP BIL SERVICE DUE DATE :</label>
                <input type="text" class="form-control" id="sap_bil_service_due_date" placeholder="Enter username" name="sap_bil_service_due_date" value="sap_bil_service_due_date" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">SAP BIL SERVICE DUE DATE harus diisi.</div>
            </div>
            <div class="form-group">
                <label for="x"> FLAG SAP :</label>
                <input type="text" class="form-control" id="flag_sap" placeholder="Enter username" name="flag_sap" value="flag_sap" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">FLAG SAP harus diisi.</div>
            </div>
            <div class="form-group">
                <label for="x"> ANOMALI :</label>
                <input type="text" class="form-control" id="anomali" placeholder="Enter username" name="anomali" value="anomali" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">ANOMALI harus diisi.</div>
            </div>
            <button type="button" disabled id="submit-form" class="btn btn-primary" data-toggle="modal" data-target="#myModal" >Submit</button>
        </form>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Update Data</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Apakah anda akan menyimpan perubahan ?
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="submit-confirm">Ya</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>