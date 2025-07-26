var a = false;

$(document).ready(function(){
    $("#btn_save").click(function(){
        if (a == false) {
            saveperform();
        }
    }); 
});

function saveperform() { 
    var Id = $('#Id').val();
    var mobileNo = $('#mobileNo').val();
    var navId = $("#navId").val();
    // var DOB = $("#DOB").val();
    // var Registration_date = $('#Registration_date').val();
    
    if (mobileNo == "" || navId == "" )  {
        Swal.fire(
            'Oops!',
            'Please Enter Required Fields!',
            'error'
        );
    } else {
        a = true;
        var form = $("#Form").closest("form");
        var formData = new FormData(form[0]);
        
        if (Id > 0) {
            // Update existing record
            $.ajax({
                url: base_path + "Member_registration/updateEmp",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('#btn_save').prop('disabled', true);
                    $('#btn_save').html('Loading');
                }, 
                success: function(data) {
                    $('#btn_save').prop('disabled', false);
                    $('#btn_save').html('Save');
                    $('#mobileNo').val('').trigger('change');
                    $('#navId').val('').trigger('change');
                    // $('#DOB').val('0').trigger('change');
                    // $('#Registration_date').val('0').trigger('change');

                    Swal.fire({
                        title: 'Good job!',
                        text: 'Data updated Successfully!',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 900,
                        timerProgressBar: true
                    });

                    a = false;
                }
            });
        } else {
            // Insert new record
            $.ajax({
                url: base_path + "Member_registration/insertEmp",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('#btn_save').prop('disabled', true);
                    $('#btn_save').html('Loading');
                }, 
                success: function(data) {
                    $('#btn_save').prop('disabled', false);
                    $('#btn_save').html('Save');
                    $("#Form").trigger("reset");


                    Swal.fire({
                        title: 'Good job!',
                        text: 'Data Submitted Successfully!',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 900,
                        timerProgressBar: true
                    });

                    a = false;
                }
            });
        }
    }
}
