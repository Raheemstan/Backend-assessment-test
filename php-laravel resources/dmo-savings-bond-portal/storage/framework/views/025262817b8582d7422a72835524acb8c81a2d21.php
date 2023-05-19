

<script type="text/javascript">
    $(document).ready(function() {
        let page_total = 0;
        let current_page = 0;
        <?php echo e($control_id); ?>_display_results("<?php echo e($control_obj->getJSONDataRouteName()); ?>");

        function <?php echo e($control_id); ?>_display_results(endpoint_url){
            $.ajaxSetup({
                cache: false, 
                headers: {'X-CSRF-TOKEN':"<?php echo e(csrf_token()); ?>"}
            });

            //check for internet status 
            if (!window.navigator.onLine) {
                $('.offline').fadeIn(300);
                return;
            }else{
                $('.offline').fadeOut(300);
            }

            $("#spinner-<?php echo e($control_id); ?>").show();
            $('#<?php echo e($control_id); ?>-div-card-view').empty();
            $('#<?php echo e($control_id); ?>-div-card-view').append("<span class='text-center ma-20 pa-20'>Loading.....</span>");

            $.get(endpoint_url).done(function( response ) {
                console.log(response);
                current_page = parseInt(response.page_number);
                page_total = parseInt(response.pages_total);
                if (response != null && response.cards_html != null){
                    $('#<?php echo e($control_id); ?>-div-card-view').empty();
                    $('#<?php echo e($control_id); ?>-div-card-view').append(response.cards_html);
                }
                if (response != null && response.result_count==0){
                    $('#<?php echo e($control_id); ?>-div-card-view').empty();
                    $('#<?php echo e($control_id); ?>-div-card-view').append("<span class='text-center ma-20 pa-20' style='padding-bottom:100px'>No results found.</span>");
                }
                $("#<?php echo e($control_id); ?>-pagination").empty();
                if (response != null && response.paginate && response.result_count > 0){
                    // $("#<?php echo e($control_id); ?>-pagination").append("<li><span class='pre'> <a href='#' id='pre' data-type='pre' class='<?php echo e($control_id); ?>-pg'><i class='fa fa-angle-left'></i><i class='fa fa-angle-left'></i></a></span></li>"); 
                    $("#<?php echo e($control_id); ?>-pagination").append(`<nav aria-label="Page navigation">
                        <ul class="pagination"><li class="page-item ${current_page == 1 && 'disabled'}"><span class='pre'> <a href='#' id='pre' data-type='pre'  class='<?php echo e($control_id); ?>-pg page-link'><i class='fa fa-angle-left'></i><i class='fa fa-angle-left'></i></a></span></li> </ul>
                        </nav>`); 
                    for(let pg=1;pg<=response.pages_total;pg++){
                        $("#<?php echo e($control_id); ?>-pagination").append(`<li class="page-item"><a data-val='${pg}' data-type='pg' class='<?php echo e($control_id); ?>-pg pg-${pg} page-link' href='#'>${pg}</a></li>`);
                        (current_page == pg) ? $('.pg-'+pg).addClass('cdv-current-page') : $('.pg-'+pg).addClass('text-primary');
                    }
                    // $("#<?php echo e($control_id); ?>-pagination").append("<li><span class='nxt'><a href='#' id='nxt' data-type='nxt'  class='<?php echo e($control_id); ?>-pg'><i class='fa fa-angle-right'></i><i class='fa fa-angle-right'></i></a></span></li>");
                    $("#<?php echo e($control_id); ?>-pagination").append(`<nav aria-label="Page navigation">
                        <ul class="pagination"><li class="page-item ${page_total == current_page && 'disabled'}"><span class='nxt'><a href='#' id='nxt' data-type='nxt'  class='<?php echo e($control_id); ?>-pg page-link'><i class='fa fa-angle-right'></i><i class='fa fa-angle-right'></i></a></span></li> </ul>
                        </nav>`);
                    if(current_page == 1){
                        $('.pre').addClass('disable');
                        $('#pre').addClass('disable-link');
                    }
                    if(page_total == current_page){
                        $('.nxt').addClass('disable');
                        $('#nxt').addClass('disable-link');
                    }  
                           
                    
                    $("#<?php echo e($control_id); ?>-pagination").show();
                  
                    //$("#<?php echo e($control_id); ?>-pagination").show();
                }
                $("#spinner-<?php echo e($control_id); ?>").hide();
            });
        }

        $(document).on('keyup', "#<?php echo e($control_id); ?>-txt-search", function(e) {
            e.preventDefault();
            let search_term = $('#<?php echo e($control_id); ?>-txt-search').val();
            <?php echo e($control_id); ?>_display_results("<?php echo e($control_obj->getJSONDataRouteName()); ?>?st="+search_term);
        });

        $(document).on('click', "#<?php echo e($control_id); ?>-btn-search", function(e) {
            e.preventDefault();
            let search_term = $('#<?php echo e($control_id); ?>-txt-search').val();
            <?php echo e($control_id); ?>_display_results("<?php echo e($control_obj->getJSONDataRouteName()); ?>?st="+search_term);
        });

        $(document).on('click', ".<?php echo e($control_id); ?>-grp", function(e) {
            e.preventDefault();
            let group_term = $(this).attr('data-val');
            $("#<?php echo e($control_id); ?>-pagination").hide();
            <?php echo e($control_id); ?>_display_results("<?php echo e($control_obj->getJSONDataRouteName()); ?>?grp="+group_term);
            
        });

        $(document).on('click', ".<?php echo e($control_id); ?>-pg", function(e) {
            e.preventDefault();
            console.log(e);
            let page_number = 1;
            $("#<?php echo e($control_id); ?>-pagination").hide();
            if($(this).attr('data-type') == 'pg'){
                page_number = $(this).attr('data-val');
            }
            if($(this).attr('data-type') == 'pre'){
               page_number = parseInt(current_page) - 1;
            }
            if($(this).attr('data-type') == 'nxt'){
                page_number = parseInt(current_page) + 1;
            }
           
            <?php echo e($control_id); ?>_display_results("<?php echo e($control_obj->getJSONDataRouteName()); ?>?pg="+page_number);
        });
        
    });
</script><?php /**PATH C:\Users\DocB\Desktop\workspace\hasob-foundation-core-bs-5\src/../resources/views/cardview/card-view-js.blade.php ENDPATH**/ ?>