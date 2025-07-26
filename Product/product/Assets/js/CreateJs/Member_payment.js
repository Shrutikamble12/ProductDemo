var a = false;

$(document).ready(function() {
    $("#btn_save").click(function() {
        if (a == false) {
            saveperform();
        }
    }
);
});

function saveperform() { 
    var Id = $('#Id').val();
    var Fk_MrId = $('#Fk_MrId').val();
    var Mamount = $("#Mamount").val();
    var Pdate = $("#Pdate").val();

    if (Fk_MrId == "" || Mamount == "" || Pdate == "") {
        Swal.fire(
            'Oops!',
            'Please Enter Required Fields!',
            'error'
        );
    } else {
        a = true; // Set the flag to true to prevent multiple submissions
        var form = $("#Form").closest("form");
        var formData = new FormData(form[0]);

        var url = Id > 0 ? base_path + "Member_payment/updatepayment" : base_path + "Member_payment/insertMpayment";

        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $('#btn_save').prop('disabled', true);
                $('#btn_save').html('Loading');
            },
            success: function(data) {
                console.log(data); // Optionally log the response data
                $('#btn_save').prop('disabled', false);
                $('#btn_save').html('Save');
                $("#Form").trigger("reset"); // Reset the form after submission
                $('#Fk_MrId').val('').trigger('change');
                $('#Mamount').val('').trigger('change');
                // $('#Pdate').val('').trigger('change');

                Swal.fire({
                    title: 'Good job!',
                    text: Id > 0 ? 'Data updated successfully!' : 'Data submitted successfully!',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 900,
                    timerProgressBar: true
                });

                a = false; // Reset the flag to allow future submissions
            }
        });
    }
}