<?php
/**
* This file is created
* by yybird
* @2016.03.22
* last modified
* by yybird
* @2016.03.24
* last modified
* by Dup4
* @2019.06.27
**/
?>

<?php $title="Contest";?>
<?php require_once "template/hznu/contest_header.php"; ?>
<style type="text/css" media="screen">
.well{
    display: block;
    padding: 1rem;
    margin: 1rem 0;
    /*font-size: 1.3rem;*/
    line-height: 1.6;
    word-break: break-all;
    word-wrap: break-word;
    color: #555;
    background-color: #f8f8f8;
    border: 1px solid #dedede;
    border-radius: 0;
}
.box{
    border: 1px solid #eee;
    padding: 30px;
    margin: 25px 0 15px 0;
    box-shadow: 2px 2px 10px 0 #ccc;
}
</style>
<div class="am-container" style="margin-top: 20px;">

    <?php if($can_enter_contest):?>
        <h1>Problems</h1><hr/>
        <div class="bx" style="font-size: normal;">
            <table class="am-table am-table-hover table-problem">
                <thead>
                    <tr>
                        <th class = 'am-text-center' style = 'width:10%;'>Problem ID</th>
                        <th class = '' style = 'width:30%;'>Title</th>
                        <th style='width: 5%'>Solved</th>
                        <th class = '' style = 'width:5%;'>Score</th>
                        <th class = '' style = 'width:5%;'>Time</th>
                        <th class = '' style = 'width:5%;'>Memory</th>
                        <th class = '' style = 'width:8%;'>Ratio(AC/All)</th>

<!--                         <?php if($practice): ?>
                            <th title="include submissions out of this contest">AC Total</th>
                            <th title="include submissions out of this contest">Sub. Total</th>
                        <?php endif ?> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($view_problemset as $row){
                        echo "<tr class = '' >"; 
                        foreach ($row as $table_cell){
                            echo "<td>";
                            echo $table_cell;
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    <?php endif?>

    <?php if($view_description):?>
        <h1>Announcement</h1><hr/>
        <div class="box" style="font-size: 1.3rem;"><?php echo $view_description?></div>
    <?php endif ?>

</div>


<?php require_once "footer.php" ?>
