@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lista dostępnych idiomów</div>

                <div class="panel-body">
                    
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Idiom polski</th>
                            <th>Idiom angielski</td>
                            <th>Użycie angielskie</th>
                            <th>Użycie polskie</th>
                        </tr>
                        </thead>
                        
                    <?php foreach ($idioms as $idiom){ ?>
                        <tr>
                            <td><?php echo $idiom ->idiom_pl ?></td>
                            <td><?php echo $idiom ->idiom_en ?></td>
                            <td><?php echo $idiom ->use_example_en ?></td>
                            <td><?php echo $idiom ->use_example_pl ?></td>
                        </tr>
                    <?php } ?>

                                                    
                        
                       
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
