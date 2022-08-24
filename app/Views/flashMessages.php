<!-- success message -->
<?php if (session()->get('success')) : ?>

    <script type="text/javascript">
        $(document).ready(function() {
            Swal.fire({
                title: 'Success',
                text: "<?= session()->get('success') ?>",
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok'
            })
        });
    </script>

    <!-- <div class="alert alert-success success-message" role="alert">
            
        </div> -->
<?php endif ?>
<!-- success message ends -->

<!-- error message -->
<?php if (session()->get('error')) : ?>
    <script type="text/javascript">
        $(document).ready(function() {
            Swal.fire({
                title: 'Error',
                text: "<?= session()->get('error') ?>",
                icon: 'error',
                showCancelButton: false,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok'
            })
        });
    </script>
    <!-- <div class="alert alert-danger error-message" role="alert">
            
        </div> -->
<?php endif ?>

<!-- validation errors -->
<?php if (isset($validation)) : ?>
    <div class="alert alert-danger error-message" role="alert">
        <?= $validation->listErrors() ?>
    </div>
<?php endif ?>

<!-- styling php errors class -->

<style>
    .errors li {
        list-style-type: none;
        width: 100%;
        /* text-align: center; */
    }

    .errors ul {
        padding-bottom: 0;
        margin-bottom: 0;
    }
</style>

<!-- <script>
        $(document).ready(function(){
            setTimeout(function() { 
                $('.error-message').hide();
                $('.success-message').hide();
        }, 2000);
            
        })
    </script> -->