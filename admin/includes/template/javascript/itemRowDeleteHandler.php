<?php
/**
 * @package templateSystem
 * @copyright Copyright 2003-2015 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: New in v1.6.0 $
 */
?>
<script>
    $('.rowHandlerDelete').on('click', function () {
        $("#rowDeleteModal").modal('show');
        $('#rowDeleteConfirm').attr('data-item', $(this).attr('data-item'));
        $('#rowDeleteConfirm').on('click', function (e) {
            e.stopImmediatePropagation()
            $("#rowDeleteModal").modal('hide');
            zcJS.ajax({
                url: '<?php echo zen_admin_href_link($_GET['cmd'], "action=delete" . $tplVars['pageDefinition']['extraDeleteParameters']); ?>',
                data: {id: $(this).attr('data-item')}
            }).done(function( response ) {
                if (response.html)
                {
                    $('#adminLeadItemRows').html(response.html.itemRows);
                    $('#leadPaginator').html(response.html.paginator);
                    $('#leadMultipleActions').html(response.html.ma);
                }
            });
            return false
        });

        return false;
    });
</script>
