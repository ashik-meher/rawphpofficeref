<?php include_once 'layouts/header.php'; ?>

<div class="card">
    <button id="cl">Click</button>
    <p id="fil"></p>
</div>


<?php include_once 'layouts/footer.php';?>

<script>
    $(document).ready(function(){

        $('#cl').click(function(){
            $('#fil').load('ok.txt');
        })


    })
</script>