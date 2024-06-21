<script>
    flatpickr(".date", {
        enableTime: true,
        dateFormat: "{{ config('a1.datejs.datetime') }}"
    });
    //CKEDITOR.replace( 'description' );

$(document).ready(function() {

    $('#exportXLS').click(function(){
        TableToExcel('filter', 'maintenance_rpt');
    })

    $('#exportPDF').click(function(){

        //321
        //max 250
        var options = {
            columnStyles:{
                0: {
                    cellWidth: 'auto', halign: 'center'
                },
                1: {
                    cellWidth: 'auto', halign: 'center'
                }, 
                2: {
                    cellWidth: 60, overflow: 'linebreak'
                },
                3: {
                    cellWidth: 60, overflow: 'linebreak'
                },
                4: {
                    cellWidth: 60, overflow: 'linebreak'
                },
                5: {
                    cellWidth: 20, halign: 'center'
                },
                6: {
                    cellWidth: 'auto', halign: 'center'
                },
                7: {
                    cellWidth: 'auto', halign: 'center'
                },
                8: {
                    cellWidth: 'auto', halign: 'center'
                },
            }
        };

        TableToPdf('filter', 'maintenance_rpt', 'l', 'legal', options);
    })

    
    $('.select2').select2();
    var $tasktype_id = $('#tasktype_id');
    
    //init tasksubtype1
    var $tasksubtype1_id = $('#tasksubtype1_id');
    var tasksubtype1_id_url = "{{ route('subcategory.json', ['tasktype' => 'inject']) }}";
    var url1 = tasksubtype1_id_url.replace("inject", $tasktype_id.val());
    $tasksubtype1_id.empty().select2({
        ajax: {
            url: url1,
            dataType: 'json'
            // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
        }
    }); //end action

    //event takstype
    $tasktype_id.on("select2:select", function (e) { 

        //tasksubtype1
        var url = tasksubtype1_id_url.replace("inject",$tasktype_id.val());
        $tasksubtype1_id.empty().select2({
            ajax: {
                url: url,
                dataType: 'json'
                // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
            }
        });

        //tasksubtype2 set empty
        $tasksubtype2_id.empty().select2();
    }); //end event
    
    //event tasksubtype1
    var $tasksubtype2_id = $('#tasksubtype2_id');
    var tasksubtype2_id_url = "{{ route('item.json', ['tasktype' => 'inject1', 'tasksubtype1' => 'inject2']) }}";
    $tasksubtype1_id.on("select2:select", function (e) { 

        var url = tasksubtype2_id_url
            .replace("inject1", $tasktype_id.val())
            .replace("inject2", $tasksubtype1_id.val());
        $tasksubtype2_id.empty().select2({
            ajax: {
                url: url,
                dataType: 'json'
                // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
            }
        });
        
    }); //end event
    
});    
    

</script>

