<style>
    .pagination-link {
        padding: 10px;
        margin: 5px;
        background-color: skyblue;
        color: black;
        font-weight: bold;
    }
</style>

<?php require './db/config.php';


$sql = "select * from users";
$op = mysqli_query($conn, $sql);

if (isset($_GET['offset'])) :
    $per_page = 10;
    $offset = htmlspecialchars(stripslashes(trim($_GET['offset'])));
    $sql_render = "select * from users order by id desc limit " . $per_page . ' offset ' . ($offset * $per_page);

    $render_op = mysqli_query($conn, $sql_render);
    while ($obj = mysqli_fetch_object($render_op)) :
        echo $obj->name . '<br>';
    endwhile;

    paginate($op, $per_page);

endif;








//$op = $conn->query($sql);
//returns object
//$sql = "select * from users";
//$op = mysqli_query($conn, $sql);


function paginate($mysqli_res, $per_page)
{
    $ac_num_rows = mysqli_num_rows($mysqli_res);



    if ($ac_num_rows > 10) :
        $offset = 0;

        $num_links = ceil($ac_num_rows / $per_page);

        for ($i = 0; $i < $num_links; $i++) :
            // 100 % ok for redirecting other resource
            //echo '<a class="pagination-link" href="pindex.php?offset=' . $offset . '">' . ($offset + 1) . '</a>';
            echo '<a class="pagination-link" href="TestClass.php?offset=' . $offset . '">' . ($offset + 1) . '</a>';

            $offset++;

        endfor;

    endif;
}

//$op->paginate();

//var_dump($op);


//test the pagination alone
//paginate($op, 10);
