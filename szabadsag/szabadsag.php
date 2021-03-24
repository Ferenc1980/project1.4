<?php
include 'config.php';
$sql="select hadrendi,nev,beosztas,ev,nap from szabadsag,szemelyek where szemelyek.azonosito=szabadsag.sz_azon order by hadrendi asc";
$stmt=$db->query($sql);
$str='';

?>
<html>
<head>
    <title>PHP MySQL Inline Editing using jQuery Ajax</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<h3>Szabadság nyílvántartása</h3><br>
    <table class="tbl-qa table-striped">
        <thead>
            <tr>
                <th class="table-header" width="10%">Hadrendi</th>
                <th class="table-header"width="10%">Név</th>
                <th class="table-header"width="10%">Beosztás</th>
                <th class="table-header"width="10%">Év</th>
                <th class="table-header"width="10%">Nap</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row=$stmt->fetch()){
                extract($row);?>
                <tr class='table-row'>
                            
                            <td contenteditable='true'
                                onBlur='save(this,"azonosito",<?=$azonosito?>)'
                                onClick='showEdit(this);'><?=$hadrendi?></td>
                            <td contenteditable='true'
                                onBlur='save(this,"nev",<?=$azonosito?>)'
                                onClick='showEdit(this);'><?=$nev?></td>
                             <td contenteditable='true'
                                onBlur='save(this,"beosztas",<?=$azonosito?>)'
                                onClick='showEdit(this);'><?=$beosztas?></td>  
                            <td contenteditable='true'
                                onBlur='save(this,"kod",<?=$azonosito?>)'
                                onClick='showEdit(this);'><?=$ev?></td> 
                            <td contenteditable='true'
                                onBlur='save(this,"leírás",<?=$azonosito?>)'
                                onClick='showEdit(this);'><?=$nap?></td>     
                        </tr>
            <?php } ?> 
        </tbody>
    </table>

    <script src="jquery-3.2.1.min.js"></script>
    <script src="inlineEdit.js"></script>
</body>
</html>




