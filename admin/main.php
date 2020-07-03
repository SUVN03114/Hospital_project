
<style>

    
body{
	margin: 0 !important;
	padding: 0!important;
	background-color: #fff !important;
}

.search{
    position: relative;
    margin-top:50px;
	
	text-align: center !important;
	width: 100% !important;
	left: 50% !important;
	
	transform: translate(-50%, -50%) !important;
}

.searchbox{
	transition: border .2s linear !important;
	font-size: 12px !important;
	width: 50% !important;
	background: #f5f8fa !important;
	color: #000 !important;
	padding: 8px 32px 8px 12px !important;
	height: 30px !important;
	border: 1px solid #e6ecf0 !important;
	border-radius: 50px !important;
	outline: none !important;
}

.searchbox:focus{
	transition: border .2s linear!important;
	border: 3px solid dodgerblue !important;
}
.searchbox:hover{
	transition: border .2s linear!important;
	border: 2px solid dodgerblue !important;
}

.searchbtn{
	position: absolute !important;
	font-size: 20px !important;
	color: #66757f!important;
	background-color: transparent !important;
	border:none !important;
	right: 24% !important;
	top: 5px !important;
	outline: none !important;
	padding: 4px !important;
}
#get_name{
	color:blue;
}
.searched{
	display:none;
	
}
.td{
	transition :  0.3s ease-in !important;
}
.td:hover{
	background-color:black;
	
	color:white  !important;
}
.btn{
	background-color:dodgerblue !important;
	border-radius:20px;
	width:100px;
	transition :  0.3s ease-in !important;
	color:white !important;
	
}
.btn:hover{
	background-color: blue !important;
}





</style>
<div>
    <div class="card-panel z-depth-0">
        <p class="center"><b>Please type full name of hospital , Hint given in table which appear when you type</b></p>
    </div>
</div>

<div>
   
    
<form action="../search.php" method="POST">
<div class="search">
	<input type="text" name="q" class="searchbox z-depth-5" id ="search" placeholder="Search Hospital By Name , City">
	
</div>
<div class="center">


<button type="submit"  class="btn waves-effect " id="submited" value ="Submit" name="submit"> Submit </button>

</div>

</form>
</div>

<div class="table" id="table-data">

</div>
<script type="text/javascript" src="../js/jquery.js"></script> 

<script>
	var i = 0;//don,t remove this

$("#search").on("keyup" , function(){
    var search_term = $(this).val();
	if(search_term != 0){
		$.ajax({
        url :"../includes/get_data.php",
        type:"POST",
        data :{search:search_term},
        success : function(data){
			$('#table-data').fadeIn();
            $('#table-data').html(data);
			$(document).on('click', 'tr' , function(){
	        $('#search').val($(this).text());
	        $('#table-data').fadeOut();
             });

        }

    });

	}
	else{
		$('#table-data').fadeOut();
		$('#table-data').html("");


	}

 
	


});


   

</script>


