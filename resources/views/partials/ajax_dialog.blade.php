<div class="md-modal colored-header danger md-effect-10" id="ajax-modal" style="perspective: none;">
    <div class="md-content">
        <div class="modal-header">
            <h3><span class="header-text"></span></h3>
            <button type="button" class="close md-close" data-dismiss="modal" aria-hidden="true">׼/button>
        </div>
        <div class="modal-body">
            <div class="text-center">
                <div class="i-circle danger"><i class="fa fa-times"></i></div>
                <h4><span class="body-text"></span></h4>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-flat md-close ads-delete" data-id="0" data-dismiss="modal">Remove</button>
            <button type="button" class="btn btn-default btn-flat md-close ads-delete-cancel" data-dismiss="modal">Cancel</button>
        </div>
    </div>
</div>
<div class="md-overlay"></div>

<!--button class="md-trigger" data-modal="ajax-modal">Test</button-->


<style>
    .timeline-panel:hover{
        background-color:#eee;
    }
</style>

<script language="text/javascript">
$(document).ready(function() {
  $('.timeline-panel').click(function(e) {  // e=event
     //e.preventDefault();
     var id = $(this).attr('id');
     $.get(BASE+'assets/ajax/' + id, function(data) {
     $("#ajax-modal").html(data);
  })
    });
});
</script>
