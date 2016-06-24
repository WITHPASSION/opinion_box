<!DOCTYPE html>
<html>
<head>
    <title>見込み客画面</title>
    <link href="/assets/w2ui-1.4.3/w2ui-1.4.3.min.css" rel="stylesheet">
	<script src="/assets/js/jquery-2.2.0.min.js" ansync></script>
	<script type="text/javascript" src="/assets/w2ui-1.4.3/w2ui-1.4.3.min.js"></script>
	<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
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


<div id="grid" style="width: 2000px; height: 4000px;"></div>

<script type="text/javascript">
$(function () {
    $('#grid').w2grid({ 
        name: 'grid',
        show: { 
            toolbar: true,
        },
    
        columns: [                
            { field: 'recid', caption: 'ID', size: '50px'},

            { field: 'province', caption: '県', size: '80px', sortable: true,
             editable: { type: 'text', } 
            },
            { field: 'name', caption: '事務所名', size: '200px', sortable: true, 
                editable: { type: 'text', }
            },
            { field: 'wp_staff', caption: 'wp_担当者', size: '80px', sortable: true, 
                editable: { type: 'text' }
            },
             { field: 'result_status', caption: '結果', size: '80px', sortable: true, 
                editable: { type: 'text'},
            },
            { field: 'result_memo', caption: '結果メモ', size: '200px', sortable: true, 
                editable: { type: 'text' }
            },
            { field: 'rank', caption: '重要度', size: '50px', sortable: true, resizable: true, render: 'date', style: 'text-align: right',
                editable: { type: 'text' }, 
            },
            { field: 'pros_lawyer_staff', caption: '相手担当者', size: '100px', sortable: true, 
                editable: { type: 'text' } 
            },
            <?php foreach ($published_sites as $published_site) { ?> 
            { field: 'pub_<?php echo $published_site->id?>', caption: '<?php echo $published_site->name ?>', size: '70px', sortable: true, 
             editable: { type: 'text', }
            },
            <?php } ?>
            { field: 'hp_url', caption: 'hp_url', size: '300px', sortable: true, 
                editable: { type: 'text'} 
            },
             { field: 'tel', caption: '電話番号', size: '100px', sortable: true, 
                editable: { type: 'text',} 
            },
             { field: 'email', caption: 'メールアドレス', size: '200px', sortable: true, 
                editable: { type: 'text'} 
            },
             { field: 'content', caption: 'メモ', size: '400px', sortable: true,  
                editable: { type: 'text'} 
            }
        ],

        records: [
        <?php foreach ($pros_lawyers as $pros_lawyer) {?>
            {recid:'<?php echo $pros_lawyer->id ?>', 
            province:'<?php echo $pros_lawyer->province_name ?>', 
            name:'<?php echo $pros_lawyer->name ?>', 
            wp_staff:'<?php echo $pros_lawyer->wp_staff ?>',
            result_status:'<?php echo $pros_lawyer->result_status ?>',
            result_memo:'<?php echo  $pros_lawyer->result_memo ?>',
            rank: '<?php echo $pros_lawyer->rank ?>',
            pros_lawyer_staff:'<?php echo $pros_lawyer->pros_lawyer_staff ?>',
            <?php foreach ($published_sites as $published_site) { ?>
            	pub_<?php echo $published_site->id ?>: '<?php echo in_array((object)array('pros_lawyers_id' => $pros_lawyer->id, 'published_sites_id' => $published_site->id), $results) ? '◯' : ' ' ?>',
            <?php } ?>
            hp_url:'<?php echo $pros_lawyer->hp_url ?>',
            tel:'<?php echo $pros_lawyer->tel ?>',
            email:'<?php echo $pros_lawyer->email ?>',
            content:'<?php echo $pros_lawyer->content ?>'
            },
         <?php }?>
        ],

         multiSearch: true,
        searches: [
            <?php foreach ($published_sites as $published_site) { ?>
            { field: 'pub_<?php echo $published_site->id ?>', caption: '<?php echo $published_site->name ?>', type: 'text'},
            <?php } ?>
        ],

         toolbar: {
            items: [
                { id: 'add', type: 'button', caption: '見込み客追加', icon: 'w2ui-icon-plus' },
            ],

         onClick: function (event) {
                if (event.target == 'add') {
                    w2ui.grid.add({ recid: w2ui.grid.records.length + 1});
                    $.ajax({
                    	url:"/Pros_lawyer/insert",
                });
            }
        }
    },
        onChange: function(event) {
        	var columns = [
        					"recid", 
        					"province_name", 
        					"name", "wp_staff", 
        					"result_status", 
        					"result_memo", 
        					"rank", 
        					"pros_lawyer_staff",
        					<?php foreach ($published_sites as $published_site) { ?>
        						"<?php echo $published_site->id ?>",
        					<?php } ?>
        					"hp_url", 
        					"tel", 
        					"email", 
        					"address", 
        					"content"
        					];
        	var value_new =""

        	if(typeof event.value_new == "string"){
        		value_new = event.value_new
        	}else{
        		value_new = event.value_new.text
        	}
        	$.ajax({
            	url: "/pros_lawyer/edit",
            	type: 'POST',
            	data: {recid: event.recid, column: columns[event.column], value_new: value_new},
            	dataType: 'json',
            	async: true, 
        	});
   		 }        

    });    
});

</script>

</body>
</html>
