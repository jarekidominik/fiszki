@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tutaj naucz się nowych słówek</div>

                <div class="panel-body">
                    <div class="row text-center">
                       <?php foreach ($idioms as $idiom){ ?>                          
                        <h1> <?php echo $idiom ->idiom_pl ?></h1>
                        
                      <div class="btn-group btn-group-justified">                     
                        <a href="#" class="btn btn-success" onclick="show()">Przetłumacz</a>                    
                        <a href="#" class="btn btn-warning" onclick="reload()">Kolejne słówko</a>
                      </div>       
                        <div id="showID" style="display: none"> 
                           <h1><?php echo $idiom ->idiom_en ?></h1>
                            <h3><?php echo $idiom ->use_example_pl ?></h3>
                            <h3><?php echo $idiom ->use_example_en ?></h3>
                        </div>
                    <?php } ?>
                        
                        <script>                           
                        function show() {
                        var x = document.getElementById('showID');
                        if (x.style.display === 'none') {
                            x.style.display = 'block';
                        } else {
                            x.style.display = 'none';
                        }
                         }
                         </script>
                         <script>
                        function reload() {
                            location.reload();
                        }
                        </script>
                         
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


