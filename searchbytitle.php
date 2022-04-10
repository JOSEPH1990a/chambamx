 
<style type="text/css">
#content {
	min-height: 500px; 
}
 #custom-search-input{
    padding: 3px;
    border: solid 1px #E4E4E4;
    border-radius: 6px;
    background-color: #fff;
}

#custom-search-input input{
    border: 0;
    box-shadow: none;
}

#custom-search-input button{
    margin: 2px 0 0 0;
    background: none;
    box-shadow: none;
    border: 0;
    color: #666666;
    padding: 0 8px 0 10px;
    border-left: solid 1px #ccc;
}

#custom-search-input button:hover{
    border: 0;
    box-shadow: none;
    border-left: solid 1px #ccc;
}

#custom-search-input .glyphicon-search{
    font-size: 23px;
}
</style>
<form action="index.php?q=result&searchfor=bytitle" method="POST">
    <section class="find-job section">
        <div class="search-job">
            <div class="container">
                <div class="search-nner">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <label class="col-sm-3">Buscar:</label>
                            <div class="row">
                                <div class="col-10"><input type="text" class="form-control" type="" name="SEARCH" placeholder="Buscar por"></div>
                                <div class="button col-2"><button type="submit" name="submit" class="btn btn-common float-right">Buscar</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>