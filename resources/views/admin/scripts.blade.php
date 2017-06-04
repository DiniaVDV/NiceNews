<script type="text/javascript">

$('div.alert').not('.alert-important').delay(3000).slideUp(300);

function confirmDelete(name){
    if(confirm('Вы действительно хотите удалить ' + name + '?')){
        return true;
    }else {
        return false;
    }
}

$(document).ready(function() {
    $(".js-example-basic-single").select2();
});

/**************Checked comments***********************************/

$(".status").change(function() {
    if(this.checked) {
       console.log();
        alert('Комментарий опубликован!');
        var commId = $(this).attr('id');
        $.ajax({
            type:"GET",
            url: 'comments/' + commId + '/checked',
            data: commId,
            success: function (data) {
                console.log(data);
                location.reload();
            },
            error: function (data) {
                console.log(data);
            }

        });
    }
});
/*******************************************************************/
</script>