validateForm();
$(".form-control").on('input',function(){
    validateForm();
});

$("#submit-confirm").click(function(){
    $("#edit_form").submit();
});

function validateForm()
{
    var sap_id = $("#sap_id").val();
    var sap_bil_service_id_trans = $("#sap_bil_service_id_trans").val();
    var sap_bil_service_so_no = $("#sap_bil_service_so_no").val();
    var sap_bil_service_date = $("#sap_bil_service_date").val();
    var sap_bil_service_cust_id = $("#sap_bil_service_cust_id").val();
    var sap_bil_service_no_inv_tari = $("#sap_bil_service_no_inv_tari").val();
    var sap_bil_service_periode_billing_plan = $("#sap_bil_service_periode_billing_plan").val();
    var sap_bil_service_matcode = $("#sap_bil_service_matcode").val();
    var sap_bil_service_matdesc = $("#sap_bil_service_matdesc").val();
    var sap_bil_service_dpp = $("#sap_bil_service_dpp").val();
    var sap_bil_service_no_billing_sap = $("#sap_bil_service_no_billing_sap").val();
    var sap_bil_service_due_date = $("#sap_bil_service_due_date").val();
    var flag_sap = $("#flag_sap").val();
    var anomali = $("#anomali").val();

    if (sap_id && sap_bil_service_so_no && sap_bil_service_id_trans && sap_bil_service_date && sap_bil_service_cust_id && sap_bil_service_no_inv_tari && sap_bil_service_periode_billing_plan && sap_bil_service_matcode && sap_bil_service_matdesc && sap_bil_service_dpp && sap_bil_service_no_billing_sap && sap_bil_service_due_date && flag_sap && anomali){
        $("#submit-form").prop( "disabled", false );
    }else{
        $("#submit-form").prop( "disabled", true );
    }


}
