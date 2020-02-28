</div>
    <script>
    $(document).ready(function(){
        $('.delete_data').click(function(){
            var id = $(this).attr("id");
            if(confirm("delete ?")){
                window.location="<?php echo base_url();?>admin/slider/delete/"+id;
            }else{
                return false;   
            }
        });
    });
    
    </script>
    <script src="<?= base_url()?>assets_admin/js/jquery.min.js"></script>
    <script src="<?= base_url()?>assets_admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>assets_admin/js/Sidebar-Menu.js"></script>
</body>

</html>