<!DOCTYPE html>
<html>
<head>
    <title>見込み客画面</title>
    <link href="/assets/w2ui-1.4.3/w2ui-1.4.3.min.css" rel="stylesheet">
    <script src="/assets/js/jquery-2.2.0.min.js" ansync></script>
    <script type="text/javascript" src="/assets/w2ui-1.4.3/w2ui-1.4.3.min.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link class="hidden-sm hidden-xs">
    <nav class="navbar navbar-default ">
    <div class="container-fluid">
    <div class="collapse navbar-collapse" id="nav_target">
         <ul class="nav navbar-nav">
            <!-- リンクのみ -->
            <li class="active">
              <a href="/pros_lawyer/">見込み客元リスト</a>
            </li>
            <!-- Nav3 ドロップダウン -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">リスト <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <?php foreach ($folders as $folder) {?>
                <li>
                  <a href="/folder/<?php echo $folder->id ?>"><?php echo $folder->name ?></a>
                </li>
                <?php } ?>
                </ul>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">追加<span class="caret"></span></a>
                <ul class="dropdown-menu">

                <?php foreach ($folders as $folder) {?>
                <li>
                  <a href="/lists/<?php echo $folder->id?>"><?php echo $folder->name ?>リストに追加</a>
                </li>
                <?php } ?>
                </ul>

                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">削除<span class="caret"></span></a>
                <ul class="dropdown-menu">

                <?php foreach ($folders as $folder) {?>
                <li>
                  <a href="/deletes/<?php echo $folder->id?>"><?php echo $folder->name ?>リストから削除</a>
                </li>
                <?php } ?>
                </ul>
            </ul>
</head>
<br>
<body>

<div id="grid" style="width: 2000px; height: 3000px;"></div>
<script type="text/javascript">
var id = <?php echo $id ?>;

$(function () {
    $('#grid').w2grid({ 
        name: 'grid',
        show: { 
            toolbar: true,
            footer: true,
            selectColumn: true,
        },

        multiSearch: true,
        searches: [
            <?php foreach ($published_sites as $published_site) { ?>
            { field: 'pub_<?php echo $published_site->id ?>', caption: '<?php echo $published_site->name ?>', type: 'text'},
            <?php } ?>
        ],
        columns: [                
            { field: 'recid', caption: 'ID', size: '50px', sortable: true,},

            { field: 'province', caption: '県', size: '80px', sortable: true,},
            { field: 'name', caption: '事務所名', size: '200px', sortable: true,},

            { field: 'wp_staff', caption: 'wp_担当者', size: '80px', sortable: true,},

            { field: 'result_status', caption: '結果', size: '80px', sortable: true,},
            { field: 'result_memo', caption: '結果メモ', size: '200px', sortable: true,},

            { field: 'rank', caption: '重要度', size: '50px', sortable: true,},
            { field: 'pros_lawyer_staff', caption: '相手担当者', size: '100px', sortable: true,},

            <?php foreach ($published_sites as $published_site) { ?> 
            { field: 'pub_<?php echo $published_site->id?>', caption: '<?php echo $published_site->name ?>', size: '70px', sortable: true,},
            <?php } ?>

            { field: 'hp_url', caption: 'hp_url', size: '300px', sortable: true,},

             { field: 'tel', caption: '電話番号', size: '100px', sortable: true,},

             { field: 'email', caption: 'メールアドレス', size: '200px', sortable: true,},

             { field: 'content', caption: 'メモ', size: '400px', sortable: true,}
        ],
       

        records: [
        <?php foreach ($pros_lawyers as $pros_lawyer) {?>
            {recid:<?php echo $pros_lawyer->id ?>, 
            province:'<?php echo $pros_lawyer->province_name ?>', 
            name:'<?php echo $pros_lawyer->name ?>', 
            wp_staff:'<?php echo $pros_lawyer->wp_staff ?>',
            result_status:'<?php echo $pros_lawyer->result_status ?>',
            result_memo:'<?php echo $pros_lawyer->result_memo ?>',
            rank: '<?php echo $pros_lawyer->rank ?>',
            pros_lowyer_staff:'<?php echo $pros_lawyer->pros_lawyer_staff ?>',
            <?php foreach ($published_sites as $published_site) { ?>
               pub_<?php echo $published_site->id ?>: '<?php echo in_array((object)array('pros_lawyers_id' => $pros_lawyer->id, 'published_sites_id' => $published_site->id), $results) ? '◯' : '' ?>',
            <?php } ?>
            hp_url:'<?php echo $pros_lawyer->hp_url ?>',
            tel:'<?php echo $pros_lawyer->tel ?>',
            email:'<?php echo $pros_lawyer->email ?>',
            content:'<?php echo $pros_lawyer->content ?>'
            },
         <?php }?>
        ],

        toolbar: {
            items: [
                { id: 'edit', type: 'button', caption: 'リストに追加', icon: 'w2ui-icon-plus' }
                ],

                onClick: function(event){
                    if(event.target = "edit"){
                        event.onComplete = function () {
                            document.location = '/folders/<?php echo $id?>';

                         
                    
                       $.ajax({
                        url: '/lists/insert',
                        type: 'POST',
                        data: {sels:w2ui.grid.getSelection(),id: id },
                        dataType:'json',
                        async: true,
               });                  
                }
            }

            }
        }


    });    
});




</script>

</body>
</html>
