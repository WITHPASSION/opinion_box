<!DOCTYPE html>
<html>
<head>
    <title>見込み客画面</title>
    <link rel="stylesheet" type="text/css" href="http://w2ui.com/src/w2ui-1.4.2.min.css" ansync/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://w2ui.com/src/w2ui-1.4.2.min.js"></script>
   <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
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

<div id="grid" style="width: 2000px; height: 2500px;"></div>

<script type="text/javascript">
var id = <?php echo $id ?>;
var province = [
    {text: '北海道' },
    {text: '青森県' },
    {text: '岩手県' },
    {text: '宮城県' },
    {text: '秋田県' },
    {text: '山形県' },
    {text: '福島県' },
    {text: '茨城県' },
    {text: '栃木県' },
    {text: '群馬県' },
    {text: '埼玉県' },
    {text: '千葉県' },
    {text: '東京都' },
    {text: '神奈川県'},
    {text: '新潟県' },
    {text: '富山県' },
    {text: '石川県' },
    {text: '福井県' },
    {text: '山梨県' },
    {text: '長野県' },
    {text: '岐阜県' },
    {text: '静岡県' },
    {text: '愛知県' },
    {text: '三重県' },
    {text: '滋賀県' },
    {text: '京都府' },
    {text: '大阪府' },
    {text: '兵庫県' },
    {text: '奈良県' },
    {text: '和歌山県'},
    {text: '鳥取県' },
    {text: '島根県' },
    {text: '岡山県' },
    {text: '広島県' },
    {text: '山口県' },
    {text: '徳島県' },
    {text: '香川県' },
    {text: '愛媛県' },
    {text: '高知県' },
    {text: '福岡県' },
    {text: '佐賀県' },
    {text: '長崎県' },
    {text: '熊本県' },
    {text: '大分県' },
    {text: '宮崎県' },
    {text: '鹿児島県'},
    {text: '沖縄県' },
    {text: '      '},

];

var result_status = [
      {text: '検討中'},
      {text: '受付拒否'},
      {text: '説明済み'},
      {text: '顧客'},
      {text:' '},
];

var rank = [
        {text: 'A'},
        {text: 'B'},
        {text: 'C'},
        {text: 'D'},
        {text:' '},
];
var pub = [
        {text:'あり'},
        {text:' '},
        ]

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
            { field: 'recid', caption: 'ID', size: '50px', sortable: true, resizable: true },

            { field: 'province', caption: '県', size: '80px', sortable: true, resizable: true, 
                    render: function (record, index, col_index) {
                    var html = this.getCellValue(index, col_index);
                    return html.text || '';
                }
            },
            { field: 'name', caption: '事務所名', size: '200px', sortable: true, resizable: true,},

            { field: 'wp_staff', caption: 'wp_担当者', size: '80px', sortable: true, resizable: true,},

            { field: 'result_status', caption: '結果', size: '80px', sortable: true, resizable: true, 
                render: function (record, index, col_index) {
                    var html = this.getCellValue(index, col_index);
                    return html.text || '';
                }
            },
            { field: 'result_memo', caption: '結果メモ', size: '200px', sortable: true, resizable: true,},

            { field: 'rank', caption: '重要度', size: '50px', sortable: true, resizable: true, render: 'date', style: 'text-align: right',
                render: function (record, index, col_index) {

                    var html = this.getCellValue(index, col_index);
                    return html.text || '';
                }
            },
            { field: 'pros_lawyer_staff', caption: '相手担当者', size: '100px', sortable: true, resizable: true,},

            <?php foreach ($published_sites as $published_site) { ?> 
            { field: '<?php echo $published_site->id?>', caption: '<?php echo $published_site->name ?>', size: '70px', sortable: true, resizable: true,},

            <?php } ?>
            { field: 'hp_url', caption: 'hp_url', size: '300px', sortable: true, resizable: true,},

             { field: 'tel', caption: '電話番号', size: '100px', sortable: true, resizable: true,},

             { field: 'email', caption: 'メールアドレス', size: '200px', sortable: true, resizable: true,},

             { field: 'content', caption: 'メモ', size: '400px', sortable: true, resizable: true,}

        ],
       

        records: [
        <?php foreach ($folders_detail as $folder_detail) {?>
            {recid:'<?php echo $folder_detail->id ?>', 
            province:{text:'<?php echo $folder_detail->province_name ?>'}, 
            name:'<?php echo $folder_detail->name ?>', 
            wp_staff:'<?php echo $folder_detail->wp_staff ?>',
            result_status:{text:'<?php echo $folder_detail->result_status ?>'},
            result_memo:'<?php echo $folder_detail->result_memo ?>',
            rank: {text:'<?php echo $folder_detail->rank ?>'},
            pros_lowyer_staff:'<?php echo $folder_detail->pros_lawyer_staff ?>',
            <?php foreach ($published_sites as $published_site) { ?>
            	pub_<?php echo $published_site->id ?>: '<?php echo in_array((object)array('pros_lawyers_id' => $folder_detail->id, 'published_sites_id' => $published_site->id), $results) ? '○' : ''?>',
            <?php } ?>
            hp_url:'<?php echo $folder_detail->hp_url ?>',
            tel:'<?php echo $folder_detail->tel ?>',
            email:'<?php echo $folder_detail->email ?>',
            content:'<?php echo $folder_detail->content ?>'
            },
         <?php }?>
        ],
         toolbar: {
            items: [
                { id: 'delete', type: 'button', caption: 'リストから消去', icon: 'w2ui-icon-plus' }
            ],

                 onClick: function(event){
                    if(event.target = "delete"){
                        event.onComplete = function () {
                    
                       $.ajax({
                        url: '/lists/deletes',
                        type: 'POST',
                        data: {sels:w2ui.grid.getSelection(),id: id },
                        dataType:'json',
                        async: true,
               });            
               location.reload();      
                }
            }

            }
        
    },
               

    });    
});




</script>

</body>
</html>
