<?php
    header("Content-type: text/css");
    $color = "green";        // <--- define the variable 
echo '  
/* --- start of css --- */
form label {
	float: left;
	width: 150px;
	margin-bottom: 5px;
	margin-top: 5px;
}
.clear {
	display: block;
	clear: both;
	width: 100%;
}

/*FORMATAR TABELAS*/

 able.t1 {
    margin: 1em auto;
    border-collapse: collapse;
    font-family: Arial, Helvetica, sans-serif;
  }
  .t1 th, .t1 td {
    padding: 4px 8px;
  }
  .t1 thead th {
    background: #4f81bd;
    text-transform: lowercase;
    text-align: left;
    font-size: 15px;
    color: #fff;
  }
  .t1 tr {
    border-right: 1px solid #95b3d7;
  }
  .t1 tbody tr {
    border-bottom: 1px solid #95b3d7;
  }
  .t1 tbody tr:nth-child(odd) {
    background: #dbe5f0;
  }
  .t1 tbody th, .t1 tbody tr:nth-child(even) td {
    border-right: 1px solid #95b3d7;
  }
  .t1 tfoot th {
    background: #4f81bd;
    text-align: left;
    font-weight: normal;
    font-size: 10px;
    color: #fff;
  }
  .t1 tr *:nth-child(3), .t1 tr *:nth-child(4) {
    text-align: right;
  }

/* --- end of css --- */';